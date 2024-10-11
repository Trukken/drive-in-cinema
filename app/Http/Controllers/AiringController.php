<?php

namespace App\Http\Controllers;

use App\Http\Requests\AiringRequest;
use App\Models\Airing;
use Illuminate\Http\JsonResponse;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *    name="airing",
 *    description="Airing related endpoints can be tested here."
 * ),
 * @OA\Info(
 *     version="1.0",
 *     title="Airing endpoints to try out.",
 * )
 */

class AiringController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/airing",
     *     tags={"airing"},
     *     summary="Fetch a specific airing.",
     *     @OA\Response(response="200", description="Fetches all available airings.")
     * )
     */
    public function index(): JsonResponse
    {
        $movies = Airing::all();
        return response()->json($movies);
    }

    /**
     * @OA\Post(
     *     tags={"airing"},
     *     path="/api/airing",
     *     summary="Adds a new airing.",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="start",
     *                     type="datetime"
     *                 ),
     *                 @OA\Property(
     *                     property="number_of_parking_spots",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="movie_id",
     *                     type="integer",
     *                     description="An existing movie's id."
     *                 ),
     *                 example={"start": "2024-10-11 20:00:00", "number_of_parking_spots": 300, "movie_id": 1}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="ok",
     *     )
     * )
     */
    public function store(AiringRequest $request): JsonResponse {
        Airing::create($request->all());
        return response()->json('ok', 201);
    }

    /**
     * @OA\Get(
     *     path="/api/airing/{id}",
     *     tags={"airing"},
     *     summary="Fetches a specific available airing.",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Examples(example="result", summary="A result object."),
     *         )
     *     )
     * )
     */
    public function show($id): JsonResponse {
        return response()->json(Airing::find($id));
    }

    /**
     * @OA\Put(
     *     path="/api/airing/{id}",
     *     tags={"airing"},
     *     summary="Updates an airing",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="start",
     *                     type="datetime"
     *                 ),
     *                 @OA\Property(
     *                     property="number_of_parking_spots",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="movie_id",
     *                     type="integer",
     *                     description="An existing movie's id."
     *                 ),
     *                 example={"start": "2024-10-11 20:00:00", "number_of_parking_spots": 300, "movie_id": 1}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     )
     * )
     */
    public function update(AiringRequest $request, $id): JsonResponse {
        $movie = Airing::find($id);
        $movie->update($request->all());
        return response()->json($movie);
    }

    /**
     * @OA\Delete(
     *     path="/api/airing/{id}",
     *     tags={"airing"},
     *     summary="Delete a specific airing.",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *     ),
     *     @OA\Response(response="200", description="Deletes a specific airing.")
     * )
     */
    public function destroy($id): JsonResponse {
        Airing::destroy($id);
        return response()->json("deleted successfully", 204);
    }

}
