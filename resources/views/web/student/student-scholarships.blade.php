@extends('layouts.web')

@section('custom_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

@endsection

@section('content')

    <section class="page-title title-bg10">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Student Create</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Account</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>

    <section class="account-section ptb-100">

        <div class="container">
            <div class="row">

                {{-- Student Dashboard Section --}}
                @include('web.student.sidebar-menu')
                {{-- Student Dashboard Section --}}


                <div class="col-md-8">

                    <div class="row">
                        <section class="job-style-two job-list-section pt-50 pb-70">
                            <h2 class="text-center text-dark" style="margin-bottom: 30px;">Applied Scholarships</h2>
                            <div class="container">
                                <div class="job-card-two">
                                    @forelse ($applied_scholarships as $applied_scholarship)

                                        <div class="row align-items-center pb-30">
                                            <div class="col-lg-8 col-md-6">
                                                <div class="job-info">
                                                    <h3><a href="#">{{ $loop->index + 1 }}
                                                            . {{$applied_scholarship->scholarship_title}}</a>
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="job-info">

                                                    <a class="text-light default-btn btn btn-secondary"
                                                                                         href="{{ route('available_scholarships_details',['scholarship_id' => $applied_scholarship->id]) }}" >View</a>


                                                    <button type="button" class="btn btn-danger delete_document_modal"
                                                            data-target="#delete_document_modal"
                                                            data-document_id="1">Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h5 class="text-center text-danger" style="margin-top: 30px;">No document
                                            found!</h5>
                                    @endforelse
                                </div>


                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </section>


    {{-- ------------------------Delete User Modal---------------------------- --}}
    <div class="modal fade" id="delete_document_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">ATTENTION!!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('student_document_delete') }}" method="POST">
                        @csrf
                        <div class="text-center my-3">
                            <i class="fas fa-trash fa-4x text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="text-center display-5 font-weight-bold">
                            Are You Sure ?
                        </div>

                        <input type="hidden" id="document_id" name="document_id" value="">
                        <div class="modal-footer justify-content-center">
                            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection

@section('custom_js')
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    {{-- ------------Delete Payment Script-------------- --}}
    <script>
        $(document).on('click', '.delete_document_modal', function () {
            var document_id = $(this).attr('data-document_id');
            $('#document_id').val(document_id);
            $('#delete_document_modal').modal('show');
        });
    </script>




@endsection
