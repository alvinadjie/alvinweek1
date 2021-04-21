<?php
include 'conn.php';
    if(isset($_POST['input'])){
        $nama=$_POST['name'];
        $asal=$_POST['asal'];
        $jk=$_POST['jk'];
        if (mysqli_query($conn,"insert into user (nama, asal_sekolah, jenis_kelamin) values ('$nama','$asal','$jk')")) {
            echo "New record created successfully";
         } else {
            echo "Error: ". mysqli_error($conn);
         }
        header("location:alumni.php");
    }
    ?>