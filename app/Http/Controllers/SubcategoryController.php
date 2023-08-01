<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\subcategorystorerequest;
use App\Http\Requests\subcategoryUpdateResquest;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $subcate_data = subcategory::with(['category_rel'])->get(['id','name','categorie_id','created_at']);

    //    return $subcate_data;

       return view('subcategory.index', compact('subcate_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::get(['id', 'name']);

        // return $categories;

        return view('subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(subcategorystorerequest $request)
    {
        // dd(
        //     $request->all()
        // );

        subcategory::create([

            'categorie_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active'),

        ]);

        Session::flash('status', "Succefully upload your data!");

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //indivisul data show
        $subCategory = subcategory::find($id);
        return $subCategory;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $subcate_edit = subcategory::find($id);
        $categories = category::get(['id', 'name']);

        return view('subcategory.edit', compact('categories','subcate_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(subcategoryUpdateResquest $request, string $id)
    {
        // dd($request->all());

        $subCategory = subcategory::find($id);

        $subCategory->update([

            'categorie_id' => $request->category_id,
            'name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'is_active' => $request->filled('is_active'),

        ]);

        Session::flash('status', "Succefully update your data!");

        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        subcategory::find($id)->delete();
        // Toaster::success("delete successfully");
        return back();
    }
}
