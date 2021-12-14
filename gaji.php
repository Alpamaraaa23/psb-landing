<html>
<head>
       <title>Gaji</title>
</head>
<body>
<center>
<h3>
DATA KARYAWAN<br>
PT. MAJU MUNDUR<br></h3>
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal: ".date("d-M-Y", $tanggal)."<br>";

date_default_timezone_set('Asia/Jakarta');

$jam=date("H:i:s");
echo "Waktu: <b>". $jam."<br>"."</b>"
?></center>
<form action="isikar.php" method="POST" align="left">
NIK : <input type="text" name="nik"> <br>
    Nama : <input type="text" name="nama"> <br>
    Alamat: <input type="text" name="alamat"> <br>
    
    Jenis Kelamin : <input type="radio" name="jeniskelamin" value="pria">Pria<input type="radio" name="jeniskelamin" value="wanita">Wanita<br>
    Status : <input type="radio" name="status" value="kawin">Kawin <input type="radio" name="status" value="belumkawin">Belum Kawin
 <input type="radio" name="status" value="duda">Duda <input type="radio" name="status" value="janda">Janda<br>

 Jabatan : <select name="jabat">
  <option value="direktur">Direktur</option>
  <option value="manajer">Manajer</option>
  <option value="staff">Staff</option>
  <option value="ob">Office Boy</option>
</select><br>
 Pendidikan : <input type="radio" name="pendidikan" value="s2">S-2 <input type="radio" name="pendidikan" value="s1">S-1<input type="radio" name="pendidikan" value="d3">D-3 
 <input type="radio" name="pendidikan" value="sma">SMA<input type="radio" name="pendidikan" value="lain">Lain-lain<br>

Keahlian : <input type="text" name="keahlian"> <br><br>
Data Anda Harus Jelas<br>
<input type="submit" name="submit" value="kirim">   <input type="reset" name="reset" value="ulang">
   </form>
</body>
</html>
