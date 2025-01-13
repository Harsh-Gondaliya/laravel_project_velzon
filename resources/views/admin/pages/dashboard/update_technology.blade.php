@extends('admin.layout.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Technology</h4>
                        <div class="flex-shrink-0">

                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('technology.update.list') }}" method="POST" id="technologyStore">
                                @csrf

                                <div class="row row-cols-lg-auto g-3 align-items-center">

                                            <input type="hidden" class="form-control" id="id"
                                                placeholder="technology_id"  name="id" value="{{old('id', $techDetails->id)}}">


                                    <div class="col-12">
                                        <label class="form-label" for="inlineFormInputGroupUsername">Technology*</label>
                                        <div class="input-group">

                                            <input type="text" class="form-control" id="technology"
                                                placeholder="technology"  name="technology" value="{{old('technology' , $techDetails->technology)}}">

                                        </div>
                                        @error('technology')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <label class="form-label" for="status">Status*</label>
                                        <div>
                                            <input type="radio" id="active" name="status" value="A" {{old('status', $techDetails->status) == 'A' ? 'checked': ''}}>
                                            <label for="active" class="ms-2">Active</label>

                                            <input type="radio" id="inactive" name="status" value="I" class="ms-3" {{old('status', $techDetails->status) == 'I' ? 'chached': ''}}>
                                            <label for="inactive" class="ms-2">Inactive</label>

                                        </div>
                                        @error('status')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <!--end col-->

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
