<?php

include 'db.php';
if (isset($_GET['deleteid_tk_mkan'])) {   
    $id = $_GET['deleteid_tk_mkan'];
    $sql = "delete from `TK_makanan` where id_tk_mkan= $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:hlmn_makanan.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>