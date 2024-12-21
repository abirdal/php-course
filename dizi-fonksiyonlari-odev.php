<pre>
<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function createNewArray($array, $value){
    //boş değerleri temizle
    $filteredArray = array_filter($array);
    //rastgele yeni bir dizi oluştur
    $newArray = array_rand($filteredArray,$value);
    return $newArray;
}

print_r(createNewArray($planets,3));

?>
</pre>