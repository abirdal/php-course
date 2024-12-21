<?php

function createTriangle($rowCount){
    for ($i=0; $i < $rowCount; $i++) { 
        for ($j=0; $j <= $i; $j++) { 
            echo "0 ";
        }
        echo "<br>";
    }
};

createTriangle(15);


?>

