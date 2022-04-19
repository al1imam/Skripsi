<?php
include 'db.php';

$del=mysqli_query($conn,"DELETE FROM jadwalprod");
if($del){
    echo "<script type=\"text/javascript\">
							alert(\"Delete Sukses\");
						window.location = \"index.php\"
					</script>";
}
?>