<nav class="topnav navbar navbar-light">
  <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
    <i class="fe fe-menu navbar-toggler-icon"></i>
  </button>
  
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
        <i class="fe fe-sun fe-16"></i>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="avatar avatar-sm mt-2">
          <img width="50" src="<?php echo $_SESSION["imgpath"];?>" alt="..." class="avatar-img rounded-circle">
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="./profile.php">Profile</a>
        <a class="dropdown-item" href="./settings.php">Settings</a>
      </div>
    </li>
  </ul>
</nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <br/>
    <br/>
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.php">
        <img alt="vitt-app-logo" src="./assets/images/Vitt.png" style="width: 50%;" />
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="./" aria-expanded="false" class="nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1" id="p-header">
      <span>Companies & Sectors</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#company" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-server fe-16"></i>
          <span class="ml-3 item-text">Company</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="company">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./company_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Company Add</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./company_mapper.php">
              <i class="fe fe-trello fe-16"></i>
              <span class="ml-1 item-text">Company Mapper</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./company_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">Company List</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#mes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">Macro Eco Sector</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="mes">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./mes_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">M.E.S Add</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./mes_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">M.E.S List</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#sec" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-truck fe-16"></i>
          <span class="ml-3 item-text">Sectorial Index</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="sec">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./sector_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Sectorial Index Add</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./sector_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">Sectorial Index List</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#ids" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-tool fe-16"></i>
          <span class="ml-3 item-text">Industry Index</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="ids">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./industry_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Industry Index Add</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./industry_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">Industry Index List</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#bids" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-database fe-16"></i>
          <span class="ml-3 item-text">Basic Industry</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="bids">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./basic_industry_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Basic Industry Add</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./basic_industry_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">Basic Industry View</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>    
    <p class="text-muted nav-heading mt-4 mb-1" id="h-indices">
      <span>Indices</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#g-indices" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-globe fe-16"></i>
          <span class="ml-3 item-text">Global Indices</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="g-indices">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./global_indice_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Add Indice</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./global_indices_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">List All Indices</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1" id="h-crude">
      <span>Notification Scheduler</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#g-crude" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-bell fe-16"></i>
          <span class="ml-3 item-text">Notification</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="g-crude">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./instant_push.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Instant Push</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./schedule_push.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Schedule Push</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1" id="h-blog">
      <span>Blog Management</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-file-text fe-16"></i>
          <span class="ml-3 item-text">Blog</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="blog">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./blog_add.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Add Blog</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./blog_list.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">List All Blogs</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <p class="text-muted nav-heading mt-4 mb-1" id="e-header">
      <span>Employee Management</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-user fe-16"></i>
          <span class="ml-3 item-text">Employees</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="employee">
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./admin_add_employee.php">
              <i class="fe fe-plus-square fe-16"></i>
              <span class="ml-1 item-text">Add Employee</span>
            </a>
          </li>
          <li class="nav-item sauth">
            <a class="nav-link pl-3" href="./admin_list_employee.php">
              <i class="fe fe-eye fe-16"></i>
              <span class="ml-1 item-text">List Employee</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
       
    <div class="btn-box w-100 mt-4 mb-1">
      <a href="./logout.php" target="_self" class="btn mb-2 btn-danger btn-lg btn-block">
        <i class="fe fe-log-out fe-12 mx-2"></i><span class="small">Log Out</span>
      </a>
    </div>
  </nav>
</aside>