<?php
    // İç içe diziler, programlamada yaygın olarak kullanılan karmaşık veri yapılarıdır. İç içe diziler, bir dizi içinde başka dizilerin bulunduğu yapıdır. Bu tür dizilere ayrıca çok boyutlu diziler de denir. Bu makalede, PHP'de iç içe dizilerin nasıl oluşturulacağına ve kullanılacağına dair bilgiler sunacağız.

    // İç İçe Dizi Kavramı
    // İç içe diziler, veri organizasyonu için esnek bir yapı sunar. Özellikle, iç içe diziler, gerçek dünya problemlerini ve veri ilişkilerini modellerken kullanışlıdır. PHP'de iç içe diziler, farklı tiplerde olabilir: indeksli, ilişkisel veya karışık.
    
    // İç İçe İndeksli Diziler: İç içe indeksli diziler, sıralı değerlerin saklanması için kullanılır.
    // İç İçe İlişkisel Diziler: İç içe ilişkisel dizilerde anahtarlar kullanıcı tarafından tanımlanır ve genellikle alfanümerik ve anlamlıdır.
    // Karışık Diziler: İç içe karışık diziler, hem indeksli hem de ilişkisel dizi öğelerini bir arada barındırabilir.
    // İç İçe Dizi Oluşturma
    // İç içe dizi oluşturmak için, dıştaki dizi içerisine başka diziler ekleyebilirsiniz. Örnek olarak aşağıdaki yapıları inceleyebilirsiniz:
    
    // İç İçe İndeksli Dizi:
    $matris = [
        [1,2,3],
        [2,3,4,],
        [5,6,7]
    ];

    //iç içe iliskisel dizi

    $okul = [
        "ogrenciler" => [
            ["ad" => "Cagri" , "soyad" =>"koc" , "numara" => 220720038],
            ["ad" => "Mehmet" , "soyad" => "Vesas", "numara" => 490054245]
        ],
        "ogretmenler" => [
            ["ad" => "Elif","soyad" =>"Cicioglu" , "brans" => "Muzik"],
            ["ad" => "Cihangir" , "soyad" => "Yetgin", "brans" => "Bilisim"]
        ]
        ];

        echo $okul["ogrenciler"][0]["ad"];
        echo $okul["ogretmenler"][1]["brans"];
?>