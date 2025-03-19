@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        @if ($message = Session::get('success'))

            <div class="alert alert-success">

            <p>{{ $message }}</p>

            </div>

            @endif
        <div class="row mb-5 align-items-center">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="{{route('stores.create')}}"
                    class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Add New</a>
            </div>
            <div class="col-lg-9 mb-4 mb-lg-0">
                <form method="get" action="https://retailescaper.com/admin/store/index">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search..." value="">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div id="example5_wrapper" class="dataTables_wrapper no-footer">
                        <table id="example5"
                            class="table display mb-4 table-responsive-xl dataTablesCard fs-14 dataTable no-footer"
                            role="grid" aria-describedby="example5_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="S.No: activate to sort column descending" style="width: 35.275px;">S.No
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Logo: activate to sort column ascending"
                                        style="width: 132.5px;"> Logo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Name: activate to sort column ascending"
                                        style="width: 89.275px;"> Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Slug: activate to sort column ascending"
                                        style="width: 107.95px;"> Slug</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label="Last Updated by: activate to sort column ascending"
                                        style="width: 131.188px;">Last Updated by</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label="Faqs: activate to sort column ascending"
                                        style="width: 73.7625px;">Faqs</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label="Offers: activate to sort column ascending"
                                        style="width: 90.8125px;">Offers</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=": activate to sort column ascending"
                                        style="width: 128.038px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stores as $key => $value)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td><img height="40"
                                            src="{{ asset($value->store_logo) }}">
                                    </td>
                                    <td>{{ $value->store_name }}</td>
                                    <td>{{ $value->store_slug }}</td>
                                    <td>Master Admin</td>
                                    <td><a href="https://retailescaper.com/admin/faq/1" class="btn btn-sm btn-primary"><i
                                                class="fa fa-tags"></i> 0 FAQ's</a></td>
                                    <td><a href="https://retailescaper.com/admin/offer/1"
                                            class="btn btn-sm btn-primary"><i class="fa fa-tags"></i> 3 Deals, 8 Codes</a>
                                    </td>
                                    <td class="d-flex">
                                        <a href="https://retailescaper.com/admin/store/form/edit/1"><i
                                                class="lar la-edit"></i></a>
                                        <a href="https://retailescaper.com/admin/store/view/1" class="ml-4"><i
                                                class="las la-eye"></i></a>
                                        <a href="https://retailescaper.com/admin/store/form/duplicate/1" class="ml-4"><i
                                                class="lar la-copy"></i></a>
                                        <a href="https://retailescaper.com/admin/store/delete/1" class="ml-4"><i
                                                class="las la-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
                <!-- Pagination Links  -->

            </div>
        </div>
    </div>
@endsection
