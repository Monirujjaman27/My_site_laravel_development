<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Backend\CategoryController;
use App\Http\Controllers\Api\Backend\SliderController;
use App\Http\Controllers\Api\Backend\SocialController;
use App\Http\Controllers\Api\Backend\SkillController;
use App\Http\Controllers\Api\Backend\TestimonialController;
use App\Http\Controllers\Api\Backend\AboutsController;
use App\Http\Controllers\Api\Backend\ResumeControllers;
use App\Http\Controllers\Api\Backend\PortfolioController;
use App\Http\Controllers\Api\Backend\SiteDefaultController;
use App\Http\Controllers\Api\Backend\LogoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Category Resource Routes
route::apiResource('category', CategoryController::class);

// Slider Resource Routes
route::apiResource('slider', SliderController::class);

// Slider Resource Routes
route::apiResource('social', SocialController::class);

// Testimonial Resource Routes
route::apiResource('testimonial', TestimonialController::class);

// Skill Resource Routes
route::apiResource('skill', SkillController::class);

// About Resource Routes
route::apiResource('about', AboutsController::class);

// About Resource Routes
route::apiResource('resume', ResumeControllers::class);

// Portfolio Resource Routes
route::apiResource('portfolio', PortfolioController::class);

// SiteDefault Resource Routes
route::apiResource('siteDefault', SiteDefaultController::class);

// Logo Resource Routes
route::apiResource('logo', LogoController::class);