

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Akun</h1>

        

        <div class="row">
            <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('siswa/edit_akun'); ?>" method="post">
                <form>
                    <div class="form-group">
                        <label for="passwordsekarang">Password Sekarang</label>
                        <input type="password" class="form-control" id="passwordsekarang" name="passwordsekarang">
                        <?= form_error('passwordsekarang','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                        <label for="passwordbaru1">Password Baru</label>
                        <input type="password" class="form-control" id="passwordbaru1" name="passwordbaru1">
                        <?= form_error('passwordbaru1','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                        <label for="passwordbaru2">Ulangi Password Baru</label>
                        <input type="password" class="form-control" id="passwordbaru2" name="passwordbaru2">
                        <?= form_error('passwordbaru2','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" >Ganti Password</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
        <!-- /.container-fluid -->

