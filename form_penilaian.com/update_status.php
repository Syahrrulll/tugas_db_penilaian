<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_program_studi = $_POST['id_program_studi'];
    $status_akreditasi = $_POST['status_akreditasi'];

    $sql = "INSERT INTO status_akreditasi (id_program_studi, status_akreditasi) 
            VALUES ('$id_program_studi', '$status_akreditasi')";

    if ($conn->query($sql) === TRUE) {
        echo "Status Akreditasi berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
