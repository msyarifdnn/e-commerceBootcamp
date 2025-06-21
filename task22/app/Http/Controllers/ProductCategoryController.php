<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::withCount('product')->paginate(10);

        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $nameCheck = ProductCategory::where('name', $request->name)->exists();

        if ( $nameCheck ) {
            return redirect()->back()->withErrors(['Nama kategori sudah ada!']);
        } else {
            $category = new ProductCategory;
            $category->name = $request->name;
            $category->save();

            return redirect()->route('categories.index');
        }
        
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
        $category = ProductCategory::findOrFail($id);

        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $nameCheck = ProductCategory::where('name', $request->name)->where('id', '!=', $id)->exists();

        if ( $nameCheck ) {
            return redirect()->back()->withErrors(['Nama kategori sudah ada!!!']);
        } else {
            $category = ProductCategory::findOrFail($id);
            
            $category->name = $request->name;
            $category->save();

            return redirect()->route('categories.index')->with('success', 'Kategori berhasil diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with(['Kategori berhasil dihapus!']);
    }

}
