@extends('admin.layout.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Designation</h4>
                    <div class="flex-shrink-0">
                        <a href="{{ route('designation.create') }}" class="btn btn-primary">Add Designation</a>
                    </div>
                </div><!-- end card header -->
        
                <div class="card-body">
                     <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">01</td>
                                        <td>Bobby Davis</td>
                                        <td>Nov 14, 2021</td>
                                        <td>$2,410</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">02</td>
                                        <td>Christopher Neal</td>
                                        <td>Nov 21, 2021</td>
                                        <td>$1,450</td>
                                        <td><span class="badge bg-warning">Waiting</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">03</td>
                                        <td>Monkey Karry</td>
                                        <td>Nov 24, 2021</td>
                                        <td>$3,500</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">04</td>
                                        <td>Aaron James</td>
                                        <td>Nov 25, 2021</td>
                                        <td>$6,875</td>
                                        <td><span class="badge bg-danger">Cancelled</span></td>
                                    </tr>
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