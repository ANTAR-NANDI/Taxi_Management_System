  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
          <img src="../public/Admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Taxi Management</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="../public/Admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="index.php" class="d-block">Alexander Pierce</a>
              </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="index.php" class="nav-link active">

                          <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Taxies
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="add_taxi.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Taxi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="all_taxies.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Taxies</p>
                              </a>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Drivers
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="add_driver.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Driver</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="all_drivers.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Drivers</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Rents
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="assign.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Assign Taxies</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="rents.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Rents List</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="bookings.php" class="nav-link">
                          <i class="nav-icon fas fa-columns"></i>
                          <p>
                              Bookings
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="messages.php" class="nav-link">
                          <i class="nav-icon fas fa-columns"></i>
                          <p>
                              Message
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="?sign=out" class="nav-link">
                          <i class="nav-icon fas fa-columns"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>