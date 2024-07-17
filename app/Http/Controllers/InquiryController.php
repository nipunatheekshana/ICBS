<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\Inquiry;
use Exception;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    use commonFeatures;

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
        ]);

        try {
            $Inquiry = new Inquiry();
            $Inquiry->name = $request->name;
            $Inquiry->email = $request->email;
            $Inquiry->phone = $request->phone;
            $Inquiry->course = $request->course;



            if ($Inquiry->save()) {
                return $this->responseBody(true, 'save', 'Inquiry Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }
    public function loadInquirys()
    {
        try {
            $Inquiry = Inquiry::orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadInquirys", "found", $Inquiry);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadInquirys", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $Inquiry = Inquiry::where('id', $id)->delete();
            return $this->responseBody(true, "User", "Inquiry Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadInquiry($id)
    {
        try {
            $Inquiry = Inquiry::where('id', $id)->first();
            return $this->responseBody(true, "loadInquiry", "found", $Inquiry);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadInquiry", "error", $exception->getMessage());
        }
    }
}
