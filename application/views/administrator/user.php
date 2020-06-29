<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> USER
</div>
<?php echo $this->session->flashdata('pesan')?>


<table class="table table-bordered table=striped table-hover">
  <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>PASSWORD</th>
    <th>EMAIL</th>
    <th>USER ROLE</th>
    <th>AKSI</th>
  </tr>
  
  <?php
  $no = 1;

  foreach ($user as $s) : ?>

    <tr>
      <td width="20px"><?php echo $no++ ?></td>
      <td><?php echo $s->username ?></td>
      <td><?php echo $s->password ?></td>
      <td><?php echo $s->email ?></td>
      <td><?php echo $s->role_id ?></td>
      <td width="20px"><?php echo anchor('administrator/user/delete/'.$s->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></td>')?>
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