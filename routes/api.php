<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Marshmallow\NovaTranslation\Http\Controllers\LanguageController;
use Marshmallow\NovaTranslation\Http\Controllers\LanguageTranslationController;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('languages', LanguageController::class.'@index')
    ->name('nova.languages.index');

Route::post('languages', LanguageController::class.'@store')
    ->name('nova.languages.store');

Route::get('languages/{language}/translations', LanguageTranslationController::class.'@index')
    ->name('nova.languages.translations.index');

Route::put('languages/{language}/translations', LanguageTranslationController::class.'@update')
    ->name('nova.languages.translations.update');

Route::post('languages/{language}/translations', LanguageTranslationController::class.'@store')
    ->name('nova.languages.translations.store');
