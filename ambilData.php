<?php 
    include 'koneksi.php';

    $queryResult = $connect->query("SELECT * FROM tb_buku");
    $result = array();

    while ($fetchData = $queryResult -> fetch_assoc() ) {
        $result[] = $fetchData;
    }

    echo json_encode($result);  
?>