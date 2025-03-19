@extends('layouts.master')
@section('content')
    <div class="container-fluid">
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
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form"
                                action="{{ route('setting.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_site_title"> Site Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_site_title" name="settings_site_title"
                                                    value="Coupon Codes - Retailescaper">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_top_bar"> Top Bar
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_top_bar" name="settings_top_bar" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_top_bar_link"> Top Bar Link
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_top_bar_link" name="settings_top_bar_link" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_logo"> Logo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="settings_logo" name="settings_logo"
                                                        class="custom-file-input">
                                                    <input type="text" id="settings_logo" name="settings_logo"
                                                        value="rs21.png" hidden="">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                <img width="150px"
                                                    src="https://retailescaper.com/uploads/settings/rs21.png">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_footer_logo"> Footer Logo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="settings_footer_logo"
                                                        name="settings_footer_logo" class="custom-file-input">
                                                    <input type="text" id="settings_footer_logo"
                                                        name="settings_footer_logo" value="Site_New_Logo_(white)1.png"
                                                        hidden="">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                <img width="150px"
                                                    src="https://retailescaper.com/uploads/settings/Site_New_Logo_(white)1.png">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_favicon"> Favicon
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="settings_favicon" name="settings_favicon"
                                                        class="custom-file-input">
                                                    <input type="text" id="settings_favicon" name="settings_favicon"
                                                        value="RE-Fav(48×48px)1.png" hidden="">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                <img width="150px"
                                                    src="https://retailescaper.com/uploads/settings/RE-Fav(48×48px)1.png">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_email"> Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_email" name="settings_email"
                                                    value="contact@retailescaper.com">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_email_to"> Email To
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_email_to" name="settings_email_to"
                                                    value="contact@retailescaper.com">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_email_from"> Email From
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_email_from" name="settings_email_from"
                                                    value="noreply@firstprizepies.com">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_phone"> Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="settings_phone" name="settings_phone" value="+923329206576">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_address"> Address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="settings_address" name="settings_address">Office # 303, Building no 21-D, Street 10, Khayaban e Mujahid, DHA Phase 5, Karachi Pakistan</textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_head_script"> Head Script
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="settings_head_script" name="settings_head_script">
                    </textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="settings_popup_content"> Popup
                                                Content
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="settings_popup_content" name="settings_popup_content"
                                                    style="display: none;"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
