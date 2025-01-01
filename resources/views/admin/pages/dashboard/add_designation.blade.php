@extends('admin.layout.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Designation</h4>
                        <div class="flex-shrink-0">
                            
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('designation.store') }}" method="POST" id="designationStore">
                                @csrf

                                <div class="row row-cols-lg-auto g-3 align-items-center">
                                    <div class="col-12">
                                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                        <div class="input-group">
                                            
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Designation" name="designation">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <label class="visually-hidden" for="inlineFormSelectPref">Status</label>
                                        <select class="form-select"  data-choices data-choices-sorting="true" id="inlineFormSelectPref" name="status">
                                            <option selected>Choose...</option>
                                            <option value="A">Active</option>
                                            <option value="I">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
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