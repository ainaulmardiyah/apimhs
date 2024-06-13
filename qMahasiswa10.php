<?php
require_once 'koneksi.php';

// Query untuk menampilkan data NILAI mahasiswa yang UTS nya dibawah 60 dan UAS nya diatas 60
$sql = "SELECT NIM, kdmatakuliah, QUIZ, UTS, UAS FROM tnilai WHERE UTS < 60 AND UAS > 60 ORDER BY NIM ASC";
$r = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, array(
        "nim" => $row['NIM'],
        "kdmatakuliah" => $row['kdmatakuliah'],
        "quiz" => $row['QUIZ'],
        "uts" => $row['UTS'],
        "uas" => $row['UAS']
    ));
}

echo json_encode($result);
mysqli_close($conn);
?>
