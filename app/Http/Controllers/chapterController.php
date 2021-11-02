<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\chapter;

class chapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $chapters = chapter::join('courses', 'chapters.course_id', '=', 'courses.id')
        ->select('chapters.*', 'courses.course')
        ->orderBy('chapters.chapter', 'DESC')
        ->get();

        return view('admin.manage.chapters', compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = course::orderBy('course', 'ASC')->get();
        return view('admin.add.chapter', compact('courses'));
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
            'course' => ['required', 'string', 'max:255'],
            'chapter' => ['required', 'string', 'max:255'],
            ]);

           $chapter = chapter::create([
                'course_id'=>$request->input('course'),
                'chapter'=>$request->input('chapter'),
                ]);

                if($chapter){
                    return redirect()->back()->with('addChapterSuccess','Chapter has been added successfully');
                }
                else{
                    return redirect()->back()->with('addChapterFail','Chapter could not be added');
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
