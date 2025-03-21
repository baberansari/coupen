@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">1 Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('faqs.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
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
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="faq_question"> Question <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control input-default" id="faq_question"
                                                    name="faq_question" data-validation="required" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="faq_answer"> Answer <small
                                                    class="text-danger">( Required )</small>
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control summernote" id="faq_answer" name="faq_answer" data-validation="required"
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
