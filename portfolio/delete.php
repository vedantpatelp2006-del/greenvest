<?php
include "../config/db.php";

$id = $_GET['id'] ?? null;

if($id){
    mysqli_query($conn,"DELETE FROM portfolios WHERE id=$id");
}

header("Location: list.php");
exit;
?>