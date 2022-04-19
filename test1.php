<?php $con=mysqli_connect('localhost','root','','tutorial1');?>
<!DOCTYPE html>
<html>
<head>
      <title>Menampilkan nilai label berdasarkan Combobox</title>
      <script type="text/text/javascript"></script>
      <sricpt src="js/jquery-1.7.2.min.js"></script>
      <script type="text/javascript">
        function kota(alamat){
          $.ajax({
            url:'http://localhost/skripsi/kota.php',
            data:'alamat='+alamat,
            type:'post',
            datatype:'html',
            timeout:100000,
            success:function(response){
              $('#kota').html(response);
            }
          })
        }
      </script>
</head>
<body>
    <label>Jalan :</label>
    <select name="alamat" id="alamat" onchange="kota(this.value);">
      <option value="">-- Pilih Jalan --</option>
      <?php $jl=mysqli_query($con,'select * from alamat order by id ASC');
      while($jalan=mysqli_fetch_row($jl)){
        echo '<option value="'.$jalan[1].'">'.$jalan[1].'</option>';
      }
      ?>
    </select>
  </br></br><label>Kota :</label><label name="kota" id="kota"><b>Label</b></label>
</body>
</html>
