<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Edit Kelas 10
</div>
<?php foreach($data_siswa as $ds) : ?>
    <form method="post" action="<?php echo base_url('administrator/kelas/update_aksi1')?>">

    <div class="form-group">
            <lable>Nama</lable>
            <input type="hidden" name="id_siswa" value="<?php echo $ds->id_siswa ?>">
            <input type ="text" name="name" class="form-control" value="<?php echo $ds->name ?>" readonly>
            <?php echo form_error('name','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>Kelas</lable>
            <select name="kelas" class="form-control">
                <option >10 IPA 1</option>
                <option >10 IPA 2</option>
                <option >10 IPS 1</option>
                <option >10 IPS 2</option>
                <option >11 IPA 1</option>
                <option >11 IPA 2</option>
                <option >11 IPS 1</option>
                <option >11 IPS 2</option>
                <option >12 IPA 1</option>
                <option >12 IPA 2</option>
                <option >12 IPS 1</option>
                <option >12 IPS 2</option>
                </select>
            <?php echo form_error('kelas','<div class="text-danger small" ml-3>')?>
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