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

Route::get('/pertanyaan', ['as' => 'questions.index', 'uses' => 'QuestionController@index']);
Route::get('/pertanyaan/create', ['as' => 'questions.create', 'uses' => 'QuestionController@create']);
Route::post('/pertanyaan/store', ['as' => 'questions.store', 'uses' => 'QuestionController@store']);
Route::get('/pertanyaan/{id}', ['as' => 'questions.show', 'uses' => 'QuestionController@show']);
Route::get('/pertanyaan/{id}/edit', ['as' => 'questions.edit', 'uses' => 'QuestionController@edit']);
Route::put('/pertanyaan/{id}/update', ['as' => 'questions.update', 'uses' => 'QuestionController@update']);
Route::delete('/pertanyaan/{id}', ['as' => 'questions.delete', 'uses' => 'QuestionController@delete']);

Route::post('/jawaban/{id}', ['as' => 'answers.store', 'uses' => 'AnswerController@store']);
Route::get('/jawaban/{id}', ['as' => 'answers.index', 'uses' => 'AnswerController@index']);
Route::delete('/jawaban/{id}', ['as' => 'answers.delete', 'uses' => 'AnswerController@delete']);

Route::get('/', function () {
    return redirect()->route('questions.index');
});
