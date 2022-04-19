<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=jadwalprod.xls");
?>
<table border="1">
<tr>
<th>No. WO</th>
				  	<th>Tgl Proses</th>
				  	<th>Kode Item</th>
				  	<th>Nama Item</th>
				  	<th>Kode Batch</th>
            <th>Bin</th>
            <th>Jam Pasang</th>
            <th>Suhu</th>
            <th>RH</th>
            <th>Mesin</th>
            <th>Tipe</th>  
            <th>Jam Naik</th>
            
</tr>
<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","db");



// menampilkan data

$data = mysqli_query($koneksi,"select * from jadwalprod");
while($row = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $row['no_wo']; ?></td>
						<td><?php echo $row['tgl_proses']; ?></td>
						<td><?php echo $row['kode_item']; ?></td>
						<td><?php echo $row['nama_item']; ?></td>
						<td><?php echo $row['kode_batch']; ?></td>
            <td><?php echo $row['bin']; ?></td>
						<td><?php echo $row['jam_pasang']; ?></td>
						<td><?php echo $row['suhu']; ?></td>
						<td><?php echo $row['rh']; ?></td>
						<td><?php echo $row['mesin']; ?></td>
            <td><?php echo $row['tipe']; ?></td>
            <td><?php echo $row['jam_naik']; ?></td>
</tr>
<?php 
}
?>
</table>
</body>
</html>