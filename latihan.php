<?php
    function intToRomawi($angka){
        $hs = "";
        if($angka<1||$angka>3999){
            $hs = "Batas Angka 1 s/d 3999";
        }else{
            while($angka>=1000){
                $hs .= "M";
                $angka -= 1000;
            }
            if($angka>=500){
                if($angka>500){
                    if($angka>=900){
                        $hs .= "M";
                        $angka-=900;
                    }else{
                        $hs .= "D";
                        $angka-=500;
                    }
                }
            }
            while($angka>=100){
                if($angka>=400){
                    $hs .= "CD";
                    $angka-=400;
                }else{
                    $angka-=100;
                }
            }
            if($angka>=50){
                if($angka>=90){
                    $hs .= "XC";
                    $angka-=90;
                }else{
                    $hs .= "";
                    $angka-=50;
                }
            }
            while($angka>=10){
                if($angka>=40){
                    $hs .= "X";
                    $angka-=40;
                }else{
                    $hs .= "X";
                    $angka-=10;
                }
            }
            if($angka>=5){
                if($angka==9){
                    $hs .= "IX";
                    $angka-=9;
                }else{
                    $hs .= "V";
                    $angka-=5;
                }
            }
            while($angka>=1){
                if($angka==4){
                    $hs .= "IV";
                    $angka-=4;
                }else{
                    $hs .= "I";
                    $angka-=1;
                }
            }
        }
        return ($hs);
    }
    echo intToRomawi(1994);
?>