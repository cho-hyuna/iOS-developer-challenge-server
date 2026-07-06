<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNoteRequest;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function store(StoreNoteRequest $request): JsonResponse
    {
        return response()->json([
            'message' =>'Validation passed!',
            'data' => $request->validated(),
            ], 201);
    }
}
