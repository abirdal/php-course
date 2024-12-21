<pre>
<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function createArray($array, $count=2){
    //boş elemanları temizle
    $filteredArray = array_filter($array);
    //rastgele dizi oluştur
    $randomizedArray = array_rand($filteredArray,$count);
    return $randomizedArray;

}

print_r(createArray($planets,5));
print_r(createArray($planets,3));
print_r(createArray($planets,2));

?>
</pre>