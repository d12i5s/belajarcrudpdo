<?php
include("connection.php");

$id = $_GET["id"];
try {
    $db->query("DELETE FROM pelajar WHERE id = $id");
    header("location:list.php");
} catch(Exception $e) {
    echo "Gagal Hapus Data : " . $e->getMessage();
}
?>