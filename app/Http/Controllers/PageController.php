<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class PageController extends Controller
{
    public function __construct(protected PageService $pageService)
    {
    }
    public function index(Request $request): JsonResponse
    {
        $queryParams = $request->query();
        if ($queryParams) {
            return response()->json($this->pageService->getAllWithTexts($queryParams));
        }
        return response()->json($this->pageService->getAll());
    }
    public function show($id, Request $request): JsonResponse
    {
        $queryParams = $request->query();
        if ($queryParams) {
            $response = $this->pageService->getByIdWithParams($id, $queryParams);
            if ($response !== null) {
                return response()->json($response);
            } else {
                return response()->json(['message' => 'Page not found'], 404);
            }
        } else {
            $response = $this->pageService->getById($id);
            if ($response !== null) {
                return response()->json($response);
            } else {
                return response()->json(['message' => 'Page not found'], 404);
            }
        }
    }
    public function store(Request $request): JsonResponse
    {
        try {
            $user = $this->pageService->create($request->all());
        } catch (\Exception $e) {
            return response()->json("", 400);
        }
        return response()->json($user, 201);
    }
    public function update(Request $request, $id): JsonResponse
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
    public function destroy($id): JsonResponse
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
