<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::orderBy('category', 'ASC')->get();
        return view('admin.manage.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.category');
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
            'category' => ['required', 'string', 'max:255'],
            ]);

           $author = category::create([
                'category'=>$request->input('category')
                ]);

                if($author){
                    return redirect()->back()->with('addCategorySuccess','Category has been added successfully');
                }
                else{
                    return redirect()->back()->with('addCategoryFail','Category could not be added');
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
        $category = category::findOrFail($id);
        return view('admin.edit.category', compact('category'));
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
            'category' => ['required', 'string', 'max:255'],
            ]);

           $author = category::where('id', $id)->update([
                'category'=>$request->input('category')
                ]);

                if($author){
                    return redirect()->back()->with('updateCategorySuccess','Category has been updated successfully');
                }
                else{
                    return redirect()->back()->with('updateCategoryFail','Category could not be updated');
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
        $category = category::where('id',$id)->delete();

        if($category){
            return redirect()->back()->with('deleteCategorySuccess', 'Category was deleted successfully');
        }
        else{
            return redirect()->back()->with('deleteCategoryFail', 'Category could not be deleted');
        }

        
    }
}
