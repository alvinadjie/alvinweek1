<?php
include 'conn.php';
    if(isset($_POST['input'])){
        if (isset($_GET['id_alumni'])){
            $id = $_GET['id_alumni'];
        }
        $nama=$_POST['name'];
        $asal=$_POST['asal'];
        $jk=$_POST['jk'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        if (mysqli_query($conn,"update user set nama='$nama', asal_sekolah='$asal', jenis_kelamin='$jk', username='$username', password='$password' where id = '$id'")) {
            echo "New record created successfully";
         } else {
            echo "Error: ". mysqli_error($conn);
         }
        header("location:alumni.php");
    }
    ?>