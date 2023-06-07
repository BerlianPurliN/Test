<?php

include 'db.php';
if (isset($_GET['deleteid_tk_pkan'])) {   
    $id = $_GET['deleteid_tk_pkan'];
    $sql = "delete from `TK_pakaian` where id_tk_pkan= $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:hlmn_pakaian.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>