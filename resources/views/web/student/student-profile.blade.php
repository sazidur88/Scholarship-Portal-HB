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
                    <div class="candidate-info-text">
                        <h3>About Me</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                    <div class="candidate-info-text candidate-education">
                        <h3>Education</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>School</h4>
                                    <p>Amherst School, USA</p>
                                    <span>2000-2010</span>
                                </div>
                                <div class="education-info">
                                    <h4>College</h4>
                                    <p>Swarthmore College, USA</p>
                                    <span>2010-2012</span>
                                </div>
                                <div class="education-info">
                                    <h4>University</h4>
                                    <p>Princeton University, USA</p>
                                    <span>2012-2016</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="education-info">
                                    <h4>School</h4>
                                    <p>Amherst School, USA</p>
                                    <span>2000-2010</span>
                                </div>
                                <div class="education-info">
                                    <h4>College</h4>
                                    <p>Swarthmore College, USA</p>
                                    <span>2010-2012</span>
                                </div>
                                <div class="education-info">
                                    <h4>University</h4>
                                    <p>Princeton University, USA</p>
                                    <span>2012-2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="candidate-info-text candidate-experience">
                            <h3>Experience</h3>
                            <ul>
                                <li>Proficient in HTML, CSS, Server-Scripting, C/C++, and Oracle</li>
                                <li>Experience with SEO</li>
                                <li>Experience Teaching Web Development</li>
                                <li>Knowledgeable in Online Advertising</li>
                                <li>Expert in LAMP Web Service Stacks</li>
                            </ul>
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
