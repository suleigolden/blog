<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Comment;
use DB;

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

    public function getUserAgentTarck(){
         $resultData = DB::table('usertracks')->select('browser_name', DB::raw('COUNT(browser_name) AS occurrences'))
            ->groupBy('browser_name')
            ->orderBy('occurrences', 'DESC')
            ->limit(10)
            ->get();

          //   foreach ($data as $key) {
          //       echo $key->browser_name." Views ".$key->occurrences."<br>";
          //   }
          // print_r($data);

        return json_encode($resultData);
    }

}
