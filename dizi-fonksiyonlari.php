<?php

// print_r() > diziyi ekrana yazdır
// var_dump() > dizi hakkında detaylı bilgi ver
// explode() > ayraç belirterek string'i diziye çevir
// implode() > diziyi ayraç kullanarak bir string'e çevir
// count() > dizi eleman sayısını ver
// is_array() > dizi olup olmadıgını sorgula (1,0)
// shuffle() > diziyi karıştırır (random)
// array_combine() > anahtarlar için bir dizi, değerler için bir dizi kullanarak ilişki kurar ve yeni dizi verir
// array_count_values > dizinin içerisinde kaç kere geçtiğini verir
// array_flip > anahtarlar ve değerlerin yerlerini değiştirir
// array_key_exists() > dizide belirtilen key var mı diye kontrol ediyor (1,0)
// array_map() > dizilerin elemanlarını geriçağırım işlevi uygular
// array_merge() > dizileri birleştirir
// array_rand() > diziden rastgele bir key çeker
// array_reverse() > diziyi tersine sıralayıp döndürür
// array_search() > dizide belirtilen değeri arar ve bulursa ilk anahtarı döndürür

$array = "1'2'3'4'5";
$newArray = explode("'",$array);
print_r($newArray);

$newArray2=implode('^',$newArray);
print_r($newArray2);

// $array = [1,2,3,4,5];

// // print_r($array);
// // var_dump($array);
// $dizge = implode('^asd^',$array);
// echo $dizge."<hr>";


// $newArr = explode('^asd^',$dizge);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// $sayilar = range(1,10);
// shuffle($sayilar);
// echo "<pre>";
// print_r($sayilar);
// echo "</pre>";

// $meyveler = ['armut','elma','mandalina','armut','elma','mandalina','armut'];
// $basHarfleri = ['a','e','m'];

// print_r(array_combine($meyveler,$basHarfleri));
// $test=array_count_values($meyveler);
// print_r($test);

// print_r(array_key_exists(2,$basHarfleri));

// $array = range(1,10);

// function kupAl($sayi){
//     return $sayi*$sayi*$sayi;
// }

// echo "<pre>";
// print_r(array_map('kupAl',$array));
// echo "</pre>";

// $sayilar = range(1,10);
// $sayilar2 = range(1,10);


// $cift = array_filter($sayilar,function($e){
//     return $e % 2 == 0 ? $e : false;
// });
// $uceBolunebilen = array_filter($sayilar2,function($e){
//     return $e % 3 == 0 ? $e : false;
// });

// print_r($cift);

// print_r($uceBolunebilen);

// $sayilar1 = range(1,5);
// $sayilar2 = range(6,10);
// $sayilar3 = range(11,15);
// $sayilar4 = range(16,20);

// $mergedArray = array_merge($sayilar1,$sayilar2,$sayilar3,$sayilar4);
// print_r($mergedArray);

$takimlar = ['Galatasaray','Man United', 'Chelsea', 'Real Madrid','Chelsea'];

// $rastgeleTakimKey = array_rand($takimlar,2);
// echo $takimlar[$rastgeleTakimKey[0]]."<br>";
// echo $takimlar[$rastgeleTakimKey[1]];

// $reverseTakimlar = array_reverse($takimlar);
// print_r($reverseTakimlar);

$searchResult = array_search('Chelsea',$takimlar);

print_r($searchResult);
?>