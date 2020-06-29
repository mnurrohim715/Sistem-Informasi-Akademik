<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('administrator/dashboard');?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url(); ?>assets/img/sman20kabtng.jpg" style="width:50px" ></img>
        </div>
        <div class="sidebar-brand-text mx-1">SIAKAD</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('administrator/dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Akademik</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Akademik:</h6>
            <a class="collapse-item" href="<?= base_url('administrator/guru')?>">Data Guru</a>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Jadwal Mengajar</a>
            <a class="collapse-item" href="<?= base_url('administrator/siswa')?>">Data Siswa</a>
            <a class="collapse-item" href="<?= base_url('administrator/kelas')?>">Kelas</a>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Jadwal Pelajaran</a>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Daftar Hadir</a>
            <a class="collapse-item" href="<?= base_url('administrator/mapel')?>">Mata Pelajaran</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pengaturan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Pengaturan:</h6>
            <a class="collapse-item" href="<?= base_url('administrator/user')?>">User</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Info Sekolah</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Info Sekolah:</h6>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Tentang Sekolah</a>
            <a class="collapse-item" href="<?= base_url('administrator/kategori')?>">Kategori</a>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Fasilitas</a>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Galeri</a>
            <a class="collapse-item" href="<?= base_url('administrator/')?>">Kontak</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/auth/logout')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Log out</span></a>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          

          

          

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username;?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/img/ . $user['image']" style="width:50px" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('administrator/auth/logout')?>" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
 
          </ul>

        </nav>
        <!-- End of Topbar -->

 