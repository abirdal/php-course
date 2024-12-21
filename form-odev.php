<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3 Mod Ödevi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php

    $message = ""; // mesajı göstermek için değişken oluşturduk
    // post değeri dönüyor mu kontrol ettik
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // kullanıcıdan sayıyı aldık
        $sayi = $_POST['sayi'];

        // eğer kullanıcı bir sayı girmemişse
        if(empty($sayi)){
            $message = "Sayı boş geçilemez.";
        }else {
            // 3'e modundan kalan 0 ise
            if($sayi % 3 == 0){
                $message = "Bu sayı 3'e tam bölünebilir.";
            }else{
                // Örneğin 4 + (3 - 4 % 3) > 4 + (2) => 6 sonucunu alacağız.
                $enYakinSayi = $sayi + (3 - $sayi % 3);
                $message = $sayi." > Bu sayı 3'e tam bölünemez, <strong>en yakın</strong> 3'e tam bölünebilen sayı <strong>".$enYakinSayi."</strong>";
            }
        }
    }

  ?>

<div class="container">
    <form method="POST">
        <div class="col-6 mt-3 offset-md-3">
            <label for="number" class="form-label">Sayı</label>
            <input type="number" name="sayi" class="form-control" id="number">
            <button type="submit" class="btn btn-primary mt-3">Gönder</button>
        </div>
    </form>
    <?php if($_SERVER['REQUEST_METHOD']=='POST'){?>
    <div class="col-6 mt-3 offset-md-3">
        <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
        </div>
    </div>
    <?php }?>
</div>


<!-- 3 - $sayi % 3) -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Ödev
    Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın.
    Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
    Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
    Boş değer gönderilirse değerin boş olmayacağını bildirin. -->

  </body>
</html>