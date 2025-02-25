<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
            'slug' => 'required|unique:categories',
        ],
        [
            'title.required'=> 'Bạn chưa nhập tên',
            'description.required'=> 'Bạn chưa nhập mô tả',
            'slug.required'=> 'Bạn chưa nhập định danh',
            'slug.unique'=> 'Định danh phải là duy nhất',
        ]
    );
        $category = new Category();
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->slug = Str::slug($data['slug']);
        $category->status = $request->has('status') ? 1 : 0;
        $category->save();

        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
