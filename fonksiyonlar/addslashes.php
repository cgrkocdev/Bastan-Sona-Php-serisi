<?php
    // PHP addslashes() Fonksiyonu
    // PHP 4
    // PHP 5
    // PHP 7
    // Metin içerisinde bulunanan belli başlı karakterlerde escape işlemi yapar. Bu karakterler şunlardır;
    
    // Tek tırnak (')
    // Çift tırnak (")
    // Ters slash (\)
    
    // Yukarıda belirtilen karakterler olması durumunda başlarına ters slash (\) koyarak escape işlemini yapar ve olası hataları önler.
    
    // Yapısı (Syntax)
    // addslashes ( string $str ) : string
    // PHP
    // Parametreler
    // $str string
    // Escape edilecek ifade
    // Dönen Değer
    // string - İşlemin sonucunda geriye escape edilmiş bir string ifade döner.
    
    // NOT
    // PHP'nin 5.4.0 sürümünden itibaren magic_quotes_gpc direktifi standart olarak açık geliyor ve tüm $_GET, $_POST ve $_COOKIE verileri için bu işlemi otomatik yapıyor. Yani eğer bu ayarınız açık ise, addslashes() fonksiyonu kullanmanıza gerek yoktur.
    
    // addslashes() veritabanı işlemlerinde bir escape fonksiyonu olarak kullanılamaz, güvenlik sebebiyle veritabanı işlemlerinde veritabanı fonksiyonlarını kullanmaya özen gösterin.
    
    //temel olarak addslashes fonksiyonu veritabanı vs alanlarda karmaşayı önler.

        $str = "Hakan'in Odasi";
        //echo addslashes($str);
    
       // 7.4.0	Bu işlev kullanımdan kaldırıldı. => magic_quotes_gpc
    //    magic_quotes_gpc PHP'nin eski sürümlerinde bulunan, kullanıcıdan gelen verileri 
    //    (GET, POST, COOKIE) otomatik olarak addslashes() ile kaçışlı hale getiren bir
    //     yapılandırma ayarıydı. Bu özellik etkinleştirildiğinde, dışarıdan gelen tüm 
    //     dize verilerinde ($_GET, $_POST, ve $_COOKIE süper global değişkenleri) özel karakterlerin
    //     önüne ters eğik çizgi eklenerek verilerin güvenli hale getirilmesi amaçlanıyordu.

    // $str = "Hakan'ın Odası";
    // if (!get_magic_quotes_gpc()) {
    //     $str = addslashes($str);
    // }
    // echo $str;
    
?>