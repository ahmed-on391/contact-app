<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

/**
 * @OA\Tag(
 *     name="Businesses",
 *     description="API Endpoints for Businesses"
 * )
 */
class BusinessController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/businesses",
     *      tags={"Businesses"},
     *      summary="Get list of businesses",
     *      description="Returns a list of businesses",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Business"))
     *      )
     * )
     */
    public function index()
    {
        return response()->json(Business::all());
    }

    /**
     * @OA\Post(
     *      path="/api/businesses",
     *      tags={"Businesses"},
     *      summary="Create a new business",
     *      description="Creates a new business",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="name", type="string", example="My Business"),
     *              @OA\Property(property="description", type="string", example="A great business")
     *          )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Business created successfully",
     *          @OA\JsonContent(ref="#/components/schemas/Business")
     *      )
     * )
     */
    public function store(Request $request)
    {
        $business = Business::create($request->all());
        return response()->json($business, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Business::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $business = Business::findOrFail($id);
        $business->update($request->all());
        return response()->json($business);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $business = Business::findOrFail($id);
        $business->delete();
        return response()->json(['message' => 'Business deleted successfully']);
    }
}