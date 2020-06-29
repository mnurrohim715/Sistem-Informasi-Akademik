<div class="container-fluid">
<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Tambah Siswa
</div>

    <?php echo form_open_multipart('administrator/siswa/tambah_siswa_aksi')?>
    
        
    <div class="form-group">
            <lable>Nama</lable>
            <input type ="text" name="name"
            placeholder="Masukan Nama Lengkap" class="form-control">
            <?php echo form_error('name','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>Password</lable>
            <input type ="password" name="password"
            placeholder="Masukan Password" class="form-control">
            <?php echo form_error('password','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>Email</lable>
            <input type ="text" name="email"
            placeholder="Masukan Email" class="form-control">
            <?php echo form_error('email','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>NISN</lable>
            <input type ="text" name="nisn"
            placeholder="Masukan NISN" class="form-control">
            <?php echo form_error('nisn','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>Aktif</lable>
            <select name="is_active" class="form-control">
                <option >1</option></select>
            <?php echo form_error('is_active','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>User Role</lable>
            <select name="role_id" class="form-control">
                <option >3</option></select>
            <?php echo form_error('role_id','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <lable>Photo</lable><br>
            <input type="file" name="image">
            <?php echo form_error('image','<div class="text-danger small" ml-3>')?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

        <?php form_close();?>

        
    </form>

</div>
</div>
      <!-- End of Main Content -->

<div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Website Sekolah 2020</span>
    </div>
  </div>