@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-3 mb-4 mb-lg-0">
        <a href="https://retailescaper.com/admin/faq/form/1/add" class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Add New</a>
      </div>
      <div class="col-lg-3 mb-4 mb-lg-0">
        <a href="#" class="updateOrder btn btn-primary light btn-lg btn-block rounded shadow px-2" style="display: none;">Update Order</a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table id="example5" class="table display mb-4 table-responsive-xl dataTablesCard fs-14 dataTable no-footer">
            <thead>
              <tr>
                <th>S.No</th>
                                      <th></th>
              </tr>
            </thead>
            <tbody class="ui-sortable">
                            <tr>
              <td>No Record Found</td>
            </tr>
                            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
