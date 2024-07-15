<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    use commonFeatures;
    public function RegisterStudent(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'image' => ['image'],
        ]);

        try {
            $User = new User();
            $User->name = $request->name;
            $User->email = $request->email;
            $User->user_type = 2;
            $User->password = Hash::make($request->password);



            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $User->image = $imageName;
            }else{
                $User->image = 'default.png';
            }

            if ($User->save()) {
                return $this->responseBody(true, 'save', 'Steudent Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }
}
