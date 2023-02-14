<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfosController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/getVisitor',[VisitorController::class,'GetVisitorDetails']);
Route::post('/postcontact',[ContactController::class,'PostContactDetails']);
Route::get('/allsiteinfos',[SiteInfosController::class,'Allsiteinfo']);

