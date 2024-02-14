<?php
    include("function.php");
    

    if (isset($_GET['number']) && $_GET['number'] > 0){
        $number = $_GET['number'];
        echo 'Le factoriel ' . $_GET['number'] . ' est: ';
        echo calculerFactoriel($number);
    }
        
    else
        tableMult(0,0);
    function calculerFactoriel($number){

        if (($number == 0) or ($number == 1)){
            return 1;
        } else{
            return ($number * calculerFactoriel($number - 1));
        }
    }

?> 