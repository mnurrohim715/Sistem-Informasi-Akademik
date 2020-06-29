

        <!-- Begin Page Content -->
        <div class="container-fluid">
 
          <!-- Page Heading -->
          <h3 class="h3 mb-3 text-gray-800">Edit Profile</h3>

          <div class="row">
            <div class="col-lg-8"> 

            <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('guru/edit_data');?>">

            <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="name" name="name"
                value="<?= $data_guru['name'];?>">
                <?= form_error('name','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>
 
            <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-40">
                <input type="password" class="form-control" id="password" name="password"
                value="<?= $data_guru['password'];?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="email" name="email"
                value="<?= $data_guru['email'];?>" readonly>
              </div>
            </div>
              
            <div class="form-group row">
              <label for="nip" class="col-sm-3 col-form-label">NIP</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="nip" name="nip"
                value="<?= $data_guru['nip'];?>">
                <?= form_error('nip','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>
            <div class="form-group row">
              <label for="nip" class="col-sm-3 col-form-label">MATA PELAJARAN</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="mengajar" name="mengajar"
                value="<?= $data_guru['mengajar'];?>">
                <?= form_error('mengajar','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                value="<?= $data_guru['tempat_lahir'];?>">
                <?= form_error('tempat_lahir','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-40">
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                value="<?= $data_guru['tanggal_lahir'];?>">
                <?= form_error('tanggal_lahir','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="alamat" name="alamat"
                value="<?= $data_guru['alamat'];?>">
                <?= form_error('alamat','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="rtrw" class="col-sm-3 col-form-label">RT/RW</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="rtrw" name="rtrw"
                value="<?= $data_guru['rtrw'];?>">
                <?= form_error('rtrw','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kel" class="col-sm-3 col-form-label">Kelurahan</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kel" name="kel"
                value="<?= $data_guru['kel'];?>">
                <?= form_error('kel','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kec" class="col-sm-3 col-form-label">Kecamatan</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kec" name="kec"
                value="<?= $data_guru['kec'];?>">
                <?= form_error('kec','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kab" class="col-sm-3 col-form-label">Kota/Kab</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kab" name="kab"
                value="<?= $data_guru['kab'];?>">
                <?= form_error('kab','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="prov" class="col-sm-3 col-form-label">Provinsi</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="prov" name="prov"
                value="<?= $data_guru['prov'];?>">
                <?= form_error('prov','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kode_p" class="col-sm-3 col-form-label">Kode Pos</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="kode_p" name="kode_p"
                value="<?= $data_guru['kode_p'];?>">
                <?= form_error('kode_p','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="hp" class="col-sm-3 col-form-label">Telepon</label>
              <div class="col-sm-40">
                <input type="text" class="form-control" id="hp" name="hp"
                value="<?= $data_guru['hp'];?>">
                <?= form_error('hp','<small class="text-danger pl-3">','</small>');?>
              </div>
            </div>

            <div class="form-group row">
              <label for="kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-40">
                <select name="kelamin" class="form-control" id="kelamin" value="<?= $data_guru['kelamin'];?>">
                <option >Laki-laki</option>
                <option >Perempuan</option></select>
                
                
              </div>
            </div>

            <div class="form-group row">
              <label for="agama" class="col-sm-3 col-form-label">Agama</label>
              <div class="col-sm-40">
                <select name="agama" class="form-control" id="agama" value="<?= $data_guru['agama'];?>">
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
                  <img src="<?= base_url('assets/img/guru/') . $data_guru['image'];?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-7">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="image" value="<?= $data_guru['image'];?>">Choose file</label>
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

      