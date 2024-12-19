<?php

function ucgenOlustur($satirSayisi){
    for ($i=0; $i < $satirSayisi; $i++) { 
        for ($j=0; $j <= $i; $j++) { 
            echo "0 ";
        }
        echo "<br>";
    }
}

ucgenOlustur(20);

?>