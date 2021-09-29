@extends('layouts.web')

@section('custom_styles')

@endsection

@section('content')

    <section class="page-title title-bg8">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Candidate Details</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Candidate Details</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>


    <section class="candidate-details  resume-section pt-100 pb-100">
        <div class="container">
            <div class="row">


                {{-- Student Dashboard Section --}}
                @include('web.student.sidebar-menu')
                {{-- Student Dashboard Section --}}


                <div class="col-lg-8">
                    {{-- <div class="candidate-info-text">
                        <h3>About Me</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div> --}}
                    <div class="candidate-info-text candidate-education">
                        <h3>Personal Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Name</h4>
                                    <p>{{ $student_data->name }}</p>
                                    {{-- <span>2000-2010</span> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Email</h4>
                                    <p>{{ $student_data->email }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Phone</h4>
                                    <p>{{ $student_data->phone }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Date of Birth</h4>
                                    <p>{{ (new DateTime($student_data->dob))->format('d-M-Y') }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Father's Name</h4>
                                    <p>{{ $student_data->father_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Mother's Name</h4>
                                    <p>{{ $student_data->mother_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Gender</h4>
                                    <p>{{ $student_data->gender }}</p>
                                </div>
                            </div>
                        </div>
                        <br>                        
                    </div>
                    <div class="candidate-info-text candidate-education">
                        <h3>Educational Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Level</h4>
                                    <p>{{ $academic_data->level }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Institution</h4>
                                    <p>{{ $academic_data->institution }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Class / Degree</h4>
                                    <p>{{ $academic_data->class_degree }}</p>
                                    @if ($academic_data->semester)
                                        <span>{{ $academic_data->semester }} Semester</span>
                                    @endif
                                </div>
                            </div>
                            @if ($academic_data->position)
                                <div class="col-md-6">
                                    <div class="education-info">
                                        <h4>Position</h4>
                                        <p>{{ $academic_data->position }}</p>
                                        <span>2000-2010</span>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="candidate-info-text candidate-education">
                        <h3>Residential Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Level</h4>
                                    <p>{{ $academic_data->level }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Institution</h4>
                                    <p>{{ $academic_data->institution }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Class / Degree</h4>
                                    <p>{{ $academic_data->class_degree }}</p>
                                    @if ($academic_data->semester)
                                        <span>{{ $academic_data->semester }} Semester</span>
                                    @endif
                                </div>
                            </div>
                            @if ($academic_data->position)
                                <div class="col-md-6">
                                    <div class="education-info">
                                        <h4>Position</h4>
                                        <p>{{ $academic_data->position }}</p>
                                        <span>2000-2010</span>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="candidate-info-text candidate-experience">
                        <h3>Experience</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Name</h4>
                                    <p>{{ $student_data->name }}</p>
                                    {{-- <span>2000-2010</span> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Email</h4>
                                    <p>{{ $student_data->email }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Phone</h4>
                                    <p>{{ $student_data->phone }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Date of Birth</h4>
                                    <p>{{ (new DateTime($student_data->dob))->format('d-M-Y') }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Father's Name</h4>
                                    <p>{{ $student_data->father_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Mother's Name</h4>
                                    <p>{{ $student_data->mother_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>Gender</h4>
                                    <p>{{ $student_data->gender }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-info-text candidate-skill">
                            <h3>Skills</h3>
                            <ul>
                                <li>HTMl</li>
                                <li>CSS</li>
                                <li>JS</li>
                                <li>PHP</li>
                                <li>Oracle</li>
                                <li>C/C++</li>
                                <li>SQL</li>
                                <li>Ruby</li>
                            </ul>
                        </div>
                        <div class="candidate-info-text text-center">
                            <div class="theme-btn">
                                <a href="#" class="default-btn">Hire Me</a>
                                <a href="#" class="default-btn">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>



    <section class="subscribe-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Get New Job Notifications</h2>
                        <p>Subscribe & get all related jobs notification</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required
                            autocomplete="off">
                        <button class="default-btn sub-btn" type="submit">
                            Subscribe
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('custom_js')

@endsection
