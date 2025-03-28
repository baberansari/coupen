@extends('layouts.master')
@section('title', 'Create Blog')
@section('content')
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Blogs</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('blogs.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
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
                                            <label class="col-lg-4 col-form-label" for="title"> Title <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="title"
                                                    name="title" data-validation="required" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="description"> Description <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="description" name="description" data-validation="required"
                                                    style="display: none;"></textarea>


                                            </div>
                                        </div>
                                       

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Insert Data</button>
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
