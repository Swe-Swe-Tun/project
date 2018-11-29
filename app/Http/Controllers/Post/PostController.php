<?php

namespace App\Http\Controllers\Post;

use App\Category;
use App\Http\Requests\ValidatePostRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('post.allpost',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category =Category::all();
        $user=Auth::user();

        return view('post.create',compact('category','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidatePostRequest $request)
    {
        $slug=uniqid();
        $post=Post::create([
            'title'=>$request->get('title'),
            'content'=>$request->get('content'),
            'slug'=>$slug,
            'user_id'=>$request->get('user_id'),
            'cat_id'=>$request->get('category_id')

        ]);

        if($post->save()){
            return redirect()->to('post/create')->with('status','Success Insert Post Data');
        }else{
            return redirect()->to('post/create')->with('status','Fail Insert Post Data');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $post=Post::find($id);
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $category =Category::all();
        return view('post.edit',compact('post','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidatePostRequest $request, $id)
    {
        $post=Post::find($id);
        $post->title=$request->get('title');
        $post->content=$request->get('content');
        $post->cat_id=$request->get('category_id');
        if($post->update()){
            return redirect()->to("post/".$post->id."/edit")->with('status','Update Post Success');
        }else{
            return redirect()->to("post/".$post->id."/edit")->with('stuatus','Update Post Fail');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
