<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<title>Import Excel To MySQL Database Using PHP </title>

	</head>

    <body>
        

<?php 
	include 'db.php';
    $no_wo = $_GET['no_wo'];
    $data = mysqli_query($conn, "select * from jadwalprod where no_wo='$no_wo'");
    while($d = mysqli_fetch_array($data)){

?>	

    <form method="POST" action="update1.php">
		<table>
            <tr>
                <td>No.WO</td>
                <td>
                    <input readonly type="text" name="no_wo" value="<?php echo $d['no_wo']; ?>">
                </td>
            </tr>

            <tr>
                <td>Kode Item</td>
                <td>
                    <input readonly type="text" name="kode" value="<?php echo $d['kode_item']; ?>">
                </td>
            </tr>

            <tr>
                <td>Nama Item</td>
                <td>
                    <textarea readonly  rows="4" cols="22" name="item" ><?php echo $d['nama_item']; ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Jam Naik</td>
                <td>
                    <input readonly type="text" name="jam_pasang" value="<?php echo gmdate ('Y-m-d H:i:s', time()+(60*60*7)); ?>">
                </td>
            </tr>

            <tr>
                <td>Batch</td>
                <td>
                    <input readonly type="text" name="kode_batch" value="<?php echo $d['kode_batch']; ?>">
                </td>
            </tr>

            <tr>
                <td>No. Bin</td>
                <td>
                    <input readonly type="text" name="bin" value="<?php echo $d['bin']; ?>">
                </td>
            </tr>

            <tr>
                <td>Mesin</td>
                <td>
                <select name='mesin'>
		        <option value='6 Line C01'>6 Line C01</option>
		        <option value='6 Line C02'>6 Line C02</option>
                <option value='6 Line C03'>6 Line C03</option>
                <option value='6 Line C04'>6 Line C04</option>
                <option value='6 Line C05'>6 Line C05</option>
                <option value='6 Line C06'>6 Line C06</option>
                <option value='6 Line C07'>6 Line C07</option>
                <option value='6 Line C08'>6 Line C08</option>
                <option value='6 Line C09'>6 Line C09</option>
                <option value='6 Line C10'>6 Line C10</option>
                <option value='6 Line C11'>6 Line C11</option>
                <option value='6 Line C12'>6 Line C12</option>
                <option value='6 Line C13'>6 Line C13</option>
                <option value='6 Line C14'>6 Line C14</option>
                <option value='6 Line C15'>6 Line C15</option>
                <option value='6 Line C16'>6 Line C16</option>
                <option value='6 Line C17'>6 Line C17</option>
                <option value='10 Line 01'>10 Line 01</option>
                <option value='10 Line 02'>10 Line 02</option>
                <option value='10 Line 03'>10 Line 03</option>
                <option value='10 Line 04'>10 Line 04</option>
                <option value='OMAG'>OMAG</option>
                <option value='TABLET'>TABLET</option>
	             </select>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td>
                    
                </td>
            </tr>

        </table>    
	</form>
    <?php
    }
    ?>     
 
</body>
    
</html>

