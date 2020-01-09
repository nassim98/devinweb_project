<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Categories
Route::any('/addCat', 'CategoriesController@addCat')->name('addCat');
Route::any('/submitCat', 'CategoriesController@submitCat')->name('submitCat');
Route::any('/showCat', 'CategoriesController@showCat')->name('showCat');
Route::any('/deleteCat/{id}', 'CategoriesController@delete')->name('deleteCat');
Route::any('/updateCat/{id}', 'CategoriesController@update1')->name('updateCat');
Route::any('/updateCatSubmit/', 'CategoriesController@update2')->name('updateCatSubmit');

Route::any('/addCourse', 'CoursesController@addCourse')->name('addCourse');
Route::any('/submitCourse', 'CoursesController@submitCourse')->name('submitCourse');
Route::any('/showCourse', 'CoursesController@showCourse')->name('showCourse');
Route::any('/deleteCourse/{id}', 'CoursesController@delete')->name('deleteCourse');
Route::any('/updateCourse/{id}', 'CoursesController@update1')->name('updateCourse');
Route::any('/updateCourseSubmit/', 'CoursesController@update2')->name('updateCourseSubmit');
