<?php
    // Do-while döngüsü, PHP programlamada kullanılan temel döngülerden biridir. Do-while döngüsü, while döngüsü gibi belirtilen koşul doğru olduğu sürece döngü içindeki kodları tekrar tekrar çalıştırır. Fakat do-while döngüsü, koşulun döngü sonunda kontrol edilmesinden dolayı döngü içindeki kodlar en az bir kez çalıştırılır.

    // Do-While Döngüsü Sözdizimi
    // do {
    //     // Döngü içinde çalışacak kodlar
    // } while (koşul);
    // PHP
    // Do-While Döngüsü Örnek Uygulama
    // Örneğin, 1'den 6'ya kadar olan sayıları ekrana yazdırmak için do-while döngüsünü kullanabiliriz:
    
        $sayi = 0;

        do {
           // echo $sayi . "<br>";
            $sayi++;
        }
        while($sayi <= 6);
        // Do-While Döngüsü Ne Zaman Kullanılmalıdır
        // Do-while döngüsü, döngü içindeki kodların en az bir kez çalışması gereken durumlarda kullanılmalıdır. Yani koşul doğru olmasa bile döngü içindeki kodlar en az bir kez çalıştırılacaktır. Bu özelliği sayesinde, koşulun döngü sonunda kontrol edilmesi gereken durumlar için do-while döngüsü daha uygun bir seçenektir.
        
        // Sonuç
        // Do-while döngüsü, PHP programlamada önemli bir döngü yapısıdır. Belirli bir koşul doğru olduğu sürece döngü içindeki kodları tekrar tekrar çalıştırarak, programlamada tekrarlayan işlemleri kolayca gerçekleştirebiliriz. Do-while döngüsünü doğru kullanarak işlemleri daha hızlı ve etkili bir şekilde gerçekleştirebiliriz. Ayrıca, döngü içindeki kodların en az bir kez çalışmasını garantileyerek, iş akışını daha kontrollü bir şekilde yönetebiliriz.
//         Önce kod çalışır.
// Sonra koşul kontrol edilir.
// Eğer koşul doğru (true) ise kod tekrar çalışır. Yanlış (false) olursa döngü biter.
//  Yani, döngüdeki kod en az bir kez kesinlikle çalışır, çünkü önce kod çalışır, sonra koşul kontrol edilir.



// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Bir döngünün kullanıcıya sürekli soru sorduğunu düşün. Mesela, bir kullanıcıdan 1 ile 10 arasında bir sayı girmesini istiyoruz. Ancak kullanıcı doğru bir sayı girene kadar sormaya devam ediyoruz.

// İşte bu durumda do...while döngüsü kullanabiliriz, çünkü en az bir kez kullanıcıya soru sormamız gerekiyor.


?>