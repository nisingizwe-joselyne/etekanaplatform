<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = message::orderBy('id', 'DESC')->get();
        $messageCounter = message::count();
        return view('admin.manage.inbox', compact('messages', 'messageCounter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            ]);

           $message = message::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'subject'=>$request->input('subject'),
                'message'=>$request->input('message'),
                ]);

                if($message){
                    return redirect()->back()->with('sendMessageSuccess','Your message was sent successfully');
                }
                else{
                    return redirect()->back()->with('sendMessageFail','Your message could not be sent');
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
        $message = message::findOrFail($id);
        $messageCounter = message::count();
        return view('admin.manage.read-message', compact('message', 'messageCounter'));
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
