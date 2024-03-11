<?php


require_once 'model.php';


if(!isset($_POST["submit"])    ){
    header("Location: index.php");
    exit;
}

$process = $_POST["submit"];
$nama_mahasiswa = $_POST["nama"];
$matakuliah = $_POST["matakuliah"];
$uts_nilai = $_POST["uts"];
$uas_nilai = $_POST["uas"];
$tugas_nilai = $_POST["tugas"];
$penilaian = ($uts_nilai + $uas_nilai + $tugas_nilai ) / 3;


echo 'Nama Siswa : '  . $nama_mahasiswa;
echo '<br> Mata Kuliah : ' . $matakuliah;
echo '<br> Nilai UTS : ' . $uts_nilai;
echo '<br> Nilai UAS : ' . $uas_nilai;
echo '<br> Nilai Tugas : ' . $tugas_nilai;

echo '<br> Nilai Akhir : ' . $penilaian;
echo '<br> DINYATAKAN : ' . lulus($penilaian);
echo '<br> GRADE : ' . nilai($penilaian);







?>


