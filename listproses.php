<!DOCTYPE html>
<?php 
	include 'db.php';
?>	

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel To MySQL Database Using PHP </title>
		<link rel="stylesheet" href="style.css">

	</head>
	
    <body>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
	<label>Filter Tipe</label>    
	<select name="tipe">
                <option value="">-- Pilih Tipe --</option>
                <?php
                include 'db.php';
                $query2    =mysqli_query($conn, "SELECT * FROM mastertipe");
                while ($data2 = mysqli_fetch_array($query2)) {
                ?>
                <option value="<?=$data2['tipe'];?>"><?php echo $data2['tipe'];?></option>
                <?php
                }
                ?>
                </select>
				<input type="submit" name="submit" value="Pilih">
				<button><a href="listproses.php" ]>All</a></button>
			</form>
			
        <br>
		<br>
		<table id="jadwal" border="1">
			<thead>
				<tr>
				    <th>Tanggal</th>
				  	<th>No. WO</th>
				  	
				  	<th>Kode Item</th>
            <th>Nama Item</th>
            <th>Kode PBE</th>
            <th>Kebutuhan</th>
			<th>Tipe</th>
			<th>List</th>
                </tr>	
			</thead>

			<?php
				
				if (isset($_GET['submit'])) {
					$tipe = $_GET['tipe'];


					$result =  "SELECT * FROM jadwalprod, listproses WHERE (jadwalprod.no_wo=listproses.no_wo) AND tipe='$tipe'";
					
				
			}else {
				$result =  "SELECT * FROM jadwalprod, listproses WHERE (jadwalprod.no_wo=listproses.no_wo)";
			}

				$result_set = mysqli_query($conn,$result);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
                    <tbody>
				    <tr>
					<td><?php echo $row['tgl_plan']; ?></td>	
						<td><?php echo $row['no_wo']; ?></td>
						<td><?php echo $row['item']; ?></td>
						<td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['kodepbe']; ?></td>
                        <td><?php echo $row['kebutuhan']; ?></td>
						<td><?php echo $row['tipe']; ?></td> 
						<td><a href="inputlist.php?no_wo=<?php echo $row['no_wo']; ?>"><button >Tambah</button></a></td>
						<td>
						<a href="del.php?no_wo=<?= $row['no_wo']; ?>"  onclick="return confirm('anda yakin ingin hapus?');"><button>Hapus</button></a>
						</td>
						
					</tr>
                    </tbody>
				<?php
				}
			?>

            
		</table>
	</div>
 
	</div>
 
</body>
    <footer>
        
    </footer>
</html>

<script>
  function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("jadwal");
    tr = table.getElementsByTagName("tbody");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>