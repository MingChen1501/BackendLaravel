<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(protected PageService $pageService)
    {
    }
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->pageService->getAll());
    }
    public function show($id): \Illuminate\Http\JsonResponse
    {
        $response = $this->pageService->getById($id);
        if ($response !== null) {
            return response()->json($response);
        } else {
            return response()->json(['message' => 'Page not found'], 404);
        }
    }
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $user = $this->pageService->create($request->all());
        } catch (\Exception $e) {
            return response()->json("", 400);
        }
        return response()->json($user, 201);
    }
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $response = $this->pageService->getById($id);
        if ($response === null) {
            return response()->json(['message' => 'Page not found'], 404);
        } else {
            try {
                $user = $this->pageService->update($id, $request->all());
            } catch (\Exception $e) {
                return response()->json("", 400);
            }
            return response()->json("success", 202);
        }
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        try {
            $response = $this->pageService->delete($id);
            if ($response) {
                return response()->json("success", 202);
            } else {
                return response()->json(['message' => 'Page not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json("", 400);
        }
    }
}
