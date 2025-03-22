@extends('layouts.master')
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
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('offer.update', $offer->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_type"> Store <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_type" name="store_id" data-validation="required" required>
                                                    <option value="">Select: Store <small class="text-danger">( Required )</small></option>
                                                    @foreach ($stores as $store)
                                                        <option value="{{ $store->id }}" {{ $offer->store_id == $store->id ? 'selected' : '' }}>
                                                            {{ $store->store_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_type"> Type <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_type" name="offer_type" data-validation="required">
                                                    <option value="">Select: Type <small class="text-danger">( Required )</small></option>
                                                    <option value="deal" {{ $offer->offer_type == 'deal' ? 'selected' : '' }}>Deal</option>
                                                    <option value="code" {{ $offer->offer_type == 'code' ? 'selected' : '' }}>Code</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_working">Offer Working
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_working" name="offer_working" data-validation="required">
                                                    <option value="">Select: Offer Working</option>
                                                    <option value="yes" {{ $offer->offer_working == 'yes' ? 'selected' : '' }}>yes</option>
                                                    <option value="no" {{ $offer->offer_working == 'no' ? 'selected' : '' }}>no</option>
                                                    <option value="" {{ $offer->offer_working == '' ? 'selected' : '' }}>Null</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_online">Available Option
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_online" name="offer_online" data-validation="required">
                                                    <option value="">Select: Available Option</option>
                                                    <option value="online" {{ $offer->offer_online == 'online' ? 'selected' : '' }}>online</option>
                                                    <option value="in-store" {{ $offer->offer_online == 'in-store' ? 'selected' : '' }}>in-store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_expiry_date"> Expiry Date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="datepicker-default form-control picker__input"
                                                    id="offer_expiry_date" name="offer_expiry_date" value="{{ $offer->offer_expiry_date }}"
                                                    readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false"
                                                    aria-owns="offer_expiry_date_root">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_title"> Title <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="offer_title"
                                                    name="offer_title" data-validation="required" value="{{ $offer->offer_title }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_description"> Description <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="offer_description" name="offer_description"
                                                    data-validation="required">{{ $offer->offer_description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_trem_condition"> Term Condition
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="offer_trem_condition" name="offer_trem_condition">
                                                    {{ $offer->offer_trem_condition }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_code"> Code
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="offer_code"
                                                    name="offer_code" value="{{ $offer->offer_code }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_affiliate_url"> Affiliate Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="offer_affiliate_url"
                                                    name="offer_affiliate_url" value="{{ $offer->offer_affiliate_url }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_free_shipping"> Free Shipping </label>
                                            <div class="col-lg-6">
                                                <input name="offer_free_shipping" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1" {{ $offer->offer_free_shipping ? 'checked' : '' }}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_gift"> Gift </label>
                                            <div class="col-lg-6">
                                                <input name="offer_gift" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1" {{ $offer->offer_gift ? 'checked' : '' }}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_discount_tittle"> Discount Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="offer_discount_tittle"
                                                    name="offer_discount_tittle" value="{{ $offer->offer_discount_tittle }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_discount_number"> Discount Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="offer_discount_number"
                                                    name="offer_discount_number" value="{{ $offer->offer_discount_number }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_verified"> Verified </label>
                                            <div class="col-lg-6">
                                                <input name="offer_verified" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1" {{ $offer->offer_verified ? 'checked' : '' }}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_exclusive"> Exclusive Offer </label>
                                            <div class="col-lg-6">
                                                <input name="offer_exclusive" type="checkbox" data-toggle="toggle"
                                                    data-on="Exclusive Offer" data-off="Exclusive Offer" data-onstyle="success"
                                                    data-offstyle="danger" value="1" {{ $offer->offer_exclusive ? 'checked' : '' }}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_home_page_visibility"> Top Coupon on Homepage </label>
                                            <div class="col-lg-6">
                                                <input name="offer_home_page_visibility" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Display On Home Page" data-off="Display on Home Page"
                                                    data-onstyle="success" data-offstyle="danger" value="1"
                                                    {{ $offer->offer_home_page_visibility ? 'checked' : '' }}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_home_page_category"> Display on Home Page (Category Widget) </label>
                                            <div class="col-lg-6">
                                                <input name="offer_home_page_category" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Display on Home Page (Category Widget)"
                                                    data-off="Display on Home Page (Category Widget)" data-onstyle="success"
                                                    data-offstyle="danger" value="1" {{ $offer->offer_home_page_category ? 'checked' : '' }}>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_home_page_featured_offer"> Featured Offer </label>
                                            <div class="col-lg-6">
                                                <input name="offer_home_page_featured_offer" type="checkbox" data-toggle="toggle"
                                                    data-width="200" data-on="Featured Offer" data-off="Featured Offer"
                                                    data-onstyle="success" data-offstyle="danger" value="1"
                                                    {{ $offer->offer_home_page_featured_offer ? 'checked' : '' }}>
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
