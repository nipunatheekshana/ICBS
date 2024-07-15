<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\FAQ;
use Exception;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    use commonFeatures;
    public static function index(){
         $FAQs=FAQ::all();
         return view('pages.FAQ',compact('FAQs'));

    }
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        try {
            $FAQ = new FAQ();
            $FAQ->question = $request->question;
            $FAQ->answer = $request->answer;

            if ($FAQ->save()) {
                return $this->responseBody(true, 'save', 'FAQ Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        try {
            $FAQ = FAQ::find($request->id);
            $FAQ->question = $request->question;
            $FAQ->answer = $request->answer;
            $save = $FAQ->save();

            if ($save) {
                return $this->responseBody(true, "save", "FAQ Saved", 'data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, "save", "Something went wrong", $exception->getMessage());
        }
    }

    public function loadFAQs()
    {
        try {
            $FAQ = FAQ::orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadFAQs", "found", $FAQ);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadFAQs", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $FAQ = FAQ::where('id', $id)->delete();
            return $this->responseBody(true, "User", "FAQ Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }

    public function loadFAQ($id)
    {
        try {
            $FAQ = FAQ::where('id', $id)->first();
            return $this->responseBody(true, "loadFAQ", "found", $FAQ);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadFAQ", "error", $exception->getMessage());
        }
    }


}
