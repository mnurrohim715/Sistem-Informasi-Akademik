

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

  <div class="alert alert-success" role="alert">
  <h2>Nilai Harian</h2>
  </div>

  <div class="alert alert-success" role="alert">
  <table border="0" width="305px" height="50px">
    <tr>
        <th width="100px"><font color="#000000">Nama</th>
        <th width="5px"><font color="#000000">:</th>
        <th width="200px"><font color="#000000"><?= strtoupper($data_siswa['name']);?></th>
    </tr>
    <tr>
        <th width="100px"><font color="#000000">NISN</th>
        <th width="5px"><font color="#000000">:</th>
        <th width="200px"><font color="#000000"><?= $data_siswa['nisn'];?></th>
    </tr>
    <tr>
        <th width="100px"><font color="#000000">Kelas</th>
        <th width="5px"><font color="#000000">:</th>
        <th width="200px"><font color="#000000"><?= $data_siswa['kelas'];?></th>
    </tr>
</table></div>
<br>


    <div class="table-nilaiharian">
    <table border="1" width="650px" height="50px" bordercolor="#000000" font color="#000000">
    <thead>
        <tr>
        <th scope="col"><div align="center"><font color="#000000">No</th>
        <th scope="col"><div align="center"><font color="#000000">Mata Pelajaran</th>
        <th scope="col"><div align="center"><font color="#000000">Nilai 1</th>
        <th scope="col"><div align="center"><font color="#000000">Nilai 2</th>
        <th scope="col"><div align="center"><font color="#000000">Nilai 3</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row"><div align="center"><font color="#000000">1</th>
      <td><font color="#000000">BAHASA INDONESIA</td>
      <td><font color="#000000"><div align="center"><?= $b_indo['n1'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_indo['n2'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_indo['n3'];?> </td>
    </tr>
    <tr>
      <th scope="row"><div align="center"><font color="#000000">2</th>
      <td><font color="#000000">BAHASA INGGRIS</td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['n1'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['n2'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['n3'];?> </td>
    </tr>
    <tr>
      <th scope="row"><div align="center"><font color="#000000">3</th>
      <td><font color="#000000">MATEMATIKA</td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['n1'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['n2'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['n3'];?> </td>
    </tr>
  </tbody>
</table></div>
      

</div>
        <!-- /.container-fluid -->

