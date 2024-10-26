<?php
    // PHP'de For Döngüsü
    // Döngüler, programlamada sıkça karşılaşılan ve kullanılan yapılarıdır. Döngüler, belirli bir işlemi tekrar tekrar gerçekleştirmemizi sağlar. PHP'de değişik türde döngüler bulunmaktadır ve bu makalede "for" döngüsünün kullanımına değineceğiz.
    
    // For Döngüsü Nedir?
    // For döngüsü, belirli bir sayıda tekrar etmesi gereken işlemler için kullanılır. Önceden ne kadar tekrar etmesi gerektiğini bildiğimiz durumlar için oldukça kullanışlıdır. For döngüsü, döngü başlangıç değeri, döngü devam şartı ve döngü adım değeri olmak üzere üç bileşenden oluşur.
    
    // For Döngüsü Sözdizimi (Syntax)
    // For döngüsü şu şekilde yazılır:
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // for (başlangıç değeri; devam şartı; adım değeri) {
    //     // İşlemler
    // }

//     Başlangıç değeri: Döngünün başlamadan önce tanımlanan başlangıç değeridir ve genellikle bir sayaç olarak kullanılır.
// Devam şartı: Döngünün devam etmesi için sağlanması gereken şartı belirtir. Bu şart sağlandığı sürece döngü devam eder.
// Adım değeri: Her döngü iterasyonu sonrası gerçekleştirilecek olan işlemi belirtir. Genellikle sayaç değerinin artırılması veya azaltılması şeklinde olur.

    //for döngüsü örnek kullanımı

    // $toplam = 0;
    // for ($i = 1; $i<=10; $i++)
    // {
    //     $toplam += $i;
    // }

    // echo "1 den 10 a kadar olan sayıların toplamı: " . $toplam


//     For Döngüsü İç İçe Kullanım:
// For döngüleri, iç içe kullanılabilir. İç içe kullanım, özellikle matrisler ve çok boyutlu diziler üzerinde işlem yaparken faydalıdır. Aşağıdaki örnekte, bir 3x3'lük matrisin elemanlarını ekrana yazdıran iç içe for döngüsü gösterilmektedir.
?>