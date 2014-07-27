<?php
/**
 * User: andrei
 * Date: 1/25/14
 * Time: 12:26 AM
 */

/*
 * Website frontend routes
 */

//Home
Route::get('home', 'CoreApp\Website\Controllers\Frontend\Home@index');

//Default
Route::get('/','CoreApp\Website\Controllers\Frontend\Home@index');

//Portfolio
Route::get('work', 'CoreApp\Website\Controllers\Frontend\Work@index');

//All journal posts
Route::get('journal', 'CoreApp\Website\Controllers\Frontend\Journal@index');

//Single journal
Route::get('journal/{journal_id}/{post_url}','CoreApp\Website\Controllers\Frontend\Journal@single_journal');

//journal Search
Route::post('journal-search','CoreApp\Website\Controllers\Frontend\Journal@journal_search');

//journal category
Route::get('journal/category/{category_id}/{category_url}','CoreApp\Website\Controllers\Frontend\Journal@journals_by_category_id');

//Journal tag
Route::get('journal/tag/{tag_id}/{tag_url}','CoreApp\Website\Controllers\Frontend\Journal@journals_by_tag_id');

//Journal Archive
Route::get('journal/archive/{month}/{year}','CoreApp\Website\Controllers\Frontend\Journal@archived_journals');

//About
Route::get('company', 'CoreApp\Website\Controllers\Frontend\Company@index');

//Contact
Route::get('contact', 'CoreApp\Website\Controllers\Frontend\Contact@index');

Route::post('contact','CoreApp\Website\Controllers\Frontend\Contact@process_contact');


/*
 * Admin Routes
 */

//Journal
Route::get('admin/journal/create','CoreApp\Website\Controllers\Admin\JournalCreate@create');
Route::post('admin/journal/create','CoreApp\Website\Controllers\Admin\JournalCreate@process_create');

Route::get('admin/journal/{journal_id}/update','CoreApp\Website\Controllers\Admin\JournalUpdate@update');
Route::post('admin/journal/{journal_id}/update','CoreApp\Website\Controllers\Admin\JournalUpdate@process_update');

Route::get('admin/journal/all','CoreApp\Website\Controllers\Admin\JournalAll@all');

Route::get('admin/journal/{journal_id}/delete','CoreApp\Website\Controllers\Admin\JournalDelete@delete');

//Journal tags
Route::get('admin/journal/tag/create','CoreApp\Website\Controllers\Admin\JournalTag@create');
Route::post('admin/journal/tag/create','CoreApp\Website\Controllers\Admin\JournalTag@process_create');

Route::get('admin/journal/tag/{tag_id}/update','CoreApp\Website\Controllers\Admin\JournalTag@update');
Route::post('admin/journal/tag/{tag_id}/update','CoreApp\Website\Controllers\Admin\JournalTag@process_update');

Route::get('admin/journal/tags','CoreApp\Website\Controllers\Admin\JournalTag@all');

Route::get('admin/journal/tag/{tag_id}/delete','CoreApp\Website\Controllers\Admin\JournalTag@delete');

//Journal categories
Route::get('admin/journal/category/create','CoreApp\Website\Controllers\Admin\JournalCategory@create');
Route::post('admin/journal/category/create','CoreApp\Website\Controllers\Admin\JournalCategory@process_create');

Route::get('admin/journal/category/{category_id}/update','CoreApp\Website\Controllers\Admin\JournalCategory@update');
Route::post('admin/journal/category/{category_id}/update','CoreApp\Website\Controllers\Admin\JournalCategory@process_update');

Route::get('admin/journal/categories','CoreApp\Website\Controllers\Admin\JournalCategory@all');

Route::get('admin/journal/category/{category_id}/delete','CoreApp\Website\Controllers\Admin\JournalCategory@delete');


//Meta
Route::get('admin/meta_pages/all','CoreApp\Website\Controllers\Admin\MetaPages@all');

Route::get('admin/meta_page/{page_id}/update','CoreApp\Website\Controllers\Admin\MetaPages@update');

Route::post('admin/meta_page/{page_id}/update','CoreApp\Website\Controllers\Admin\MetaPages@process_update');