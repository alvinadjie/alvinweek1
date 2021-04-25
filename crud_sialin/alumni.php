<!DOCTYPE html>
<?php
include 'conn.php';

$data = mysqli_query($conn,"select * from user");
session_start();
echo $_SESSION['status'];

// mengecek apakah sudah login belum
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
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
<a href="aksi_logout.php">Logout</a>
    <form action="aksi_tambah.php" method="post">
    Nama
    <input type="text" class="form-control" name="name"/>
    <br>
    Asal Sekolah
    <input type="text" class="form-control" name="asal"/>
    <br>
    Username
    <input type="text" class="form-control" name="username"/>
    <br>
    Password
    <input type="password" class="form-control" name="password"/>
    <br>
    Jenis Kelamin
    <select name="jk" class="form-control" id="">
        <option value="P">Pria</option>
        <option value="W">Wanita</option>
    </select>
    <br>
    <input type="submit" name="input" value="Input!">
    </form>

    

    <table class="table" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Jenis Kelamin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['asal_sekolah']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td> <a href="edit_alumni.php?id_alumni=<?php echo $d['id']; ?>" class="btn btn-info">Edit</a><a class="btn btn-danger" href="delete_alumni.php?id_alumni=<?php echo $d['id']; ?>" onclick="if (confirm('Apakah Anda Yakin Ingin menghapus data alumni ini?')) commentDelete(1); return false">Hapus</a></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>