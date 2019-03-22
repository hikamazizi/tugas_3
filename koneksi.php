<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'',"sertifikasi");
    
    // production
    $kon = mysqli_connect("localhost", "id7899369_azizi",'12345',"id7899369_tugas3");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>