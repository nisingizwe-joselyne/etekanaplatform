<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
use App\Models\author;
use App\Models\post;
use App\Models\category;

class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = video::join('authors', 'videos.author_id', '=', 'authors.id')
        ->join('categories', 'videos.category_id', '=', 'categories.id')
        ->select('videos.*', 'authors.first_name', 'authors.last_name', 'categories.category')
        ->orderBy('videos.id', 'DESC')
        ->get();

        return view('admin.manage.videos', compact('videos'));
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
        return view('admin.add.video', compact('authors', 'categories'));
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
            'category' => ['required', 'string', 'max:255'],
            'video' => ['required', 'max:255'],
            'title' => ['required', 'string', 'max:255']
            ]);

            $video= $request->video->getClientOriginalName();
            $newVideo= date('Ymd').'_'.time().'_'.$video;

           $post = video::create([
                'author_id'=>$request->input('author'),
                'category_id'=>$request->input('category'),
                'video'=>$newVideo,
                'title'=>$request->input('title'),
                'post'=>$request->input('post'),
                ]);

                if($post){
                    $request->video->move(public_path('videos'), $newVideo);
                    return redirect()->back()->with('addVideoSuccess','Video has been published successfully');
                }
                else{
                    return redirect()->back()->with('addVideoFail','Video could not be published');
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
        $videos = video::join('authors', 'videos.author_id', '=', 'authors.id')
        ->join('categories', 'videos.category_id', '=', 'categories.id')
        ->select('videos.*', 'authors.first_name', 'authors.last_name', 'categories.category')
        ->orderBy('videos.id', 'DESC')
        ->take(5)->get();

        $video = video::join('authors', 'videos.author_id', '=', 'authors.id')
        ->join('categories', 'videos.category_id', '=', 'categories.id')
        ->where('videos.id', '=', $id)
        ->select('videos.*', 'authors.first_name', 'authors.last_name', 'categories.category')
        ->get();

        $category_type = category::findOrFail($id);

        $categories = category::all();

        $category = post::join('authors', 'posts.author_id', '=', 'authors.id')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->where('categories.id', '=', $id)
        ->select('posts.*', 'authors.first_name', 'authors.last_name', 'categories.category')
        ->orderBy('posts.id', 'DESC')
        ->get();

        return view('video', compact('video', 'categories', 'category', 'category_type', 'videos'));
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
        $video = video::findOrFail($id);
        return view('admin.edit.video', compact('video', 'authors', 'categories'));
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
        $video = video::where('id',$id)->delete();

        if($video){
            return redirect()->back()->with('deleteVideoSuccess', 'Video was deleted successfully');
        }
        else{
            return redirect()->back()->with('deleteVideoFail', 'Video could not be deleted');
        }
    }
}
