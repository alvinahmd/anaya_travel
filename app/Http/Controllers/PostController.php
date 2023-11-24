<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use Illuminate\view\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        //get Posts
        $posts = post::latest()->paginate(10);
        //render view with post
        return view('post.index', compact('posts'));
    }
    public function category(): view
    {
        $posts = post::latest()->paginate(50);
        return view('category.category', compact('posts'));
    }
    public function user(): View
    {
        //get Posts
        $posts = post::latest()->paginate(8);
        //render view with post
        return view('user.home', compact('posts'));
    }
    public function create(): View
    {
        return view('post.create');
    }
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('post.show', compact('post'));
    }
    public function destroy(Post $post)
    {
        // delete post image
        Storage::delete('public/posts/' . $post->image);

        // delete post data by id
        $post->delete();

        // render view
        return back();
    }
    public function edit(Post $post)
    {
        // render view
        return view('post.edit', [
            'post' => $post
        ]);
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // dd($request->all());
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'category' => 'required|min:5'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category
        ]);

        //redirect to index
        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function update(Post $post, Request $request)
    {
        // validate request
        $this->validate($request, [
            'image'     => 'nullable|image|mimes:jpeg,jpg,png',
            'title'     => 'required|min:5',
            'content'   => 'required|min:5',
            'category' => 'required|min:5'
        ]);

        // update post data by id
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category
        ]);

        // check if user upload new image
        if ($request->file('image')) {
            // upload image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            // delete old image
            Storage::delete('public/posts/' . $post->image);

            // update post data image
            $post->update([
                'image' => $image->hashName(),
            ]);
        }

        // render view
        return redirect(route('post.index'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('title', 'like', "%$query%")->paginate(10);
        return view('post.index', ['posts' => $posts]);
    }
    public function cari(Request $request)
    {
        $cari = $request->input('cari');

        $posts = Post::where('title', 'like', "%$cari%")->get();
        return view('user.home', compact('posts'));
    }
    public function caricategory(Request $request)
    {
        $caricategory = $request->input('category');

        $posts = Post::where('category', 'like', "%$caricategory%")->get();
        return view('category.category', compact('posts'));
    }
}
