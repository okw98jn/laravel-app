<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostStoreRequest;

class PostController extends Controller
{

    private $post_model;
    public function __construct(Post $post_model)
    {
        $this->post_model = $post_model;
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostStoreRequest $request)
    {
        $this->post_model->createPost($request);
        return redirect(route('user.show', Auth::id()))->with('flash_success', '投稿が完了しました');
    }
}
