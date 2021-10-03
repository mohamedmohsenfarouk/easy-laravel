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
Route::get('/', function () {
return view('index');
})->name('pagee');   
Route::get('/home', function () {
return view('index');
})->name('pagee');
Route::get('/index', function () {
    return view('index');
})->name('pagee');
Route::get('/activities', function () {
    return view('activities');
})->name('activities');
Route::get('/add-appointment', function () {
    return view('add-appointment');
})->name('add-appointment');
Route::get('/add-asset', function () {
    return view('add-asset');
})->name('add-asset');
Route::get('/add-blog', function () {
    return view('add-blog');
})->name('add-blog');
Route::get('/add-department', function () {
    return view('add-department');
})->name('add-department');
Route::get('/add-doctor', function () {
    return view('add-doctor');
})->name('add-doctor');
Route::get('/add-employee', function () {
    return view('add-employee');
})->name('add-employee');
Route::get('/add-expense', function () {
    return view('add-expense');
})->name('add-expense');
Route::get('/add-leave-type', function () {
    return view('add-leave-type');
})->name('add-leave-type');
Route::get('/add-leave', function () {
    return view('add-leave');
})->name('add-leave');
Route::get('/add-patient', function () {
    return view('add-patient');
})->name('add-patient');
Route::get('/add-provident-fund', function () {
    return view('add-provident-fund');
})->name('add-provident-fund');
Route::get('/add-role', function () {
    return view('add-role');
})->name('add-role');
Route::get('/add-salary', function () {
    return view('add-salary');
})->name('add-salary');
Route::get('/add-schedule', function () {
    return view('add-schedule');
})->name('add-schedule');
Route::get('/add-tax', function () {
    return view('add-tax');
})->name('add-tax');
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');
Route::get('/asset', function () {
    return view('asset');
})->name('asset');
Route::get('/attendance', function () {
    return view('attendance');
})->name('attendance');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/change-password2', function () {
    return view('change-password2');
})->name('change-password2');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/client-profile', function () {
    return view('client-profile');
})->name('client-profile');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/compose', function () {
    return view('compose');
})->name('compose');
Route::get('/create-invoice', function () {
    return view('create-invoice');
})->name('create-invoice');
Route::get('/departments', function () {
    return view('departments');
})->name('departments');
Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');
Route::get('/edit-appointment', function () {
    return view('edit-appointment');
})->name('edit-appointment');
Route::get('/edit-asset', function () {
    return view('edit-asset');
})->name('edit-asset');
Route::get('/edit-blog', function () {
    return view('edit-blog');
})->name('edit-blog');
Route::get('/edit-department', function () {
    return view('edit-department');
})->name('edit-department');
Route::get('/edit-doctor', function () {
    return view('edit-doctor');
})->name('edit-doctor');
Route::get('/edit-employee', function () {
    return view('edit-employee');
})->name('edit-employee');
Route::get('/edit-expense', function () {
    return view('edit-expense');
})->name('edit-expense');
Route::get('/edit-holiday', function () {
    return view('edit-holiday');
})->name('edit-holiday');
Route::get('/edit-invoice', function () {
    return view('edit-invoice');
})->name('edit-invoice');
Route::get('/edit-leave-type', function () {
    return view('edit-leave-type');
})->name('edit-leave-type');
Route::get('/edit-leave', function () {
    return view('edit-leave');
})->name('edit-leave');
Route::get('/edit-patient', function () {
    return view('edit-patient');
})->name('edit-patient');
Route::get('/edit-profile', function () {
    return view('edit-profile');
})->name('edit-profile');
Route::get('/edit-provident-fund', function () {
    return view('edit-provident-fund');
})->name('edit-provident-fund');
Route::get('/edit-role', function () {
    return view('edit-role');
})->name('edit-role');
Route::get('/edit-salary', function () {
    return view('edit-salary');
})->name('edit-salary');
Route::get('/edit-schedule', function () {
    return view('edit-schedule');
})->name('edit-schedule');
Route::get('/edit-tax', function () {
    return view('edit-tax');
})->name('edit-tax');
Route::get('/email-settings', function () {
    return view('email-settings');
})->name('email-settings');
Route::get('/employees', function () {
    return view('employees');
})->name('employees');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/expense-reports', function () {
    return view('expense-reports');
})->name('expense-reports');
Route::get('/expenses', function () {
    return view('expenses');
})->name('expenses');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');
Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');
Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/holidays', function () {
    return view('holidays');
})->name('holidays');
Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');
Route::get('/incoming-call', function () {
    return view('incoming-call');
})->name('incoming-call');
Route::get('/invoice-reports', function () {
    return view('invoice-reports');
})->name('invoice-reports');
Route::get('/invoice-settings', function () {
    return view('invoice-settings');
})->name('invoice-settings');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');
Route::get('/leave-type', function () {
    return view('leave-type');
})->name('leave-type');
Route::get('/leaves', function () {
    return view('leaves');
})->name('leaves');
Route::get('/localization', function () {
    return view('localization');
})->name('localization');
Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/mail-view', function () {
    return view('mail-view');
})->name('mail-view');
Route::get('/notifications-settings', function () {
    return view('notifications-settings');
})->name('notifications-settings');
Route::get('/patients', function () {
    return view('patients');
})->name('patients');
Route::get('/payments', function () {
    return view('payments');
})->name('payments');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/provident-fund', function () {
    return view('provident-fund');
})->name('provident-fund');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/roles-permissions', function () {
    return view('roles-permissions');
})->name('roles-permissions');
Route::get('/salary-settings', function () {
    return view('salary-settings');
})->name('salary-settings');
Route::get('/salary-view', function () {
    return view('salary-view');
})->name('salary-view');
Route::get('/salary', function () {
    return view('salary');
})->name('salary');
Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');
Route::get('/settings', function () {
    return view('settings');
})->name('settings');
Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');
Route::get('/tables-datatables', function () {
    return view('tables-datatables');
})->name('tables-datatables');
Route::get('/tabs', function () {
    return view('tabs');
})->name('tabs');
Route::get('/taxes', function () {
    return view('taxes');
})->name('taxes');
Route::get('/theme-settings', function () {
    return view('theme-settings');
})->name('theme-settings');
Route::get('/typography', function () {
    return view('typography');
})->name('typography');
Route::get('/uikit', function () {
    return view('uikit');
})->name('uikit');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/widgets', function () {
    return view('widgets');
})->name('widgets');
Route::get('/add-holiday', function () {
    return view('add-holiday');
})->name('add-holiday');