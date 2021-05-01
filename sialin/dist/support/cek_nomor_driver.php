<?php
    include "conn.php";
    $result=mysqli_query($con,"select no_hp from user_driver");
    $array1 = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $array1 = array_merge($array1, array_map('trim', explode(",", $row['no_hp'])));
    }
    $registeredno = $array1;
    $requestedno  = $_REQUEST['hp'];

    if( in_array($requestedno, $registeredno) ){
        echo 'false';
    }
    else{
        echo 'true';
    }
?>