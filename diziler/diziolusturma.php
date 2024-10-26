<?php
    // PHP'de Dizi Oluşturmak
    // PHP'de diziler, birden fazla değeri tek bir değişkende saklamak için kullanılan veri yapılarıdır. Diziler, programlama dünyasında oldukça yaygındır ve PHP'de yeni başlayanlar için önemli bir konsepttir. Bu makalede, PHP'de dizilerin ne olduğunu ve nasıl oluşturulacağını öğreneceksiniz. Ardından, dizi oluşturma konusunda ayrıntılı örneklerle bilginizi pekiştireceğiz.
    
    // Dizilerin Tanımı
    // Bir dizi, aynı tipte veya farklı tipte birden fazla değeri içerebilen bir veri yapısıdır. PHP'de diziler, anahtar-değer çiftlerine dayalı olarak çalışır. Anahtarlar, dizideki her değeri benzersiz bir şekilde tanımlayan ve değerlere erişmenizi sağlayan belirleyicilerdir. PHP'de diziler iki türlüdür: indeksli diziler ve ilişkisel diziler.
    
    // Indeksli diziler: Bu tür diziler, sıfır tabanlı indekslerle çalışır. Yani, dizinin ilk öğesi 0 indeksine sahiptir ve ardışık öğeler birer birer artan indekslere sahiptir.
    // İlişkisel diziler: İlişkisel dizilerde anahtarlar kullanıcı tarafından tanımlanır ve genellikle alfanümerik ve anlamlıdır.
    // PHP'de Dizi Oluşturma
    // PHP'de dizileri oluşturmak için iki yöntem vardır:
    
    // array() fonksiyonu kullanarak
    // Kısa dizi sözdizimi ([]) kullanarak
    // array()
    // Fonksiyonu Kullanarak
    // İndeksli ve ilişkisel dizileri oluşturmak için array() fonksiyonunu kullanabilirsiniz. İşte birkaç örnek:

    //indeksli dizi:
    // $indeksli_dizi = array("Elma","Muz","Kavun");
   //İlişkisel Dizi
    // $iliskisel_dizi = array(
    //     "ad" => "Cagri",
    //     "soyad" => "Koc",
    //     "yas" => 21
    // );


    //kısa söz dizimi kullanarak 
    //Kısa dizi sözdizimi, PHP 5.4 ve üstü sürümlerinde kullanılabilir ve array() fonksiyonuna göre daha az kod yazmanızı sağlar.
    // $indeksli_dizi =["Elma","Muz","Kavun"];
    // $iliskisel_dizi = [
    //         "ad" => "Cagri",
    //         "soyad" => "Koc",
    //         "yas" => 21
    // ];


    // $sebzeler = ["Domates","Biber","Patlıcan"];
    // echo $sebzeler[1];
    // echo $sebzeler[2];

    // $ogrenci = [
    //     "ad" => "Cagri",
    //     "soyad" => "Koc",
    //     "numara" => "220720038",
    //     "bolum" => "Bilgisayar programciligi", 
    // ];

    // echo $ogrenci["numara"];
    // echo $ogrenci["soyad"];

    
?>