<div class="col-md-4" style="padding-bottom: 15px">
    <div class="account-information">
        <div class="profile-thumb">
            <img src="{{ asset('assets/img/account.jpg') }}" alt="account holder image"><br>
            <h2><i class="bx bxs-camera"></i></h2>
            <h3>{{ auth()->user()->name }}</h3>
            @if ($student_data)
                <p class="fw-bold">Student ID: {{ $student_data->sid }}</p>
            @endif
            <p class="pt-2">Scholarship Candidate</p>

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
            @role('STUDENT')
            <li>
                <a href="{{ route('student_edit', ['student_id' => $student_data->id]) }}"
                    class="{{ \Request::route()->getName() == 'student_edit' ? 'active' : '' }}">
                    <i class='bx bxs-edit'></i>
                    Edit Profile
                </a>
                {{-- <a href="{{ route('student_edit', ['student_id' => $student_data->id]) }}"><button type="submit"
                    class="profile-btn"><i class="bx bxs-edit"></i> Edit</button></a> --}}
            </li>
                <li>
                    <a href="{{ route('student_document') }}"
                        class="{{ \Request::route()->getName() == 'student_document' ? 'active' : '' }}">
                        <i class='bx bx-file'></i>
                        Documents
                    </a>
                </li>


                <li>
                    <a href="{{ route('student_applications_index') }}">
                        <i class='bx bx-briefcase'></i>
                        Applied Scholarships
                    </a>
                </li>
            @endrole


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
