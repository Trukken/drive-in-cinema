<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Js;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *    name="movie",
 *    description="Movie related endpoints can be tested here."
 * ),
 */
class MovieController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/movie",
     *     tags={"movie"},
     *     summary="Fetches all available movies.",
     *     @OA\Response(response="200", description="Fetches all available movies.")
     * )
     */
    public function index(): JsonResponse
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
     * @OA\Post(
     *     tags={"movie"},
     *     path="/api/movie",
     *     summary="Adds a new movie.",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="age_rating",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="language",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="cover_image",
     *                     type="string"
     *                 ),
     *                 example={"title": "Black Hawk Down", "desciprition": "The story of 160 elite U.S. soldiers who dropped into Mogadishu in October 1993 to capture two top lieutenants of a renegade warlord, but found themselves in a desperate battle with a large force of heavily armed Somalis.", "age_rating": "R", "language": "en", "cover_image": "https://m.media-amazon.com/images/M/MV5BYTM3YTQ1M2MtNDEyNC00NzRlLWFmOTgtYjBhNDg2ODNjNTU0XkEyXkFqcGc@._V1_.jpg"}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="ok",
     *     )
     * )
     */
    public function store(MovieRequest $request): JsonResponse {
        Movie::create($request->all());
        return response()->json('ok', 201);
    }


    /**
     * @OA\Get(
     *     path="/api/movie/{id}",
     *     tags={"movie"},
     *     summary="Fetches a specific available movie.",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     )
     * )
     */
    public function show($id): JsonResponse {
        return response()->json(Movie::find($id));
    }
    /**
     * @OA\Put(
     *     path="/api/movie/{id}",
     *     tags={"movie"},
     *     summary="Updates a specific movie.",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="age_rating",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="language",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="cover_image",
     *                     type="string"
     *                 ),
     *                 example={"title": "Black Hawk Down", "desciprition": "The story of 160 elite U.S. soldiers who dropped into Mogadishu in October 1993 to capture two top lieutenants of a renegade warlord, but found themselves in a desperate battle with a large force of heavily armed Somalis.", "age_rating": "R", "language": "en", "cover_image": "https://m.media-amazon.com/images/M/MV5BYTM3YTQ1M2MtNDEyNC00NzRlLWFmOTgtYjBhNDg2ODNjNTU0XkEyXkFqcGc@._V1_.jpg"}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="ok",
     *     )
     * )
     */
    public function update(MovieRequest $request, $id): JsonResponse {
        $movie = Movie::find($id);
        $movie->update($request->all());
        return response()->json($movie);
    }

    /**
     * @OA\Delete(
     *     path="/api/movie/{id}",
     *     tags={"movie"},
     *     summary="Delete a specific movie.",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *     ),
     *     @OA\Response(response="200", description="Deletes a specific movie.")
     * )
     */
    public function destroy($id): JsonResponse {
        Movie::destroy($id);
        return response()->json("deleted successfully", 204);
    }
    /**
     * @OA\Get(
     *     path="/api/movie/{id}/airings",
     *     tags={"movie"},
     *     summary="Fetches all available airings for a specific movie.",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     )
     * )
     */
    public function getRelatedAirings($id): JsonResponse {
        $movie = Movie::find($id);
        if (empty($movie)) {
            return response()->json('movie not found', 400);
        }
        $airings = $movie->airings;
        return response()->json($airings);
    }
}
