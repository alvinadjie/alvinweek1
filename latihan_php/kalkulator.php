<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Sederhana</title>
</head>
<body>

<form action="hasil_perhitungan.php" method="post">
    <input type="text" name="angka1">
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="angka2">
    <input type="submit" name="hitung" value="Hitung!">
</form>    
</body>
</html>