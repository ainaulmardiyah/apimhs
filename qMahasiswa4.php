<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa dari kota Malang
$sql = "SELECT NIM, NamaLengkap, KELAS, KotaAsal FROM tmahasiswa WHERE KotaAsal = 'Malang' ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "kelas" => $row['KELAS'],
        "kota_asal" => $row['KotaAsal']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
