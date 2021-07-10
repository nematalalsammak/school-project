<ul class="nav">
    <li>
        <a href="{{url('admin/dashboard')}}" class="nav-link @if(request()->routeIs('admin.dashboard'))active @endif">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
        </a>
        <ul class="nav" style="display: none;">
            <li class="nav-item" style="display: list-item;">
                <a href="" class="nav-link">Parents</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"></a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{url('admin/teachers')}}" class="nav-link @if(request()->routeIs('admin.teachers.*'))active @endif">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Teachers</p>
        </a>
    </li>
    <li>
        <a href="{{url('admin/students')}}" class="nav-link @if(request()->routeIs('admin.students.*'))active @endif">
            <i class="fas fa-user-graduate"></i>
            <p>Students</p>
        </a>
    </li>
    <li>
        <a href="{{url('admin/schoolClasses')}}" class="nav-link @if(request()->routeIs('admin.schoolClasses.*'))active @endif">
            <i class="fas fa-chalkboard"></i>
            <p>School Classes</p>
        </a>
    </li>
    <li>
        <a href="./notifications.html">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Notifications</p>
        </a>
    </li>

</ul>


<div class="sidebar-menu-content">
          <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item active">
              <a href="" class="nav-link">
                <i></i>
                <span>Dashboard</span>
                ::after
              </a>
              <ul class="nav sub-group-menu sub-group-active menu-open">
                <li class="nav-item">
                  <a href="" class="nav-link">student</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">parent</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">teacher</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>