<?php
    function tableMult($numero,$taille){
        for($i= 0;$i<=$taille;$i++){
            echo "$numero x $i = " . ($numero * $i) . "<br>" ;
        }
    }
