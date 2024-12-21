<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>

<form action="request.php?islem=ekle" method="POST">

    <input type="text" name="isim" placeholder="isim"><br>
    <input type="text" name="soyisim" placeholder="soyisim">
    <br>
    
    <label>php</label>
    <input type="checkbox" value="php" name="dil[]">    <br>
    <label>nodejs</label>
    <input type="checkbox" value="nodejs" name="dil[]">    <br>
    <label>css</label>
    <input type="checkbox" value="css" name="dil[]">    <br>

    <button type="submit">gönder</button>

</form>
    
</body>
</html>