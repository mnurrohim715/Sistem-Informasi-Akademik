<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> SISWA
</div>
<?php echo $this->session->flashdata('pesan')?>

<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      10 IPA 1
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/indo_10');?>">BAHASA INDONESIA</a>
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/ing_10');?>">BAHASA INGGRIS</a>
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/mtk_10');?>">MATEMATIKA</a>
    </div>
    </div>

    <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      11 IPA 1
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/indo_11');?>">BAHASA INDONESIA</a>
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/ing_11');?>">BAHASA INGGRIS</a>
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/mtk_11');?>">MATEMATIKA</a>
    </div></div>

    <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      12 IPA 1
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/indo_12');?>">BAHASA INDONESIA</a>
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/ing_12');?>">BAHASA INGGRIS</a>
      <a class="dropdown-item" href="<?= base_url('guru/input_nilai/mtk_12');?>">MATEMATIKA</a>
    </div>
  </div>

 
<table class="table table-bordered table=striped table-hover">
  <tr>
    <th>NO</th>
    <th>NAMA SISWA</th>
    <th>KELAS</th>
    <th>HARIAN 1</th>
    <th>HARIAN 2</th>
    <th>HARIAN 3</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>AKSI</th>
  </tr>
  
  <?php
  $no = 1; 

  foreach ($b_inggris as $ing) : ?>
  

    <tr>
      <td width="20px"><?php echo $no++ ?></td>
      <td><?php echo $ing->name ?></td>
      <td><?php echo $ing->kelas ?></td>
      <td><?php echo $ing->n1 ?></td>
      <td><?php echo $ing->n2 ?></td>
      <td><?php echo $ing->n3 ?></td>
      <td><?php echo $ing->uts ?></td>
      <td><?php echo $ing->uas ?></td>
      <td width="20px"><?php echo anchor('guru/input_nilai/edit_ing12/'.$ing->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>')?>
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