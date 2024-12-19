<?php

// RECURSIVE FONKSIYON KENDINI CAGIRABILEN (YENILEYEN) FONKSIYONLAR

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Klavye'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Mouse'
    ],
    [
        'id' => 3,
        'parent' => 1,
        'name' => 'Kablolu'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'Kablosuz'
    ],
    [
        'id' => 5,
        'parent' => 2,
        'name' => 'Kablolu'
    ],
    [
        'id' => 6,
        'parent' => 2,
        'name' => 'Kablosuz'
    ],
    [
        'id' => 7,
        'parent' => 3,
        'name' => 'Logitech K270 Kablosuz Klavye'
    ],
    [
        'id' => 8,
        'parent' => 4,
        'name' => 'Logitech K120 Kablolu Klavye'
    ],
    [
        'id' => 9,
        'parent' => 5,
        'name' => 'Logitech M500s Kablolu Mouse'
    ],
    [
        'id' => 10,
        'parent' => 6,
        'name' => 'Logitech MX Master 3 Kablosuz Mouse'
    ],
    ];

// function getCategories($array, $par=0){
//     $html = "";
//     $html.="<ul>";
//     foreach ($array as $value) {
//         if($value['parent'] == $par){
//             $html.="<li>";
//             $html.=$value['name'];
//             $html.=getCategories($array,$value['id']);    
//             $html.="</li>";
//         }
//     }
//     $html.="</ul>";
//     return $html;
    
// };

// echo getCategories($categories,0);

function getCategories($array, $par=0){
    $etiket="";

    $etiket.="<ul>";
    foreach ($array as $value) {
        if($value['parent']==$par){
            $etiket.="<li>";
            $etiket.=$value['name'];
            $etiket.=getCategories($array,$value['id']);
            $etiket.="</li>";
        }
    }
    
    $etiket.="</ul>";
    return $etiket;
};

echo getCategories($categories);

?>