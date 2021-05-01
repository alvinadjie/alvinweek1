<?php
    include "conn.php";
    $result=mysqli_query($con,"select no_telp from perusahaan");
    $array1 = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $array1 = array_merge($array1, array_map('trim', explode(",", $row['no_telp'])));
    }
    $registeredno = $array1;
    $requestedno  = $_REQUEST['telepon'];

    if( in_array($requestedno, $registeredno) ){
        echo 'false';
    }
    else{
        echo 'true';
    }
?>