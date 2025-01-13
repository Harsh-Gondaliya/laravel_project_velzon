@extends('admin.layout.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Technologies</h4>
                    <div class="flex-shrink-0">
                        <a href="{{route('admin.technology.create')}}" class="btn btn-primary">Add Technology</a>
                    </div>
                </div><!-- end card header -->
        
                <div class="card-body">
                    @csrf
                     <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap align-middle mb-0">
                         @csrf
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Technology</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if ($techs->count())
                                    @foreach ($techs as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->technology }}</td>
                                            <td>
                                                @if ($item->status == 'A')
                                                    <span class="badge bg-success">Active</span>
                                                @elseif($item->status == 'I')
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.technology.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{ route('admin.technology.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Technologies Found</td>
                                    </tr>
                                @endif
                                
                                    
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