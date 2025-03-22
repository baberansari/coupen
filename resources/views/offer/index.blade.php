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
                <a href="{{ route('offer.create') }}"
                    class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Add New</a>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="#" class="updateOrder btn btn-primary light btn-lg btn-block rounded shadow px-2"
                    style="display: none;">Update Order</a>
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
                                        aria-label="S.No: activate to sort column descending" style="width: 35.2656px;">S.No
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Type: activate to sort column ascending"
                                        style="width: 39.0625px;"> Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Title: activate to sort column ascending"
                                        style="width: 83.4844px;"> Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Code: activate to sort column ascending"
                                        style="width: 65.7031px;"> Code</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Expiry Date: activate to sort column ascending"
                                        style="width: 89.3281px;"> Expiry Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Views: activate to sort column ascending"
                                        style="width: 46.9531px;"> Views</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Working: activate to sort column ascending"
                                        style="width: 66.6562px;"> Working</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label="Last updated by: activate to sort column ascending"
                                        style="width: 130.531px;">Last updated by</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=": activate to sort column ascending"
                                        style="width: 128.016px;"></th>
                                </tr>
                            </thead>
                            <tbody class="ui-sortable">

                                @foreach ( $offers as $offer)


                                <tr id="sort_14" role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td>{{ $offer->offer_type }}</td>

                                    <td>Spend ${{ $offer->offer_discount_number }}  &amp;
                                        {{ $offer->offer_discount_tittle }} Promo
                                        Code</td>

                                    <td>{{ $offer->offer_code }}</td>

                                    <td>{{$offer->offer_expiry_date }}</td>

                                    <td>{{ $offer->views_count }}</td>

                                    <td>{{ $offer->offer_working=='yes'?'Yes':'No' }}</td>

                                    <td>{{ $offer->created_by??'admin' }}</td>
                                    <td class="d-flex">
                                      <a href="{{ route('offer.edit',$offer->id) }}"><i
                                                class="lar la-edit"></i></a>
                                        {{--   <a href="#" class="ml-4"><i
                                                class="las la-eye"></i></a>
                                        <a href="#"
                                            class="ml-4"><i class="lar la-copy"></i></a> --}}
                                        <a href="{{ route('offer.destroy',$offer->id) }}" class="ml-4"><i
                                                class="las la-trash-alt"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
