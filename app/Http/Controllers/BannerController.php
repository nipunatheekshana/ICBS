<?php

namespace App\Http\Controllers;

use App\Http\common\commonFeatures;
use App\Models\FrontBanner;
use Exception;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use commonFeatures;

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'slogan' => ['required'],
            'image' => ['required', 'image'],
            'bg_image' => ['required', 'image'],
        ]);

        try {
            $FrontBanner = new FrontBanner();
            $FrontBanner->title = $request->title;
            $FrontBanner->slogan = $request->slogan;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $FrontBanner->image = $imageName;
            }
            if ($request->hasFile('bg_image')) {
                $bg_image = $request->file('bg_image');
                $bg_imageName = uniqid() . '.' . $bg_image->getClientOriginalExtension();
                $bg_image->move(public_path('uploads'), $bg_imageName);
                $FrontBanner->bg_image = $bg_imageName;
            }

            if ($FrontBanner->save()) {
                return $this->responseBody(true, 'save', 'FrontBanner Saved', 'Data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, 'save', 'Something went wrong', $exception->getMessage());
        }
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'slogan' => ['required'],
            'image' => ['required', 'image'],
            'bg_image' => ['required', 'image'],
        ]);

        try {
            $FrontBanner = FrontBanner::find($request->id);
            $FrontBanner->title = $request->title;
            $FrontBanner->slogan = $request->slogan;

            if ($request->hasFile('image')) {
                // Delete the previous image file if it exists
                if ($FrontBanner->image && file_exists(public_path('uploads/' . $FrontBanner->image))) {
                    unlink(public_path('uploads/' . $FrontBanner->image));
                }

                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $FrontBanner->image = $imageName;
            }
            if ($request->hasFile('bg_image')) {
                // Delete the previous image file if it exists
                if ($FrontBanner->bg_image && file_exists(public_path('uploads/' . $FrontBanner->bg_image))) {
                    unlink(public_path('uploads/' . $FrontBanner->bg_image));
                }

                $bg_image = $request->file('bg_image');
                $bg_imageName = uniqid() . '.' . $bg_image->getClientOriginalExtension();
                $bg_image->move(public_path('uploads'), $bg_imageName);
                $FrontBanner->bg_image = $bg_imageName;
            }

            $save = $FrontBanner->save();

            if ($save) {
                return $this->responseBody(true, "save", "FrontBanner Saved", 'data saved');
            }
        } catch (Exception $exception) {
            return $this->responseBody(false, "save", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadFrontBanners()
    {
        try {
            $FrontBanner = FrontBanner::orderBy('id', 'ASC')
                ->get();

            return $this->responseBody(true, "loadFrontBanners", "found", $FrontBanner);
        } catch (Exception $ex) {
            return $this->responseBody(false, "loadFrontBanners", "Something went wrong", $ex->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $FrontBanner = FrontBanner::where('id', $id);
            $img=$FrontBanner->first()->image;
            if ($img && file_exists(public_path('uploads/' . $img))) {
                unlink(public_path('uploads/' . $img));
            }
            $bg_img=$FrontBanner->first()->bg_image;
            if ($bg_img && file_exists(public_path('uploads/' . $bg_img))) {
                unlink(public_path('uploads/' . $bg_img   ));
            }
            $FrontBanner->delete();
            return $this->responseBody(true, "User", "FrontBanner Deleted", null);
        } catch (Exception $exception) {
            return $this->responseBody(false, "User", "Something went wrong", $exception->getMessage());
        }
    }
    public function loadFrontBanner($id)
    {
        try {
            $FrontBanner = FrontBanner::where('id', $id)->first();
            return $this->responseBody(true, "loadFrontBanner", "found", $FrontBanner);
        } catch (Exception $exception) {
            return $this->responseBody(false, "loadFrontBanner", "error", $exception->getMessage());
        }
    }
}
