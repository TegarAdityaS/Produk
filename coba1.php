<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>

<h1>Biodata Saya</h1>

<?php
// Data biodata
$nama = "Mohammad tegar Aditya Saputra";
$umur = 19;
$NIM = "E41220330";
$Jurusan = "TI";

$angka1 = 1;
$angka2 = 1;
$angka3 = 2;
$angka4 = 2;
$hasil = $angka1 + $angka2;
$hasil1 = $angka3 + $angka4;

// Menampilkan data biodata
echo "<p>Nama: $nama</p>";
echo "<p>Umur: $umur tahun</p>";
echo "<p>Nim: $NIM</p>";
echo "<p>Jurusan: $Jurusan</p>";
echo "$angka1 + $angka2 = $hasil";
echo "$angka3 + $angka4 = $hasil1";

?>

</body>
</html>