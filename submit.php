<?php

include 'connect.php';

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $saran = $_POST['saran'];

    
    $sql = "INSERT INTO contact_person (nama, nim, kelas, gender, email, saran) 
            VALUES ('$nama', '$nim', '$kelas', '$gender', '$email', '$saran')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>