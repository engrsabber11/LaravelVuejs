 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('home')}}" class="brand-link">
      <!-- <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
           <h2 align="center">KiddoBox</h2>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="active nav-item has-treeview">
            <router-link to="/home" class="nav-link">
              <i class="nav-icon fa fa-dashboard blue"></i>&nbsp
              <p>
                Dashboard
                <!-- <i class="right fa fa-dashboard"></i> -->
              </p>
            </router-link>
          </li>
          <li class="active nav-item has-treeview">
            <router-link to="/user" class="nav-link">
              <i class="nav-icon fa fa-user pink"></i>&nbsp
              <p>
                User
              </p>
            </router-link>
          </li>
          <li class="active nav-item has-treeview">
            <router-link to="/category" class="nav-link">
              <i class="nav-icon fa fa-cogs teal"></i>&nbsp
              <p>
                Category
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/post" class="nav-link">
              <i class="nav-icon fa fa-flickr orange"></i>&nbsp
              <p>
                Post
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/order" class="nav-link">
              <i class="nav-icon fa fa-flickr orange"></i>&nbsp
              <p>
                Order
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <i class="nav-icon fa fa-power-off cyan"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>