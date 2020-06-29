<div class="container-fluid">

  <div class="alert alert-success" role="alert">
  <i class="fas fa-tachometer-alt"></i> Profile
  </div>

  <?php echo $this->session->flashdata('pesan')?>

  <div class="card mb-4" style="max-width: px;">
            <div class="row no-gutters">
              <div class="col-md-3">
              <img src="<?= base_url('assets/img/siswa/'). $data_siswa ['image'];?>" class="card-img" alt="...">
              </div>
   
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
      <tbody>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Nama</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['name'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">NISN</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['nisn'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Mata Pelajaran</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['kelas'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Tempat Lahir</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['tempat_lahir'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Tanggal Lahir</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['tanggal_lahir'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Alamat</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['alamat'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">RT/RW</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['rtrw'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kelurahan</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['kel'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kecamatan</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['kec'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kota/Kab</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['kab'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Provinsi</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['prov'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kode Pos</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['kode_p'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Telepon</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['hp'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Jenis Kelamin</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['kelamin'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Agama</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['agama'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Email</th>
            <th style="width: 1px">:</th>
            <th><?= $data_siswa['email'];?></th>
          </tr>
        </body>
        <thead>
      </table>
    </div>
    
    <!-- /.card-body -->
  </div>

  </div>