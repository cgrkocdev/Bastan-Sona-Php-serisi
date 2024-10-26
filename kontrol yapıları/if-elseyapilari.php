<?php
    

    // PHP'de If-Else İfadesi
    // PHP'de if-else ifadesi, koşula bağlı işlemler için kullanılır. Bir koşul true değeri döndürüyorsa if ya da else if bloğu çalışır. Eğer if ve else if koşulları yerine gelmiyorsa ve tanımlanmışsa else bloğu çalışır.
    
    // İngilizcede if eğer anlamına gelmektedir, yani bu ifadeyi türkçeleştirecek olursak $x değişkeninin değeri eğer 5'e eşitse şu kod bloğunu çalıştır, 5'ten büyükse şu kod bloğunu, eğer bu koşulların hiçbirisine uymuyorsada else bloğunu çalıştır. Şimdi bu türkçe örneğimizi kod yazarak anlamaya çalışalım.

    // $x = 6;

    // if($x == 5)
    // {
    //    echo "x değeri 5 tir";
    // }
    // elseif($x < 5)
    // {
    //    echo "x değeri 5 ten küçüktür.";
    // }

    // else 
    // {
    //    echo "x değeri = " . $x;
    // }


//     if-else bloğunu parantezlerle kullanabildiğimiz gibi, farklı bir yöntemlede kullanmamız mümkündür. Örnek vermek gerekirse;


//     if (KOŞUL):
    
//     endif;
    
//     // ya da
//     if (KOŞUL):
//         // işlem
//     else if (KOŞUL):
//         // işlem
//     else if (KOŞUL):
//         // işlem
//     else:
//         // işlem
//     endif;

// $x = 4;
// if ($x == 5):
//     echo "x 5e eşittir.";
// elseif($x < 5):
//     echo "x 5 ten küçüktür.";
// else:
//     echo 'x değeri = ' . $x;
// endif;

//HTML İÇİNDE KULLANIMI
?>
<?php
    $x = 5
?>
<?php if ($x == 5): ?>
    <strong>$x değeri 5'e eşittir.</strong>
<?php elseif ( $x > 5): ?>
    <p>$x değeri 5'ten büyüktür</p>
<?php else: ?>
    <div style="background: red;">$x değeri = <?=$x?></div>
    <?php
        endif;
    ?>
