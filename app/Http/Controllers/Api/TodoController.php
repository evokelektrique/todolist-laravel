<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TodoController extends Controller {
    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse {
        $todos = Todo::orderBy('id', 'desc')->paginate(10);
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $todoRequest) {
        $todo = new Todo();
        $todo->content = $todoRequest->content;
        $todo->save();

        return response()->json([
            'message' => 'todo created successfully',
            'data' => [
                'todo' => $todo
            ]
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo) {
        //
    }
}
