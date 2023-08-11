<?php

namespace App\Http\Controllers;

use App\Services\TextService;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function __construct(protected TextService $textService)
    {

    }
    public function index(Request $request) {
        return response()->json($this->textService->getAll());
    }
    public function show($id, Request $request) {
        $response = $this->textService->getById($id);
        if ($response !== null) {
            return response()->json($response);
        }
        return response()->json(['message' => 'Text not found'], 404);
    }
}
