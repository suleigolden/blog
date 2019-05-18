<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Comment;
use Auth;
use DB;
use Validator;
Use Session;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Blog::create([
        //     'user_id' => $request->user_id,
        //     'name' => $request->name,
        //     'category' => $request->category,
        //     'description' => $request->description,
        //     'image' => $request->image
        // ]);
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1999',
            'name' => 'required|string|max:191',
            'category' => 'required|string|max:50',
            'description' => 'required|string'
        ]);

         $imageName = time().'.'.request()->image->getClientOriginalExtension();

        if(request()->image->move(public_path('blog_images/'), $imageName)){
                $bloginfo =  new Blog();
                $bloginfo->user_id = Auth::user()->id;
                $bloginfo->name =  $request->name;
                $bloginfo->category = $request->category;
                $bloginfo->description = $request->description;
                $bloginfo->image = $imageName;
                $bloginfo->save();
                
                Session::flash('success', "Blog save successful");
                return redirect('/home');

        }else{
            Session::flash('error', "Error saving Blog please try again");
            return redirect('/createnewblog');
        }
       
    }
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request)
    {
        $comment = Comment::create([
            'user_id' => $request->user_id,
            'comments_id' => $request->comments_id,
            'description' => $request->description
        ]);
        return response()->json($comment, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
