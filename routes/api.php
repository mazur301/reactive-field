<?php

use Illuminate\Support\Facades\Route;

Route::post('/calculate/{resource}/{field}', 'ReactiveFieldController@calculate');
