<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;

class authorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = author::orderBy('first_name', 'ASC')->get();
        return view('admin.manage.authors', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.add.author');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:authors'],
            'phone' => ['required', 'string', 'max:10', 'unique:authors']
            ]);

           $author = author::create([
                'first_name'=>$request->input('first_name'),
                'last_name'=>$request->input('last_name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone')
                ]);

                if($author){
                    return redirect()->back()->with('authorSuccess','Author has been added successfully');
                }
                else{
                    return redirect()->back()->with('authorFail','Author could not be added');
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
        $author = author::findOrFail($id);
        return view('admin.edit.author', compact('author'));
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
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            ]);

           $author = author::where('id', $id)->update([
                'first_name'=>$request->input('first_name'),
                'last_name'=>$request->input('last_name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone')
                ]);

                if($author){
                    return redirect()->back()->with('updateAuthorSuccess','Author has been updated successfully');
                }
                else{
                    return redirect()->back()->with('updateAuthorFail','Author could not be added');
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
        $author = author::where('id',$id)->delete();

        if($author){
            return redirect()->back()->with('deleteAuthorSuccess', 'Author was deleted successfully');
        }
        else{
            return redirect()->back()->with('deleteAuthorFail', 'Author could not be deleted');
        }
    }
}
