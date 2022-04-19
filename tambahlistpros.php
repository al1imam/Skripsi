<?php
include 'db.php';

    if(isset($_POST['submit'])){
        $kodepros=$_POST['kodepros'];
        $no_wo=$_POST['no_wo'];
        $kodepbe=$_POST['kodepbe'];
        $kebutuhan=$_POST['kebutuhan'];
		$tipe=$_POST['tipe'];

        if(!empty($no_wo)){
            $sql="INSERT into listproses (`kodepros`, `no_wo`, `kodepbe`, `kebutuhan`,`tipe`) VALUES ('$kodepros', '$no_wo', '$kodepbe','$kebutuhan','$tipe')";

            $result = mysqli_query( $conn, $sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Gagal Tersimpan\");
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




 