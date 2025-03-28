@extends('layouts.master')
@section('title', 'Create Seo')
@section('content')
<div class="container-fluid">
    @if (count($errors) > 0)
    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>
@endif
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Data</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" role="form" action="{{ route('seo.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="seo_page_name"> Page Name <small class="text-danger">( Required )</small>
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control input-default" id="seo_page_name" name="seo_page_name" data-validation="required" value="">

                    </div>
                </div>                                        <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="seo_page_link"> Page Link <small class="text-danger">( Required )</small>
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control input-default" id="seo_page_link" name="seo_page_link" data-validation="required" value="">

                    </div>
                </div>                                        <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="seo_page_title"> Page Title
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control input-default" id="seo_page_title" name="seo_page_title" value="">

                    </div>
                </div>                                        <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="seo_meta_title"> Meta Title
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control input-default" id="seo_meta_title" name="seo_meta_title" value="">

                    </div>
                </div>                                        <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="seo_meta_description"> Meta Description
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <textarea class="form-control" id="seo_meta_description" name="seo_meta_description"></textarea>

                </div>
            </div>                                        <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="seo_meta_keyword"> Meta Keyword
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <textarea class="form-control" id="seo_meta_keyword" name="seo_meta_keyword"></textarea>

                </div>
            </div>                                        <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="seo_meta_canonical"> Meta Canonical
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control input-default" id="seo_meta_canonical" name="seo_meta_canonical" value="">

                    </div>
                </div>                                        <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="seo_meta_tags"> Meta Tags
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                        <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" data-role="tagsinput" class="form-control tags-input" id="seo_meta_tags" name="seo_meta_tags" value="" style="display: none;">

                    </div>
                </div>                                                                                <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="seo_meta_index"> Meta Index <small class="text-danger">( Required )</small>
                    <span class="text-danger">*</span>
                </label>
            <div class="col-lg-6">
              <select class="form-control" id="seo_meta_index" name="seo_meta_index" data-validation="required"><option value="">Select:  Meta Index <small class="text-danger">( Required )</small></option><option value="noindex, nofollow">noindex, nofollow</option><option value="index, nofollow">index, nofollow</option><option value="noindex, follow">noindex, follow</option><option value="index, follow">index, follow</option></select>

               </div>
            </div>                                        <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="seo_head_script"> Head Script
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <textarea class="form-control" id="seo_head_script" name="seo_head_script"></textarea>

                </div>
            </div>                                        <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="seo_footer_script"> Footer Script
                    <span class="text-danger">*</span>
                </label>
                <div class="col-lg-6">
                    <textarea class="form-control" id="seo_footer_script" name="seo_footer_script"></textarea>

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
