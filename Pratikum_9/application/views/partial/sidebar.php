  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="javascript:void(0)" class="brand-link">
          <img src="<?= base_url() ?>/assets/dist/img/avatar4.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= base_url() ?>/assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="javascript:void(0)" class="d-block">Menu Aplikasi</a>
              </div>
          </div>



          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="<?= site_url('dashboard') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= site_url('dosen') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dosen
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= site_url('matakuliah') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Mata Kuliah
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= site_url('mahasiswa') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Mahasiswa
                          </p>
                      </a>
                  </li>




              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>