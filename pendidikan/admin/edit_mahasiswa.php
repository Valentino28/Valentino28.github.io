<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <title>edit mahasiswa</title>
  </head>
  <body>
    <h2>Edit Data Mahasiswa</h2>
    <br/>
    <?php
    include "../koneksi.php";
    $nis = $_GET['nis'];
    $sql = mysqli_query($conn,"SELECT * FROM siswa WHERE nis ='$nis'");
    while ($q = mysqli_fetch_array($sql)) {
      ?>
    <form action="update.php" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td>
            <input type="text" name="nama" value="<?php echo $q['nama'];?>">
          </td>
        </tr>
        <tr>
          <td>NIS</td>
          <td>
            <input type="number" name="nis" value="<?php echo $q['nis'];?>">
          </td>
        </tr>
        <tr>
          <td>Angkatan</td>
          <td>
            <input type="number" name="angkatan" value="<?php echo $q['angkatan'];?>">
          </td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td>
            <input type="text" name="tempat_lahir" value="<?php echo $q['tempat_lahir'];?>">
          </td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>
            <input type="date" name="tgl_lahir" value="<?php echo $q['tanggal_lahir'];?>">
          </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="text" name="kelamin" value="<?php echo $q['jenis_kelamin'];?>">
          </td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>
            <input type="text" name="agama" value="<?php echo $q['agama'];?>">
          </td>
        </tr>
        <tr>
          <td>Kewarganegaraan</td>
          <td>
            <input type="text" name="kewarganegaraan" value="<?php echo $q['kewarganegaraan'];?>">
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <input type="text" name="alamat" value="<?php echo $q['alamat'];?>">
          </td>
        </tr>
        <tr>
          <td>NO. Hp</td>
          <td>
            <input type="number" name="hp" value="<?php echo $q['no_hp'];?>">
          </td>
        </tr>
        <tr>
          <td>Nama Ayah</td>
          <td>
            <input type="text" name="ayah" value="<?php echo $q['nama_ayah'];?>">
          </td>
        </tr>
        <tr>
          <td>Nama Ibu</td>
          <td>
            <input type="text" name="ibu" value="<?php echo $q['nama_ibu'];?>">
          </td>
        </tr>
        <tr>
          <td>Pekerjaan Ayah</td>
          <td>
            <input type="text" name="p.ayah" value="<?php echo $q['pekerjaan_ayah'];?>">
          </td>
        </tr>
        <tr>
          <td>Pekerjaan Ibu</td>
          <td>
            <input type="text" name="p.ibu" value="<?php echo $q['pekerjaan_ibu'];?>">
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Update"></td>
        </tr>
      </table>
    </form>
    <?php
    }
     ?>
  </body>
</html>
