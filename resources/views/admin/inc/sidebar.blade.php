<section id="sidebar">
  <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
      <div class="sidebar-brand-icon">
        <img src="{{ asset('images/coder_logo.png') }}" alt="" class="logo">
      </div>
      <div class="sidebar-brand-text mx-2 brand">
        <div><span class="text-coder">Coder</span><br>Institute</div>
      </div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Heading -->
    <div class="sidebar-heading">
      Databases
    </div>
  
      <!-- Nav Item - Posts -->
      <li class="nav-item {{ Request::is('admin/articles') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/articles">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Posts</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/contacts') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/contacts">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Contacts</span></a>
      </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline ">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  
  </ul>
  <!-- End of Sidebar -->
</section>
