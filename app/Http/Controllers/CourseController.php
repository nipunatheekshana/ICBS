<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\Course;
use App\Models\CourseCurriculum;
use App\Models\CourseDiscriptionBuletline;
use App\Models\CourseCareerPath;
use App\Models\CourseReview;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    use commonFeatures;
    public static function index($id)
    {
        $Courses = Course::where('department_id', $id)->with('department')->get();
        return view('pages.courseslist', compact('Courses'));
    }
    public static function view($id)
    {
        $Course = Course::where('id', $id)
            ->with(
                [
                    'department',
                    'courseDiscriptionBuletlines',
                    'courseCurriculums',
                     'CourseCareerPaths',
                      'courseReviews.user'
                ]
            )
            ->withCount('courseCurriculums')
            ->first();
        $recentCourses = Course::with('department')->latest()->take(3)->get();
        return view("pages.course-details", compact('Course','recentCourses'));
    }
    public function save(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required'],
        ]);

        try {
            $Course = new Course();
            $Course->name = $request->name;
            $Course->price = $request->price;
            $Course->duration = $request->duration;
            $Course->min_students = $request->min_students;
            $Course->skill_level = $request->skill_level;
            $Course->language = $request->language;
            $Course->description_title = $request->description_title;
            $Course->description = $request->description;
            $Course->curriculum_title = $request->curriculum_title;
            $Course->curriculum = $request->curriculum;
            $Course->career_path_title = $request->career_path_title;
            $Course->career_path = $request->career_path;
            $Course->department_id = $request->department_id;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $Course->image = $imageName;
            }
            $Course->save();

            if (!empty($request->description_bulletpoints)) {
                foreach (json_decode($request->description_bulletpoints) as $bulletpoint) {

                    $bulletline = new CourseDiscriptionBuletline();
                    $bulletline->course_id = $Course->id;
                    $bulletline->buletline = $bulletpoint;
                    $bulletline->save();
                }
            }
            if (!empty($request->modules)) {
                foreach (json_decode($request->modules) as $module) {

                    $Curriculum = new CourseCurriculum();
                    $Curriculum->course_id = $Course->id;
                    $Curriculum->module = $module;
                    $Curriculum->save();
                }
            }
            if (!empty($request->career_paths)) {
                foreach (json_decode($request->career_paths) as $career_path) {

                    $CourseCareerPath = new CourseCareerPath();
                    $CourseCareerPath->course_id = $Course->id;
                    $CourseCareerPath->career_path = $career_path;
                    $CourseCareerPath->save();
                }
            }

            return $this->responseBody(true, 'save', 'Course Saved', 'Data saved');
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
        ]);

        try {
            CourseDiscriptionBuletline::where('course_id', $request->id)->delete();
            CourseCurriculum::where('course_id', $request->id)->delete();
            CourseCareerPath::where('course_id', $request->id)->delete();



            $Course = Course::find($request->id);
            $Course->name = $request->name;
            $Course->price = $request->price;
            $Course->duration = $request->duration;
            $Course->min_students = $request->min_students;
            $Course->skill_level = $request->skill_level;
            $Course->language = $request->language;
            $Course->description_title = $request->description_title;
            $Course->description = $request->description;
            $Course->curriculum_title = $request->curriculum_title;
            $Course->curriculum = $request->curriculum;
            $Course->career_path_title = $request->career_path_title;
            $Course->career_path = $request->career_path;
            $Course->department_id = $request->department_id;

            if ($request->hasFile('image')) {
                // Delete the previous image file if it exists
                if ($Course->image && file_exists(public_path('uploads/' . $Course->image))) {
                    unlink(public_path('uploads/' . $Course->image));
                }

                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $Course->image = $imageName;
            }
            $save = $Course->save();

            if (!empty($request->description_bulletpoints)) {
                foreach (json_decode($request->description_bulletpoints) as $bulletpoint) {

                    $bulletline = new CourseDiscriptionBuletline();
                    $bulletline->course_id = $Course->id;
                    $bulletline->buletline = $bulletpoint;
                    $bulletline->save();
                }
            }
            if (!empty($request->modules)) {
                foreach (json_decode($request->modules) as $module) {

                    $Curriculum = new CourseCurriculum();
                    $Curriculum->course_id = $Course->id;
                    $Curriculum->module = $module;
                    $Curriculum->save();
                }
            }
            if (!empty($request->career_paths)) {
                foreach (json_decode($request->career_paths) as $career_path) {

                    $CourseCareerPath = new CourseCareerPath();
                    $CourseCareerPath->course_id = $Course->id;
                    $CourseCareerPath->career_path = $career_path;
                    $CourseCareerPath->save();
                }
            }


            if ($save) {
                return $this->responseBody(true, "save", "Course Saved", 'data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, "save", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadCourses()
    {
        try {

            $courses = Course::with('department')
                ->orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadCourses", "found", $courses);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadCourses", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $Course = Course::where('id', $id);
            $img = $Course->first()->image;
            if ($img && file_exists(public_path('uploads/' . $img))) {
                unlink(public_path('uploads/' . $img));
            }

            $Course->delete();
            return $this->responseBody(true, "User", "Course Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadCourse($id)
    {
        try {
            $Course = Course::where('id', $id)
                ->with('courseDiscriptionBuletlines', 'courseCurriculums', 'CourseCareerPaths')
                ->first();
            return $this->responseBody(true, "loadCourse", "found", $Course);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadCourse", "error", $exception->getMessage());
        }
    }
    public function loadDropDownData()
    {
        try {
            $Department = Department::all('name', 'id');

            return $this->responseBody(true, "loadDropDownData", '', [
                'Department' => $Department,
            ]);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadDropDownData", '', $ex->getMessage());
        }
    }
    public function loadCoursetoPage($id)
    {
        try {
            $Course = Course::where('id', $id)->first();
            return view("pages.Course-dtails", compact('Course'));
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadCoursetoPage", "error", $exception->getMessage());
        }
    }
    public function addReview($id, Request $request)
    {
        $validatedData = $request->validate([
            'review' => ['required'],
        ]);

        try {
            CourseReview::where('course_id', $id)->where('user_id', Auth::user()->id)->delete();

            $CourseReview = new CourseReview();
            $CourseReview->course_id = $id;
            $CourseReview->review = $request->review;
            $CourseReview->user_id = Auth::user()->id;
            $CourseReview->save();

            return redirect()->back()->with('success', 'Review added successfully!');
        } catch (Exception $exception) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while adding the review.']);
        }
    }
}
