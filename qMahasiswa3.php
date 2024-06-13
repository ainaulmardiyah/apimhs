<?php
require_once 'koneksi.php';

// Query untuk menampilkan data mahasiswa berjenis kelamin wanita
$sql = "SELECT NIM, NamaLengkap, JenisKelamin, KELAS FROM tmahasiswa WHERE JenisKelamin = 'PEREMPUAN' ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "nama_lengkap" => $row['NamaLengkap'],
        "jenis_kelamin" => $row['JenisKelamin'],
        "kelas" => $row['KELAS']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
