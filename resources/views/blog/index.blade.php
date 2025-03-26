@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row mb-5 align-items-center">
         
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="{{ route('blogs.create') }}"
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
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th></th>
                                 </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{!! $blog->title !!}</td>
                                    <td>{!! $blog->description !!}</td>

                                    <td class="d-flex">
                                      
                                        <a href="{{ route('blogs.edit',$blog->id) }}"><i
                                                  class="lar la-edit"></i></a>
                                              {!! Form::open(['method' => 'DELETE', 'route' => ['blogs.destroy', $blog->id], 'style' => 'display:inline']) !!}
                                              <button type="submit" class="btn btn-danger" style="border: none; background: none; padding: 0; cursor: pointer;">
                                                  <i class="las la-trash-alt text-danger"></i>
                                              </button>
                                          {!! Form::close() !!}
                                        

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
