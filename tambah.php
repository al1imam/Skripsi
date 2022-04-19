<?php
include 'db.php';

    if(isset($_POST['submit'])){
        $no_wo=$_POST['no_wo'];
        $tgl_proses=$_POST['tgl_proses'];
        $kode_item=$_POST['kode_item'];
        $nama_item=$_POST['nama_item'];
        $tipe=$_POST['tipe'];

        if(!empty($no_wo)){
            $sql="INSERT into jadwalprod (`no_wo`, `tgl_proses`, `kode_item`, `nama_item`,`tipe`) VALUES ('$no_wo', '$tgl_proses', '$kode_item','$nama_item','$tipe')";

            $result = mysqli_query( $conn, $sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Data sudah ada atau file buka CSV.\");
						window.location = \"index.php\"
					</script>";
 
				}
 
	         }
	         
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"Data Sudah Tersimpan.\");
						window.location = \"index.php\"
					</script>";

        }




 