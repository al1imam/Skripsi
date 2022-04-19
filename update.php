<?php
include 'db.php';

$no_wo=$_POST['no_wo'];
$jam_naik=$_POST['jam_naik'];
$kode_batch=$_POST['kode_batch'];
$bin=$_POST['bin'];
$suhu=$_POST['suhu'];
$rh=$_POST['rh'];

mysqli_query($conn, "update jadwalprod set jam_naik='$jam_naik', kode_batch='$kode_batch', bin='$bin', suhu='$suhu', rh='$rh' where no_wo='$no_wo'");

header("location:index.php");
?>