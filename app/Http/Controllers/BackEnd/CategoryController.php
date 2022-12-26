<?php

namespace App\Http\Controllers\BackEnd;

use App\Helpers\InsertLinks;
use App\Http\Controllers\Controller;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Links;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view("admin.category.index", compact('category'));
//        return Category::all()->id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//       public function store()
    public function store(Request $request)
    {
        $validated = $request->validate([
            'theNameEn' => 'required',
        ]);
        $category = new Category;
        $category->theNameEn = $request->theNameEn;
//        $category->theNameTr = $request->theNameTr;
        $category->save();
        $url = permalink($request->theNameEn);
        $page = "category";
        $id = $category->id;
        InsertLinks::link($id, $url, $page);
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $param = $request->get('id');
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Http\Requests\CategoryRequest $request
     * @return Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
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
        $validated = $request->validate([
            'theNameEn' => 'required',
        ]);
        $category = Category::find($id);
        $category->theNameEn = $request->input('theNameEn');
//        $category->theNameTr = $request->input('theNameTr');
        $category->update();
        $url = permalink($request->theNameEn);
        $page = "category";
        InsertLinks::update($id, $url, $page);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */


    public function destroy($id=0,Request $request)
    {
       $param = $request->get('id');
        $category=Category::find($param);
        $page = "category";
        InsertLinks::delete($param,$page);
        $category->delete();
         return  1;
    }
}
