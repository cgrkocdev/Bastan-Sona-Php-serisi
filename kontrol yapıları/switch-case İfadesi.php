<?php
    // Kontrol yapılarından biriside switch-case ifadesidir. Çalışma mantığı olarak if-else kontrol yapısından hiçbir farkı yoktur. Genelde kısa kontrol işlemleri için if-else, daha komplike kontrol işlemleri için daha düzgün bir yapıda ve okunabilirliği yüksek olmasından dolayı switch-case kontrol yapısı kullanılmaktadır.

    // İlk olarak bir önceki dersimizde verdiğimiz if-else örneğini bir tekrarlayalım.
    // $x = 5;

    // if ($x == 5)
    // {
    //     echo "x değeri 5 dir ";
    // }
    // else if ($x > 5)
    // {
    //     echo 'x değeri 5 ten büyüktür';
    // }
    // else
    // {
    //     echo 'x değeri =' .$x;
    // }
    //     aynı işlemi switch - case ile yapalım switch case daha komplikeyken if else daha basit yapılarda kullanılır

    // $x = 5;
    // switch ($x)
    // {
    //     case 5:
    //         echo "x değeri 5 tir";
    //     break;
    //     case $x > 5:
    //         echo "x değeri 5 den büyüktür";
    //     break;
    //     default:
    //         echo 'x değeri = ' . $x;
    //     break;
    // }

    //  default: u if else yapısıdnaki else gibi düşünebiliriz


    $x = 5;

    switch($x):
        case 5 :
            echo 'x değeri 5 tdir';
        break;
        case $x > 5:
            echo ' x değeri 5 ten büyüktür';
        break;
        default:
            echo 'x değeri = ' . $x;
        break;
        
        endswitch;


?>