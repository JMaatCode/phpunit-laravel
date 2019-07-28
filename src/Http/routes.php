<?php
/**
 * Created by PhpStorm.
 * User: jmaat
 * Date: 2019/7/24
 * Time: 9:44 PM
 */
Route::get('/', 'PhpunitController@index');
Route::post('/', 'PhpunitController@store')->name('phpunit.store');
