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

// ACCESSIBLE TO THE PUBLIC
// Landing Page - Chellie
Route::get('/', 'PublicPagesController@index');
// Terms & Conditions - Mars
Route::get('/termsandconditions', 'PublicPagesController@termsandconditions');
// About - Mars
Route::get('/about', 'PublicPagesController@about');

// AUTH ROUTES
Auth::routes();

// Activate User from Email - Ann
Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

// DASHBOARD
Route::get('/home', 'HomeController@index');
Route::get('/feedback', 'HomeController@feedback');
// Route::get('/feedbackowner', 'HomeController@feedbackowner');
// Route::post('/give-feedback');

// PROFILE
Route::get('/profile', 'HomeController@profile')->name('profile');

// FEED
Route::get('/feed', 'ProjectController@feed');

// ACCOUNT
// Account (Dev) - Chellie/Ann
Route::get('/accountdev', 'ProjectController@accountDev');
Route::post('/accountdev/update', 'ProjectController@updateDevAccount');
// Account (Owner) - Chellie/Ann
Route::get('/accountowner', 'ProjectController@accountOwner');
Route::post('/accountowner/update', 'ProjectController@updateOwnerAccount');
// Payment - Mars
Route::get('/payment', 'ProjectController@payment');
    
// PROJECT
// Project Page (On-going) - Mars/Ann
Route::get('/project/{id}', 'ProjectController@project');
// Join Project - Ann
Route::post('/project/join', 'ProjectController@joinProject');
// Create Project - Chellie/Ann
Route::get('/createprojectowner', 'ProjectController@createProjectOwner');
Route::post('/createprojectowner/submit', 'ProjectController@storeNewProject');
// Entry Page - Des/Ann
Route::get('/entry', 'ProjectController@entrypage');
// Upload Files - Ann
Route::post('/project/upload-files', 'ProjectController@uploadFiles');
// Edit Project - Ann
Route::post('/projowner/edit', 'ProjectController@editProject');

// RESOURCES
// Code Editor - Des/Betty
Route::get('/code-editor', 'HomeController@code');
// Links - Mars
Route::get('/resources', 'HomeController@resources');

Route::get('/projectdone', 'ProjectDoneController@projectdone');

