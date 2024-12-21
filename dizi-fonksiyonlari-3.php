<pre>
<?php

// current() > dizideki geçerli öğeyi döndür
// end() > dizinin dahili işaretçisini son elemanına ayarlar
// next() > dizinin dahili işaretçisini ilerletir
// prev() > dizi işaretçisini geri alır.
// reset() > dizinin dahili göstericisini ilk elemana konumlar.
// extract() > dizideki elemanları değişken olarak kullanmaya imkan sağlar
// asort() > dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
// arsort() > dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
// ksort() > diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
// krsort() > diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.

$dizi = [
    1 => 1,
    2 => 5,
    3 => 9,
    4 => 6
];

// echo current($dizi);
// echo "<br>";
// next($dizi); 
// echo current($dizi);
// echo "<br>";
// prev($dizi);
// echo current($dizi);
// echo "<br>";
// next($dizi); next($dizi);
// echo current($dizi);
// echo "<br>";
// reset($dizi);
// echo current($dizi);


// extract($dizi);
// echo $iki; // 5 çıktısını verir
// asort($dizi);
// print_r($dizi);
// arsort($dizi);
// print_r($dizi);
// ksort($dizi);
// print_r($dizi);
krsort($dizi);
print_r($dizi);

?>
</pre>