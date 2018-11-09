<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
    	$comment = new Comment(array(
    		'post_id' => $request->get('post_id'),l
    		'content' => $request->get('content')
    		));
    	$comment->save();

    	return redirect()->route('tickets.index')->with('status', 'Your comment has been created!');
    }

     public function show(Ticket $id)
    {
        return view ('admin.ticket.show');
    }
}
