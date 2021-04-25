
<!DOCTYPE html>
<?php

include 'conn.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Halaman Login</h3>
    <div class="row text-center">
    
    <form action="" method="post">
    <p>Username</p>
    <input type="text" class="form-control" name="username">
    <p>Password</p>
    <input type="password" class="form-control" name="password">
    <input type="submit" value="Login" name="login" class="btn btn-primary">
    <a href="">Belum punya akun?</a>
    </form>
    
    </div>

    <?php if(isset($_GET['pesan'])){
        if($_GET['pesan']=='gagal'){
        ?>
        
        <h4 style="color:red">Login Gagal!</h4>
        <?php
        }
        else if($_GET['pesan']=='belum_login'){
            ?>
            <h4 style="color:red">And Belum Login!</h4>
            <?php
        }
    } ?>
</div>

<?php
if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
     
    if($cek == 1){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:alumni.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>