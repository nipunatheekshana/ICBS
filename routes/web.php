<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;


###################################################
############### Site Routes ######################
###################################################

Route::get('/', function () {
    return view("pages.home");
})->name('home');
Route::get('/about', function () {
    return view("pages.about");
})->name('about');
// Route::get('/teachers', function () {
//     return view("pages.teachers");
// })->name('teachers');
Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers');
Route::get('/teachers/loadTeachertoPage/{id}', [TeachersController::class, 'loadTeachertoPage'])->name('teacher.loadTeacher');


Route::get('/career', function () {
    return view("pages.career");
})->name('career');
Route::get('/news', function () {
    return view("pages.news");
})->name('news');
Route::get('/faq', function () {
    return view("pages.faq");
})->name('faq');
Route::get('/departments', function () {
    return view("pages.departments");
})->name('departments');

Route::get('/courseslist/{id}', [CourseController::class, 'index'])->name('courseslist');

//toremove
Route::get('/courseslist-IT', function () {
    return view("pages.courseslist-IT");
})->name('courseslist-IT');
Route::get('/courseslist-bm', function () {
    return view("pages.courseslist-bm");
})->name('courseslist-bm');
Route::get('/course-details', function () {
    return view("pages.course-details");
})->name('course-details');
Route::get('/courseslist-kids', function () {
    return view("pages.courseslist-kids");
//toremove end


})->name('courseslist-kids');
Route::get('/contact', function () {
    return view("pages.contact");
})->name('contact');
Route::get('/join', function () {
    return view("pages.join");
})->name('join');


###################################################
############### Admin Routes ######################
###################################################

Route::get('/admin-login', function () {
    return view("admin.pages.login");
})->name('admin-login');
//login
Route::post('/logAdmin', [LogInController::class, 'login']);

//logout
Route::get('/logoutAdmin', [LogInController::class, 'logout'])->name('logout-admin');

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
    Route::get('/courseList/loadDepartments', [CourseController::class, 'loadDepartments']);
    Route::delete('/courseList/delete/{id}', [CourseController::class, 'delete']);


    Route::get('/course', function () {
        return view("admin.pages.course");
    })->name('course');
    Route::post('/course/save', [CourseController::class, 'save']);
    Route::post('/course/update', [CourseController::class, 'update']);
    Route::get('/course/loadDropDownData', [CourseController::class, 'loadDropDownData']);
    Route::get('/course/loadDepartment/{id}', [CourseController::class, 'loadDepartment']);

});
