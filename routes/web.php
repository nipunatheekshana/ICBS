<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;


###################################################
############### Site Routes ######################
###################################################


Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view("pages.about");
})->name('about');
Route::post('/home/saveInquiry', [InquiryController::class, 'save']);

Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers');
Route::get('/teachers/loadTeachertoPage/{id}', [TeachersController::class, 'loadTeachertoPage'])->name('teacher.loadTeacher');


Route::get('/career', function () {
    return view("pages.career");
})->name('career');


Route::get('/news-page', [NewsController::class, 'index'])->name('news');
Route::get('/newsDetails/{id}', [NewsController::class, 'view'])->name('newsDetails');

Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::get('/departments', function () {
    return view("pages.departments");
})->name('departments');

Route::get('/courseslist/{id}', [CourseController::class, 'index'])->name('courseslist');
Route::get('/coursesDetails/{id}', [CourseController::class, 'view'])->name('coursesDetails');
Route::get('/addReview/{id}', [CourseController::class, 'addReview'])->name('addReview');




Route::get('/contact', function () {
    return view("pages.contact");
})->name('contact');
Route::get('/join', function () {
    return view("pages.join");
})->name('join');


Route::get('/student-register', function () {
    return view("pages.register");
})->name('student-register');
Route::post('/registerStudent', [RegisterController::class, 'RegisterStudent']);


###################################################
############### Admin Routes ######################
###################################################

Route::get('/admin-login', function () {
    return view("admin.pages.login");
})->name('login');
//login
Route::post('/logAdmin', [LogInController::class, 'login']);

//logout
Route::get('/logoutAdmin', [LogInController::class, 'logout'])->name('logout');

//Auth Routes
Route::middleware(['is.logged'])->group(function () {

    Route::get('/admin-dashboard', function () {
        return view("admin.pages.dashboard");
    })->name('admin-dashboard');
    Route::get('/samplePage', function () {
        return view("admin.pages.sampleform");
    })->name('sampleform');

    //teaachers
    Route::get('/teacherList', function () {
        return view("admin.pages.teacherList");
    })->name('teacherList');
    Route::get('/teacherList/loadTeachers', [TeachersController::class, 'loadTeachers']);
    Route::delete('/teacherList/delete/{id}', [TeachersController::class, 'delete']);


    Route::get('/teacher', function () {
        return view("admin.pages.teacher");
    })->name('teacher');
    Route::post('/teacher/save', [TeachersController::class, 'save']);
    Route::post('/teacher/update', [TeachersController::class, 'update']);
    Route::get('/teacher/loadTeacher/{id}', [TeachersController::class, 'loadTeacher']);


    //departments
    Route::get('/departmentList', function () {
        return view("admin.pages.departmentList");
    })->name('departmentList');
    Route::get('/departmentList/loadDepartments', [DepartmentController::class, 'loadDepartments']);
    Route::delete('/departmentList/delete/{id}', [DepartmentController::class, 'delete']);


    Route::get('/department', function () {
        return view("admin.pages.department");
    })->name('department');
    Route::post('/department/save', [DepartmentController::class, 'save']);
    Route::post('/department/update', [DepartmentController::class, 'update']);
    Route::get('/department/loadDropDownData', [DepartmentController::class, 'loadDropDownData']);
    Route::get('/department/loadDepartment/{id}', [DepartmentController::class, 'loadDepartment']);

    // course
    Route::get('/courseList', function () {
        return view("admin.pages.courseList");
    })->name('courseList');
    Route::get('/courseList/loadCourses', [CourseController::class, 'loadCourses']);
    Route::delete('/courseList/delete/{id}', [CourseController::class, 'delete']);


    Route::get('/course', function () {
        return view("admin.pages.course");
    })->name('course');
    Route::post('/course/save', [CourseController::class, 'save']);
    Route::post('/course/update', [CourseController::class, 'update']);
    Route::get('/course/loadDropDownData', [CourseController::class, 'loadDropDownData']);
    Route::get('/course/loadCourse/{id}', [CourseController::class, 'loadCourse']);

    //FAQs
    Route::get('/FAQList', function () {
        return view("admin.pages.FAQList");
    })->name('FAQList');
    Route::get('/FAQList/loadFAQs', [FAQController::class, 'loadFAQs']);
    Route::delete('/FAQList/delete/{id}', [FAQController::class, 'delete']);


    Route::get('/FAQ', function () {
        return view("admin.pages.FAQ");
    })->name('FAQ');
    Route::post('/FAQ/save', [FAQController::class, 'save']);
    Route::post('/FAQ/update', [FAQController::class, 'update']);
    Route::get('/FAQ/loadFAQ/{id}', [FAQController::class, 'loadFAQ']);

    //News
    Route::get('/newsList', function () {
        return view("admin.pages.newsList");
    })->name('newsList');
    Route::get('/newsList/loadnewss', [NewsController::class, 'loadnewss']);
    Route::delete('/newsList/delete/{id}', [NewsController::class, 'delete']);


    Route::get('/news', function () {
        return view("admin.pages.news");
    });
    Route::post('/news/save', [NewsController::class, 'save']);
    Route::post('/news/update', [NewsController::class, 'update']);
    Route::get('/news/loadnews/{id}', [NewsController::class, 'loadnews']);

    //frontBanner
    Route::get('/frontBannerList', function () {
        return view("admin.pages.frontBannerList");
    })->name('frontBannerList');
    Route::get('/frontBannerList/loadfrontBanners', [BannerController::class, 'loadfrontBanners']);
    Route::delete('/frontBannerList/delete/{id}', [BannerController::class, 'delete']);


    Route::get('/frontBanner', function () {
        return view("admin.pages.frontBanner");
    });
    Route::post('/frontBanner/save', [BannerController::class, 'save']);
    Route::post('/frontBanner/update', [BannerController::class, 'update']);
    Route::get('/frontBanner/loadfrontBanner/{id}', [BannerController::class, 'loadfrontBanner']);

    //Inquiry
    Route::get('/inquiryList', function () {
        return view("admin.pages.inquiryList");
    })->name('inquiryList');
    Route::get('/inquiryList/loadinquirys', [InquiryController::class, 'loadinquirys']);
    Route::delete('/inquiryList/delete/{id}', [InquiryController::class, 'delete']);


    Route::get('/inquiry', function () {
        return view("admin.pages.inquiry");
    });
    Route::get('/inquiry/loadinquiry/{id}', [InquiryController::class, 'loadinquiry']);
});
