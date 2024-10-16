<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=db_crudpdo", "root", "");
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage(); // untuk mendapatkan pesan apa yang error
}
?>