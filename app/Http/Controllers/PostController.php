<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.list', ['posts' => $posts]);
    }

    /**
     * Display a listing of the resource.
     */
    public function user_index()
    {
        //$posts = Post::latest()->paginate(10);
        //$user_id = auth()->id();
        $posts = Post::all()->where('user_id', Auth::id());
        return view('posts.mylist', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string','max:65535'],
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect(route('posts.list', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::all()->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id=null)
    {
        if($id == null){
            return view('posts.edit');
        }
        $post = Post::findOrFail($id);
        //dd($post->id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string','max:65535'],
        ]);
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect(route('posts.mylist', absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // if (Auth()->id() !== $post->user_id) {
        //     abort(403, '無權刪除此文章');
        // }

        $post = Post::findOrFail($id);
        $post->delete();
        session()->flash('success', '文章已成功刪除！');
        return redirect(route('posts.mylist', absolute: false));
    }
}
