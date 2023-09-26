<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// frontend pages
   Route::get('/', 'PageController@index')->name('home');
   Route::get('about-us', 'PageController@aboutUs')->name('about-us');
   Route::get('contact-us', 'PageController@contactUs')->name('contact-us');
   //Route::get('case-studies', 'PageController@caseStudies')->name('case-studies');
   Route::get('careers', 'JoinUsController@index')->name('careers');
   Route::get('careers/{slug}', 'JoinUsController@showSinglePage')->name('singlecareer');
   Route::post('careers-load-data','JoinUsController@loadDataAjax' );
   Route::get('pricing', 'PageController@pricing')->name('pricing');
   Route::get('team', 'PageController@team')->name('team');
   Route::get('knowledge-graph-intelligence', 'PageController@graphIntelligence')->name('knowledge-graph-intelligence');
   Route::get('textofia-core-analytics', 'PageController@textofiaPlatform')->name('textofia-core-analytics');
   Route::get('digital-content-conversion', 'PageController@textAnalyticsApis')->name('digital-content-conversion');
   Route::get('solutions/{slug}', 'PageController@solutionPage')->name('solutions');
   Route::get('technology/{slug}', 'PageController@technologyPage')->name('technology');
   Route::get('news', 'PageController@news')->name('news');
   Route::get('news/{slug}', 'PageController@shownews')->name('shownews');
   Route::get('showCaseStudies/{id}', 'PageController@showsingleCaseStudies')->name('show_case_studeies');
   Route::get('blog', 'PageController@blog')->name('blog');
   Route::get('blog/{slug}', 'PageController@showsingleBlog')->name('singleblog');
   Route::get('cookie-policy', 'PageController@cookiePolicyPage')->name('cookie-policy');
   Route::get('privacy-policy', 'PageController@PrivacyPolicyPage')->name('privacy-policy');
   Route::post('contact','ContactController@sendmail')->name('sendmail');
   Route::post('subscribe', 'SubscriptionController@subscribe')->name('subscribe');


// Route::get('/', 'PageController@index')->name('home');
Route::get('/posts', 'PageController@posts')->name('posts');
Route::get('/posts/{post}', 'PageController@showPost')->name('posts.view');
Route::get('/category/{category}', 'PageController@showCategory')->name('categories.view');
// admin pages
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController')->except('show');
    Route::resource('news','NewsController');
    Route::resource('case-studies','CaseStudiesController');
    Route::resource('testimonial','TestimonialController');
    Route::get('settings/general','SettingController@index')->name('settings.general');
    Route::post('settings/{section}','SettingController@store')->name('settings.store');
    Route::get('settings/mail','SettingController@mail')->name('settings.mail_config');
    Route::get('settings/seo','SettingController@meta')->name('settings.meta');
    Route::get('cache-setting','SettingController@cacheSettingPage')->name('settings.cache_config');
    Route::post('clear-cache', 'SettingController@clearCache');
    Route::resource('career','CareerController');   
    Route::get('newsletter-contacts','NewsletterController@index')->name('newsletter-contacts');   

});
