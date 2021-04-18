<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// A = 80 - 100
// B = 70 - 79
// C = 60 -69
// D = <60

$alvin = 60;
$danty = 85;


function konversiNilai($nama) {
    if ($nama >= 80){
        return 'A';
    }
    else if ($nama >= 70){
        return 'B';
    }
    else if ($nama >= 60){
        return 'C';
    }
    else {
        return 'D';
    }
}
// echo konversiNilai(90);
// echo '<br/>';
// echo 'Nilai Alvin :'.konversiNilai($alvin);
// echo '<br/>';
// echo 'Nilai Danty :'.konversiNilai($danty);

$nilai = array(90, 70, 60, 50, 100, 87);
$nilai_asosiasi = array("Alvin"=>70, "Danty"=>90, "Tes_user"=>"74");


// echo $nilai_asosiasi['Danty'];

// echo 'Array :';
// var_dump($nilai);
// echo '<br/>';

// foreach ($nilai as $rec){
//     echo $rec.'<br/>';
// }

$mahasiswa = array(
    array("Nama"=>"Danty", "Nis"=>"123", "Nilai"=>90),
    array("Nama"=>"Alvin", "Nis"=>"124", "Nilai"=>80),
    array("Nama"=>"Tes", "Nis"=>"125", "Nilai"=>50)
  );

?>
<table border="1px">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Nis</th>
            <th>Nilai</th>
            <th>Nilai Huruf</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
                foreach ($mahasiswa as $rec){
                echo '<tr>';
                    echo '<td>'.$rec['Nama']. '</td>';
                    echo '<td>'.$rec['Nis']. '</td>';
                    echo '<td>'.$rec['Nilai']. '</td>';
                    echo '<td>'.konversiNilai($rec['Nilai']). '</td>';
                }
                echo '</tr>';
            ?>
        </tr>

    </tbody>
</table>
   
</body>
</html>
