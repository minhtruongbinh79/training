<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public static function store(Request $request, $post_id)
    {
        $params = $request->all();
        $request->validate([
            'comment' => 'required',
        ]);
        // dd($params, $post_id);
        $comment = Comment::create([
            'post_id' => $post_id,
            'comment_content' => $params['comment']
        ]);
    }
}
