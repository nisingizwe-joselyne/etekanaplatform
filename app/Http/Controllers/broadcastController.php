<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\broadcast;
use App\Models\author;
use App\Models\subscription;
use App\Mail\broadcastMail;
use Illuminate\Support\Facades\Mail;

class broadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $broadcasts = broadcast::join('authors', 'broadcasts.author_id', '=', 'authors.id')
        ->select('broadcasts.*', 'authors.first_name', 'authors.last_name')
        ->orderBy('broadcasts.id', 'DESC')
        ->get();

        return view('admin.manage.broadcasts', compact('broadcasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $authors = author::orderBy('first_name', 'ASC')->get();
      return view('admin.add.broadcast', compact('authors'));
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
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string']
            ]);

           $broadcast = broadcast::create([
                'author_id'=>$request->input('author'),
                'subject'=>$request->input('subject'),
                'message'=>$request->input('message'),
                ]);

                if($broadcast){
                 $emails = subscription::all();
                 foreach($emails as $email)
                 {
                    Mail::to($email->email)->send(new broadcastMail($emails->id, $email->email, $request->subject, $request->message)); 
                 }
                
                    return redirect()->back()->with('broadcastSuccess','Message has been broadcast successfully');
                }
                else{
                    return redirect()->back()->with('broadcastFail','Message could not broadcast');
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
        $broadcast = broadcast::where('id',$id)->delete();

        if($broadcast){
            return redirect()->back()->with('deleteBroadcastSuccess', 'Broadcast was deleted successfully');
        }
        else{
            return redirect()->back()->with('deleteBroadcastFail', 'Broadcast could not be deleted');
        }
    }
}
