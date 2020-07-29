<?php

function papan_catur($angka) {
// tulis kode di sini
    for($k = 0; $k < $angka/2; $k++){
        for($i = 0; $i<$angka; $i++){
            echo "# ";
        }echo "<br>";
        for($j = 1; $j <$angka; $j++){
            echo "&nbsp#";
        }echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/        