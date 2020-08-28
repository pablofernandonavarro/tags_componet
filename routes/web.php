<?php


use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/tag','PublicationController@index')->name('publication.index');
Route::Post('/tag-generate', 'PublicationController@store')->name('publication.store');
