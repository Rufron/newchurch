   <!-- Page Wrapper -->
   <div id="wrapper">

       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fas fa-laugh-wink"></i>
               </div>
               <div class="sidebar-brand-text mx-3">Admin Panel <sup>1</sup></div>
           </a>

           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item  active">
               <a class="nav-link" href="{{ url('/admin') }}">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Interface
           </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link" href="{{ url('/admin/admininterface') }}">
                   <i class="fas fa-user fa-fw"></i>
                   <span>Admin</span>
               </a>
           </li>

           <!-- Nav Item - Members Collapse Menu -->


           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Church Program
           </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link collapsed" href="{{ url('admin/events') }}" aria-expanded="true"
                   aria-controls="collapsePages">
                   <i class="fas fa-calendar-alt fa-fw"></i>
                   <span>Events</span>
               </a>
           </li>

           <!-- Nav Item - Charts -->
           <li class="nav-item">
               <a class="nav-link" href="{{ url('admin/addsermon') }}">
                   <i class="fas fa-book-bible fa-fw"></i>
                   <span>Sermons</span></a>
           </li>

           <!-- Nav Item - Tables -->
           <li class="nav-item">
               <a class="nav-link" href="{{ url('admin/addpastor') }}">
                   <i class="fas fa-user-tie fa-fw"></i>
                   <span>Pastors</span></a>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>


       </ul>
       <!-- End of Sidebar -->
