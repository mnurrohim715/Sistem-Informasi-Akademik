<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Nilai
</div>

<?php foreach($b_inggris as $mp) : ?>
    <form method="post" action="<?php echo base_url('guru/input_nilai/update_aksi_ing10')?>">
 
        <div class="form-group">
            <lable>Nama</lable>
            <input type="hidden" name="id" value="<?php echo $mp->id ?>">
            <input type ="text" name="nama_mapel" class="form-control" value="<?php echo $mp->name ?>" readonly>
        </div>
        <div class="form-group">
            <lable>Kelas</lable>
            <input type ="text" name="kelas" class="form-control" value="<?php echo $mp->kelas ?>" readonly>
        </div>
        <div class="form-group">
            <lable>Nilai Harian 1</lable>
            <input type ="text" name="n1" class="form-control" value="<?php echo $mp->n1 ?>">
        </div>
        <div class="form-group">
            <lable>Nilai Harian 2</lable>
            <input type ="text" name="n2" class="form-control" value="<?php echo $mp->n2 ?>">
        </div>
        <div class="form-group">
            <lable>Nilai Harian 3</lable>
            <input type ="text" name="n3" class="form-control" value="<?php echo $mp->n3 ?>">
        </div>
        <div class="form-group">
            <lable>Nilai UTS</lable>
            <input type ="text" name="uts" class="form-control" value="<?php echo $mp->uts ?>">
        </div>
        <div class="form-group">
            <lable>Nilai UAS</lable>
            <input type ="text" name="uas" class="form-control" value="<?php echo $mp->uas ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

<?php endforeach; ?>

        

</div>

</div>
      <!-- End of Main Content -->

<div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Website Sekolah 2020</span>
    </div>
  </div>