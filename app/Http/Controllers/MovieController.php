<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Movie::query();

        if ($request->has('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        $movies = $query->orderBy('created_at', 'desc')->paginate(10);

        return response()->json($movies);
    }

    public function show($id): JsonResponse
    {
        $movie = Movie::with(['broadcasts' => function ($query) {
            $query->where('broadcasts_at', '>', now())->orderBy('broadcasts_at');
        }])->findOrFail($id);

        return response()->json($movie);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'rating' => 'required|numeric|min:0|max:10',
            'age_restriction' => 'nullable|string|size:2',
            'description' => 'required|string|max:500',
            'premieres_at' => 'required|date_format:Y-m-d H:i:s',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $movie = Movie::create($request->all());

        return response()->json($movie, 201);
    }

    public function addBroadcast(Request $request, $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'channel_nr' => 'required|integer|min:1',
            'broadcasts_at' => 'required|date_format:Y-m-d H:i:s',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $movie = Movie::findOrFail($id);

        $broadcast = new Broadcast($request->all());
        $movie->broadcasts()->save($broadcast);

        return response()->json($broadcast, 201);
    }

    public function destroy($id): JsonResponse
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json(null, 204);
    }
}
