<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\author;
use App\Models\category;
class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::join('authors', 'posts.author_id', '=', 'authors.id')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->select('posts.*', 'authors.first_name', 'authors.last_name', 'categories.category')
        ->orderBy('posts.id', 'DESC')
        ->get();

        return view('admin.manage.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = author::orderBy('first_name', 'ASC')->get();
        $categories = category::orderBy('category', 'ASC')->get();
        return view('admin.add.post', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => ['required', 'string', 'max:255'],
            'course' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'topic' => ['required', 'string', 'max:255'],
            'post' => ['required', 'string']
            ]);

           $post = post::create([
                'author_id'=>$request->input('author'),
                'category_id'=>$request->input('course'),
                'photo'=>$request->input('url'),
                'title'=>$request->input('topic'),
                'post'=>$request->input('post'),
                ]);

                if($post){
                    return redirect()->back()->with('addPostSuccess','Post has been published successfully');
                }
                else{
                    return redirect()->back()->with('addPostFail','Post could not be published');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors = author::orderBy('first_name', 'ASC')->get();
        $categories = category::orderBy('category', 'ASC')->get();

        $post = post::findOrFail($id);
        return view('admin.edit.post', compact('post', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = post::where('id',$id)->delete();

        if($post){
            return redirect()->back()->with('deletePostSuccess', 'Post was deleted successfully');
        }
        else{
            return redirect()->back()->with('deletePostFail', 'Post could not be deleted');
        }
    }
}
