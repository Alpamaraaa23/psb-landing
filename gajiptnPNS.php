<html>
<head>
       <title>As:2013</title>
</head>
<body>
<center>
<h2>
PT. UNTUNG SEJAHTERA</h2>
</center>
<?php
$nik=$_POST["nik"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$jeniskelamin=$_POST["jeniskelamin"];
$status=$_POST["status"];
$jabatan=$_POST["jabat"];
$pendidikan=$_POST["pendidikan"];
$keahlian=$_POST["keahlian"];


echo "  Data Pribadi Karyawan <br> ";
echo "  NIK  :  $nik  <br>";
echo "  Nama  :  $nama  <br>";
echo "  Alamat  :  $alamat<br>  ";
if ($jeniskelamin=="pria"){
$jeniskelaminku="Pria";}
else
{$jeniskelaminku="Wanita";}
echo "  Jenis Kelamin  :  $jeniskelaminku <br> ";

if ($status=="kawin")
{
$statusku="Kawin";}
else if($status=="belumkawin")
{
$statusku="Belum Kawin";}
else if($status=="duda")
{
$statusku="Duda";}
else
{$statusku="Janda";}
echo "  Status  :  $statusku<br>  ";

if ($jabatan=="direktur"){
$jabatanku="Direktur";}
else if($jabatan=="manajer"){
$jabatanku="Manajer";}
else if($jabatan=="staff"){
$jabatanku="Staff";}
else
{$jabatanku="Office Boy";}
echo "  Jabatan  :  $jabatanku <br> ";

if ($jabatanku=="Direktur"){
$gajifinal="6000000";}
else if($jabatanku=="Manajer"){
$gajifinal="4000000";}
else if($jabatanku=="Staff"){
$gajifinal="3000000";}
else
{$gajifinal="1500000";}
echo "  Gaji Pokok  :  $gajifinal <br> ";

if ($jabatanku=="Direktur"){
$tunjanganawal=$gajifinal*0.10;}
else if($jabatanku=="Manajer"){
$tunjanganawal=$gajifinal*0.10;}
else if($jabatanku="staff"){
$tunjanganawal=$gajifinal*0.10;}
else
{$tunjanganawal=$gajifinal*0.10;}
echo "  Tunjangan Jabatan  :  $tunjanganawal <br> ";

if ($pendidikan=="s2"){
$pendidikanakhir="S-2";}
else if($pendidikan=="s1"){
$pendidikanakhir="S-1";}
else if($pendidikan=="d3"){
$pendidikanakhir="D-3";}
else if($pendidikan=="sma"){
$pendidikanakhir="SMA";}
else
{$pendidikanakhir="Lain-lain";}
echo "  Pendidikan  :  $pendidikanakhir  <br>";

if ($pendidikanakhir=="S-2"){
$tunjanganakhir=3000000;}
else if($pendidikanakhir=="S-1"){
$tunjanganakhir=2500000;}
else if($pendidikanakhir=="D-3"){
$tunjanganakhir=2000000;}
else if($pendidikanakhir=="SMA"){
$tunjanganakhir=1500000;}
else
{$tunjanganakhir=1000000;}
echo "  Tunjangan Pendidikan  :  $tunjanganakhir<br>  ";
echo "  Keahlian  :  $keahlian <br>";

$terimagaji=$gajifinal+$tunjanganawal+$tunjanganakhir;
echo "  Total Gaji Keseluruhan  :  $terimagaji<br>  ";

?>
<a href="datakry.php">Kembali</a>
</body>
</html>
