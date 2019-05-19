@extends('layouts.app')

@section('content')

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4"></h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-12 main-content">
                  <div class="col-md-8"> 
                    <div class="col-md-10">
                      @include("inc.messages")
                  </div>
                      <h3 class="mb-5">Edit Blog</h3>

                      <form method="POST" class="p-5 bg-light" action="update/{{$blogs->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       <div class="form-group">
                        <label for="name">Titile*</label>
                        <input type="text" class="form-control" name="name" value="{{$blogs->name}}" placeholder="Blog Titile" required>
                      </div>
                      <div class="form-group">
                        <label for="name">Category*</label>
                        <select class="form-control" name="category" required>
                          <option value="{{$blogs->category}}">{{$blogs->category}}</option>
                          <option value="Lifestyle">Lifestyle</option>
                          <option value="Food">Food</option>
                          <option value="Travel">Travel</option>
                          <option value="Business">Business</option>
                        </select>
                      </div>
                      <div class="col-md-12 mb-4">
                        <label for="name">Cuurent Image</label>
                      <img src="{{ asset('blog_images') }}/{{$blogs->image}}" style="min-width: 80%;" alt="Image placeholder" class="img-fluid">
                      <input type="hidden" name="oldImage" value="{{$blogs->image}}">
                    </div>
                      <div class="form-group">
                          <label for="name">New Image</label>
                         <input type="file" accept="image/*" name="newImage">
                      </div>
                      <div class="form-group">
                        <label for="message">Blog Description*</label>
                        <textarea name="description" cols="30" rows="7" class="form-control" placeholder="Blog Description" required>{{$blogs->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Update Blog" class="btn btn-primary">
                      </div>
                  </form>
                  </div>
            </div>

            <!-- END main-content -->

          
            
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    


@endsection
