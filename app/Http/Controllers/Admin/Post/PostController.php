<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.post.index', ['data' => Post::all()]);
    }

    public function create()
    {
        return view('admin.post.create', ['categories' => Category::all()]);
    }

    public function store(StoreRequest $request)
    {
        if ($request->isMethod('post')) {
            $post = new Post;
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->preview_img = Storage::disk('public')->put('/images', $request->file('preview_img'));
            $post->main_img = Storage::disk('public')->put('/images', $request->file('main_img'));
            $post->category_id = $request->input('category_id');
            $post->author_id = $request->input('author_id');

            $post->save();
            return redirect()->route('admin_post_index');
        }
    }

    public function show(Post $id)
    {
        return view('admin.post.show', ['data' => $id]);
    }

    public function edit(Post $id)
    {
        return view('admin.post.edit', ['data' => $id, 'categories' => Category::all()]);
    }

    public function update($id, UpdateRequest $request)
    {
        $data = $request->validated();
//
//        $data['preview_img'] = Storage::disk('public')->put('/images', $data['preview_img']);
//        $data['main_img'] = Storage::disk('public')->put('/images', $data['main_img']);
//        dd($data);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');

        $post->preview_img = Storage::disk('public')->put('/images', $data['preview_img']);
        $post->main_img = Storage::disk('public')->put('/images', $data['main_img']);
        $post->author_id = $request->input('author_id');
        $post->save();
        return view('admin.post.show', ['data' => $post]);
    }

    public function delete(Post $id)
    {
        Post::find($id)->first()->delete();
        return redirect()->route('admin_post_index');
    }
}
