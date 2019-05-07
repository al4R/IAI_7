<?php
include 'koneksi.php';

if(!empty($_POST["id"])){
    $id = $_POST["id"];

    $sql = "SELECT id FROM barang WHERE id = '$id'";

    if(mysqli_num_row($conn->ruery($sql))==1){
  if ($conn->query($sql)===TRUE) {
        echo "BERHASIL";
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
    }else{
        echo "data tidak ditemukan";
    }
    if ($conn->query($sql)===TRUE) {
        echo "BERHASIL";
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
}else {
   echo "id dan nama barang harus diisi"; 
}
mysqli_close($conn);
