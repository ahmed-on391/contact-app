<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BusinessController;

// هنا تضع جميع مسارات API الخاصة بتطبيقك
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API Documentation",
 *      description="Swagger OpenAPI documentation for Laravel API",
 *      @OA\Contact(
 *          email="your_email@example.com"
 *      )
 * )
 */

/**
 * @OA\Get(
 *      path="/api/test",
 *      tags={"Test"},
 *      summary="Simple test route",
 *      description="Returns a simple JSON response",
 *      @OA\Response(
 *          response=200,
 *          description="Success",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="message", type="string", example="API is working!")
 *          )
 *      )
 * )
 */
Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('businesses', BusinessController::class);
});