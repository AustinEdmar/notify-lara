<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentFormRequest;
use Illuminate\Http\Request;
use App\Notifications\PostCommented;

class CommentController extends Controller
{
    public function store(StoreCommentFormRequest $request)
    {
          $comments =  $request->user()->comments()->create($request->all());

            $author = $comments->post->user;
            $author->notify( new PostCommented($comments));

          return redirect()
                    ->route('posts.show', $comments->post_id)
                    ->withSuccess('Comentario realizado');
    }
}
