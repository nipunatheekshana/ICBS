<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\Department;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use commonFeatures;
    public static function index(){
        return $Departments=Department::all();
    }
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'code' => ['required'],
        ]);

        try {
            $Department = new Department();
            $Department->name = $request->name;
            $Department->code = $request->code;
            $Department->department_head = $request->department_head;

            if ($Department->save()) {
                return $this->responseBody(true, 'save', 'Department Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'code' => ['required'],
        ]);

        try {
            $Department = Department::find($request->id);
            $Department->name = $request->name;
            $Department->code = $request->code;
            $Department->department_head = $request->department_head;
            $save = $Department->save();

            if ($save) {
                return $this->responseBody(true, "save", "Department Saved", 'data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, "save", "Something went wrong", $exception->getMessage());
        }
    }

    public function loadDepartments()
    {
        try {
            $Department = Department::orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadDepartments", "found", $Department);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadDepartments", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $Department = Department::where('id', $id);
            $img=$Department->first()->image;
            if ($img && file_exists(public_path('uploads/' . $img))) {
                unlink(public_path('uploads/' . $img));
            }

            $Department->delete();
            return $this->responseBody(true, "User", "Department Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }

    public function loadDepartment($id)
    {
        try {
            $Department = Department::where('id', $id)->first();
            return $this->responseBody(true, "loadDepartment", "found", $Department);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadDepartment", "error", $exception->getMessage());
        }
    }
    public function loadDropDownData()
    {
        try {
            $Teacher = Teacher::all('name', 'id');

            return $this->responseBody(true, "loadDropDownData", '', [
                'Teacher' => $Teacher,
            ]);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadDropDownData", '', $ex->getMessage());
        }
    }
    public function loadDepartmenttoPage($id)
    {
        try {
            $Department = Department::where('id', $id)->first();
            return view("pages.Department-dtails", compact('Department'));
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadDepartmenttoPage", "error", $exception->getMessage());
        }
    }
}

