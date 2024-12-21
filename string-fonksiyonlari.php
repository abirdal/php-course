<?php

// strlen($metin) > Verilen metnin karakter sayısını yani uzunluğunu verir.
// explode($ayirici,$metin) > Verilen metni belirtilen ayırıcı karaktere göre parçalar ve bir dizi olarak gönderir.
// implode($ayirici,$dizi) > Bu fonksiyon explode() fonksiyonunun aksine bir dizideki değerleri belirtilen ayırıcıyla birleştirerek biraraya getirir.
// str_split($metin,$sayi) > Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür. Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.
// ltrim($metin), rtrim($metin), trim($metin) > Verilen metnin sırasıyla solundaki(left-ltrim), sağındaki(right-rtrim) ve her iki tarafındaki(trim) gereksiz boşlukları temizler.
// substr($metin,$baslangic,$uzunluk) > Bir metnin belirtilen başlangıç konumundan itibaren istenilen uzunluktaki bir parçasını gönderir.
// strtolower($metin), strtoupper($metin) > Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür.
// mb_strtolower() ve mb_strtoupper() > Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür. Türkçe karakter sorunu yaratmaz.
// ucfirst($metin), ucwords($metin) > Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve metindeki her kelimenin ilk karakterini(ucwords) büyük harfe dönüştürür.
// str_replace($kaynak,$hedef,$metin) > Verilen metindeki kaynak karakterlerin yerine hedef karakterileri koyarak değiştirme yapar. Bu fonksiyon küçük/büyük harf duyarlıdır.
// nl2br($metin) > String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.
// md5($metin), sha1($metin) > Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.
// strstr() > Bir dizgede belirtilen karekterden sonrasını döndürür.

// NOT !! mb_ prefix ile Türkçe Karakterlerde meydana gelen 2 byte probelemini ortadan kaldırabiliriz.
$metin = "aytaç Birdal php\n öğreniyor";
// echo mb_strlen($metin);
// echo strlen($metin);

// $yeniMetin = explode(' ',$metin);
// print_r($yeniMetin);
// echo "<br>";
// print_r(implode(' * ',$yeniMetin));

// print_r(mb_str_split($metin,3));
// echo $metin."<br>";
// $metin = ltrim($metin); //rtrim, ve trim olarak da kullanilabilir
// echo $metin;

// echo mb_substr($metin,3,10);
// echo strtolower($metin)."<br>";
// echo mb_strtoupper($metin);

// echo ucfirst($metin);
// echo ucwords($metin);

// echo str_replace('Birdal','Test',$metin);

// echo nl2br($metin);

// aynısı sha1 için de geçerli
// $parola = "asdf+1234";
// $dbParola = "2dce687fd0651f268a766cbc9d61eb76";
// if(md5($parola) == $dbParola){ echo "<h1>Yönlendiriliyorsunuz..</h1>"; } else { echo "lütfen şifrenizi kontrol ediniz.. ";}

$mailAdresi = "aytacbirdall@gmail.com";
echo strstr($mailAdresi,'@',true); // true parametresini eklersek öncesini, eklemezsek sonrasını almış oluruz

?>