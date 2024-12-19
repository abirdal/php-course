<?php

/* fonksiyonda görevini görür ve tekrar çağırsak dahi 0 olarak sonuç verir */

// STATIC

// function say(){
//     $sayi = 0;

//     echo $sayi;
//     $sayi++;
// };

// say();
// say();
// say();
  
// function say(){
//     static $sayi = 0;

//     echo $sayi;
//     $sayi++;
// };

// say();
// say();
// say();

// GLOBAL

//$isim = "aytac"; Fonksiyon içerisine kullanmak istediğimizde Undefined variable $isim hatası verecektir
$globalSurname="Test";

function soyle(){
    global $globalSurname;
    //echo $isim;
    echo $globalSurname;
}

soyle();

?>