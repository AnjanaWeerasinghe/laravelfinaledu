<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => auth()->user()->id,
            'tital' => $request->tital, // Fixed the spelling from 'tital' to 'title'
            'description' => $request->description, // Fixed spelling from 'description' to 'description'
        ]);

        return response()->json(['message' => 'Post created successfully!'], 201);
    }
}
