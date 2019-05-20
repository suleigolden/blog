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
                      <h3 class="mb-5">Create New Blog</h3>

                      <form method="POST" class="p-5 bg-light" action="create/blog" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       <div class="form-group">
                        <label for="name">Titile*</label>
                        <input type="text" class="form-control" name="name" placeholder="Blog Titile" required>
                      </div>
                      <div class="form-group">
                        <label for="name">Category*</label>
                        <select class="form-control" name="category" required>
                          <option value="">select</option>
                          <option value="Lifestyle">Lifestyle</option>
                          <option value="Food">Food</option>
                          <option value="Travel">Travel</option>
                          <option value="Business">Business</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="name">Blog Image*</label>
                         <input type="file" accept="image/*" name="image" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Blog Description*</label>
                        <textarea name="description" id="article-ckeditor" cols="30" rows="3" class="form-control" placeholder="Blog Description" required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Post BLog" class="btn btn-primary">
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
