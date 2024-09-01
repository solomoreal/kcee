<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" wire:ignore>
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
    <div class="sidebar-brand-icon">
      <img src="{{asset('img/logo/logo.png')}}">
    </div>
    <div class="sidebar-brand-text mx-3" href="{{route('home')}}" >Kcee Travels</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin.dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>

   <li class="nav-item">
    <a class="nav-link" href="{{route('admin.package')}}" >
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Package Management</span>
    </a>

  </li>
   <li class="nav-item">
    <a class="nav-link" href="{{route('admin.bookings')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Bookings</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.manage_tour_guide')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Tour Guides</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin.manage_users')}}">
      <i class="fas fa-fw fa-user"></i>
      <span>Users</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTable">
        <i class="fas fa-fw fa-users"></i>
        <span>Admin Management</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admins</h6>
            <a class="collapse-item" href="{{route('admin.add')}}">Register Admins</a>
            <a class="collapse-item" href="{{route('admin.permissions')}}">Admin Permissions</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.manage-flight')}}">
        <i class='fas fa-ticket-alt'></i>
      <span>Flight Details</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.flights')}}">
        <i class='fas fa-ticket-alt'></i>
      <span>Flight Bookings</span>
    </a>
</li>

<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.room-detail')}}">
        <i class='fas fa-ticket-alt'></i>
      <span>Room Details</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.room-booking')}}">
        <i class='fas fa-ticket-alt'></i>
      <span>Room Bookings</span>
    </a>
</li>

</ul>
