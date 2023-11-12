<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\V1\CourseController;
use App\Http\Controllers\Api\V1\GroupController;
use App\Http\Controllers\Api\V1\ThemeController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\LessonController;
use App\Http\Controllers\Api\V1\TableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// NOTE Группируем все роуты через префикс {auth}, именуем роут {auth}, группируем middleware для всех роутов,
Route::prefix('auth')->name('auth')->middleware('jwt:admin,student')->group(function () {
    // NOTE Исключаем middleware только роут {login} с помощью [withoutMiddleware]
    Route::post('login', [AuthController::class, 'login'])->name('login')->withoutMiddleware('jwt:admin,student');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('me', [AuthController::class, 'me'])->name('me');


});

Route::prefix('v1')->name('v1')->middleware('jwt:admin,student')->group(function() {
    // Table
    Route::get('table', [TableController::class, 'index'])->name('table.index')->withoutMiddleware('jwt:admin,student');
    Route::post('table', [TableController::class, 'store'])->name('table.store');
    Route::delete('table/{table}', [TableController::class, 'destroy'])->name('table.destroy');

    // Users
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('users', [UserController::class, 'store'])->middleware('jwt:admin')->name('users.store');
    Route::post('users/{user}', [UserController::class, 'update'])->middleware('jwt:admin')->name('users.update');
    Route::post('users/{user}/task_completed', [UserController::class, 'updateTask'])->name('users.updateTask');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('jwt:admin')->name('users.delete');
    // User Group
    Route::get('users/{user}/groups', [UserController::class, 'getGroups'])->name('users.groups');

    // Groups
    Route::middleware('jwt:admin,student')->group(function() {
        Route::get('groups', [GroupController::class, 'index'])->name('groups.index');
        Route::get('groups/courseId', [GroupController::class, 'getGroupsByCourseId'])->name('groups.getGroupsByCourseId');
        Route::post('groups', [GroupController::class, 'store'])->middleware('jwt:admin')->name('groups.store');
        Route::get('groups/{group}', [GroupController::class, 'show'])->name('groups.show');
        Route::post('groups/{group}', [GroupController::class, 'update'])->middleware('jwt:admin')->name('groups.update');
        Route::delete('groups/{group}', [GroupController::class, 'destroy'])->middleware('jwt:admin')->name('groups.delete');
        Route::post('groups/restore/{id}', [GroupController::class, 'restore'])->name('groups.restore');
        // Get users by group
        Route::get('groups/{group}/users', [GroupController::class, 'getUsers'])->name('groups.users');
        // Get lessons by group
        Route::get('groups/{group}/lessons', [GroupController::class, 'getLessons'])->name('groups.lessons');

        // Themes
        Route::get('themes', [ThemeController::class, 'index'])->name('themes.index');
        Route::post('themes', [ThemeController::class, 'store'])->middleware('jwt:admin')->name('themes.store');
        Route::get('themes/{theme}', [ThemeController::class, 'show'])->name('themes.show');
        Route::post('themes/{theme}', [ThemeController::class, 'update'])->middleware('jwt:admin')->name('themes.update');
        Route::delete('themes/{theme}', [ThemeController::class, 'destroy'])->middleware('jwt:admin')->name('themes.delete');
        // Get Theme Course
        Route::get('themes/{theme}/course', [ThemeController::class, 'getCourse'])->name('themes.course');
        
        // Courses
        Route::get('courses/{course}/themes', [CourseController::class, 'getThemes'])->name('corses.themes');
        Route::get('courses', [CourseController::class, 'index'])->name('corses.index');
        Route::get('courses/{course}', [CourseController::class, 'getCourse'])->name('corses.getCourses');

        // lessons
        Route::get('lessons', [LessonController::class,'index'])->name('lessons.index');
        Route::post('lessons', [LessonController::class,'store'])->middleware('jwt:admin')->name('lessons.store');
        Route::delete('lessons/{lesson}', [LessonController::class,'destroy'])->middleware('jwt:admin')->name('lessons.destroy');
        Route::post('lessons/{lesson}', [LessonController::class,'update'])->middleware('jwt:admin')->name('lessons.update');
    }
);

});