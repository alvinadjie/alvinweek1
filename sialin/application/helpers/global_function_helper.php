<?php
	function buatrp($angka){
	 	$jadi = "Rp " . number_format($angka,2,',','.');
		return $jadi;
	}

	function buattgl($tanggal){
		$tanggal = strtotime($tanggal);
		return date("d-M-y",$tanggal);
	}

	function buattglfull($tanggal){
		$tanggal = strtotime($tanggal);
		return date("d-M-y H:m:s",$tanggal);
	}

	function jenis_trans($transaksi){
		if($transaksi == 1){
			$transaksi = "<span style='color:green'> Plus </span>";
		}
		else{
			$transaksi = "<span style='color:red'> Minus </span>";
		}
		return $transaksi;
    }
    function nilai_huruf($nilai){
        $huruf = 'D';
        if ($nilai > 89){
            $huruf = 'A';
        }
        else if ($nilai > 69){
            $huruf = 'B';
        }
        else if ($nilai > 49){
            $huruf = 'C';
        }
        return $huruf;
    }
?>