<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topic;
use App\Models\author;
use App\Models\course;

class topicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = topic::join('authors', 'topics.author_id', '=', 'authors.id')
        ->join('courses', 'topics.course_id', '=', 'courses.id')
        ->select('topics.*', 'authors.first_name', 'authors.last_name', 'courses.course')
        ->orderBy('topics.id', 'DESC')
        ->get();

        return view('admin.manage.topics', compact('topics'));
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
        return view('admin.add.topic', compact('authors', 'courses'));
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
            'description' => ['required', 'string']
            ]);

            $powerpoint= $request->powerpoint->getClientOriginalName();
            $newPowerpoint= date('Ymd').'_'.time().'_'.$powerpoint;

           $topic = topic::create([
                'author_id'=>$request->input('author'),
                'course_id'=>$request->input('course'),
                'url'=>$request->input('url'),
                'topic'=>$request->input('topic'),
                'powerpoint'=>$newPowerpoint,
                'description'=>$request->input('description'),
                ]);

                if($topic){
                    $request->powerpoint->move(public_path('Powerpoints'), $newPowerpoint);
                    return redirect()->back()->with('addTopicSuccess','Topic has been published successfully');
                }
                else{
                    return redirect()->back()->with('addTopicFail','Topic could not be published');
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
