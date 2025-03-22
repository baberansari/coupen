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
            <a href="{{ route('seo.create') }}"
                class="btn btn-primary light btn-lg btn-block rounded shadow px-2">+Add New</a>
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
                                <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label="S.No: activate to sort column descending"
                                    style="width: 35.275px;">S.No</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                    aria-label=" Page Name: activate to sort column ascending"
                                    style="width: 143.387px;"> Page Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                    aria-label=" Page Link: activate to sort column ascending"
                                    style="width: 543.287px;"> Page Link</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                    aria-label=" Meta Index: activate to sort column ascending"
                                    style="width: 88.825px;"> Meta Index</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1"
                                    aria-label=": activate to sort column ascending" style="width: 128.025px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seos as $seo)


                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $seo->id }}</td>
                                <td>{{ $seo->page_name }}</td>

                                <td>{{ $seo->seo_page_link }}</td>

                                <td>{{ $seo->seo_meta_index }}</td>

                                <td class="d-flex">
                                    <a href="{{ route('seo.edit',$seo->id) }}"><i
                                            class="lar la-edit"></i></a>
                                    {{-- <a href="https://retailescaper.com/admin/seo/view/1" class="ml-4"><i
                                            class="las la-eye"></i></a>
                                    <a href="https://retailescaper.com/admin/seo/form/duplicate/1" class="ml-4"><i
                                            class="lar la-copy"></i></a> --}}
                                    <a href="{{  route('seo.destroy',$seo->id) }}" class="ml-4"><i
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
