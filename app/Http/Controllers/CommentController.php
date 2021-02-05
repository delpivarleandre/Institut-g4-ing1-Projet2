<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Product $product)
    {
        request()->validate([
            'content'=>'required|min:5'
        ]);

        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;

        $product->comments()->save($comment);

        return redirect()->route('products.show', $product);
    }


}
