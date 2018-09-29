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
// Project Redirect to Login for Outsider
Route::get('/project/redirect-to-login', 'PublicPagesController@redirectToLogin');
Route::get('/project/view/{id}', 'PublicPagesController@projView');


// AUTH ROUTES
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
// Activate User from Email - Ann
Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');


// ACCESS BASED ON ROLES
Route::group(['middleware' => 'role:developer'], function() {
    // Project Feed (Dev) - Mars/Ann
    Route::get('/feeddev', 'ProjectController@feedDev');

    // Account (Dev) - Chellie/Ann
    Route::get('/accountdev', 'ProjectController@accountDev');
    Route::post('/accountdev/update', 'ProjectController@updateDevAccount');

    // Project Page (On-going) - Mars/Ann
    Route::get('/projdev/{id}', 'ProjectController@projDev');

    // Join Project - Ann
    Route::post('/project/join', 'ProjectController@joinProject');

    // Resources (Code Editor) - Des/Betty
    Route::get('/resourcesdev', 'HomeController@resourcesdev');

    // Resources (Links) - Mars
    Route::get('/resources', 'HomeController@resources');

    // Dashboard (Dev) - Des/Betty
    // Route::get('/dashdev', 'HomeController@dashdev');
    Route::get('/feedbackdev', 'HomeController@feedbackdev');
    // Profile (Dev) - Des/Betty
    // Route::get('/profiledev/{id}', 'HomeController@profiledev');
});

Route::group(['middleware' => 'role:owner'], function() {
    // Project Feed (Owner) - Mars/Ann
    Route::get('/feedowner', 'ProjectController@feedOwner');

    // Account (Owner) - Chellie/Ann
    Route::get('/accountowner', 'ProjectController@accountOwner');
    Route::post('/accountowner/update', 'ProjectController@updateOwnerAccount');

    // Create Project - Chellie/Ann
    Route::get('/createprojectowner', 'ProjectController@createProjectOwner');
    Route::post('/createprojectowner/submit', 'ProjectController@storeNewProject');

    // Project Page (On-going) - Mars/Ann
    Route::get('/projowner/{id}', 'ProjectController@projOwner');

    // Upload Files - Ann
    Route::post('/project/upload-files', 'ProjectController@uploadFiles');

    // Edit Project - Ann
    Route::post('/projowner/edit', 'ProjectController@editProject');

    // Dashboard (Owner) - Des/Betty
    Route::get('/dashowner', 'HomeController@dashowner');
    Route::get('/feedbackowner', 'HomeController@feedbackowner');

    // Profile (Owner) - Des/Betty
    // Route::get('/profileowner', 'HomeController@profileowner');
});

// Payment - Mars
Route::get('/payment', 'ProjectController@payment');

// Entry Page - Des/Ann
Route::get('/entrypage', 'ProjectController@entrypage');

// My Projects - Mars/Ann
Route::get('/myprojects', 'ProjectController@myprojects');