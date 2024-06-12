<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Store method called');
        Log::info('Request data:', $request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Log::info('Validation passed');

        try {
            Comment::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ]);
            Log::info('Comment created');
        } catch (\Exception $e) {
            Log::error('Error creating comment: ' . $e->getMessage());
            return back()->with('error', 'Failed to post comment.');
        }

        return back()->with('success', 'Comment posted successfully!');

        $comments = Comment::all();
        return view('home', ['comments' => $comments]);
    }
}
