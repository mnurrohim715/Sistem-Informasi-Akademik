<div class="container-fluid">

  <div class="alert alert-success" role="alert">
  <i class="fas fa-tachometer-alt"></i> Profile
  </div>


  <div class="card mb-4" style="max-width: px;">
            <div class="row no-gutters">
              <div class="col-md-3">
              <img src="<?= base_url('assets/img/guru/'). $user ['image'];?>" class="card-img" alt="...">
              </div>
   
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
      <tbody>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Nama</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['name'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th> 
            <th style="width: 200px">NIP</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['nip'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Mata Pelajaran</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['mengajar'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Wali Kelas</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['wali_kelas'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Tempat Lahir</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['tempat_lahir'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Tanggal Lahir</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['tanggal_lahir'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Alamat</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['alamat'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">RT/RW</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['rtrw'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kelurahan</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['kel'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kecamatan</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['kec'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kota/Kab</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['kab'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Provinsi</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['prov'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Kode Pos</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['kode_p'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Telepon</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['hp'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Jenis Kelamin</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['kelamin'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Agama</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['agama'];?></th>
          </tr>
          <tr>
            <th style="width: 5px"></th>
            <th style="width: 200px">Email</th>
            <th style="width: 1px">:</th>
            <th><?= $data_guru['email'];?></th>
          </tr>
        </body>
        <thead>
      </table>
    </div>
    
    <!-- /.card-body -->
  </div>

  </div>