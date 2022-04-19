<?php 
	                    include 'db.php';
             
                        $tipe=$_POST['tipe'];
                        $data1 = mysqli_query($conn, 'SELECT * FROM listproses WHERE tipe="'.$tipe.'"');
                        $d1 = mysqli_num_rows($data1);
                    ?>
                        <input type="text" value="
                                <?php     
                                    $tambah=$d1+1;
                                    echo "$tipe-$tambah";
                                ?>"
                        >
                 
                   