@extends('layouts.master')
@section('title', 'Create Offer')
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
                        <h4 class="card-title">1 Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('offer.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="store_id" value="{{ $store_id }}" id="">
                                <div class="row">
                                    <div class="col-xl-12">
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_type"> Store <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_type" name="store_id"
                                                    data-validation="required" required>
                                                    <option value="">Select: Store <small class="text-danger">(
                                                            Required )</small></option>
                                                        @foreach ($stores as $store)
                                                        <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                                                        @endforeach
                                                </select>

                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_type"> Type <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_type" name="offer_type"
                                                    data-validation="required">
                                                    <option value="">Select: Type <small class="text-danger">(
                                                            Required )</small></option>
                                                    <option value="deal">Deal</option>
                                                    <option value="code">Code</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_working">Offer Working
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_working" name="offer_working"
                                                    data-validation="required">
                                                    <option value="">Select: Offer Working</option>
                                                    <option value="yes">yes</option>
                                                    <option value="no">no</option>
                                                    <option selected="selected" value="">Null</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_online">Available Option
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="offer_online" name="offer_online"
                                                    data-validation="required">
                                                    <option value="">Select: Available Option</option>
                                                    <option value="online">online</option>
                                                    <option value="in-store">in-store</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_expiry_date"> Expiry Date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="datepicker-default form-control picker__input"
                                                    id="offer_expiry_date" name="offer_expiry_date" value="" readonly=""
                                                    aria-haspopup="true" aria-expanded="false" aria-readonly="false"
                                                    aria-owns="offer_expiry_date_root" >



                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_title"> Title <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="offer_title"
                                                    name="offer_title" data-validation="required" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_description"> Description
                                                <small class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="offer_description" name="offer_description" data-validation="required"
                                                    style="display: none;"></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_trem_condition"> Trem
                                                Condition
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="offer_trem_condition" name="offer_trem_condition"
                                                    style="display: none;"></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_code"> Code
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="offer_code"
                                                    name="offer_code" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_affiliate_url"> Affiliate
                                                Url
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="offer_affiliate_url" name="offer_affiliate_url">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Free Shipping
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_free_shipping" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Gift
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_gift" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_discount_tittle"> Discount
                                                Tittle
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="offer_discount_tittle" name="offer_discount_tittle"
                                                    value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="offer_discount_number"> Discount
                                                Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default"
                                                    id="offer_discount_number" name="offer_discount_number"
                                                    value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Verified
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_verified" type="checkbox" data-toggle="toggle"
                                                    data-on="Verified" data-off="Verified" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Exclusive Offer
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_exclusive" type="checkbox" data-toggle="toggle"
                                                    data-on="Exclusive Offer" data-off="Exclusive Offer"
                                                    data-onstyle="success" data-offstyle="danger" value="1">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Top Coupon on Homepage
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_home_page_visibility" type="checkbox"
                                                    data-toggle="toggle" data-width="200" data-on="Display On Home Page"
                                                    data-off="Display on Home Page" data-onstyle="success"
                                                    data-offstyle="danger" value="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Display on Home Page (Category Widget)
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_home_page_category" type="checkbox"
                                                    data-toggle="toggle" data-width="200"
                                                    data-on="Display on Home Page (Category Widget)"
                                                    data-off="Display on Home Page (Category Widget)"
                                                    data-onstyle="success" data-offstyle="danger" value="1">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="'.$feild_name.'">
                                                Featured Offer
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="offer_home_page_featured_offer" type="checkbox"
                                                    data-toggle="toggle" data-width="200" data-on="Featured Offer"
                                                    data-off="Featured Offer" data-onstyle="success"
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
