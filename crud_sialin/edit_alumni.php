<!DOCTYPE html>
<?php
include 'conn.php';

if (isset($_GET['id_alumni'])){
    $id = $_GET['id_alumni'];
    $data = mysqli_query($conn,"select * from user where id = '$id'");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
<?php
while($d = mysqli_fetch_array($data)){
?>
    <form action="aksi_edit.php?id_alumni=<?php echo $d['id']?> " method="post">
    Nama
    <input type="text" class="form-control" name="name" value="<?php echo $d['nama'] ?>"/>
    <br>
    Asal Sekolah
    <input type="text" class="form-control" name="asal" value="<?php echo $d['asal_sekolah'] ?>"/>
    <br>
    Username
    <input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>"/>
    <br>
    Password
    <input type="password" class="form-control" name="password" value="<?php echo $d['password'] ?>"/>
    <br>
    Jenis Kelamin
    <select name="jk" class="form-control" id="">
        <option value="P" <?php if($d['jenis_kelamin'] == 'P') {echo 'selected';} ?>>Pria</option>
        <option value="W" <?php if($d['jenis_kelamin'] == 'W') {echo 'selected';} ?>>Wanita</option>
    </select>
    <br>
    <input type="submit" name="input" value="Edit!">
    </form>
<?php
}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>