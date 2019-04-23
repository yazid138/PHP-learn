<?php

$abjad = range('A','Z');//bikin array abjad dari A-O

$hitung = 0;//nilai untuk akses array
$jb = 4;//jumlah baris
$jk = 4;//jumlah kolom

for ($i=1; $i <= $jb;) { 
    
    for ($t=1; $t <= $jk; $t++) { 
        echo '  '.$abjad[$hitung];

        $hitung += 4;
    }
    echo "\n";//baris baru

    $hitung = $i;
    $i++;
}