<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa kelas 3B yang tidak punya alamat email
$sql = "SELECT NIM, NamaLengkap, KELAS FROM tmahasiswa WHERE KELAS = '3B' AND email IS NULL ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "kelas" => $row['KELAS']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
