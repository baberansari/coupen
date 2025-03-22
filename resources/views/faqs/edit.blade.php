@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Faq</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" role="form" action="{{ route('faqs.update', $faq->id) }}"
                                method="post" enctype="multipart/form-data">
                              @csrf

                              <div class="row">
                                  <div class="col-xl-12">
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="store_id"> Store <small
                                                  class="text-danger">( Required )</small>
                                              <span class="text-danger">*</span>
                                          </label>
                                          <div class="col-lg-6">
                                              <select class="form-control" id="store_id" name="store_id"
                                                      data-validation="required" required>
                                                  <option value="">Select: Store <small class="text-danger">(
                                                          Required )</small></option>
                                                  @foreach ($stores as $store)
                                                  <option value="{{ $store->id }}" {{ $faq->store_id == $store->id ? 'selected' : '' }}>
                                                      {{ $store->store_name }}
                                                  </option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="question"> Question <small
                                                  class="text-danger">( Required )</small>
                                              <span class="text-danger">*</span>
                                          </label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control input-default" id="question"
                                                     name="question" data-validation="required" value="{{ $faq->question }}">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="answer"> Answer <small
                                                  class="text-danger">( Required )</small>
                                              <span class="text-danger">*</span>
                                          </label>
                                          <div class="col-lg-6">
                                              <textarea class="form-control summernote" id="answer" name="answer"
                                                        data-validation="required" style="display: none;">{{ $faq->answer }}</textarea>
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
