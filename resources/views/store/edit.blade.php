@extends('layouts.master')
@section('content')

    <div class="container-fluid">
        <!-- row -->
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('stores.update', $store->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_id">Category <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="category_id" name="category_id" data-validation="required">
                                                    <option value="">Select: Category <small class="text-danger">( Required )</small></option>
                                                    @foreach ($categories as $category)
                                                        <option {{ old('category_id', $store->category_id) == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_sort_number">Sort Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_sort_number', $store->store_sort_number) }}"
                                                    class="form-control input-default" id="store_sort_number" name="store_sort_number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_logo">Logo <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="store_logo" name="store_logo" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                @if($store->store_logo)
                                                    <img width="150px" src="{{ asset($store->store_logo) }}">
                                                @else
                                                    <img width="150px" src="https://retailescaper.com/assets/admin/images/placeholder.jpg">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_featured_img">Featured Img <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="store_featured_img" name="store_featured_img" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                @if($store->store_featured_img)
                                                    <img width="150px" src="{{ asset($store->store_featured_img) }}">
                                                @else
                                                    <img width="150px" src="https://retailescaper.com/assets/admin/images/placeholder.jpg">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_logo_alt_attribute">Logo Alt Attribute <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_logo_alt_attribute', $store->store_logo_alt_attribute) }}"
                                                    class="form-control input-default" id="store_logo_alt_attribute" name="store_logo_alt_attribute"
                                                    data-validation="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_name">Name <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_name', $store->store_name) }}"
                                                    class="form-control input-default" id="store_name" name="store_name"
                                                    data-validation="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_url">Url <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_url', $store->store_url) }}"
                                                    class="form-control input-default" id="store_url" name="store_url"
                                                    data-validation="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_slug">Slug <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_slug', $store->store_slug) }}"
                                                    class="form-control input-default" id="store_slug" name="store_slug"
                                                    data-validation="required">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_affiliate_url">Affiliate Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_affiliate_url', $store->store_affiliate_url) }}"
                                                    class="form-control input-default" id="store_affiliate_url" name="store_affiliate_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_description">Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="store_description" name="store_description">
                                                    {{ old('store_description', $store->store_description) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_rating">Store Rating Out Of 5
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_rating', $store->store_rating) }}"
                                                    class="form-control input-default" id="store_rating" name="store_rating">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_how_to_use">How To Use
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="store_how_to_use" name="store_how_to_use">
                                                    {{ old('store_how_to_use', $store->store_how_to_use) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_how_to_use_img">How To Use Img <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="store_how_to_use_img" name="store_how_to_use_img" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                @if($store->store_how_to_use_img)
                                                    <img width="150px" src="{{ asset($store->store_how_to_use_img) }}">
                                                @else
                                                    <img width="150px" src="https://retailescaper.com/assets/admin/images/placeholder.jpg">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_buyer_guide">Buyer Guide
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="store_buyer_guide" name="store_buyer_guide">
                                                    {{ old('store_buyer_guide', $store->store_buyer_guide) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_buyers_guide_img">Buyers Guide Img <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" id="store_buyers_guide_img" name="store_buyers_guide_img" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                @if($store->store_buyers_guide_img)
                                                    <img width="150px" src="{{ asset($store->store_buyers_guide_img) }}">
                                                @else
                                                    <img width="150px" src="https://retailescaper.com/assets/admin/images/placeholder.jpg">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_heading">Heading
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_heading', $store->store_heading) }}"
                                                    class="form-control input-default" id="store_heading" name="store_heading">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_sidebar_heading">Sidebar Heading
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_sidebar_heading', $store->store_sidebar_heading) }}"
                                                    class="form-control input-default" id="store_sidebar_heading" name="store_sidebar_heading">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_sidebar_content">Sidebar Content
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="store_sidebar_content" name="store_sidebar_content">
                                                    {{ old('store_sidebar_content', $store->store_sidebar_content) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_content">Content
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="store_content" name="store_content">
                                                    {{ old('store_content', $store->store_content) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_video_embedded_tittle">Video Embedded Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_video_embedded_tittle', $store->store_video_embedded_tittle) }}"
                                                    class="form-control input-default" id="store_video_embedded_tittle" name="store_video_embedded_tittle">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_video_embedded_code">Video Embedded Code
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="store_video_embedded_code" name="store_video_embedded_code">
                                                    {{ old('store_video_embedded_code', $store->store_video_embedded_code) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_instagram_url">Instagram Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_instagram_url', $store->store_instagram_url) }}"
                                                    class="form-control input-default" id="store_instagram_url" name="store_instagram_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_facebook_url">Facebook Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_facebook_url', $store->store_facebook_url) }}"
                                                    class="form-control input-default" id="store_facebook_url" name="store_facebook_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_twitter_url">Twitter Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_twitter_url', $store->store_twitter_url) }}"
                                                    class="form-control input-default" id="store_twitter_url" name="store_twitter_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_google_plus_url">Google Plus Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_google_plus_url', $store->store_google_plus_url) }}"
                                                    class="form-control input-default" id="store_google_plus_url" name="store_google_plus_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_youtube_url">Youtube Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_youtube_url', $store->store_youtube_url) }}"
                                                    class="form-control input-default" id="store_youtube_url" name="store_youtube_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_pinterest_url">Pinterest Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_pinterest_url', $store->store_pinterest_url) }}"
                                                    class="form-control input-default" id="store_pinterest_url" name="store_pinterest_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_linkedin_url">Linkedin Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('store_linkedin_url', $store->store_linkedin_url) }}"
                                                    class="form-control input-default" id="store_linkedin_url" name="store_linkedin_url">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_home_page_visibility">Display On Home Page (After Search)</label>
                                            <div class="col-lg-6">
                                                <input {{ old('store_home_page_visibility', $store->store_home_page_visibility) ? 'checked' : '' }}
                                                    name="store_home_page_visibility" type="checkbox" data-toggle="toggle" data-width="200"
                                                    data-on="Display On Home Page" data-off="Display On Home Page"
                                                    data-onstyle="success" data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_home_page_sidebar_visibility">Display On Home Page Top Stores (Banners)</label>
                                            <div class="col-lg-6">
                                                <input {{ old('store_home_page_sidebar_visibility', $store->store_home_page_sidebar_visibility) ? 'checked' : '' }}
                                                    name="store_home_page_sidebar_visibility" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Display On Home Page Sidebar"
                                                    data-off="Display On Home Page Sidebar" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_home_page_top_store">Display On Home Page Top Stores (Bottom Widget)</label>
                                            <div class="col-lg-6">
                                                <input {{ old('store_home_page_top_store', $store->store_home_page_top_store) ? 'checked' : '' }}
                                                    name="store_home_page_top_store" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Display On Home Page Sidebar"
                                                    data-off="Display On Home Page Sidebar" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_nav_bar_visibility">Display On Top NavBar</label>
                                            <div class="col-lg-6">
                                                <input {{ old('store_nav_bar_visibility', $store->store_nav_bar_visibility) ? 'checked' : '' }}
                                                    name="store_nav_bar_visibility" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Display On Top NavBar"
                                                    data-off="Display On Top NavBar" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_month_visibility">Popular Stores</label>
                                            <div class="col-lg-6">
                                                <input {{ old('store_month_visibility', $store->store_month_visibility) ? 'checked' : '' }}
                                                    name="store_month_visibility" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Month Year Visibility"
                                                    data-off="Month Year Visibility" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_sitemap">Display on Sitemap</label>
                                            <div class="col-lg-6">
                                                <input {{ old('store_sitemap', $store->store_sitemap) ? 'checked' : '' }}
                                                    name="store_sitemap" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Month Year Visibility"
                                                    data-off="Month Year Visibility" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_page_title">Seo Page Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input value="{{ old('seo_page_title', $store->seo_page_title) }}"
                                                    type="text" class="form-control input-default" id="seo_page_title" name="seo_page_title">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_meta_title">Seo Meta Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('seo_meta_title', $store->seo_meta_title) }}"
                                                    class="form-control input-default" id="seo_meta_title" name="seo_meta_title">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_meta_description">Seo Meta Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="seo_meta_description" name="seo_meta_description">
                                                    {{ old('seo_meta_description', $store->seo_meta_description) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_meta_keyword">Seo Meta Keyword
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="seo_meta_keyword" name="seo_meta_keyword">
                                                    {{ old('seo_meta_keyword', $store->seo_meta_keyword) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_meta_canonical">Seo Meta Canonical
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{{ old('seo_meta_canonical', $store->seo_meta_canonical) }}"
                                                    class="form-control input-default" id="seo_meta_canonical" name="seo_meta_canonical">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_meta_tags">Seo Meta Tags
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input value="{{ old('seo_meta_tags', $store->seo_meta_tags) }}"
                                                    type="text" data-role="tagsinput" class="form-control tags-input"
                                                    id="seo_meta_tags" name="seo_meta_tags">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_meta_index">Seo Meta Index <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="seo_meta_index" name="seo_meta_index" data-validation="required">
                                                    <option value="">Select: Seo Meta Index <small class="text-danger">( Required )</small></option>
                                                    <option value="noindex, nofollow" {{ old('seo_meta_index', $store->seo_meta_index) == 'noindex, nofollow' ? 'selected' : '' }}>
                                                        noindex, nofollow
                                                    </option>
                                                    <option value="index, nofollow" {{ old('seo_meta_index', $store->seo_meta_index) == 'index, nofollow' ? 'selected' : '' }}>
                                                        index, nofollow
                                                    </option>
                                                    <option value="noindex, follow" {{ old('seo_meta_index', $store->seo_meta_index) == 'noindex, follow' ? 'selected' : '' }}>
                                                        noindex, follow
                                                    </option>
                                                    <option value="index, follow" {{ old('seo_meta_index', $store->seo_meta_index) == 'index, follow' ? 'selected' : '' }}>
                                                        index, follow
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_head_script">Seo Head Script
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="seo_head_script" name="seo_head_script">
                                                    {{ old('seo_head_script', $store->seo_head_script) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seo_footer_script">Seo Footer Script
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="seo_footer_script" name="seo_footer_script">
                                                    {{ old('seo_footer_script', $store->seo_footer_script) }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="store_schema_code">Schema Code
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="store_schema_code" name="store_schema_code">
                                                    {{ old('store_schema_code', $store->store_schema_code) }}
                                                </textarea>
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
