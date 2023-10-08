<?php
    $uts=9;
    $kelas=11;
    $nilai=90;

    if($uts >= 9){
        echo "anda lulus";
    }
    elseif($uts < 9) {
        echo "anda tidak lulus";
    }else{
        echo "anda belom ujian";
    }

    echo "<br>";
    echo "<br>";

    

    if($nilai > 90){
        echo "anda lulus";
    }
    elseif($nilai < 60) {
        echo "anda tidak lulus";
    }else{
        echo "anda belom ujian";
    }

    echo "<br>";
    echo "<br>";

    switch($kelas){
        case 10:
            echo "kamu gak lulus kelas 10";
            break;
        case 11:
            if($nilai < 90){
                echo "nilaimu 90";
                echo "kamu gak lulus kelas 11";
                break;
            }
        default:
        echo "kamu belom ujian";      
    }

    echo "<br>";
    echo "<br>";

    $suka =true;
    echo $suka ? "omga" : "omagaaaa";

    echo "<br>";
    echo "<br>";

    $skorU= 68;
    $skorT= 100;

    if($skorU >= 80){
        echo "anda lulus" ;
    }else{
        if($skorT){
            echo "anda lulus karna nilai tugas" ;
        }
        else{
            echo "anda gak lulus :( " ;
        }
    }
    echo "<br>";

    echo "<br>";

?>