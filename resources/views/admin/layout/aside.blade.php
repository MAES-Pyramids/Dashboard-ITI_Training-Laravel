<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{route('admin.index')}}"
              ><i class="menu-icon fa fa-laptop"></i>Main
            </a>
          </li>
          <li class="menu-title">Pages</li>
          <!-- /.menu-title -->

          <li class="menu-item-has-children dropdown">
            <a
              href="#"
              class="dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="menu-icon fa fa-table"></i>Tables</a
            >
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="fa fa-table"></i
                ><a href="{{route('student.index')}}">Dashboard</a>
              </li>
            </ul>
          </li>

          <li class="menu-item-has-children active dropdown">
            <a
              href="#"
              class="dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="menu-icon fa fa-th"></i>Forms</a
            >
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa fa-th"></i
                ><a href="{{route('student.create')}}">Input Form</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>