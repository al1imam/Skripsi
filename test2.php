<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
<script src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
<script>
function gabungan() {
    var str1 = $(".value1").val();
    var str2 = $(".value2").val();
    var str3 = $(".value3").val();
    var str4 = $(".value4").val();
    var res = str1.concat(str2, str3, str4);
    document.getElementById("phpmu").value = res;
}
</script>
Kode 1 <input type='text' onkeyup="gabungan()" class='input value1'><br>
Kode 2 <input type='text' onkeyup="gabungan()" class='input value2' name='b'> <br>
Kode 3 <input type='text' onkeyup="gabungan()" class='input value3' name='c'> <br>
Kode 4 <input type='text' onkeyup="gabungan()" class='input value4' name='d'> <br>
Hasil <input type="text" id="phpmu">
</body>
</html>