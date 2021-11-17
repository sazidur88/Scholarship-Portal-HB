@extends('layouts.web')

@section('custom_styles')
    <style>
        .blink_me {
            animation: blinker 1500ms linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: .65;
            }
        }
    </style>
@endsection

@section('content')

    <section class="page-title title-bg8">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Dashboard</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>


    <section class="candidate-details pt-100 pb-100">
        <div class="container">
            <div class="row">


                {{-- Student Dashboard Section --}}
                @include('web.student.sidebar-menu')
                {{-- Student Dashboard Section --}}

                <div class="col-lg-8">
                    @include('include.messages')

                    <div class="candidate-profile">
                        <div class="profile-thumb">
                            <img src="{{ asset('assets/img/account.jpg') }}" alt="shikkha britti">
                            <h3>{{ Auth::user()->name }}</h3>
                            @if($student_data)
                            <p>Student ID: {{$student_data->sid}}</p>
                            @endif
                            <p>Scholarship Candidate</p>

                        </div>
                        <ul>
                            <li>
                                <a href="">
                                    <i class='bx bxs-phone'></i>
                                    {{ Auth::user()->phone }}
                                </a>
                            </li>
                            <li>
                                <a href="email:{{ Auth::user()->email }}">
                                    <i class='bx bxs-envelope'></i>
                                    <span class="">{{ Auth::user()->email }}</span>
                                </a>
                            </li>
                        </ul>
                        @cannot('student-can')
                        <div class="candidate-social blink_me">
                            <a href="{{route('student_profile_create')}}" target=""><button type="button" class="btn btn-warning">Please Compleye Your
                                    Profile</button></a>
                        </div>
                        @endcannot

                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- 
    <section class="subscribe-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Get New Scholarship Notifications</h2>
                        <p>Subscribe & get all related scholarships notification</p>
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
    </section> --}}

@endsection

@section('custom_js')

@endsection
