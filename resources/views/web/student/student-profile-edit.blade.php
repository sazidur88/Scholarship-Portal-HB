@extends('layouts.web')

@section('custom_styles')

@endsection

@section('content')

    <section class="page-title title-bg10">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Student Information Edit</h2>
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
                        <form class="basic-info" action="{{route('store_student_information')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{auth()->user()->name}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{auth()->user()->email}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Your Phone" value="{{auth()->user()->phone}}" required>
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
                                        <input type="text" name="father_name" class="form-control" placeholder="Your Father's Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Name</label>
                                        <input type="text" name="mother_name" class="form-control" placeholder="Your Mother's Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender" >Gender <span class="text-danger font-weight-bold">*</span></label>
                                        <select name="gender" class="form-control" id="gender">
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
                        
                        <h3>Academic information</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level" >Level <span class="text-danger font-weight-bold">*</span></label>
                                        <select name="level" class="form-control" id="level">
                                            <option value="">Select</option>
                                            <option value="School">School</option>
                                            <option value="College">College</option>
                                            <option value="University">University</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class_degree" >Class/Degree <span class="text-danger font-weight-bold">*</span></label>
                                        <select name="class_degree" class="form-control" id="class_degree">
                                            <option value="">Select</option>
                                        <option value="Class-1">Class-1</option>
                                        <option value="Class-5">Class-5</option>
                                        <option value="Class-12">Class-12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution</label>
                                        <input type="text" name="institution" class="form-control" placeholder="Your Institution">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Class Position</label>
                                        <input type="text" name="position" class="form-control" placeholder="Your Class Position">
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
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>



                            <h3>Address</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Division</label>
                                        <input type="text" name="division" class="form-control" placeholder="Your Division">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" name="district" class="form-control" placeholder="Your District">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thana</label>
                                        <input type="text" name="thana" class="form-control" placeholder="Your Thana">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input type="text" name="area" class="form-control" placeholder="Your Area">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Region</label>
                                        <input type="text" class="form-control" placeholder="Your Region">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- <button type="submit" class="account-btn">Edit</button> --}}
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>


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

@endsection
