<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    use commonFeatures;
    public function index(){
        $Teachers=Teacher::where('show_on_site', true)->get();
        return view('pages.teachers',compact('Teachers'));
    }
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
            'show_on_site' => ['required'],
            'image' => ['image'],
        ]);

        try {
            $Teacher = new Teacher();
            $Teacher->name = $request->name;
            $Teacher->email = $request->email;
            $Teacher->phone_number = $request->phone_number;
            $Teacher->gender = $request->gender;
            $Teacher->designation = $request->designation;
            $Teacher->story = $request->story;
            $Teacher->show_on_site = $request->has('show_on_site');
            $Teacher->index = $request->index;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $Teacher->image = $imageName;
            }

            if ($Teacher->save()) {
                return $this->responseBody(true, 'save', 'Teacher Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
            'show_on_site' => ['required'],
            'image' => ['image'],
        ]);
        try {
            $Teacher = Teacher::find($request->id);
            $Teacher->name = $request->name;
            $Teacher->email = $request->email;
            $Teacher->phone_number = $request->phone_number;
            $Teacher->gender = $request->gender;
            $Teacher->designation = $request->designation;
            $Teacher->story = $request->story;
            $Teacher->show_on_site = $request->has('show_on_site');
            $Teacher->index = $request->index;

            if ($request->hasFile('image')) {
                // Delete the previous image file if it exists
                if ($Teacher->image && file_exists(public_path('uploads/' . $Teacher->image))) {
                    unlink(public_path('uploads/' . $Teacher->image));
                }

                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $Teacher->image = $imageName;
            }
            $save = $Teacher->save();

            if ($save) {
                return $this->responseBody(true, "save", "Teacher Saved", 'data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, "save", "Something went wrong", $exception->getMessage());
        }
    }

    public function loadTeachers()
    {
        try {
            $Teacher = Teacher::orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadTeachers", "found", $Teacher);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadTeachers", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $BankAccount = BankAccount::where('id', $id)->delete();
            return $this->responseBody(true, "User", "Bank Account Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }

    public function loadTeacher($id)
    {
        try {
            $Teacher = Teacher::where('id', $id)->first();
            return $this->responseBody(true, "loadTeacher", "found", $Teacher);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadTeacher", "error", $exception->getMessage());
        }
    }
    public function loadDropDownData()
    {
        try {
            $Company = Company::where('enabled', true)->get();
            $BankAccountType = BankAccountType::where('enabled', true)->get();
            $Bank = Bank::where('enabled', true)->get();
            $Currency =  Currency::where('enabled', true)->get();

            return $this->responseBody(true, "loadDropDownData", '', [
                'Company' => $Company,
                'BankAccountType' => $BankAccountType,
                'Bank' => $Bank,
                'Currency' => $Currency,

            ]);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadDropDownData", '', $ex->getMessage());
        }
    }
    public function loadTeachertoPage($id)
    {
        try {
            $Teacher = Teacher::where('id', $id)->first();
            return view("pages.teacher-dtails", compact('Teacher'));
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadTeachertoPage", "error", $exception->getMessage());
        }
    }
}
