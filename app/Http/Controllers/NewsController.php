<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use commonFeatures;
    public static function index(){
         $Newss=News::all();
         return view('pages.news',compact('Newss'));

    }
    public static function view($id){
        $News=News::where('id',$id)->first();
        $recentNewss = News::latest()->take(3)->get();

        return view('pages.news-details',compact('News','recentNewss'));

   }
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image'],
        ]);

        try {
            $News = new News();
            $News->title = $request->title;
            $News->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $News->image = $imageName;
            }

            if ($News->save()) {
                return $this->responseBody(true, 'save', 'News Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image'],
        ]);

        try {
            $News = News::find($request->id);
            $News->title = $request->title;
            $News->description = $request->description;

            if ($request->hasFile('image')) {
                // Delete the previous image file if it exists
                if ($News->image && file_exists(public_path('uploads/' . $News->image))) {
                    unlink(public_path('uploads/' . $News->image));
                }

                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $News->image = $imageName;
            }

            $save = $News->save();

            if ($save) {
                return $this->responseBody(true, "save", "News Saved", 'data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, "save", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadnewss()
    {
        try {
            $News = News::orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadNewss", "found", $News);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadNewss", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $News = News::where('id', $id);
            $img=$News->first()->image;
            if ($img && file_exists(public_path('uploads/' . $img))) {
                unlink(public_path('uploads/' . $img));
            }
            $News->delete();
            return $this->responseBody(true, "User", "News Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadnews($id)
    {
        try {
            $News = News::where('id', $id)->first();
            return $this->responseBody(true, "loadNews", "found", $News);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadNews", "error", $exception->getMessage());
        }
    }
}
