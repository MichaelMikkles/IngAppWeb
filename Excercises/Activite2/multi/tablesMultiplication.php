<?php
    include("function.php");
    for ($i = 0; $i <= 10; $i++) {
        echo '<p style=" border:solid black; padding: 5px; margin: 10px; display: inline-block;">', tableMult($i,10),"</p>";
        if ($i == 5) {
            echo "<br>";
        }
    }