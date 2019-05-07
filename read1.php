<?php
include 'koneksi.php';

if(!empty($_POST["id"])){
    $id = $_POST["id"];

    $sql = "SELECT * FROM barang WHERE id = '$id'";

    if(mysqli_num_row($conn->ruery($sql))==1){
        $result = $conn->query($sql);

$json = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($json);
    }
}

mysqli_close($conn);