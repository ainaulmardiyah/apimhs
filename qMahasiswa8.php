<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa kelas 3A dan 3C saja
$sql = "SELECT NIM, NamaLengkap, KELAS FROM tmahasiswa WHERE KELAS IN ('3A', '3C') ORDER BY NIM ASC";
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
