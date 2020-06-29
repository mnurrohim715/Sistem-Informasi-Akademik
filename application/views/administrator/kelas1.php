<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> KELAS 10
</div>

<div class="alert alert-success" role="alert">
<td><?php echo anchor('administrator/kelas','<button class="btn btn-sm btn-primary mb-3"> HOME</button>')?></td>
<td><?php echo anchor('administrator/kelas/kelas1','<button class="btn btn-sm btn-primary mb-3"> Kelas 10</button>')?></td>
<td><?php echo anchor('administrator/kelas/kelas2','<button class="btn btn-sm btn-primary mb-3"> Kelas 11</button>')?></td>
<td><?php echo anchor('administrator/kelas/kelas3','<button class="btn btn-sm btn-primary mb-3"> Kelas 12</button>')?></td>
</div>
<?php echo $this->session->flashdata('pesan')?>
<table class="table table-bordered table=striped table-hover">
  <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>NISN</th>
    <th>KELAS</th>
    <th>AKSI</th>
  </tr> 
  
  <?php
  $no = 1;

  foreach ($data_siswa1 as $ds) : ?>

    <tr>
      <td width="20px"><?php echo $no++ ?></td>
      <td><?php echo $ds->name ?></td>
      <td><?php echo $ds->nisn ?></td>
      <td><?php echo $ds->kelas ?></td>
      <td width="20px"><?php echo anchor('administrator/kelas/edit_kelas1/'.$ds->id_siswa,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>')?>
    </tr>
    <?php endforeach; ?>

    <?php foreach ($data_siswa2 as $ds) : ?>

<tr>
  <td width="20px"><?php echo $no++ ?></td>
  <td><?php echo $ds->name ?></td>
  <td><?php echo $ds->nisn ?></td>
  <td><?php echo $ds->kelas ?></td>
  <td width="20px"><?php echo anchor('administrator/kelas/edit_kelas1/'.$ds->id_siswa,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>')?>
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