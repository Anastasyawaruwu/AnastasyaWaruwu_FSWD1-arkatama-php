<?php

    function triangle_upside_left($pattern = "*", $sise = 5){
        echo "<br>Triangle Upside Left <br><br>";
        for ($i = 1; $i <= $sise; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $pattern;
            }
            echo "<br>";
        }
    }    

    function triangle_upside_right($pattern = "*", $sise = 5){
        echo "<br>Triangle Upside Right <br><br>";
        for ($i = 1; $i <= $sise; $i++) {
            // Membuat spasi sebelum mencetak bintang
            for ($j = 1; $j <= $sise - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Mencetak bintang
            for ($k = 1; $k <= $i; $k++) {
                echo $pattern;
            }
            echo "<br>";
        }
    }

    function triangle_downside_left($pattern = "*", $sise = 5){
        echo "<br>Triangle Downside Left <br><br>";
        for ($i = $sise; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $pattern;
            }
            echo "<br>";
        }
    }

    function triangle_downside_right($pattern = "*", $sise = 5){
        echo "<br>Triangle Downside Right <br><br>";
        for ($i = $sise; $i >= 1; $i--) {

            for ($j = 1; $j <= $sise - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }

            for ($k = 1; $k <= $i; $k++) {
                echo $pattern;
            }
            echo "<br>";
        }
    }

 
    function pilih_pattern($pilihan){        
        switch ($pilihan) {
            case 1:
                echo "Pilihan anda adalah 1<br>";
                triangle_upside_left();
                break;
            case 2:
                echo "Pilihan anda adalah 2<br>";
                triangle_upside_right();
                break;
            case 3:
                echo "Pilihan anda adalah 3<br>";
                triangle_downside_left();
                break;
            case 4:
                echo "Pilihan anda adalah 4<br>";
                triangle_downside_right();
                break;        
            default:
                echo "Pilihan tidak ada. Masukan angka antara 1-4.";
                break;
        }
    }
?>