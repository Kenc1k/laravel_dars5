<?php

use App\Http\Controllers\FakultyController;
use App\Http\Controllers\GuruxController;
use App\Http\Controllers\KursController;
use App\Http\Controllers\ManzilController;
use App\Http\Controllers\TalabaController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\YunalishController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [UniversityController::class, 'index']);


Route::get('/faculty', [FakultyController::class, 'index']);
// Route::get('/faculty_create' , [FakultyController::class , 'create']);
// Route::get('/faculty' , [FakultyController::class , 'store']);


Route::get('/kurs' , [KursController::class, 'index']);


Route::get('/yunalish' , [YunalishController::class , 'index']);

Route::get('/gurux' , [GuruxController::class , 'index']);

Route::get('/manzil' , [ManzilController::class , 'index']);

Route::get('/talaba' , [TalabaController::class , 'index']);
