<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;
use App\Models\course;
use App\Models\chapter; 
use App\Models\read;

class noteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $read = read::join('authors', 'reads.author_id', '=', 'authors.id')
        ->join('chapters', 'reads.chapter_id', '=', 'chapters.id')
        ->join('courses', 'chapters.course_id', '=', 'courses.id')
        ->select('reads.*', 'authors.first_name', 'authors.last_name', 'chapters.chapter', 'courses.course')
        ->orderBy('reads.id', 'DESC')
        ->get();

        return view('admin.manage.notes', compact('read'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = author::orderBy('first_name', 'ASC')->get();
        $courses = course::orderBy('course', 'ASC')->get();

        $chapters = chapter::join('courses', 'chapters.course_id', '=', 'courses.id')
        ->select('chapters.*', 'courses.course')
        ->orderBy('chapters.chapter', 'DESC')
        ->get();

        return view('admin.add.note', compact('authors', 'courses', 'chapters'));
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
            'chapter' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'attached_file' => ['required'],
            'description' => ['required']
            ]);

            $attached_file= $request->attached_file->getClientOriginalName();
            $newAttached_file= date('Ymd').'_'.time().'_'.$attached_file;

           $read = read::create([
                'author_id'=>$request->input('author'),
                'chapter_id'=>$request->input('chapter'),
                'video_url'=>$request->input('url'),
                'attached_file'=>$newAttached_file,
                'description'=>$request->input('description'),
                ]);

                if($read){
                    $request->attached_file->move(public_path('Uploaded Files'), $newAttached_file);
                    return redirect()->back()->with('addNoteSuccess','Note has been published successfully');
                }
                else{
                    return redirect()->back()->with('addNoteFail','Note could not be published');
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
        //
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
        //
    }
}
