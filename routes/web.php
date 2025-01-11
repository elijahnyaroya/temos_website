<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\parent\parentMainController;
use App\Http\Controllers\teacher\teacherController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\classProcessorController;
use App\Http\Controllers\admin\paymentController;
use App\Http\Controllers\teacher\classDetailsProcessor;
use App\Http\Controllers\website\websiteController;
use App\Http\Controllers\educationSystemController;
use App\Http\Controllers\mpesaPaymentController;
use App\Http\Controllers\zoomController;
use App\Http\Controllers\teacher\oldVideoClassess;
use App\Http\Controllers\selfLearningVideo;
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


Route::get("/",[websiteController::class,'mainHomepage']);
Route::get("/aboutus",[websiteController::class,'aboutUsPage']);
Route::get("/contactus",[websiteController::class,'contactUsPage']);
Route::get("/login_register",[websiteController::class,'loginRegister']);
Route::get("/all_courses",[websiteController::class,'allCourses']);
Route::get("/faq",[websiteController::class,'faq']);
#Route::get("/blog",[websiteController::class,'blog']);
#Route::get("/blog_detail/{id}",[websiteController::class,'blogDetail']);
Route::get("/termsandcondition",[websiteController::class,'termsandcondition']);
Route::get("/policy",[websiteController::class,'policies']);
