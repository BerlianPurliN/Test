<?php
require "function.php";

if(isset($_GET['deleteid_makanan'])){
    $id = $_GET['deleteid_makanan'];
    $sql = "delete from 'TK_makanan' where id_tk_mkan= $id";
    $result = mysqli_query($conn,$sql);
    if ($result){
        header('location:hlmn_makanan.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>