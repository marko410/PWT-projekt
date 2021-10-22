<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BossController;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\StudentController;




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

Route::get('/',[LoginController::class,'main_screen'])->name('main_screen');
Route::get('/choose_login',[LoginController::class,'choose_login'])->name('choose_login');
Route::get('/main_screen_login',[LoginController::class,'main_screen_login'])->name('main_screen_login');
Route::get('/main_login_form_screen/{id}',[LoginController::class,'main_login_form_screen'])->name('main_login_form_screen');


Route::post('/main_login_screen_post',[LoginController::class,'main_login_screen_post'])->name('main_screen_login_post');


//boss routes
Route::get('/riaditel_main',[BossController::class,'boss_main_screen'])->middleware('is-boss')->name('boss_main_screen');
Route::get('/riaditel/all_pilots',[BossController::class,'all_pilots'])->middleware('is-boss')->name('boss_all_pilots');
Route::get('/riaditel/one_pilot/{id}',[BossController::class,'one_pilot_show'])->middleware('is-boss')->name('boss_one_pilot_show');
Route::post('/riaditel/one_pilot/{id}/delete',[BossController::class,'one_pilot_delete'])->middleware('is-boss')->name('boss_one_pilot_delete');

Route::get('/riaditel/all_ziaci',[BossController::class,'all_ziaci'])->middleware('is-boss')->name('boss_all_ziaci');
Route::get('/riaditel/one_ziak/{id}',[BossController::class,'one_ziak_show'])->middleware('is-boss')->name('boss_one_ziak_show');

Route::post('/boss/boss_update_field',[BossController::class,'boss_update_field'])->middleware('is-boss')->name('boss_update_field');

Route::get('/riaditel/add_pilot',[BossController::class,'add_pilot'])->middleware('is-boss')->name('boss_add_pilot');
Route::post('/riaditel/add_member_post/',[BossController::class,'add_member_post'])->middleware('is-boss')->name('boss_add_member_post');


Route::get('/riaditel/add_ziak',[BossController::class,'add_ziak'])->middleware('is-boss')->name('boss_add_ziak');


Route::get('/riaditel/show_pilot_tickets',[BossController::class,'show_pilot_tickets'])->middleware('is-boss')->name('show_pilot_tickets');
Route::get('/riaditel/add_pilot_tickets',[BossController::class,'add_pilot_ticket'])->middleware('is-boss')->name('add_pilot_ticket');

Route::post('/riaditel/add_pilot_tickets/post',[BossController::class,'add_pilot_ticket_post'])->middleware('is-boss')->name('add_pilot_ticket_post');

Route::post('/riaditel/update_pilot_ticket/post',[BossController::class,'update_pilot_ticket_post'])->middleware('is-boss')->name('update_pilot_ticket_post');
Route::post('/riaditel/delete_pilot_ticket/post',[BossController::class,'delete_pilot_ticket_post'])->middleware('is-boss')->name('delete_pilot_ticket_post');





Route::get('/riaditel/show_ziak_tickets',[BossController::class,'show_ziak_tickets'])->middleware('is-boss')->name('show_ziak_tickets');
Route::get('/riaditel/add_ziak_tickets',[BossController::class,'add_ziak_ticket'])->middleware('is-boss')->name('add_ziak_ticket');

Route::post('/riaditel/add_ziak_tickets/post',[BossController::class,'add_ziak_ticket_post'])->middleware('is-boss')->name('add_ziak_ticket_post');

Route::post('/riaditel/update_ziak_ticket/post',[BossController::class,'update_ziak_ticket_post'])->middleware('is-boss')->name('update_ziak_ticket_post');
Route::post('/riaditel/delete_ziak_ticket/post',[BossController::class,'delete_ziak_ticket_post'])->middleware('is-boss')->name('delete_ziak_ticket_post');



Route::get('/riaditel/change_password',[BossController::class,'change_password'])->middleware('is-boss')->name('boss.change_password');
Route::post('/riaditel/change_password/post',[BossController::class,'change_password_post'])->middleware('is-boss')->name('boss.change_password_post');


Route::get('/riaditel/show_absolvents',[BossController::class,'show_absolvents'])->middleware('is-boss')->name('boss.show_absolvents');

Route::get('/riaditel/add_absolvent',[BossController::class,'add_absolvent'])->middleware('is-boss')->name('boss.add_absolvent');
Route::post('/riaditel/add_absolvent_post',[BossController::class,'add_absolvent_post'])->middleware('is-boss')->name('boss.add_absolvent_post');

Route::post('/riaditel/update_absolvent_post',[BossController::class,'update_absolvent_post'])->middleware('is-boss')->name('boss.update_absolvent_post');
Route::post('/riaditel/delete_absolvent_post',[BossController::class,'delete_absolvent_post'])->middleware('is-boss')->name('boss.delete_absolvent_post');












Route::post('/boss_logout',[BossController::class,'boss_logout'])->middleware('is-boss')->name('boss_logout');


//pilot routes
Route::get('/pilot_main',[PilotController::class,'pilot_main_screen'])->middleware('is-pilot')->name('pilot_main_screen');
Route::get('/pilot/preukaz',[PilotController::class,'pilot_preukaz'])->middleware('is-pilot')->name('pilot_preukaz');
Route::get('/pilot/ziaci',[PilotController::class,'pilot_ziaci'])->middleware('is-pilot')->name('pilot_ziaci');


Route::get('/pilot/ziak/{id}',[PilotController::class,'one_ziak_show'])->middleware('is-pilot')->name('one_ziak_show');


Route::get('/pilot/osobne_udaje',[PilotController::class,'pilot_osobne_udaje'])->middleware('is-pilot')->name('pilot_osobne_udaje');
Route::post('/pilot/osobne_udaje/post',[PilotController::class,'pilot_osobne_udaje_post'])->middleware('is-pilot')->name('pilot_osobne_udaje_post');

Route::get('/pilot/zmena_hesla',[PilotController::class,'zmena_hesla'])->middleware('is-pilot')->name('pilot_zmena_hesla');
Route::post('/pilot/zmena_hesla/post',[PilotController::class,'zmena_hesla_post'])->middleware('is-pilot')->name('pilot_zmena_hesla_post');

Route::post('/pilot_logout',[PilotController::class,'pilot_logout'])->middleware('is-pilot')->name('pilot_logout');


//ziak routes
Route::get('/student_main',[StudentController::class,'student_main_screen'])->middleware('is-student')->name('student_main_screen');
Route::post('/student_logout',[StudentController::class,'student_logout'])->middleware('is-student')->name('student_logout');

Route::get('/student/preukaz',[StudentController::class,'student_preukaz'])->middleware('is-student')->name('student_preukaz');




Route::get('/student/osobne_udaje',[StudentController::class,'student_osobne_udaje'])->middleware('is-student')->name('student_osobne_udaje');
Route::post('/student/osobne_udaje/post',[StudentController::class,'student_osobne_udaje_post'])->middleware('is-student')->name('student_osobne_udaje_post');


Route::get('/student/zmena_hesla',[StudentController::class,'zmena_hesla'])->middleware('is-student')->name('student_zmena_hesla');
Route::post('/student/zmena_hesla/post',[StudentController::class,'zmena_hesla_post'])->middleware('is-student')->name('student_zmena_hesla_post');


//Route::get('/prihlasenie', function () {  return view('prihlasenie');});


