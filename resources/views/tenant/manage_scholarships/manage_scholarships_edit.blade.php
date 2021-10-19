@extends('layouts.dashboard_layout')
@section('custom_style')
    <link href="{{ asset('/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('page_errors')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection


@section('content')
    <div class="container-fluid px-lg-4">
        <div class="row">
            <div class="col-md-12 mt-lg-4 mt-4">
                <!-- Page Heading -->
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="col-md-12 mt-lg-4 mt-4">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h2 mb-0 text-gray-800 text-info font-weight-bold">Edit Scholarship</h1>
                                <a href="{{ route('manage_scholarships_index') }}"
                                    class="d-none d-sm-inline-block btn-sm btn-danger shadow-sm"><i
                                        class="fa fa-backward mr-2"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                </div>
            </div>

            <!-- column -->
            <div class="col-md-12 mt-4">
                <div class="card card-body">
                    <form method="post" action="{{ route('manage_scholarships_update') }}">
                        @csrf
                        <input type="hidden" id="scholarship_id" name="scholarship_id" value="{{$scholarship->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="scholarship_title">Scholarship Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="scholarship_title" name="scholarship_title"
                                    placeholder="Enter Scholarship Title" autocomplete="off" value="{{$scholarship->scholarship_title}}" required>
                            </div>

                            <div class="form-group">
                                <label for="eligibility">Eligibility</label><span class="text-danger">*</span></label>
                                <textarea type="textarea" class="form-control" id="eligibility" name="eligibility"
                                    placeholder="Please write details eligibility..." required>{{$scholarship->eligibility}}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="amount">Amount (Tk.)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="amount" name="amount"
                                    placeholder="Enter amountin Tk." value="{{$scholarship->amount}}">
                            </div>

                            <div class="form-group">
                                <label>Application Deadline</label>
                                <input type="date" name="deadline" class="form-control"  value="{{ (new DateTime($scholarship->deadline))->format('Y-m-d') }}" required>
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('extra_js')
    <script src="{{ asset('/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
@endsection