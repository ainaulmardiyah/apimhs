<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswi yang mengikuti program kelas REGULAR dan TahunLulusSMA di bawah 2008
$sql = "SELECT NIM, NamaLengkap, ProgramKelas, TahunLulusSMA FROM tmahasiswa WHERE ProgramKelas = 'REGULAR' AND TahunLulusSMA < 2008 AND JenisKelamin = 'PEREMPUAN' ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "program_kelas" => $row['ProgramKelas'],
        "tahun_lulus_sma" => $row['TahunLulusSMA']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
