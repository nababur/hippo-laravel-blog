<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){
        return view('admin.category.index', [
            'categories'=> Category::paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       
        return view('admin.category.create', [
        
          
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

       $attributes =   request()->validate([
            'name'=> 'required|unique:categories,name',
            'slug'=> 'required|unique:categories,slug',
           
        ]);

   
        Category::create($attributes);

        return back()->with('success', 'Category created Successfully !');

    }
    public function edit(Category $category){
        return view('admin.category.edit', ['category'=> $category]);
    }

    public function update(Category $category){

        $attributes =   request()->validate([
            'name'=> 'required|unique:categories,name',
            'slug'=> 'required|unique:categories,slug',
           
        ]);

        $category->update($attributes);

        return back()->with('success', 'Category updated Successfully !');


    }

    public function destroy(Category $category){
        $category->delete();

        return back()->with('success', 'Category deleted Successfully !');
    }

}
