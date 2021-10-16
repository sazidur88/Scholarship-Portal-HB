<div class="col-md-4" style="padding-bottom: 15px">
    <div class="account-information">
        <div class="profile-thumb">
            <img src="{{ asset('assets/img/account.jpg') }}" alt="account holder image"><br>
            <h2><i class="bx bxs-camera"></i></h2>
            <h3>{{ auth()->user()->name }}</h3>
            <p>Scholarship Candidate</p>
        </div>
        <ul>
                <li>
                    <a href="{{ route('student_dashboard') }}"
                        class="{{ \Request::route()->getName() == 'student_dashboard' ? 'active' : '' }}">
                        <i class='bx bxs-dashboard'></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('student_profile', auth()->user()->id) }}"
                        class="{{ \Request::route()->getName() == 'student_profile' ? 'active' : '' }}">
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                </li>
            @can('student-can')
                <li>
                    <a href="{{ route('student_document')}}"
                        class="{{ \Request::route()->getName() == 'student_document' ? 'active' : '' }}">
                        <i class='bx bx-user'></i>
                        Documents
                    </a>
                </li>

            {{-- <li>
                <a href="{{ route('student_edit')}}"
                    class="{{ \Request::route()->getName() == 'student_edit' ? 'active' : '' }}">
                    <i class='bx bx-user'></i>
                    Edit Profile
                </a>
            </li> --}}
            <li>
                <a href="#">
                    <i class='bx bx-briefcase'></i>
                    Applied Scholarships
                </a>
            </li>
            @endcan

            <li>
                <a href="{{ route('edit_user_info') }}"
                    class="{{ \Request::route()->getName() == 'edit_user_info' ? 'active' : '' }}">
                    <i class='bx bx-cog'></i>
                    Settings
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class='bx bx-log-out'></i>
                    Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>

        </ul>
    </div>
</div>
