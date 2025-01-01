@extends('admin.layout.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="col-xl-12">
            <div class="card">

                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Technology</h4>
                    <div class="flex-shrink-0">
                        <a href="{{ route('technology.create') }}" class="btn btn-primary">Add Technology</a>
                    </div>

                </div><!-- end card header -->

                <div class="card-body">
                    @csrf
                     <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap align-middle mb-0">
                                @if(session('success'))
                                <br>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success')}}
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-dismiss="alert" aria-label="Close"><i class="ri-close-fill fs-16"></i></button>
                                </div>
                                @endif
                                <thead>
                                    @csrf
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Technology</th>
                                        <th scope="col">Stauts</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($technology as $key=>$value )
                                    <tr>
                                        <td class="fw-medium">{{$key+1}}</td>
                                        <td>{{$value['technology']}}</td>
                                        <td>
                                            @if($value['status'] == 'A')
                                            <span class="btn btn-primary  waves-effect waves-light">Active</span>
                                            @else
                                            <span class="btn btn-danger  waves-effect waves-light">Inactive</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('technology.update', $value['id'])}}"  class="btn btn-primary btn-icon waves-effect waves-light"><i class=" bx bx-edit-alt"></i></a>
                                            <a href="{{ route('technology.delete', $value['id'])}}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></a>
                                            <a href="" class="btn btn-success btn-icon waves-effect waves-light"><i class=" bx bx-mail-send"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
    </div>
    <!-- container-fluid -->
</div>
@endsection
