<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CatValidateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatValidateRequest $request)
    {
        //return $request->all();
        $category = Category::create([
            "name"=>$request->get('name')
        ]);

        if($category->save()){
            return redirect()->to('admin/category/create')->with('status','Success Category Insert');

        }else{
            return redirect()->to('admin/category/create')->with('status','Fail Caategory Insert');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $category=Category::all();
        return view('category.all',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =Category::find($id);
        return view('category.edit',compact('category'));
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
        $category=Category::whereId($id)->FirstOrFail();
        $category->name=$request->get('name');
        if($category->update()){
            return redirect()->to('admin/category/'.$category->id.'/edit')->with('status','Success Category Update');
        }else{
            return "Fail";
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
        //
    }

}
