<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* 
 * Get Index.
 */
Route::get('/','IndexController@getContent');

/*
 * Message controller.
 *
 */
Route::get('create',function()
{
	return View::make('userinput');
});

Route::post('createcontent','ContentController@actionCreate');

//Route::get('update/{mbid}', 'ContentController@actionGetOldmessage'); 
Route::any('/update/{mbid}', array('as'=>'update', 'uses'=>'ContentController@actionGetOldmessage'));
Route::get('update/{mbid?}', function($mbid = null)
{
	try {
		if(empty($mbid)) 
			throw new Exception("Wrong URI.");
			
		return Redirect::route('update', array('mbid'=>$mbid));
	} catch (Exception $e) {
		echo $e->getMessage();
		exit;
	}
});

Route::post('updated/{mbid}', 'ContentController@actionUpdate');

Route::get('delete/{mbid}', 'ContentController@actionDelete');

/*
 * News controller.
 *
 */
Route::get('newsupdate', 'NewsController@actionGetOldnews');

Route::post('updatednews/{newsid}', 'NewsController@actionUpdate');