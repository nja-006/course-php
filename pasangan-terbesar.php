<?php
function pasangan_terbesar($angka){
// kode di sini
    $data = array_map('intval',str_split($angka));
        $lokasi = count($data);
        $angka = 0;
        for($i = 0 ; $i < $lokasi-1 ; $i++){
            $pasanganAngka = intval($data[$i] . $data[$i+1]);
            if($pasanganAngka > $angka){
                $angka = $pasanganAngka;
            }
        }
        echo $angka;
        echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>