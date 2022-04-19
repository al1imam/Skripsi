<?php
include 'db.php';
$wo=$_GET['no_wo'];
$del=mysqli_query($conn,"DELETE FROM jadwalprod WHERE no_wo ='$wo'");
if($del){
    echo "<script type=\"text/javascript\">
							alert(\"Delete Sukses\");
						window.location = \"index.php\"
					</script>";
}

