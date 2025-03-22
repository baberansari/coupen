@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" role="form" action="{{ route('seo.update', $seo->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_page_name"> Page Name <small class="text-danger">( Required )</small>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="seo_page_name" name="seo_page_name" value="{{ old('seo_page_name', $seo->page_name) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_page_link"> Page Link <small class="text-danger">( Required )</small>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="seo_page_link" name="seo_page_link" value="{{ old('seo_page_link', $seo->page_link) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_page_title"> Page Title
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="seo_page_title" name="seo_page_title" value="{{ old('seo_page_title', $seo->seo_page_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_meta_title"> Meta Title
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="seo_meta_title" name="seo_meta_title" value="{{ old('seo_meta_title', $seo->seo_meta_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_meta_description"> Meta Description
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="seo_meta_description" name="seo_meta_description">{{ old('seo_meta_description', $seo->seo_meta_description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_meta_keyword"> Meta Keyword
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="seo_meta_keyword" name="seo_meta_keyword">{{ old('seo_meta_keyword', $seo->seo_meta_keyword) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_meta_canonical"> Meta Canonical
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="seo_meta_canonical" name="seo_meta_canonical" value="{{ old('seo_meta_canonical', $seo->seo_meta_canonical) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_meta_tags"> Meta Tags
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control tags-input" id="seo_meta_tags" name="seo_meta_tags" value="{{ old('seo_meta_tags', $seo->seo_meta_tags) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_meta_index"> Meta Index
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="seo_meta_index" name="seo_meta_index">
                                                <option value="" disabled>Select Meta Index</option>
                                                <option value="noindex, nofollow" {{ old('seo_meta_index', $seo->seo_meta_index) == 'noindex, nofollow' ? 'selected' : '' }}>noindex, nofollow</option>
                                                <option value="index, nofollow" {{ old('seo_meta_index', $seo->seo_meta_index) == 'index, nofollow' ? 'selected' : '' }}>index, nofollow</option>
                                                <option value="noindex, follow" {{ old('seo_meta_index', $seo->seo_meta_index) == 'noindex, follow' ? 'selected' : '' }}>noindex, follow</option>
                                                <option value="index, follow" {{ old('seo_meta_index', $seo->seo_meta_index) == 'index, follow' ? 'selected' : '' }}>index, follow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_head_script"> Head Script
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="seo_head_script" name="seo_head_script">{{ old('seo_head_script', $seo->seo_head_script) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="seo_footer_script"> Footer Script
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="seo_footer_script" name="seo_footer_script">{{ old('seo_footer_script', $seo->seo_footer_script) }}</textarea>
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
