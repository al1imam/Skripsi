<?php
include 'db.php';

$no_wo=$_POST['no_wo'];
$jam_pasang=$_POST['jam_pasang'];
$mesin=$_POST['mesin'];

mysqli_query($conn, "update jadwalprod set jam_pasang='$jam_pasang', mesin='$mesin' where no_wo='$no_wo'");

header("location:index.php");
?>