<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\FrontBanner;
use App\Models\News;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $Courses = Course::with('department')
        ->withCount('courseCurriculums')
        ->get();
        $newss=News::all();
        $frontBanners=FrontBanner::all();
        return view('pages.home',compact('Courses','newss','frontBanners'));
    }
}
