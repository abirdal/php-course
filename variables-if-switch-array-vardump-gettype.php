<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
        // echo (2 + 5) / 2 * (3 - 1) * 9;
        // $a = 5;
        // $b = 6;
        // // echo var_dump($a === $b)
        // echo var_dump($b <=> $a);

    $abirdal="galatasaray";
    
    $modul = '<div>';
    $modul .= '<p>Lorem ipsum <strong>'.$abirdal.'</strong> dolor sit amet.</p>';    
    $modul .= '</div>';

    print $modul.'<hr>';

    //////////////////

    $a = 3;
    $b = 2;

    echo (($a < $b) && ($a != $b)) || $a !== $b;
    
    echo '<hr>';
    //////////////////

    $x=3;
    $y=5;
    
    if($x==1){
        echo "1. koşul çalıştı";
    }elseif($x==2){
        echo "2. koşul çalıştı";
    }else{
        echo "hiçbir koşul çalışmadı  <hr>";
    }

    switch($x){
        case $x==3:
                echo "x, 3'e eşit";
        break;
    }
    echo '<hr>';
    //echo $x==3 ? '3e eşit' : 'değil';

    $kisiler = [
        'aytac',
        'ahmet',
        // 'mehmet',
        // 'test'
    ];

    // Türkçe karakter kullanımında harf sayısını doğru göstermiyor !!

    echo '<pre>';
    var_dump($kisiler);

    echo '<hr>';

    $hayvanlar = [
        'Uçan Hayvanlar' => ['Kartal','Şahin','Güvercin'],
        'Sürüngen Hayvanlar' => ['Yılan','Örümcek']

        // 0 => ['Kartal','Şahin','Güvercin'], 
        // 1 => ['Yılan','Örümcek']
    ];

   echo $hayvanlar['Uçan Hayvanlar'][0];

    ?>
    
</body>
</html>