<?php 
$koneksi = mysqli_connect("localhost","root","","multi_user");

// check connection
if (mysqli_connect_errno()){
   echo "koneksi database gagal : " . mysqli_connect_errno();
}

 ?>
