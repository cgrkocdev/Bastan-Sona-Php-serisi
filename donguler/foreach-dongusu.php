<?php
    // PHP'de Foreach Döngüsü
    // Döngüler, programlamada belirli işlemleri tekrar etmek için kullanılır. Bu sayede kodlar daha düzenli ve anlaşılabilir hale gelir. PHP dilinde farklı döngüler bulunmaktadır ve bu makalede "foreach" döngüsünün nasıl kullanılacağına değineceğiz.
    
    // Foreach Döngüsü Nedir?
    // Foreach döngüleri, dizilerin elemanları üzerinde kolayca gezinmemizi sağlayan bir yapıdır. İndeks numarasına bağlı kalmadan doğrudan her bir elemana erişebilme özelliği sunar.
    
    // Foreach Sözdizimi (Syntax):
    // PHP'deki foreach sözdizimi şu şekildedir:
        // foreach ($dizi as $eleman) {
        // İçeride yapmak istediğiniz işlem
        // }

        // foreach ($dizi as $anahtar => $eleman) {
        // İçeride yapmak istediğiniz işlem 
        // }
        // PHP
        // $dizi: Üzerinde gezilecek olan diziyi temsil eden değişken.
        // $anahtar (isteğe bağlı): Her iterasyonda mevcut elemana ait index/anahtarı saklar.
        // $eleman: Her iterasyonda mevcut elamanın değerini tutacak olan geçici değişkendir.  

        $sehirler = ["Yozgat","Çorum","Ankara"];
        foreach ($sehirler as $sehir)
        {
           // echo $sehir . "<br>";
        }

        //Anahtar ve değerleriyle birlikte almak için

        $kisiler = [
            'Ali' => 20,
            'Ayşe' => 35,
        ];

        foreach ($kisiler as $ad => $yas)
        {
           // echo "{$ad} isimli şahıs {$yas} yasindadır <br/>";
        }
//         Bu örnek ile $kisiler dizisinin anahtarı (Adlar) ve değeri (Yaşlar), her iterasyonda sırasıyla $ad ve $yas değişkenine atanmıştır. Böylece hem ad bilgisini hem de yaşını kolayca işleyebiliriz.

// Sonuç:
// Foreach döngüsü, PHP'deki en yaygın olarak kullanılacak yapıların başında gelmektedir. Dizinin tüm elemanları üzerinde gezerek istediğiniz işlemleri gerçekleştirebilmenize olanak sağlaması sayesinde kodunuzu daha düzenli hale getirmenize yardım eder.
// Özetlemek gerekirse;

// Foreach döngüler; diziyi rahatça gezmeye yarayan yapılardandır.
// İndeks numarasına bağlı kalmadan doğrudan her bir elemana erişilebilmesi mümkündür.
// Hem anahtar/index bilgisini hem de değeri alarak işlem yapılabilir.
// Bu makalede PHP'deki "foreach" döngüsünden bahsettik. Bu yapıyı anladığınıza göre artık projelerinizde daha verimli kodlar yazabileceksiniz!
?>