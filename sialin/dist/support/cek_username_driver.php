  <?php
    include "conn.php";
    $result=mysqli_query($con,"select username from user_driver");
    $array1 = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $array1 = array_merge($array1, array_map('trim', explode(",", $row['username'])));
    }
    $registeredemail = $array1;
    $requestedemail  = $_REQUEST['username'];

    if( in_array($requestedemail, $registeredemail) ){
        echo 'false';
    }
    else{
        echo 'true';
    }
?>