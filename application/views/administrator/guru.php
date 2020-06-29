<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> GURU
</div>
<?php echo $this->session->flashdata('pesan')?>

<?php echo anchor('administrator/guru/tambah_guru','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Guru</button>')?>


<table class="table table-bordered table=striped table-hover">
  <tr>
    <th>NO</th>
    <th>NAMA GURU</th>
    <th>NIP</th>
    <th>EMAIL</th>
    <th>WALI KELAS</th>
    <th>MENGAJAR</th>
    <th colspan="3">AKSI</th>
  </tr>
  
  <?php
  $no = 1;

  foreach ($data_guru as $s) : ?>

    <tr>
      <td width="20px"><?php echo $no++ ?></td>
      <td><?php echo $s->name ?></td>
      <td><?php echo $s->nip ?></td>
      <td><?php echo $s->email ?></td>
      <td><?php echo $s->wali_kelas ?></td>
      <td><?php echo $s->mengajar ?></td>
      <td width="20px"><?php echo anchor('administrator/guru/detail/'.$s->id_guru,'<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div></td>')?>
      <td width="20px"><?php echo anchor('administrator/guru/update/'.$s->id_guru,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>')?>
      <td width="20px"><?php echo anchor('administrator/guru/delete/'.$s->id_guru,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></td>')?>
    </tr>

  <?php endforeach; ?>
  </table>
</div>

</div>
      <!-- End of Main Content -->

<div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Website Sekolah 2020</span>
    </div>
  </div>