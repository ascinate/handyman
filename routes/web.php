<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\servicerequestController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\MemberController;


Route::get('/', function () {
    return view('home');
});

Route::view('about','about');
Route::view('help','help');
Route::view('howitworks','howitworks');
Route::view('pricing','pricing');
Route::view('services','services');
Route::view('contractor','contractor');
Route::view('contractorform','contractorform');





Route::view('dashboardservices','dashboardservices');
// Route::view('dashboardcontructor','dashboardcontructor');

Route::view('signup','signup');
Route::view('login','login');
Route::view('servicerequest','servicerequest');

Route::post('/welcome-user', [UserController::class, 'registerUser']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::post('/login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);


Route::post('/servicerequest', [servicerequestController::class, 'create']);

Route::view('admin/login','admin/login');
Route::get('admin/logout', [AdminController::class, 'logout']);

Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware('IsAdmin');;
Route::post('adminlogin',[AdminController::class,'adminlogin']);

Route::post('/contractorform', [ContractorController::class, 'create']);
Route::get('contractors',[ContractorController::class, 'index']);
Route::get('admincontractors',[ContractorController::class, 'adminindex']);
Route::get('viewcontractor/{id}', [ContractorController::class, 'viewContractor']);
Route::get('deletecontractors/{id}',[ContractorController::class, 'delete']);

Route::get('customers',[CustomerController::class, 'index']);
Route::get('viewuser/{id}', [CustomerController::class, 'viewUser']);
Route::get('deletecustomers/{id}',[CustomerController::class, 'delete']);

Route::get('servicerequests',[servicerequestController::class, 'index']);
Route::get('deleteservices/{id}',[servicerequestController::class, 'delete']);
Route::get('viewservice/{id}', [servicerequestController::class, 'viewService']);
Route::post('insertservice',[ServiceController::class, 'insertservice']);
Route::get('service',[ServiceController::class, 'index']);
Route::get('editservice/{id}', [ServiceController::class, 'showData']);
Route::post('updateservice',[ServiceController::class, 'updateservice']);
Route::get('deleteservice/{id}',[ServiceController::class, 'delete']);
Route::view('addservice', 'admin/addservice');

Route::get('appointment',[AppoinmentController::class, 'appointment']);
Route::post('appointmentform', [AppoinmentController::class, 'create']);
Route::get('appointments',[AppoinmentController::class, 'index']);
Route::get('viewappointment/{id}', [AppoinmentController::class, 'viewAppointment']);
Route::get('deleteappointment/{id}',[AppoinmentController::class, 'delete']);


Route::post('/check-email', [UserController::class, 'checkEmail'])->name('check.email');
Route::get('memberform',[MemberController::class, 'memberform']);
Route::post('/register-family', [MemberController::class, 'store'])->name('register-family');
Route::get('memberlisting',[MemberController::class, 'memberlisting']);
Route::get('editmember/{id}', [MemberController::class, 'edit']);
Route::post('/member/update/{id}', [MemberController::class, 'update']);
Route::get('deletemember/{id}',[MemberController::class, 'delete']);

Route::get('editcontractor/{id}',[ContractorController::class, 'edit']);
Route::post('updatecontractor/{id}',[ContractorController::class, 'update'])->name('updatecontractor');


Route::post('/appointments/{id}/accept', [AppoinmentController::class, 'accept'])->name('appointments.accept');
Route::post('/appointments/{id}/decline', [AppoinmentController::class, 'decline'])->name('appointments.decline');
Route::get('/chat/{id}', [AppoinmentController::class, 'show'])->name('chat.show');
Route::post('/chat/{id}/send', [AppoinmentController::class, 'sendMessage'])->name('chat.send');
