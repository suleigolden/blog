<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'blog_id' => $request->blog_id,
            'description' => $request->description
        ]);
        //return response()->json($comment, 201);
        return json_encode($comment);
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
        $blogs = Blog::find($id);

        // Check for correct user
        if(auth()->user()->id !==$blogs->user_id){
            Session::flash('error', "Unauthorized Page");
            return back();
        }
        return view('blogedit',compact('blogs'));
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
        
        if($request->hasFile('newImage')){

            $this->validate($request, [
            'newImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1999'
            ]);
            
            $imageName = time().'.'.request()->newImage->getClientOriginalExtension();

            if(request()->newImage->move(public_path('blog_images/'), $imageName)){
              
              //delete old image
                $image_path = "blog_images/".$request->oldImage;  
                 if(File::exists($image_path)) {
                   
                        File::delete($image_path);
                }
             }
            
        }
        $bloginfo = Blog::find($id);
        $bloginfo->name =  $request->name;
        $bloginfo->category = $request->category;
        $bloginfo->description = $request->description;
        if($request->hasFile('newImage')){
            $bloginfo->image = $imageName;
        }
        $bloginfo->save();

        Session::flash('success', "Update Success");
        return back();
        //return response()->json($bloginfo, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::find($id);

        if(auth()->user()->id !== $blogs->user_id){
            Session::flash('error', "Unauthorized Page");
            return back();
        }

        
        
        $image_path = "blog_images/".$blogs->image; 
        if(File::exists($image_path)) {
            File::delete($image_path);
            //Storage::delete($image_path);
         }

        $blogs->delete();
        Comment::where('blog_id', $id)->delete();
        Session::flash('success', "Blog Deleted Success");
        return redirect('/');
        //return response()->json($post, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyComment(Request $request)
    {
         $comment = Comment::find($request->comment_id);


         $comment->delete();
        
        // return response()->json($comment, 201);
        return json_encode($comment);
    }
}
