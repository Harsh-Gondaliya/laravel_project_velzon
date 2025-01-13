@extends('admin.layout.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Add Technology</h4>
                        <div class="flex-shrink-0">
                            
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('admin.technology.store') }}" method="POST" id="technologyStore">
                                @csrf

                                <div class="row row-cols-lg-auto g-3 align-items-center">
                                    <div class="col-12">
                                        <label class="visually" for="inlineFormInputGroupUsername">Technology Name</label>
                                        <div class="input-group">
                                            
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Technology" name="technology">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <label class="visually" for="inlineFormSelectPref">Status</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="A" name="status" id="status-active">
                                            <label class="form-check-label" for="status-active" checked>
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="I" name="status" id="status-inactive">
                                            <label class="form-check-label" for="status-inactive">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 d-grid">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div> <!-- end col -->
        </div>
        
    </div>
    <!-- container-fluid -->
</div>



@endsection