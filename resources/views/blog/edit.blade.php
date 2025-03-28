@extends('layouts.master')
@section('title', 'Edit Blog')
@section('content')
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('blogs.update', $faq->id) }}"
                                method="post" enctype="multipart/form-data">
                              @csrf
                                @method('put')
                              <div class="row">
                                  <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="description"> Photo <small
                                                class="text-danger">( Required )</small>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                           <input type="file" class="form-control" name="image">
                                        </div>
                                     
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-6">
                                            @if($faq->image)
                                                <img width="150px" src="{{ asset($faq->image) }}">
                                            @else
                                                <img width="150px" src="https://retailescaper.com/assets/admin/images/placeholder.jpg">
                                            @endif
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="question"> Title <small
                                                  class="text-danger">( Required )</small>
                                              <span class="text-danger">*</span>
                                          </label>
                                          <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="title"
                                                     name="title" data-validation="required" value="{{ $faq->title }}">
 
                                                    </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="answer"> Description <small
                                                  class="text-danger">( Required )</small>
                                              <span class="text-danger">*</span>
                                          </label>
                                          <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="description" name="description" data-validation="required"
                                                        style="display: none;">{{ $faq->description }}</textarea>
    
                                          </div>
                                      </div>
                                     
                                 
                                      <div class="form-group row">
                                          <div class="col-lg-8 ml-auto">
                                              <button type="submit" class="btn btn-primary">Update Data</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
