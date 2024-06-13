<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa yang bukan dari Malang dan berjenis kelamin Laki-laki
$sql = "SELECT NIM, NamaLengkap, KotaAsal, JenisKelamin FROM tmahasiswa WHERE KotaAsal != 'MALANG' AND JenisKelamin = 'Laki-laki' ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "kota_asal" => $row['KotaAsal'],
        "jenis_kelamin" => $row['JenisKelamin']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
