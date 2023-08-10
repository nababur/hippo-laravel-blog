<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.posts.index', [
            'posts'=> Post::paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       
        return view('admin.posts.create', [
        
          
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

     

       $attributes =  $this->validatePost();

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return back()->with('success', 'Post created Successfully !');

    }

    public function edit(Post $post){
        return view('admin.posts.edit', ['post'=> $post]);
    }


    public function update(Post $post){

        $attributes =  $this->validatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post updated Successfully !');


    }

    protected function validatePost(?Post $post = null){

        $post ??= new Post();

        return  request()->validate([
            'title'=> 'required',
            'thumbnail'=> $post->exists ? ['image'] : ['required', 'image'],
            'slug'=> ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt'=> 'required',
            'body'=> 'required',
            'category_id'=> ['required', Rule::exists('categories', 'id')],
        ]);

        
    }
    


    public function destroy(Post $post){
        $post->delete();

        return back()->with('success', 'Post deleted Successfully !');
    }

}
