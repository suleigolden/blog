@extends('layouts.app')

@section('content')

<section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate fadeInUp element-animated">
          @if($blogs)
            <div class="col-md-12 col-lg-10 main-content">
               <div class="post-meta">
                            <span class="author mr-2"><img src="{{ asset('blog_images') }}/person_1.jpg"> {{substr(strip_tags($blogs->user->name),0,10)}}</span>&bullet;
                            <span class="mr-2">{{date('d M Y',strtotime($blogs->created_at))}} </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> {{count($blogs->comments)}}</span>
              </div>
              <h1 class="mb-4">{{$blogs->name}}</h1>
              <a class="category mb-5" href="#">{{$blogs->category}}</a>
             
              <div class="post-content-body">
                {{$blogs->description}}
              <div class="row mb-5">
                <div class="col-md-12 mb-4">
                  <img src="{{ asset('blog_images') }}/{{$blogs->image}}" style="min-width: 80%;" alt="Image placeholder" class="img-fluid">
                </div>
              </div>
               @guest

               @else
                  @if(auth()->user()->id == $blogs->user_id)
                  <a href="{{url('/')}}/blog/edit/{{$blogs->id}}" class="btn btn-primary">Edit Blog</a>
                  <a href="#" onclick="deleteBlog('{{$blogs->id}}');" class="btn btn-danger">Delete Blog</a>
                  @endif
                @endguest

              </div>

              <div class="pt-5">
                <h3 class="mb-5">{{count($blogs->comments)}} Comments</h3>
                <ul class="comment-list" id="commentList">
                @foreach($blogs->comments as $comment)
                  <li class="comment">
                    <div class="vcard">
                      <img src="{{ asset('blog_images') }}/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>{{$comment->user->name}}</h3>
                      <div class="meta">{{date('d M Y',strtotime($comment->created_at))}}</div>
                      <p>{{$comment->description}}</p>
                    </div>
                  </li>
                 @endforeach

                  
                </ul>
                <!-- END comment-list -->
                 @guest
                    <a class="btn btn-primary" href="{{ route('login') }}">Login to leave a comment</a>
                 @else
                  <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5">Leave a comment</h3>
                    <form action="#" class="p-5 bg-light">
                      <input type="hidden" id="userCommentID" value="{{auth()->user()->id}}">
                      <input type="hidden" id="username" value="{{auth()->user()->name}}">
                      <input type="hidden" id="blogId" value="{{$blogs->id}}">
                      <div class="form-group">
                        <label for="message">Comment</label>
                        <textarea name="" id="commentmessage" placeholder="Write new comment" cols="30" rows="3" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <input onclick="saveComment();" value="Post Comment" class="btn btn-primary">
                        <div id="saveMessage"></div>
                      </div>

                    </form>
                  </div>
                  @endguest
                </div>

            </div>
          @endif

          <!-- END main-content -->

         

        </div>
      </div>
    </section>


@endsection
