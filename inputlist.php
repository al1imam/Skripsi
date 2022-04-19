<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<title>Import Excel To MySQL Database Using PHP </title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
<script src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
<script>
function gabungan() {
    var str1 = $(".value1").val();
    var str2 = "-";
    var str3 = $(".value3").val();
    var res = str1.concat(str2,str3);
    document.getElementById("phpmu").value = res;
}
</script>
</head>

    <body>   

<?php 
	include 'db.php';
    $no_wo = $_GET['no_wo'];
    $data = mysqli_query($conn, "select * from jadwalprod where no_wo='$no_wo'");
    while($d = mysqli_fetch_array($data)){

?>	

    <form method="POST" action="tambahlistpros.php">
		<table>
        <tr>
                <td>
                    <input hidden readonly type="text" name="kodepros" class='input value1' value="<?php echo $d['no_wo']; ?>">
                    
                </td>
            </tr>
             <tr>
                <td>Kode Proses</td>
                <td>
                    <input readonly type="text" name="kodepros" id="phpmu">
                    
                </td>
            </tr>
            <tr>
                <td>Tgl Jadwal</td>
                <td>
                    <input readonly type="text" name="tgl" value="<?php echo $d['tgl_plan']; ?>">
                </td>
            <tr>
                <td>No.WO</td>
                <td>
                    <input readonly type="text" name="no_wo" value="<?php echo $d['no_wo']; ?>">
                </td>
            </tr>

            <tr>
                <td>Kode Item</td>
                <td>
                    <input readonly type="text" name="item" value="<?php echo $d['item']; ?>">
                </td>
            </tr>

            <tr>
                <td>Nama Item</td>
                <td>
                    <textarea readonly  rows="4" cols="22" name="nama" ><?php echo $d['nama']; ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Keterangan 1</td>
                <td>
                    <textarea readonly  rows="4" cols="22" name="dff1" ><?php echo $d['dff1']; ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Kode PBE</td>
                <td>
                    <input type="text" name="kodepbe" id="kodepbe" onkeyup="gabungan()" class='input value3' required value="">
                </td>
            </tr>

            <tr>
                <td>Kebutuhan</td>
                <td>
                    <input type="text" name="kebutuhan" required value="">
                </td>
            </tr>
                <td>Tipe</td>
                <td>
                        
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
            

                </td>        

            <tr>
            
                <td><input type="submit" name="submit" value="Simpan"></td>
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