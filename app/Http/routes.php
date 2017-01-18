<?php

/*---------Mailchimp----------*/

Route::get('front/home', function() {
    return view('subscription.index');
});

Route::post('/subscribe', [ 'uses' => 'SubscriptionController@subscribe', 'as' => 'subscriber.subscribe']);

Route::get('/campaign', ['uses' => 'SubscriptionController@createCampaign', 'as' => 'subscriber.campaign.create']);
Route::post('/campaign', ['uses' => 'SubscriptionController@sendCampaign', 'as' => 'subscriber.campaign.send']);

/*---------end mailchimp----------*/


Route::group(['prefix' => 'front'], function () {
    Route::resource('home', 'FrontController');
    Route::resource('financement', 'FinancementFrontController');
    Route::resource('formations', 'FormationFrontController');
    Route::resource('equipe', 'EquipeController');
    Route::resource('avis', 'AvisFrontController');
    Route::resource('teamb', 'TeambFrontController');
    Route::resource('search','SearchController');
    Route::resource('valeurs', 'ValeursFrontController');
    Route::resource('actus', 'ActuFrontController');
    Route::resource('partners', 'PartnerFrontController');
    Route::resource('faq', 'FaqController');
    Route::resource('inscript', 'InscriptionController');
    Route::resource('newsletter', 'NewsLetterController');
});


Route::any('login', 'LoginController@login');
Route::any('logout', 'LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('categories', 'CategoryTagController');
    Route::resource('dashboard', 'DashboardController');
    Route::resource('formations', 'FormationController');
    Route::resource('members', 'MemberController');
    Route::resource('articles', 'PostAdminController');
    Route::resource('sessions', 'SessionController');
    Route::resource('teamb', 'TeambAdminController');
    Route::resource('publish', 'PublishFormationContoller');
    Route::resource('publishart', 'PublishArticleController');


});
