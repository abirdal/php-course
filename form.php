<pre>
<?php

function filter($p){
    // eğer gelen veri diziyse array_map ile dizi döndür, değilse devam et
    return is_array($p) ? array_map('filter',$p): htmlspecialchars(strip_tags(trim($p)));
}

$dizi = array_map('filter',$_POST);

print_r($dizi);
?>
</pre>