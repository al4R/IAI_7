<?php
include 'koneksi.php';

if(!empty($_POST["id"])&& !empty($_POST["nama"])){
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO barang (id, nama, ip) VALUES 
    ('$id','$nama','$ip_address');";
    if ($conn->query($sql)===TRUE) {
        echo "BERHASIL";
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
}else {
   echo "id, dan nama harus diisi"; 
}
mysqli_close($conn);
