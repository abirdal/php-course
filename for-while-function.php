<?php  

// FOR
// FOREACH
// WHILE - DO WHILE
// FUNCTION - ANONIM FONKSİYON


// $dizi = [
//     'Aytac',
//     'Ahmet',
//     'Mehmet',
//     'Veli'
// ];

//     for ($i=0; $i <= count($dizi)-1; $i++) { 
//         echo $dizi[$i]."<br>";
//     }
//     echo count($dizi);

// $isimler = ['Aytac', 'Ali', 'Veli', 'Mehmet'];

// foreach ($isimler as $key => $value) {
//     echo "<h3 style='color:red'>".$value."</h3>";
//     // echo "<h3 style='color:red'>".$key."</h3>";
//     // echo "<h3 style='color:red'>".$isimler[$key]."</h3>";
// }

// $a = 1;
// while ($a <= 10) {
//     echo $a."<br>";
//     $a++;
// }

// $b=0;

// do {
//     echo $b." Aytac <br>";
//     $b++;
// } while ($b <= 10);

// function topla($sayi1, $sayi2){
//     return $sayi1 + $sayi2;
// }

// echo topla(1,2);

// Default değer belirtebiliriz.
// function topla($sayi1=1, $sayi2=1){
//     return $sayi1 * $sayi2;
// }

// echo topla(2,10);

// $topla = function($sayi1,$sayi2){
//     return $sayi1 + $sayi2;
// };

// echo $topla(1,2);

$islem = [
    'topla' => function($a,$b){return $a+$b;},
    'cikar' => function($a,$b){return $a-$b;}
];

echo $islem['topla'](3,5);

?>