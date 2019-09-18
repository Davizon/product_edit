<?php

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

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('/expense_reports', 'ExpenseReportController');
Route::get('/expense_reports/{id}/confirmDelete','ExpenseReportController@confirmDelete');
Route::get('/expense_reports/{expense_report}/expenses/create','ExpenseController@create');
Route::post('/expense_reports/{expense_report}/expenses','ExpenseController@store');
Route::get('/expense_reports/{expense_report}/confirmSendMail','ExpenseReportController@confirmSendMail');
Route::post('/expense_reports/{expense_report}/sendMail','ExpenseReportController@sendMail');
Route::resource('/view_edits', 'ViewEditController');
Route::get('/export', 'ViewEditController@export');
Route::post('/import', 'ViewEditController@import')->name('import');
Route::post('/form_import', 'ViewEditController@formImport')->name('form_import');
Route::get('/form_view', 'ViewEditController@formView');
Route::get('/clear_view', 'ViewEditController@clearView');



//Export

//Route::get('csv_file', 'CsvFile@index');
//Route::get('csv_file/export', 'CsvFile@csv_export')->name('export');
//Route::post('csv_file/import', 'CsvFile@csv_import')->name('import');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
