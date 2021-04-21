<?php

function perhitungan($a,$b,$operator){
    if ($operator == '+'){
        return $a+$b;
    }
    else if ($operator == '-'){
        return $a-$b;
    }
    else if ($operator == 'x'){
        return $a*$b;
    }
    else if ($operator == '/'){
        return $a/$b;
    }
    
}
if(isset($_POST['hitung'])){

    if(isset($_POST['angka1'])){
        $angka1 = $_POST['angka1'];
    }
    if(isset($_POST['angka2'])){
        $angka2 = $_POST['angka2'];
    }
    if(isset($_POST['operator'])){
        $operator = $_POST['operator'];
    }

    echo $angka1.' '.$operator.' '.$angka2.' = '.perhitungan($angka1,$angka2,$operator);
}
?>
<br>
<a href="kalkulator.php">Hitung Lagi</a>