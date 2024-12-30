<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_program_studi = $_POST['id_program_studi'];
    $elemen_penilaian = $_POST['elemen_penilaian'];
    $nilai = $_POST['nilai'];

    $sql = "INSERT INTO penilaian (id_program_studi, elemen_penilaian, nilai, tanggal_penilaian) 
            VALUES ('$id_program_studi', '$elemen_penilaian', '$nilai', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Penilaian berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
