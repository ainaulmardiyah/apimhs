<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa
$sql = "SELECT NIM, NamaLengkap, ProgramKelas, KELAS FROM tmahasiswa ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "program_kelas" => $row['ProgramKelas'],
        "kelas" => $row['KELAS']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
