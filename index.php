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
 
 
	
		<form action="import.php" method="POST" name="upload_excel" enctype="multipart/form-data">
			<fieldset>
		
        <label>Cari No. WO :</label>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Masukan No. Wo" title="Type in a name">
				<br>
        <br>
        <label>Upload File :</label>
        <input type="file" name="file" id="file" class="input-large">
		<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
        </fieldset>
		</form>
        <br>
        <a href="clear.php"><button>Delete All</button></a>
		<a href="download.php"><button >Download Excel</button></a>
		<a href="formtambah.php"><button >Tambah Manual</button></a>
        <br>
        <br>
		<table id="jadwal" border="1">
			<thead>
				<tr>
				    <th>Tgl Jadwal</th>
				  	<th>No. WO</th>
				  	<th>Ket. 1</th>
				  	<th>Ket. 2</th>
				  	<th>Ket. 3</th>
            <th>Kode Item</th>
            <th>Nama Item</th>
            <th>Status</th>
            <th>Plan Qty</th>
            <th>Actual Qty</th>
			<th>List</th>
                </tr>	
			</thead>

			<?php
				
				$result_set =  mysqli_query($conn,"SELECT * FROM jadwalprod WHERE NOT EXISTS (SELECT * FROM listproses WHERE jadwalprod.no_wo = listproses.no_wo)");
				while($row = mysqli_fetch_array($result_set))
				{
				?>
                    <tbody>
				    <tr>
						<td><?php echo $row['tgl_plan']; ?></td>
						<td><?php echo $row['no_wo']; ?></td>
						<td><?php echo $row['dff1']; ?></td>
						<td><?php echo $row['dff2']; ?></td>
						<td><?php echo $row['dff3']; ?></td>
						<td><?php echo $row['item']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['statusadm']; ?></td>
						<td><?php echo $row['planqty']; ?></td>
            			<td><?php echo $row['actualqty']; ?></td>
						<td><a href="inputlist.php?no_wo=<?php echo $row['no_wo']; ?>"><button >Tambah</button></a></td>
						<td>
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