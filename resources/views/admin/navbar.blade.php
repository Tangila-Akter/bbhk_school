<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_notice') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Notice</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Academic</span>
            
          </a>
        
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{ url('/admin_routine') }}">
                <span class="menu-title">Class routine</span>
              </a>
            </li>
            <li><a class="dropdown-item" href="{{ url('/admin_syllabus') }}">Syllabus</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_exam') }}">Exam Routine</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_calender') }}">Academic Calender</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Administra</span>
            
          </a>
        
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{ url('/admin_governing') }}">Governing body details</a>
            </li>
            <li><a class="dropdown-item" href="{{ url('/admin_school') }}">School Documents</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_staffs') }}">Staffs Documents</a></li>
            <li>
              <a class="dropdown-item" href="{{ url('/admin_job') }}">
                <span class="menu-title">Job & Vacancies</span>
              </a>
          </li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_result') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Result</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_job') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Job & Vacancies</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_contact') }}">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Contact us</span>
        </a>
      </li>


    </ul>
  </nav>