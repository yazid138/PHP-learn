<style type="text/css">
    .papan-catur {
        display: flex;
        flex-wrap: wrap;
        width: 160px;
        border: 5px solid #b58600;
    }

    .ukuran {
        width: 20px;
        height: 20px;
    }
    
    .hitam {
        background: black;
    }

    .putih {
        background: white;
    }
</style>

<?php

$n = 8;//jumlah baris dan kolom
$str = '';//menyimpan string untuk kotak"

for ($baris = 1; $baris <= $n ; $baris++) { 
    
    for ($kolom = 1; $kolom <= $n ; $kolom++) {

        $count = $kolom + $baris;
        if (($count % 2) == 0) {
            $str .= '<div class="ukuran hitam"></div>';
        } else {
            $str .= '<div class="ukuran putih"></div>';
        }
        
    }
}

echo '<div class="papan-catur">'.$str.'</div>';