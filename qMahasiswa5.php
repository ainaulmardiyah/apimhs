<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa yang lahir di atas 22 Januari 1989
$sql = "SELECT NIM, NamaLengkap, KELAS, TglLahir FROM tmahasiswa WHERE TglLahir > '1989-01-22' ORDER BY TglLahir ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "kelas" => $row['KELAS'],
        "tgl_lahir" => $row['TglLahir']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
