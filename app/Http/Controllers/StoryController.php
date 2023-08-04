<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class StoryController extends Controller
{
    public function getAllStory(): JsonResponse
    {
        return response() -> json(Story::all(), 200);
    }
    public function getStoryById($id): JsonResponse
    {
        $story = Story::find($id);
        if (is_null($story)) {
            return response()->json(['message' => 'Story not found'], 404);
        }
        return response()->json($story);
    }
    public function saveStory(Request $request): JsonResponse
    {
        try {
            $story = Story::create($request->all());
        } catch (Exception $e) {
            return response()->json($e, 400);
        }
        return response()->json($story, 201);
    }
    public function updateStory(Request $request, $id): JsonResponse
    {

        try {
            $story = Story::findOrFail($id);
            if (is_null($story)) {
                return response()->json(['message' => 'Story not found'], 404);
            }
            $story->update($request->all());
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 404);
        } catch (Exception $e) {
            return response()->json($e, 400);
        }
        return response()->json($story, 200);
    }
    public function deleteStory(Request $request, $id): JsonResponse
    {
        try {
            $story = Story::findOrFail($id);
            $story->delete();
        } catch (ModelNotFoundException $e) {
            return response()->json($e, 404);
        } catch (Exception $e) {
            return response()->json($e, 400);
        }
        return response()->json(null, 202);
    }
}
