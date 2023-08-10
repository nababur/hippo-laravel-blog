<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('frontend.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
                )->paginate(9)
           

        ]);
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
    
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('frontend.show', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
    




}
