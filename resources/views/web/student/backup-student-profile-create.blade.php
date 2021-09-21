@extends('layouts.web')

@section('custom_styles')
    <style>
        .nice-select {
            width: 100%;
        }

        .nice-select .list {
            width: 100%
        }

    </style>


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
            <h1>Cascading Dropdown Location of Bangladesh</h1>
            <h3>Create Form</h3>
            <form name="" id="" action="" method="">
                <!-- This hidden input field is necessary for the js file. -->
                <input type="hidden" id="form_type_dropdown" value="CREATE">
                <!-- Value = "CREATE" for create form and value = "EDIT" for edit form. -->
                <label>Division:</label>
                <select name="division_dropdown" id="division_dropdown">
                    <option selected="selected">Please select division</option>
                </select>
                <br><br>
                <label>District:</label>
                <select name="district_dropdown" id="district_dropdown">
                    <option selected="selected">Please select district</option>
                </select>
                <br><br>
                <label>Upazila:</label>
                <select name="upazila_dropdown" id="upazila_dropdown">
                    <option selected="selected">Please select upazila</option>
                </select>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>



        <div class="container">
            <div class="row">

                {{-- Student Dashboard Section --}}
                @include('web.student.sidebar-menu')
                {{-- Student Dashboard Section --}}


                <div class="col-md-8">
                    <div class="account-details">
                        <h5 class="text-center text-danger">Please provide the below information to Create your profile</h5>
                        <br>

                        <h3>Basic Information</h3>
                        <form class="basic-info" action="{{ route('store_student_information') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                                            value="{{ auth()->user()->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email"
                                            value="{{ auth()->user()->email }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Your Phone"
                                            value="{{ auth()->user()->phone }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input type="text" name="father_name" class="form-control"
                                            placeholder="Your Father's Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Name</label>
                                        <input type="text" name="mother_name" class="form-control"
                                            placeholder="Your Mother's Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <button type="submit" class="account-btn">Update</button>
                                </div> --}}
                            </div>

                            <br>
                            <h3>Academic information</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level">Level <span class="text-danger font-weight-bold">*</span></label>
                                        <select name="level" id="level">
                                            {{-- <option value="">Select</option> --}}
                                            <option value="school">School</option>
                                            <option value="college">College</option>
                                            <option value="university">University</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="school">
                                    <div class="form-group">
                                        <label for="class_degree">Select Class<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select name="class_degree" id="class_degree">
                                            {{-- <option value="">Select</option> --}}
                                            <option value="Class-1">Class-1</option>
                                            <option value="Class-2">Class-2</option>
                                            <option value="Class-3">Class-3</option>
                                            <option value="Class-4">Class-4</option>
                                            <option value="Class-5">Class-5</option>
                                            <option value="Class-6">Class-6</option>
                                            <option value="Class-7">Class-7</option>
                                            <option value="Class-8">Class-8</option>
                                            <option value="Class-9">Class-9</option>
                                            <option value="Class-10">Class-10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="college">
                                    <div class="form-group">
                                        <label for="class_degree">Select Class<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select name="class_degree" id="class_degree">
                                            {{-- <option value="">Select</option> --}}
                                            <option value="Class-11">Class-11</option>
                                            <option value="Class-12">Class-12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="university">
                                    <div class="form-group">
                                        <label for="class_degree">Degree Year<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select name="class_degree" id="class_degree">
                                            {{-- <option value="">Select</option> --}}
                                            <option value="1st Year">1st Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="3rd Year">3rd Year</option>
                                            <option value="4th Year">4th Year</option>
                                            <option value="5th Year">5th Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution</label>
                                        <input type="text" name="institution" class="form-control"
                                            placeholder="Your Institution">
                                    </div>
                                </div>
                                <div class="col-md-6" id="position">
                                    <div class="form-group">
                                        <label>Class Position</label>
                                        <input type="text" name="position" class="form-control"
                                            placeholder="Your Class Position">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marks/CGPA</label>
                                        <input type="text" name="marks_cgpa" class="form-control" placeholder="CGPA">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" name="semester" class="form-control" placeholder="Semester">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" name="year" class="form-control" placeholder="Year">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    {{-- <button type="submit" class="account-btn">Edit</button> --}}
                                    {{-- <button type="submit" class="account-btn">Save</button> --}}
                                </div>
                            </div>



                            <h3>Present Address</h3>
                            <div class="row">
                                <input type="hidden" id="" value="PRESENT" name="address_type_present">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- This hidden input field is necessary for the js file. -->
                                        <input type="hidden" id="form_type" value="CREATE">
                                        <!-- Value = "CREATE" for create form and value = "EDIT" for edit form. -->
                                        <label>Division:</label>
                                        <select name="division" id="division">
                                            <option selected="selected" name="division">Please select division</option>
                                        </select>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District:</label>
                                        <select name="district" id="district">
                                            <option selected="selected">Please select district</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upazila:</label>
                                        <select name="upazila" id="upazila">
                                            <option selected="selected">Please select upazila</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input type="text" name="area" class="form-control" placeholder="Your Area">
                                    </div>
                                </div>

                            </div>

                            <h3>Parmanent Address</h3>
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 18px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="trigger"
                                            name="same_as_present">
                                        <label class="form-check-label" for="trigger">
                                            Same as Present Address
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6" id="division_check">
                                    <div class="form-group">
                                        <!-- This hidden input field is necessary for the js file. -->
                                        <input type="hidden" id="form_type" value="CREATE">
                                        <!-- Value = "CREATE" for create form and value = "EDIT" for edit form. -->
                                        <label>Division:</label>
                                        <select name="division" id="division">
                                            <option selected="selected" name="division">Please select division</option>
                                        </select>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="col-md-6" id="district_check">
                                    <div class="form-group">
                                        <label>District:</label>
                                        <select name="district" id="district">
                                            <option selected="selected">Please select district</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="upazila_check">
                                    <div class="form-group">
                                        <label>Upazila:</label>
                                        <select name="upazila" id="upazila">
                                            <option selected="selected">Please select upazila</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="area_check">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input type="text" name="area" class="form-control" placeholder="Your Area">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    {{-- <button type="submit" class="account-btn">Edit</button> --}}
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>



                        {{-- <h3>Social links</h3>
                        <form class="candidates-sociak">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" placeholder="www.facebook.com/user">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="number" class="form-control" placeholder="www.twitter.com/user">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text" class="form-control" placeholder="www.Linkedin.com/user">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Github</label>
                                        <input type="text" class="form-control" placeholder="www.Github.com/user">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('custom_js')

    <script src="{{ asset('assets/js/class-level-option.js') }}"></script>
    <script>
        $('#trigger').on('change', function() {
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>


    <script>
        $(function() {
            // Get the form fields and hidden div
            var checkbox = $("#trigger");
            var division = $("#division_check");
            var district = $("#district_check");
            var upazila = $("#upazila_check");
            var area = $("#area_check");

            //Taking Present address values 
            var division_pre = document.getElementById("areaA");

            // Hide the fields.
            // Use JS to do this in case the user doesn't have JS
            division.show();
            district.show();
            upazila.show();
            area.show();

            // Setup an event listener for when the state of the
            // checkbox changes.
            checkbox.change(function() {
                // Check to see if the checkbox is checked.
                if (checkbox.is(":checked")) {
                    // Show the hidden fields.
                    division.hide();
                    district.hide();
                    upazila.hide();
                    area.hide();
                    // Populate the input.
                } else {

                    division.show();
                    district.show();
                    upazila.show();
                    area.show();

                }
            });
        });
    </script>

@endsection
