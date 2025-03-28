@extends('layouts.master')
@section('title', 'Edit Categroy')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form"
                                action="{{ route('category.update', $categories->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_name"> Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="category_name"
                                                    name="category_name" value="{{ $categories->name }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_description"> Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="category_description" name="category_description">{{ $categories->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_slug"> Slug
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="category_slug"
                                                    name="category_slug" value="{{ $categories->slug }}" required>
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
                                                    <input type="file" id="category_icon" name="category_icon" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-2">
                                                <img width="150px" src="{{ $categories->icon ? asset($categories->icon) : '' }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Category Homepage Visibility</label>
                                            <div class="col-lg-6">
                                                <input name="category_home_page_visibility" type="checkbox"
                                                    data-toggle="toggle" data-width="200"
                                                    data-on="Show On Home Page" data-off="Show On Home Page"
                                                    data-onstyle="success" data-offstyle="danger" value="1"
                                                    {{ $categories->category_home_page_visibility ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Category Homepage Sidebar Visibility</label>
                                            <div class="col-lg-6">
                                                <input name="category_home_page_sidebar_visibility" type="checkbox"
                                                    data-toggle="toggle" data-width="200"
                                                    data-on="Show On Home Page Sidebar" data-off="Show On Home Page Sidebar"
                                                    data-onstyle="success" data-offstyle="danger" value="1"
                                                    {{ $categories->category_home_page_sidebar_visibility ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Homepage Category Widget 1</label>
                                            <div class="col-lg-6">
                                                <input name="category_homepage_1" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1"
                                                    {{ $categories->category_homepage_1 ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Homepage Category Widget 2</label>
                                            <div class="col-lg-6">
                                                <input name="category_homepage_2" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1"
                                                    {{ $categories->category_homepage_2 ? 'checked' : '' }}>
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
