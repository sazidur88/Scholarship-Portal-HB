@extends('layouts.web')

@section('custom_styles')
    <link href="{{ asset('assets/css/bs-datepicker.min.css') }}" rel="stylesheet">

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
                    <div class="account-details">

                        <h3>Basic Information</h3>
                        <form class="basic-info" action="{{ route('student_update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="student_id" value="{{ $student_data->id }}">
                            <input type="hidden" name="degrees_id" value="{{ $academic_data->id }}">


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                                            value="{{ $student_data->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email"
                                            value="{{ $student_data->email }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="phone" pattern="[0]+[1]+[7/8/9/6/5/4/3]+[0-9]{8}" name="phone"
                                            class="form-control" placeholder="Your Phone"
                                            value="{{ $student_data->phone }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control"
                                            value="{{ (new DateTime($student_data->dob))->format('Y-m-d') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input type="text" name="father_name" class="form-control"
                                            placeholder="Your Father's Name" value="{{ $student_data->father_name }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father's Profession</label>
                                        <input type="text" name="father_profession" class="form-control"
                                            placeholder="Your Father's Profession"
                                            value="{{ $student_data->father_profession }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Name</label>
                                        <input type="text" name="mother_name" class="form-control"
                                            placeholder="Your Mother's Profession"
                                            value="{{ $student_data->mother_name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Profession</label>
                                        <input type="text" name="mother_profession" class="form-control"
                                            placeholder="Your Mother's Name"
                                            value="{{ $student_data->mother_profession }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Siblings and their status (if any)</label>
                                        <textarea name="siblings" class="form-control" placeholder="Write details"
                                            style="max-height: 80px; height: 80px">{{ $student_data->siblings }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            {{-- <option value="">Select</option> --}}
                                            <option value="Male"
                                                {{ old('gender', $student_data->gender) == 'Male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="Female"
                                                {{ old('gender', $student_data->gender) == 'Female' ? 'selected' : '' }}>
                                                Female</option>
                                            <option value="Other"
                                                {{ old('gender', $student_data->gender) == 'Other' ? 'selected' : '' }}>
                                                Other</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <button type="submit" class="account-btn">Update</button>
                                </div> --}}
                            </div>

                            <br>
                            <h3>Academic information</h3>
                            <div class="row dynm_field">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level">Level <span class="text-danger font-weight-bold">*</span></label>
                                        <select class="form-control" name="level" id="level">
                                            {{-- <option value="">Select</option> --}}
                                            <option value="School"
                                                {{ old('level', $academic_data->level) == 'School' ? 'selected' : '' }}>
                                                School</option>
                                            <option value="College"
                                                {{ old('level', $academic_data->level) == 'College' ? 'selected' : '' }}>
                                                College</option>
                                            <option value="University/Diploma"
                                                {{ old('level', $academic_data->level) == 'University/Diploma' ? 'selected' : '' }}>
                                                University / Diploma</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6" id="school">
                                    <div class="form-group">
                                        <label for="class_degree">Select Class<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select class="form-control" name="class_degree_sch" id="class_degree">
                                            <option value="">Select</option>
                                            <option value="Class-1"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-1' ? 'selected' : '' }}>
                                                Class-1</option>
                                            <option value="Class-2"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-2' ? 'selected' : '' }}>
                                                Class-2</option>
                                            <option value="Class-3"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-3' ? 'selected' : '' }}>
                                                Class-3</option>
                                            <option value="Class-4"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-4' ? 'selected' : '' }}>
                                                Class-4</option>
                                            <option value="Class-5"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-5' ? 'selected' : '' }}>
                                                Class-5</option>
                                            <option value="Class-6"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-6' ? 'selected' : '' }}>
                                                Class-6</option>
                                            <option value="Class-7"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-7' ? 'selected' : '' }}>
                                                Class-7</option>
                                            <option value="Class-8"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-8' ? 'selected' : '' }}>
                                                Class-8</option>
                                            <option value="Class-9"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-9' ? 'selected' : '' }}>
                                                Class-9</option>
                                            <option value="Class-10"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-10' ? 'selected' : '' }}>
                                                Class-10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="college">
                                    <div class="form-group">
                                        <label for="class_degree">Select Class<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select class="form-control" name="class_degree_col" id="class_degree">
                                            <option value="">Select</option>
                                            <option value="Class-11"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-11' ? 'selected' : '' }}>
                                                Class-11</option>
                                            <option value="Class-12"
                                                {{ old('class_degree', $academic_data->class_degree) == 'Class-12' ? 'selected' : '' }}>
                                                Class-12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="university">
                                    <div class="form-group">
                                        <label for="class_degree">Degree Year<span
                                                class="text-danger font-weight-bold">*</span></label>
                                        <select class="form-control" name="class_degree_uni" id="class_degree">
                                            <option value="">Select</option>
                                            <option value="1st Year"
                                                {{ old('class_degree', $academic_data->class_degree) == '1st Year' ? 'selected' : '' }}>
                                                1st Year</option>
                                            <option value="2nd Year"
                                                {{ old('class_degree', $academic_data->class_degree) == '2nd Year' ? 'selected' : '' }}>
                                                2nd Year</option>
                                            <option value="3rd Year"
                                                {{ old('class_degree', $academic_data->class_degree) == '3rd Year' ? 'selected' : '' }}>
                                                3rd Year</option>
                                            <option value="4th Year"
                                                {{ old('class_degree', $academic_data->class_degree) == '4th Year' ? 'selected' : '' }}>
                                                4th Year</option>
                                            <option value="5th Year"
                                                {{ old('class_degree', $academic_data->class_degree) == '5th Year' ? 'selected' : '' }}>
                                                5th Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="institution">Institution</label>
                                        <input type="text" name="institution" class="form-control"
                                            placeholder="Your Institution" id="institution"
                                            value="{{ $academic_data->institution }}">
                                    </div>
                                </div>
                                <div class="col-md-6" id="position">
                                    <div class="form-group">
                                        <label>Class Position</label>
                                        <input type="number" name="position" class="form-control"
                                            placeholder="Your Class Position" value="{{ $academic_data->position }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marks/CGPA</label>
                                        <input type="number" step=0.01 name="marks_cgpa" class="form-control"
                                            placeholder="CGPA" value="{{ $academic_data->marks_cgpa }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" name="semester" class="form-control" placeholder="Semester"
                                            value="{{ $academic_data->semester }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control" name="year" id="datepicker"
                                            value="{{ $academic_data->year }}" />

                                    </div>
                                </div>
                                <div class="col-md-6" id="ssc_year">
                                    <div class="form-group">
                                        <label>SSC Passing Year</label>
                                        <input type="text" class="form-control" name="ssc_year"
                                            value="{{ $academic_data->ssc_year }}" id="datepicker-1" />
                                    </div>
                                </div>
                                <div class="col-md-6" id="ssc_institution">
                                    <div class="form-group">
                                        <label>SSC Institution Name</label>
                                        <input type="text" name="ssc_institution" class="form-control"
                                            placeholder="SSC Institution Name" id="ssc_institution"
                                            value="{{ $academic_data->ssc_institution }}">
                                    </div>
                                </div>
                                <div class="col-md-6" id="ssc_gpa">
                                    <div class="form-group">
                                        <label>SSC GPA</label>
                                        <input type="number" step=0.01 name="ssc_gpa" class="form-control"
                                            placeholder="SSC GPA" value="{{ $academic_data->ssc_gpa }}">
                                    </div>
                                </div>
                                <div class="col-md-6" id="hsc_year">
                                    <div class="form-group">
                                        <label>HSC Passing Year</label>
                                        <input type="text" class="form-control" name="hsc_year" id="datepicker-2"
                                            value="{{ $academic_data->hsc_year }}" />
                                    </div>
                                </div>
                                <div class="col-md-6" id="hsc_institution">
                                    <div class="form-group">
                                        <label>HSC Institution Name</label>
                                        <input type="text" name="hsc_institution" class="form-control"
                                            placeholder="HSC Institution Name" id="hsc_institution"
                                            value="{{ $academic_data->hsc_institution }}">
                                    </div>
                                </div>
                                <div class="col-md-6" id="hsc_gpa">
                                    <div class="form-group">
                                        <label>HSC GPA</label>
                                        <input type="number" step=0.01 name="hsc_gpa" class="form-control"
                                            placeholder="HSC GPA" value="{{ $academic_data->hsc_gpa }}">
                                    </div>
                                </div>
                                {{-- <div class=""> --}}

                                @forelse ($achievements as $achievement)
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label>Achievement {{ $loop->index + 1 }}</label>
                                            <textarea id="" name="achievement[]" class="form-control"
                                                placeholder=" (e.g., athlete, debater, organizer, etc.)">{{ $achievement->achievement }}</textarea>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                                {{-- </div> --}}


                                <div class="col-md-12">
                                    {{-- <button type="submit" class="account-btn">Edit</button> --}}
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="add_button" title="Add Achievements"><i
                                    class="bx bx-plus">Add Achievements</i></a>


                            <br>
                            <br>
                            <h3>Reference Details</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference name</label>
                                        <input type="text" name="reference_name" class="form-control"
                                            placeholder="Enter reference name"
                                            value="{{ $student_data->reference_name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profession</label>
                                        <input type="text" name="reference_profession" class="form-control"
                                            placeholder="Enter profession"
                                            value="{{ $student_data->reference_profession }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="phone" name="reference_phone" class="form-control"
                                            placeholder="Enter contact number"
                                            value="{{ $student_data->reference_phone }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    {{-- <button type="submit" class="account-btn">Save</button> --}}
                                </div>
                            </div>
                            <br>

                            <h3>Financial Information</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Family Income (Monthly)</label>
                                        <input type="number" name="family_income" class="form-control"
                                            placeholder="Enter monthly family income"
                                            value="{{ $student_data->family_income }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Income Source</label>
                                        <input type="text" name="income_source" class="form-control"
                                            placeholder="Enter income source" value="{{ $student_data->income_source }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Any Other Scholarship</label>
                                        <textarea name="other_scholarship" class="form-control"
                                            placeholder="Please write details (if any)"
                                            style="max-height: 80px; height: 80px">{{ $student_data->other_scholarship }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Reason for Financial Support</label>
                                        <textarea name="reason" class="form-control" placeholder="Please write details"
                                            style="max-height: 80px; height: 80px">{{ $student_data->reason }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    {{-- <button type="submit" class="account-btn">Save</button> --}}
                                </div>
                            </div>

                            <br>

                            <br>

                            <h3>Present Address</h3>
                            <div class="row">
                                @forelse ($addresses_present as $present)
                                    <input type="hidden" name="present_address_id" value="{{ $present->id }}">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" id="form_type_present" value="EDIT">
                                            <label>Division:</label>
                                            <select class="form-control" id="division_present" name="division_present">
                                                <option selected="selected" name="division_present" value="">
                                                    {{ $present->division }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>District:</label>
                                            <select class="form-control" id="district_present" name="district_present">
                                                <option selected="selected">{{ $present->district }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upazila:</label>
                                            <select class="form-control" id="upazila_present" name="upazila_present">
                                                <option selected="selected">{{ $present->upazila }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" name="area_present" class="form-control"
                                                placeholder="House and Area details" value="{{ $present->area }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        {{-- <button type="submit" class="account-btn">Save</button> --}}
                                    </div>

                            </div>

                            <br>
                            <h3>Permanent Address</h3>
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 18px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            value="{{ $present->same_as_present }}" id="trigger" name="same_as_present">

                                        {{-- <input class="form-check-input" type="checkbox" value="1" id="trigger"
                                            name="same_as_present"> --}}
                                        <label class="form-check-label" for="trigger">
                                            Same as Present Address
                                        </label>
                                    </div>
                                </div>
                            @empty
                                @endforelse


                                @forelse ($addresses_permanent as $permanent)
                                    <input type="hidden" name="permanent_address_id" value="{{ $permanent->id }}">
                                    {{-- <input type="text" name="permanent_address_id" value="{{ $permanent->id }}"> --}}

                                    <div class="col-md-6" id="division_check">
                                        <div class="form-group">
                                            <!-- This hidden input field is necessary for the js file. -->
                                            <input type="hidden" id="form_type_permanent" value="EDIT">
                                            <!-- Value = "CREATE" for create form and value = "EDIT" for edit form. -->
                                            <label>Division:</label>
                                            <select class="form-control" name="division_permanent"
                                                id="division_permanent">
                                                <option selected="selected" name="division_permanent">
                                                    {{ $permanent->division }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="district_check">
                                        <div class="form-group">
                                            <label>District:</label>
                                            <select class="form-control" name="district_permanent"
                                                id="district_permanent">
                                                <option selected="selected">{{ $permanent->district }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="upazila_check">
                                        <div class="form-group">
                                            <label>Upazila:</label>
                                            <select class="form-control" name="upazila_permanent" id="upazila_permanent">
                                                <option selected="selected">{{ $permanent->upazila }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="area_check">
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" name="area_permanent" class="form-control"
                                                placeholder="House and Area details" value="{{ $permanent->area }}">
                                        </div>
                                    </div>
                                @empty
                                @endforelse

                            </div>


                            <div class="col-md-12">
                                <button type="submit" class="account-btn">Update Information</button>
                                {{-- <button type="submit" class="account-btn">Save</button> --}}
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

@section('custom_js')
    <script src="{{ asset('assets/js/class-level-option.js') }}"></script>
    <script src="{{ asset('assets/js/bs-datepicker.min.js') }}"></script>
    <script>
        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true //to close picker once year is selected
        });
        $("#datepicker-1").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true //to close picker once year is selected
        });
        $("#datepicker-2").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true //to close picker once year is selected
        });
    </script>



    {{-- <script>
        $(window).on('load', function() {

            if(document.getElementById("class_degree_sch").value == 'School'){
                document.getElementById("class_degree_sch").value = "{{ $academic_data->class_degree }}";

            }
            else if(document.getElementById("class_degree_col").value == 'College'){
                document.getElementById("class_degree_col").value = "{{ $academic_data->class_degree }}";
            }
            else if(document.getElementById("class_degree_uni").value == 'University'){
            document.getElementById("class_degree_uni").value = "{{ $academic_data->class_degree }}";
            }

        });
    </script> --}}

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
                    '<div class="col-md-6"><div class="form-group"><label>Significant Achievement ' +
                    clicks +
                    '</label><textarea  id="" name="achievement[]" class="form-control" placeholder=" (e.g., athlete, debater, organizer, etc.)"></textarea></div><a href="javascript:void(0);" class="remove_button"><i class="fa fa-close text-danger">Remove</i></a></div>'; //New input field html
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
    {{-- <script>
        this.getField("myField").display = display.visible;
        this.getField("myField").required = true;

        this.getField("myField").display = display.hidden;
        this.getField("myField").required = false;
    </script> --}}

    <script>
        $('#trigger').on('change', function() {
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>



    <script>
        $(function() {
            // Get the form fields 
            var checkbox = $("#trigger");
            var division = $("#division_check");
            var district = $("#district_check");
            var upazila = $("#upazila_check");
            var area = $("#area_check");

            // Show the fields.
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
                    // Hide the visible fields.
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
