<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', 'ArticleController@index');
Route::post('articles', 'ArticleController@store');
Route::get('articles/search', 'ArticleController@search');
Route::get('articles/{article_id}', 'ArticleController@show');
Route::post('articles/{article_id}', 'ArticleController@applicationArticle');
Route::post('articles/{article_id}/recently', 'ArticleController@recentlyArticle');

Route::get('users/articles/{user_id}', 'UserController@showArticles');
Route::get('users/articles/{user_id}/recently', 'UserController@showRecentlyArticles');

Route::get('talents', 'TalentController@search');
