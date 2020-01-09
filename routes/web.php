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

Auth::routes();

Route::get('college-development-committee', function () {
    return view('about.development');
});
Route::get('management-committee', function () {
    return view('about.management');
});
Route::get('affiliation', function () {
    return view('about.affiliation');
});
Route::get('alumini-association', function () {
    return view('about.alumini_association');
});
Route::get('facilities-for-divyang', function () {
    return view('about.facilities_divyang');
});
Route::get('iqac', function () {
    return view('about.iqac');
});
Route::get('photo-gallery', function () {
    return view('about.photo_gallery');
});


Route::get('student-council', function () {
    return view('about.student_council');
});


Route::get('vision-and-mission', function () {
    return view('about.vision_mission');
});
Route::get('economics', function () {
    return view('department.economics');
});
Route::get('english', function () {
    return view('department.english');
});
Route::get('history', function () {
    return view('department.history');
});
Route::get('marathi', function () {
    return view('department.marathi');
});
Route::get('political-science', function () {
    return view('department.political_science');
});
Route::get('sociology', function () {
    return view('department.sociology');
});
Route::get('program-outcome', function () {
    return view('program_outcome');
});



Route::view('code-of-conduct','code_of_conduct');
Route::view('core-values','core_values');
Route::view('strategic-plan','strategic_plan');
Route::view('self-declaration','self_declaration');
Route::view('naac','naac');
Route::view('ssr','ssr');
Route::view('contact','contact');
Route::view('analysis-report','feedback.analysis_report');
Route::view('jpm','library.jpm');
Route::view('library-advisory','library.library_advisory');
Route::view('library-collection','library.library_collection');
Route::view('library-contact','library.library_contact');
Route::view('library-gallery','library.library_gallery');
Route::view('library-map','library.library_map');
Route::view('library-rules','library.library_rules');
Route::view('library-staff','library.library_staff');
Route::view('library-service','library.library_service');
Route::view('newspaper','library.newspaper');
Route::view('opac','library.opac');

// admin panel routes
Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('quicklink', 'QuickLinkController');
Route::resource('notifications', 'NotificationController');
Route::resource('etenders', 'EtenderController');
Route::resource('news', 'NewsController');
Route::resource('activities', 'ActivityController');
Route::resource('blogs', 'BlogController');

Route::get('Gallery-image', 'MultipleUploadController@index')->name('galleryimage');
Route::post('Gallery-image/upload', 'MultipleUploadController@upload')->name('upload');
Route::delete('Gallery-image/{galleryMultiple}/delete', 'MultipleUploadController@destroy')->name('galleryimage.destroy');
