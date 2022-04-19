 
<?php
$conn=mysqli_connect('localhost','root','');
$sel=mysqli_select_db($conn,'tutorial1');
$alamat=$_POST['alamat'];
$query=mysqli_query($conn,'select * from alamat where jalan="'.$alamat.'"');
while($data=mysqli_fetch_array($query)){
  echo '<label value="'.$data[2].'"><b>'.$data[2].'</b></label>';
}
 ?>