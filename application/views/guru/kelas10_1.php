<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> INPUT NILAI SISWA
</div>

<div class="alert alert-success" role="alert">
<td><?php echo anchor('administrator/guru/kelas10_1','<button class="btn btn-sm btn-primary mb-3"> Kelas 10</button>')?></td>
<td><?php echo anchor('administrator/guru/kelas10_2','<button class="btn btn-sm btn-primary mb-3"> Kelas 11</button>')?></td>
<td><?php echo anchor('administrator/guru/kelas11_1','<button class="btn btn-sm btn-primary mb-3"> Kelas 12</button>')?></td>
<td><?php echo anchor('administrator/guru/kelas11_2','<button class="btn btn-sm btn-primary mb-3"> Kelas 10</button>')?></td>
<td><?php echo anchor('administrator/guru/kelas12_1','<button class="btn btn-sm btn-primary mb-3"> Kelas 11</button>')?></td>
<td><?php echo anchor('administrator/guru/kelas12_2','<button class="btn btn-sm btn-primary mb-3"> Kelas 12</button>')?></td>
</div>

<div class="table-nilaiharian">
    <table border="1" width="650px" height="50px" bordercolor="#000000" font color="#000000">
    <thead>
        <tr>
        <th scope="col"><div align="center"><font color="#000000">No</th>
        <th scope="col"><div align="center"><font color="#000000">Mata Pelajaran</th>
        <th scope="col"><div align="center"><font color="#000000">Nilai Harian 1</th>
        <th scope="col"><div align="center"><font color="#000000">Nilai Harian 2</th>
        <th scope="col"><div align="center"><font color="#000000">Nilai Harian 3</th>
        <th scope="col"><div align="center"><font color="#000000">UTS</th>
        <th scope="col"><div align="center"><font color="#000000">UAS</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row"><div align="center"><font color="#000000">1</th>
      <td><font color="#000000">BAHASA INDONESIA</td>
      <td><font color="#000000"><div align="center"><?= $b_indo['n1'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_indo['n2'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_indo['n3'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_indo['total'];?> </td>
    </tr>
    <tr>
      <th scope="row"><div align="center"><font color="#000000">2</th>
      <td><font color="#000000">BAHASA INGGRIS</td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['n1'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['n2'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['n3'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_inggris['total'];?> </td>
    </tr>
    <tr>
      <th scope="row"><div align="center"><font color="#000000">3</th>
      <td><font color="#000000">MATEMATIKA</td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['n1'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['n2'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['n3'];?> </td>
      <td><font color="#000000"><div align="center"><?= $b_mtk['total'];?> </td>
    </tr>
  </tbody>
</table></div>
      
</div>
      <!-- End of Main Content -->

<div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Website Sekolah 2020</span>
    </div>
  </div>