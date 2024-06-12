<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Illuminate\Support\Str;
use DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::all();
        return view('admin.product-categories.index', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $request['slug'] = Str::slug($request['name']);
            $productCategory = ProductCategory::create($request->all());
            DB::commit();
            return redirect()->route('admin.product-categories.index');
        } catch (\Exeption $th) {
            DB::rollback();
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        $products = $productCategory->products; // Fetch the products related to the category
        return view('admin.product-categories.show', compact('productCategory', 'products')); // Pass the products to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('admin.product-categories.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        try {
            DB::beginTransaction();
            $request['slug'] = Str::slug($request['name']);
            $productCategory->update($request->all());
            DB::commit();
            return redirect()->route('admin.product-categories.index');
        } catch (\Exeption $th) {
            DB::rollback();
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        try {
            DB::beginTransaction();
            $productCategory->delete();
            DB::commit();
            return redirect()->route('admin.product-categories.index');
        } catch (\Exeption $th) {
            DB::rollback();
            return redirect()->route('admin.product-categories.index')->withErrors($th->getMessage())->withInput();
        }
    }
}
