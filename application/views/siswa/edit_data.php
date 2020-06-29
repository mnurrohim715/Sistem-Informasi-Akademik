

        <!-- Begin Page Content -->
        <div class="container-fluid">
 
          <!-- Page Heading -->
          <h3 class="h3 mb-3 text-gray-800">Edit Profile</h3>

          <div class="row">
            <div class="col-lg-8"> 

            <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('siswa/edit_data');?>">

            <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="name" name="name"
                value="<?= $data_siswa['name'];?>">
                <?= form_error('name','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>
 
            <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-40">
                <input type="password" class="form-control" id="password" name="password"
                value="<?= $data_siswa['password'];?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="email" name="email"
                value="<?= $data_siswa['email'];?>" readonly>
              </div>
            </div>
              
            <div class="form-group row">
              <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="nisn" name="nisn"
                value="<?= $data_siswa['nisn'];?>">
                <?= form_error('nisn','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                value="<?= $data_siswa['tempat_lahir'];?>">
                <?= form_error('tempat_lahir','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-40">
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                value="<?= $data_siswa['tanggal_lahir'];?>">
                <?= form_error('tanggal_lahir','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="alamat" name="alamat"
                value="<?= $data_siswa['alamat'];?>">
                <?= form_error('alamat','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="rtrw" class="col-sm-3 col-form-label">RT/RW</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="rtrw" name="rtrw"
                value="<?= $data_siswa['rtrw'];?>">
                <?= form_error('rtrw','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kel" class="col-sm-3 col-form-label">Kelurahan</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kel" name="kel"
                value="<?= $data_siswa['kel'];?>">
                <?= form_error('kel','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kec" class="col-sm-3 col-form-label">Kecamatan</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kec" name="kec"
                value="<?= $data_siswa['kec'];?>">
                <?= form_error('kec','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kab" class="col-sm-3 col-form-label">Kota/Kab</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kab" name="kab"
                value="<?= $data_siswa['kab'];?>">
                <?= form_error('kab','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="prov" class="col-sm-3 col-form-label">Provinsi</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="prov" name="prov"
                value="<?= $data_siswa['prov'];?>">
                <?= form_error('prov','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kode_p" class="col-sm-3 col-form-label">Kode Pos</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kode_p" name="kode_p"
                value="<?= $data_siswa['kode_p'];?>">
                <?= form_error('kode_p','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="hp" class="col-sm-3 col-form-label">Telepon</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="hp" name="hp"
                value="<?= $data_siswa['hp'];?>">
                <?= form_error('hp','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-40">
                <select name="kelamin" class="form-control" id="kelamin" value="<?= $data_siswa['kelamin'];?>">
                <option >Laki-laki</option>
                <option >Perempuan</option></select>
                
                
              </div>
            </div>

            <div class="form-group row">
              <label for="agama" class="col-sm-3 col-form-label">Agama</label>
              <div class="col-sm-40">
                <select name="agama" class="form-control" id="agama" value="<?= $data_siswa['agama'];?>">
                <option >Islam</option>
                <option >Kristen</option>
                <option >Hindu</option>
                <option >Budha</option></select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-2">Picture</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                  <img src="<?= base_url('assets/img/siswa/') . $data_siswa['image'];?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-7">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="image" value="<?= $data_siswa['image'];?>">Choose file</label>
                      <?= form_error('name','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row justify-content-end">
              <div class="col-sm-9">
                <button type="submit"class="btn btn-primary">Edit</button>
              </div>
            </div>

              </form>


            </div>
          </div>



</div>
        <!-- /.container-fluid -->

      