<?php
include 'conn.php';
if(isset($_GET['id_alumni'])){
    $id = $_GET['id_alumni'];

    if(mysqli_query($conn,"delete from user where id = '$id'")) {
        echo "Delete success";
        } else {
        echo "Error: ". mysqli_error($conn);
        }
    header("location:alumni.php");
}
 ?>