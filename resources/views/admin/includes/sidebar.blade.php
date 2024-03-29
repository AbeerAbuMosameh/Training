<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('admin/assets/images/faces/face1.jpg')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
               aria-controls="ui-basic">
                <span class="menu-title">Student</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-group menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href={{route('students.create')}}>Add
                            Student</a></li>
                    <li class="nav-item"><a class="nav-link"
                                            href={{route('students.index')}}>Show
                            Students</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
               aria-controls="general-pages">
                <span class="menu-title">Courses</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-book menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href={{route('courses.create')}}>
                            Add Course </a></li>
                    <li class="nav-item"><a class="nav-link" href={{route('courses.index')}}> Show
                            Courses </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
            aria-controls="general-pages">
             <span class="menu-title">Register Cousre</span>
             <i class="menu-arrow"></i>
             <i class="mdi mdi-registered-trademark menu-icon"></i>
         </a>
         <div class="collapse" id="general-pages">
             <ul class="nav flex-column sub-menu">
                 <li class="nav-item"><a class="nav-link" href={{route('register_course.create')}}>
                         Add Register Cousre </a></li>
                 <li class="nav-item"><a class="nav-link" href={{route('student_course')}}> Show
                         show Registerd Cousre </a></li>
             </ul>
         </div>


        </li>
    </ul>
</nav>
