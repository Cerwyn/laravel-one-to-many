<?php

use Illuminate\Http\Request;


Route::post('article','ArticleController@store');
Route::get('article/{article}','ArticleController@show');
Route::get('article/{article}/comments','ArticleController@show_comments');
Route::get('article/{article}/best-comment','ArticleController@show_best_comment');
Route::get('articles','ArticleController@index');
Route::delete('article/{article}','ArticleController@destroy');

Route::post('article/{article}/comment','CommentController@store');
Route::post('comment/{comment}/best-comment','CommentController@best_comment');
Route::get('comments','CommentController@index');
Route::get('comment/{comment}', 'CommentController@show');
Route::get('comment/{comment}/article','CommentController@show_article');
Route::delete('comment/{comment}','CommentController@destroy');

Route::fallback(function(){
    return response()->json([
        'message' => 'API Not Found'], 404);
});