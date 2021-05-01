<?php
    include "conn.php";
    $result=mysqli_query($con,"select email from user_driver");
    $array1 = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $array1 = array_merge($array1, array_map('trim', explode(",", $row['telp'])));
    }
    $registeredno = $array1;
    $requestedno  = $_REQUEST['email'];

    if( in_array($requestedno, $registeredno) ){
        echo 'false';
    }
    else{
        echo 'true';
    }
?>