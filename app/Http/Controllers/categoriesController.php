<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Posts;

class categoriesController extends Controller
{
    //todas las categorias
    public function index()
    {
        $categories = Categories::all();
        return response()->json(['categorias' => $categories]);
    }
    //categorias y posts
    public function CategoryPost($id)
    {
      $category = Categories::findOrfail($id);
      $posts = Posts::where('category_id', $category->id)
      ->latest('id')
      ->get();
      return response()->json([
          'categoria' => $category,
          'articulo'  => $posts
      ]);
    }
    //posts con categorias
    public function posts(){
        $posts = Posts::all()->take(7);
        return response()->json(['Posts' => $posts]);
    }

    //por id de posts
    public function postsBody($id)
    {
        $posts = Posts::findOrfail($id);
        return response()->json(['Posts' => $posts]);
    }
    //examen
    public function postandcategories()
    {
      $posts = Categories::with('posts')->paginate(3);
      return response()->json($posts);
    }
}
