<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('siswa/dashboard');?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url(); ?>assets/img/sman20kabtng.jpg" style="width:50px" ></img>
        </div>
        <div class="sidebar-brand-text mx-1">SIAKAD</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/profile');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/edit_data');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Edit Profile</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/edit_akun');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Edit Akun</span></a>
      </li>


      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/nilai_tugas');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nilai Tugas</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/nilai_uts');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nilai UTS</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('siswa/nilai_uas');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nilai UAS</span></a>
      </li>


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('siswa/auth/logout')?>">
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
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/siswa/'). $user['image'];?>" style="width:50px" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('administrator/auth/logout')?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

 