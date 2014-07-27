<?php
/**
 * User: andrei
 * Date: 1/25/14
 * Time: 12:26 AM
 */
Route::get('admin/home','CoreApp\Admin\Controllers\Home@index');

Route::post('admin/redactor/image_upload','CoreApp\Admin\Controllers\Redactor@image_upload');
Route::get('admin/redactor/images','CoreApp\Admin\Controllers\Redactor@images');