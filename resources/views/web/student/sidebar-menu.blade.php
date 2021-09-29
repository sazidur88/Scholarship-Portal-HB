<div class="col-md-4" style="padding-bottom: 15px">
    <div class="account-information">
        <div class="profile-thumb">
            <img src="{{ asset('assets/img/account.jpg') }}" alt="account holder image">
            <h3>{{auth()->user()->name}}</h3>
            <p>Web Developer</p>
        </div>
        <ul>
            @can('student-can')
                <li>
                    <a  href="{{ route('student_dashboard') }}" class="{{ (\Request::route()->getName() == 'student_dashboard') ? 'active' : '' }}">
                        <i class='bx bxs-dashboard'></i>
                        Dashboard
                    </a>
                </li>
            @endcan
            @can('student-can')
                <li>
                    <a href="{{ route('student_profile', auth()->user()->id) }}" class="{{ (\Request::route()->getName() == 'student_profile') ? 'active' : '' }}">
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                </li>
            @endcan

            <li>
                <a href="#">
                    <i class='bx bxs-file-doc'></i>
                    Edit Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-briefcase'></i>
                    Applied Scholarships
                </a>
            </li>
            <li>
                <a href="{{route('edit_user_info')}}" class="{{ (\Request::route()->getName() == 'edit_user_info') ? 'active' : '' }}">
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
