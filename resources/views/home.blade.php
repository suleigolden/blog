@extends('layouts.app')

@section('content')


      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
                <div class="col-md-12">
                    @include("inc.messages")
                </div>
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-12 main-content">
              <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                      <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                        <img src="{{ asset('blog_images') }}/{{$blog->image}}" style="max-height: 250px; min-height: 250px;">
                        <div class="blog-content-body">
                          <div class="post-meta">
                            <span class="author mr-2"><img src="{{ asset('blog_images') }}/person_1.jpg"> User</span>&bullet;
                            <span class="mr-2">{{date('d M Y',strtotime($blog->created_at))}} </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                          </div>
                          <h2>{{$blog->name}}</h2>
                          {{substr(strip_tags($blog->description),0,55)}}
                        </div>
                      </a>
                    </div>
                @endforeach
                
            
              </div>

              <div class="row mt-5">
                <div class="col-md-12 text-center">
                    {{ $blogs->links( "pagination::bootstrap-4") }}
                </div>
              </div>


              

              

            </div>

            <!-- END main-content -->

          
            
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    


@endsection
