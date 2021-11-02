<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscription;
use App\Models\message;
use App\Mail\confirmSubscription;
use Illuminate\Support\Facades\Mail;

class subscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subscribers=subscription::orderBy('id', 'DESC')->get();
        $messages= message::count();
       $messageNotification= message::orderBy('id', 'DESC')->take(5)->get();
           return view('admin.manage.subscribers', compact('subscribers', 'messageNotification', 'messages'));
     
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
        $email = $request->email;
        $request->validate([
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:subscriptions']
            ]);
         
         $sub= subscription::create([
             'email'=>$request->input('email')
         ]);
         
         if($sub==TRUE){
            //Mail::to($email)->send(new confirmSubscription($email));  
           return redirect()->back()->with('successSubscription', 'You have been subscribed');
         }
         else{
           return redirect()->back()->with('failSubscription', 'Your subscription could not be sent. There might be something wrong!');
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
        $deleteSubscriber = subscription::where('id', '=', $id)->delete();

        if($deleteSubscriber==TRUE){
            return redirect()->back()->with('deleteSubscriberSuccess', 'Subscriber has been deleted');
          }
          else{
            return redirect()->back()->with('deleteSubscriberFail', 'Subscriber could not be deleted. There might be something wrong!');
          }
    }
}
