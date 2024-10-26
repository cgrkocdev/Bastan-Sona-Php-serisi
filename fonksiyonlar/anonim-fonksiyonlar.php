<?php

    //Closure Fonksiyon
    // Anonim fonksiyonlar, PHP programlamada kullanılan isimsiz fonksiyonlardır. Anonim fonksiyonlar, genellikle tek seferlik kullanılacak kod blokları için veya başka fonksiyonlara parametre olarak gönderilecek işlevleri tanımlamak için kullanılır. Anonim fonksiyonlar, Closure sınıfı örnekleri olarak da bilinir ve değişkenlerde saklanarak kullanılabilir.
    // $fonksiyonAdi = function($parametre1, $parametre2, ...) {
    //     // Fonksiyon içinde çalışacak kodlar
    //     return $sonuc;
    // };


    $carpim  = function($sayi1,$sayi2)
    {
        $sonuc = $sayi1 * $sayi2;
        return $sonuc;
    };

    $sonuc = $carpim(4,7);
    echo "4 ve 7 nin carpim: " . $sonuc;


//     Anonim Fonksiyonlar Ne Zaman Kullanılmalıdır
// Anonim fonksiyonlar, genellikle tek seferlik kullanılacak kod blokları için veya başka fonksiyonlara parametre olarak gönderilecek işlevleri tanımlamak için kullanılmalıdır. Ayrıca, anonim fonksiyonlar değişkenlerde saklanarak, daha esnek ve dinamik kodlar yazmamıza yardımcı olur.

// Sonuç
// PHP'de anonim fonksiyon kullanımı, programlamada daha esnek ve dinamik bir yapı sağlar. Anonim fonksiyonlar, tek seferlik kullanılacak kod blokları veya başka fonksiyonlara parametre olarak gönderilecek işlevleri tanımlamak için kullanılabilir. Anonim fonksiyonları doğru kullanarak, kodun daha esnek ve yönetilebilir olmasını sağlayabilir ve daha verimli bir şekilde çalışabiliriz.
?>