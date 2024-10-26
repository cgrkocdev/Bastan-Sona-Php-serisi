<?php
    // While döngüsü, PHP programlamada kullanılan temel döngülerden biridir. While döngüsü, belirtilen koşul doğru olduğu sürece döngü içindeki kodları tekrar tekrar çalıştırmamızı sağlar. Koşul yanlış olduğunda döngü durur ve programın geri kalan kısmına geçilir.

    // while (koşul) {
    //     // Döngü içinde çalışacak kodlar
    // }

    $sayi = 0;

    while($sayi <= 10)
    {
        //echo $sayi . "<br>";
        $sayi++;
    }

//     Bu örnekte, $sayi değişkenini 1 ile başlatıyoruz ve koşulumuz $sayi değişkeninin 10'dan küçük veya eşit olduğu sürece döngünün devam etmesini sağlıyoruz. Döngü içinde her adımda $sayi değişkenini 1 artırarak bir sonraki sayıyı ekrana yazdırıyoruz. Döngü, $sayi değişkeni 10'a ulaştığında sona erecektir.

// While Döngüsü Ne Zaman Kullanılmalıdır
// While döngüsü, belirli bir koşul doğru olduğu sürece döngü içindeki kodları çalıştırmak istediğimizde kullanılır. While döngüsü özellikle, döngünün kaç kez çalışacağını önceden bilemediğimiz durumlarda kullanışlıdır.

// Sonuç
// While döngüsü, PHP programlamada sıklıkla kullanılan bir döngü yapısıdır. Belirli bir koşul doğru olduğu sürece döngü içindeki kodları tekrar tekrar çalıştırarak, programlamada tekrarlayan işlemleri kolayca gerçekleştirebiliriz. While döngüsünü doğru kullanarak işlemleri daha hızlı ve etkili bir şekilde gerçekleştirebiliriz.
?>