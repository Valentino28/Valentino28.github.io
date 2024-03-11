<?php
$conn = mysqli_connect("localhost","root","","pendidikan");
//cek koneksi
if (mysqli_connect_errno()){
  echo "koneksi gagal :" .mysqli_connect_error();
}
 ?>
