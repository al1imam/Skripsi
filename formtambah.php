<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<title>Import Excel To MySQL Database Using PHP </title>

	</head>

    <body>
        


    <form method="POST" action="tambah.php">
		<table>
            <tr>
                <td>No.WO</td>
                <td>
                    <input  type="text" name="no_wo">
                </td>
            </tr>

            <tr>
                <td>Kode Item</td>
                <td>
                    <input  type="text" name="kode_item">
                </td>
            </tr>

            <tr>
                <td>Nama Item</td>
                <td>
                    <textarea   rows="4" cols="22" name="nama_item" ></textarea>
                </td>
            </tr>

            <tr>
                <td>Mesin</td>
                <td>
                <select name='tipe'>
		        <option value='100S'>100S</option>
		        <option value='25S'>25S</option>
                <option value='50S'>50S</option>
                <option value='CANDY'>CANDY</option>
                <option value='FORMING'>FORMING</option>
                <option value='NS 18P'>NS 18P</option>
                <option value='NS 4P'>NS 4P</option>
                <option value='OMAG'>OMAG</option>
                <option value='TABLET'>TABLET</option>
	             </select>
                </td>
            </tr>

            <tr>
                <td>Tgl Proses <br>(yyyy-mm-dd)</td>
                <td>
                    <input   type="text" name="tgl_proses" ></input>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Simpan"></td>
                <td>
                    
                </td>
            </tr>

        </table>    
	</form>    
 
</body>
    
</html>

