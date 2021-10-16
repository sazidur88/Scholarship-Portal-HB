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
                        <div class="account-details">
                            <h5 class="text-center text-danger" style="margin-bottom: 30px;">Please upload the necessary
                                Documents </h5>

                            <div class="basic-info">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">Upload Document</button>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="account-details">
                            <h5 class="text-center text-danger" style="margin-bottom: 30px;">Your Uploaded Document/s</h5>
                            <div class="basic-info">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="basic-info" action="{{ route('student_document_upload') }}"
                        enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="dynm_field">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type">Document Type</label>
                                        <select class="form-control" name="type" id="type" required>
                                            <option value="">Select</option>
                                            <option value="Birth Certificate/NID">Birth Certificate/NID</option>
                                            <option value="Studentship Certificate">Studentship Certificate</option>
                                            <option value="SSC Certificate">SSC Certificate</option>
                                            <option value="HSC Certificate">HSC Certificate</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Choose Document 1:</label>
                                        <input type="file" id="document" name="document" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <a href="javascript:void(0);" class="add_button" title="Add Document"><i class="fa fa-plus"
                                aria-hidden="true"><i class="bx bxs-file-plus"></i> Add More Files</i></a>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger"><i class="bx bx-upload"></i> Upload</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection

@section('custom_js')
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <script type="text/javascript">
        let clicks = 1;
        $(document).ready(function() {
            var maxField = 5; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var more = $('.dynm_field'); //Input field wrapper

            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function() {
                clicks += 1;
                var fieldHTML =
                    '<div class="row" style="margin-top:15px"><div class="col-md-4"><div class="form-group"> <label for="type">Document Type</label> <select class="form-control" name="type" id="type" required> <option value="">Select</option>  <option value="Birth Certificate/NID">Birth Certificate/NID</option> <option value="Studentship Certificate">Studentship Certificate</option><option value="SSC Certificate">SSC Certificate</option> <option value="HSC Certificate">HSC Certificate</option><option value="Other">Other</option>     </select>  </div> </div><div class="col-md-8"><div class="form-group"> <label>Choose Document ' +
                    clicks +
                    ':</label><input type="file" id="document" name="document[]" class="form-control" required></div> </div><a href="javascript:void(0);" class="remove_button"><i class="fa fa-close text-danger">Remove</i></a></div>'; //New input field html
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(more).append(fieldHTML); //Add field html
                }
                console.log(x);
            });

            //Once remove button is clicked
            $(more).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
                clicks--;
            });
        });
    </script>




@endsection
