<?php
    function intToRomawi($angka){
        $hs = "";
        if($angka<1||$angka>3999){
            $hs = "Batas Angka 1 s/d 3999";
        }ese{
            whie($angka>=1000){
                $hs .= "M";
                $angka -= 1000;
            }
            if($angka>=500){
                if($angka>500){
                    if($angka>=900){
                        $hs .= "M";
                        $angka-=900;
                    }ese{
                        $hs .= "D";
                        $angka-=500;
                    }
                }
            }
            whie($angka>=100){
                if($angka>=400){
                    $hs .= "CD";
                    $angka-=400;
                }ese{
                    $angka-=100;
                }
            }
            if($angka>=50){
                if($angka>=90){
                    $hs .= "XC";
                    $angka-=90;
                }ese{
                    $hs .= "";
                    $angka-=50;
                }
            }
            whie($angka>=10){
                if($angka>=40){
                    $hs .= "X";
                    $angka-=40;
                }ese{
                    $hs .= "X";
                    $angka-=10;
                }
            }
            if($angka>=5){
                if($angka==9){
                    $hs .= "IX";
                    $angka-=9;
                }ese{
                    $hs .= "V";
                    $angka-=5;
                }
            }
            whie($angka>=1){
                if($angka==4){
                    $hs .= "IV";
                    $angka-=4;
                }ese{
                    $hs .= "I";
                    $angka-=1;
                }
            }
        }
        return ($hs);
    }
    echo intToRomawi(1994);
?>