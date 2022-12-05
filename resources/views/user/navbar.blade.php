<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">BBHK</span>School</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse" align="center">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{ url('home') }}" class="nav-item nav-link ">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('notice1') }}" class="nav-item nav-link">Notice</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Academic</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ url('admission') }}" class="dropdown-item">Admission</a>
                        <a href="{{ url('rules') }}" class="dropdown-item">Rules & regulation</a>
                        <a href="{{ url('routine_doc') }}" class="dropdown-item">Class routine</a>
                        <a href="{{ url('syllabus_doc') }}" class="dropdown-item">Syllabus</a>
                        <a href="{{ url('exam_doc') }}" class="dropdown-item">Exam Routine</a>
                        <a href="{{ url('calender1') }}" class="dropdown-item">Academic Calendar</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Administra</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a  class="dropdown-item">
                            @if (Route::has('login'))
                            
                                @auth
                                  <li><x-app-layout></x-app-layout></li>
                                @else
                                <a href="{{ route('login') }}" class="dropdown-item">Admin Login</a>
                                @endauth
                            
                        @endif</a>
                        <a href="{{ url('governing_doc') }}" class="dropdown-item">Governing body details</a>
                        <a href="{{ url('school_doc') }}" class="dropdown-item">School Documents</a>
                        <a href="{{ url('staff_doc') }}" class="dropdown-item">Staffs Documents</a>
                        <a href="{{ url('job') }}" class="dropdown-item">Job & Vacancies Documents</a>
                    </div>
                </div>
                <a href="{{ url('gallery') }}" class="nav-item nav-link">Gallery</a>
                <a href="{{ url('results') }}" class="nav-item nav-link">Results</a>
                <a href="{{ url('payment') }}" class="nav-item nav-link">Payment</a>
                
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>