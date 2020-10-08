<?php

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['namespace' => 'Admin'], function () {
    Route::get('password-reset', 'PasswordResetController@resetForm')->name('password-reset');
    Route::post('send-email-link', 'PasswordResetController@sendEmailLink')->name('sendEmailLink');
    Route::get('reset-password/{token}', 'PasswordResetController@passwordResetForm')->name('passwordResetForm');
    Route::post('update-password', 'PasswordResetController@updatePassword')->name('updatePassword');
});

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'auth',
        'namespace' => 'Admin',
    ],
    function () {
        // prefix => admin makes url admin/
        // namespace => admin makes Admin/DashboardController@index
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('setting', 'SettingController@index')->name('setting');
        Route::put('setting/save/{id}', 'SettingController@update')->name('setting.update');

        Route::resource('pages', 'PagesController');
        Route::resource('blog', 'BlogController');
        /*
        **User Enquiry
        */
        Route::get('enquiry/lists', 'EnquiryController@enquiryList')->name('enquiryList');
        Route::delete('enquiry/remove/{id}', 'EnquiryController@removeEnquiry')->name('userenquiry.destroy');

        Route::get('enquiry/subscriber', 'EnquiryController@subscriberList')->name('subscriberList');
        Route::delete('enquiry/subscriber/remove/{id}', 'EnquiryController@removeSubscriber')->name('removeSubscriber');

        /*
         **Gallery Related Routes
        */
        Route::resource('gallery', 'GalleryController');
        Route::post('remove/image', 'GalleryController@removeParticularImage')->name('removeImage');
    }
);

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'DefaultController@index')->name('home');

    Route::get('/blogs', 'DefaultController@blogList')->name('blogList');
    Route::get('/blog/{slug}', 'DefaultController@blogInner')->name('blogInner');

    Route::get('/courses', 'DefaultController@courseList')->name('courseList');
    Route::get('/course/{slug}', 'DefaultController@courseInner')->name('courseInner');

    Route::get('/gallery', 'DefaultController@galleryList')->name('galleryList');
    Route::get('/gallery/{slug}', 'DefaultController@galleryInner')->name('galleryInner');

    Route::get('/teams', 'DefaultController@teamList')->name('teamList');
    Route::get('/teams/{slug}', 'DefaultController@teamDetail')->name('teamDetail');
    Route::get('/videos', 'DefaultController@videoList')->name('videoList');

    Route::post('contact-us/save', 'DefaultController@saveEnquiry')->name('enquirySave');
    Route::post('subscriber/save', 'DefaultController@saveSubscribers')->name('saveSubscribers');

    // this should be in last
    Route::get('/{slug}', 'DefaultController@dynamicPages')->name('getPage');
});
