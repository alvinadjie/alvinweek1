<?php
include 'conn.php';
    if(isset($_POST['input'])){
        $nama=$_POST['name'];
        $asal=$_POST['asal'];
        $jk=$_POST['jk'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        if (mysqli_query($conn,"insert into user (nama, asal_sekolah, jenis_kelamin, username, password) values ('$nama','$asal','$jk','$username', '$password')")) {
            echo "New record created successfully";
         } else {
            echo "Error: ". mysqli_error($conn);
         }
        header("location:alumni.php");
    }
    ?>