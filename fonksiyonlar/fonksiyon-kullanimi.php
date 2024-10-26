<?php
    // Fonksiyonlar, PHP programlamada karmaşık işlemleri ve tekrarlayan görevleri daha düzenli ve yönetilebilir bir şekilde gerçekleştirmemize yardımcı olan yapı taşlarıdır. Bir fonksiyon, belirli bir işlemi gerçekleştiren ve isteğe bağlı olarak değer döndüren bir kod bloğudur. Fonksiyonlar, kodun yeniden kullanılabilirliğini artırarak, daha temiz ve anlaşılır bir kod yazmamızı sağlar.

    // function fonksiyonAdi($parametre1, $parametre2, ...) {
    //     // Fonksiyon içinde çalışacak kodlar
    //     return $sonuc;
    // }
    //Örneğin, iki sayının toplamını hesaplayan ve sonucu döndüren bir fonksiyon oluşturalım:

  function total($sayi1,$sayi2)
  {
    $netice = $sayi1 + $sayi2;
    return $netice;
  }

  $total = total(5,8);
  //echo "5 ve 8 in toplamı: " . $total;

  function adsoyad($ad , $soyad)
  {
    $name = $ad . " " . $soyad;
    return $name;
  }

  $adsoyad = adsoyad("cagri","koc");
  //echo "adınız soyadınız : " . $adsoyad;
//   Fonksiyonlar, tekrarlayan işlemleri veya karmaşık hesaplamaları daha düzenli ve yönetilebilir bir şekilde gerçekleştirmek için kullanılmalıdır. Ayrıca, fonksiyonlar kodun yeniden kullanılabilirliğini artırarak, daha kısa ve anlaşılır bir kod yazmamıza yardımcı olur.

//   Sonuç
//   PHP'de fonksiyon kullanımı, programlamada daha düzenli ve anlaşılır bir yapı sağlar. Fonksiyonlar, tekrarlayan işlemleri veya karmaşık hesaplamaları daha etkili bir şekilde gerçekleştirebilir. Fonksiyonları doğru kullanarak, kodun yeniden kullanılabilirliğini artırabilir ve daha verimli bir şekilde çalışabiliriz.


?>