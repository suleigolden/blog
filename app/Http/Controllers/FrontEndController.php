<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Comment;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(6);
        return view('welcome',compact('blogs'));
    }

    
    public function showBlogDetails($id)
    {
        $blogs = Blog::findOrFail($id);

        return view('blogdetails',compact('blogs'));
        //return response()->json($blog, 201);
    }

    public function showBlogCategory($category)
    {
        $blogs = Blog::where('category',$category)->paginate(6);
        return view('welcome',compact('blogs'));
    }

}
