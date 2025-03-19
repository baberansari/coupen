@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="{{ route('category.create') }}"
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="S.No: activate to sort column descending" style="width: 73.9844px;">S.No
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Name: activate to sort column ascending"
                                        style="width: 322.609px;"> Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=" Slug: activate to sort column ascending"
                                        style="width: 329.547px;"> Slug</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1"
                                        colspan="1" aria-label=": activate to sort column ascending"
                                        style="width: 208.859px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td>{{$category->name}}</td>

                                    <td>{{$category->slug}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('category.edit',$category->id)}}"><i
                                                class="lar la-edit"></i></a>
                                        <a href="{{route('category.edit',$category->id)}}" class="ml-4"><i
                                                class="las la-eye"></i></a>
                                        {{-- <a href="https://retailescaper.com/admin/category/form/duplicate/48"
                                            class="ml-4"><i class="lar la-copy"></i></a> --}}
                                        <a href="{{route('category.destroy',$category->id)}}" class="ml-4"><i
                                                class="las la-trash-alt"></i></a>

                                    </td>
                                </tr>
                                @endforeach

                                {{-- <tr role="row" class="even">
                                    <td class="sorting_1">2</td>
                                    <td>Web Hosting</td>

                                    <td>web-hosting</td>

                                    <td class="d-flex">
                                        <a href="https://retailescaper.com/admin/category/form/edit/46"><i
                                                class="lar la-edit"></i></a>
                                        <a href="https://retailescaper.com/admin/category/view/46" class="ml-4"><i
                                                class="las la-eye"></i></a>
                                        <a href="https://retailescaper.com/admin/category/form/duplicate/46"
                                            class="ml-4"><i class="lar la-copy"></i></a>
                                        <a href="https://retailescaper.com/admin/category/delete/46" class="ml-4"><i
                                                class="las la-trash-alt"></i></a>

                                    </td>
                                </tr> --}}


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
