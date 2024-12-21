<?php


// in_array() > Bir dizide bir değerin varlığını araştırır.
// array_shift() > Dizini başlangıcından bir eleman çıkarır.
// array_pop() > Dizinin sonundan bir eleman çıkarır.
// array_slice() > Bir dizinin belli bir bölümünü döndürür
// array_sum() > Bir dizideki değerlerin toplamını hesaplar.
// array_product > Bir dizideki değerlerin çarpımını bulur.
// array_unique > Diziden yinelenen değerleri siler.
// array_values() > Bir dizinin tüm değerlerini döndürür.
// array_push() > Belli sayıda elemanı dizinin sonuna ekler.
// array_unshift > Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
// array_keys() > Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.

// $names = ['aytac','ahmet','mehmet','fatma','aytac'];
// $numbers = [1,2,3,4];

// print_r(in_array('aytac',$names));
// $newNames = array_shift($names);
// print_r($names);

// print_r(array_slice($names,0,2));
// print_r(array_sum($numbers));

// print_r(array_unique($names)); 2 tane aytac oldugu icin birini sildi.

// print_r(array_values($names));

// array_push($names,'test','test2');
// print_r($names);

// array_unshift($names,'test','test2');
// print_r($names);

// print_r(array_keys($names));

$array = [
    'Klavye' => 'K120, K270',
    'Mouse' => 'M500s, m300s'
];
echo "<pre>";
print_r($array);
echo "</pre>";

print_r(array_keys($array));
?>