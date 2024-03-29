<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\chapter;
use App\Models\read;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::orderBy('course', 'ASC')->get();
        return view('admin.manage.courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.course');
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
            'requirements' => ['required', 'string', 'max:1000'],
            'intro' => ['required', 'string', 'max:1000'],
            ]);

           $course = course::create([
                'course'=>$request->input('course'),
                'requirements'=>$request->input('requirements'),
                'intro'=>$request->input('intro')
                ]);

                if($course){
                    return redirect()->back()->with('addCourseSuccess','Course has been added successfully');
                }
                else{
                    return redirect()->back()->with('addCourseFail','Course could not be added');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

        $chapters = chapter::join('courses', 'chapters.course_id', '=', 'courses.id')
        ->where('courses.id', '=', $id)
        ->select('chapters.*', 'courses.course')
        ->get();

        $request->session()->put('Chapters', $chapters);

      
        $chaptersCounter = chapter::join('courses', 'chapters.course_id', '=', 'courses.id')
        ->where('courses.id', '=', $id)
        ->count();

        $courses = course::all();

        $chosenCourse = course::findOrFail($id);
        $request->session()->put('selectedCourse', $chosenCourse);
        
        return view('course-details', compact('chapters', 'chaptersCounter', 'courses', 'chosenCourse'));
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
