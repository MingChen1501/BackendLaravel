<?php

namespace App\Http\Controllers;

use App\Services\AudioService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function __construct(protected AudioService $audioService)
    {
    }
    public function index(Request $request): JsonResponse
    {
        $queryParams = $request->query();
        if ($queryParams) {
            return response()->json($this->audioService->getAllWithParams($queryParams));
        }
        return response()->json($this->audioService->getAll());
    }
    public function show($id): JsonResponse
    {
        $response = $this->audioService->getById($id);
        if ($response !== null) {
            return response()->json($response);
        }
        return response()->json(['message' => 'Audio not found'], 404);
    }
}
