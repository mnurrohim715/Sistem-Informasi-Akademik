<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-eye"></i> Detail Guru
</div>




<table class="table table hover table-bordered table=striped">
<?php 
  foreach ($detail as $ds) : ?>

    <img class="mb-4" src="<?php echo base_url('assets/img/guru/').
    $ds->image ?>" style="width:150px">

    <tr>
      <td>Nama</td>
      <td><?php echo $ds->name ?></td>
    </tr>
    <tr>
      <td>NIP</td>
      <td><?php echo $ds->nip ?></td>
    </tr>
    <tr>
      <td>Mengajar</td>
      <td><?php echo $ds->mengajar ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $ds->email ?></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><?php echo $ds->password ?></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><?php echo $ds->tempat_lahir ?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><?php echo $ds->tanggal_lahir ?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?php echo $ds->agama ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $ds->kelamin ?></td>
    </tr>
    <tr>
      <td>Hp</td>
      <td><?php echo $ds->hp ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?php echo $ds->alamat ?></td>
    </tr>
    <tr>
      <td>RT/RW</td>
      <td><?php echo $ds->rtrw ?></td>
    </tr>
    <tr>
      <td>Kelurahan</td>
      <td><?php echo $ds->kel ?></td>
    </tr>
    <tr>
      <td>Kecamatan</td>
      <td><?php echo $ds->kec ?></td>
    </tr>
    <tr>
      <td>Kabupaten</td>
      <td><?php echo $ds->kab ?></td>
    </tr>
    <tr>
      <td>Provinsi</td>
      <td><?php echo $ds->prov ?></td>
    </tr>
    <tr>
      <td>Kode Pos</td>
      <td><?php echo $ds->kode_p ?></td>
    </tr>
    <tr>
      <td>Wali Kelas</td>
      <td><?php echo $ds->wali_kelas ?></td>
    </tr>
    
  
  <?php endforeach; ?>
  </table>
  <?php echo anchor('administrator/guru','<div class="btn btn-sm btn-primary">Kembali</div>')?><br>
  <br><br><br>

</div>

</div>
      <!-- End of Main Content -->

      <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Website Sekolah 2020</span>
    </div>
  </div>