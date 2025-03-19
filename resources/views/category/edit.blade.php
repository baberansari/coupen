@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">

                                {!! Form::model($categories, ['enctype'=>"multipart/form-data",'method' => 'PATCH','route' => ['category.update', $categories->id]]) !!}
                                @csrf

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_name"> Name <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{$categories->name}}" class="form-control input-default" id="category_name"
                                                    name="category_name" data-validation="required" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"  for="category_description"> Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="category_description" name="category_description">{{$categories->description}}</textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_slug"> Slug <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{$categories->slug}}" class="form-control input-default" id="category_slug"
                                                    name="category_slug" data-validation="required" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_icon"> Icon
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="category_icon" name="category_icon"
                                                        class="custom-file-input">
                                                    <input type="text" id="category_icon" name="category_icon"
                                                        value="" hidden="">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                <img width="150px"
                                                    src="https://retailescaper.com/assets/admin/images/placeholder.jpg">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_home_page_visibility">
                                                Category Homepage Visibility
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="category_home_page_visibility" type="checkbox"
                                                    data-toggle="toggle" data-width="200" data-on="Show On Home Page"
                                                    data-off="Show On Home Page" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_homepage_1">
                                                Category Homepage Sidebar Visibility
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="category_home_page_sidebar_visibility" type="checkbox"
                                                    data-toggle="toggle" data-width="200"
                                                    data-on="Show On Home Page Sidebar" data-off="Show On Home Page Sidebar"
                                                    data-onstyle="success" data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_homepage_1">
                                                Homepage Category Widget 1
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="category_homepage_1" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_homepage_2">
                                                Homepage Category Widget 2
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="category_homepage_2" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Insert Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
