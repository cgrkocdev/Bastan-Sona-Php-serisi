<?php
    // PHP'de Sabit Değişkenlerde Dizilerin Kullanımı
    // Sabit değişkenler, programlama dünyasında değeri değiştirilemeyen özel türde değişkenlerdir. PHP'de sabit değişkenlerin kullanımı, özellikle değiştirilmesi istenmeyen değerlerin saklanması ve korunması için oldukça önemlidir. Bu makalede, PHP'de sabit değişkenlerde dizi kullanımını öğreneceğiz.
    
    // Sabit Değişkenlerin Tanımı
    // PHP'de sabit değişkenler, değeri değiştirilemeyen ve genellikle büyük harfle yazılan değişkenlerdir. Sabit değişkenler, define() fonksiyonu veya const anahtar kelimesi kullanılarak tanımlanabilir. Bir kez tanımlandığında, sabit değişkenlerin değeri değiştirilemez ve yeniden tanımlanamaz.
    
    // PHP'de Sabit Değişkenlerde Dizi Kullanımı
    // PHP 5.6 ve üstü sürümlerde, sabit değişkenlerde diziler kullanılabilir. İki yöntemle sabit değişkenlerde dizi tanımlayabilirsiniz:
    
    // define() fonksiyonu kullanarak
    // const anahtar kelimesi kullanarak
    // define()
    // define() Fonksiyonu Kullanarak
    // PHP 5.6 ve üstü sürümlerde, define() fonksiyonu ile sabit değişkenlerde dizi tanımlanabilir.
        // define("RENKLER", ["Kirmizi","Yesil","Mavi"]);

        // echo RENKLER[1];
    
        
// const Anahtar Kelimesi Kullanarak
// PHP 5.6 ve üstü sürümlerde, const anahtar kelimesi ile de sabit değişkenlerde dizi tanımlanabilir. Bunun için sınıf içinde veya global kapsamda const kullanarak tanımlama yapabilirsiniz.
    
        // const RENKLER = ["Kirmizi","Yesil","Mavi"];
        // echo RENKLER[0];
    
        // Sabit Dizilerde Değer Güncellemesi
        // Sabit değişkenlerde dizi kullanırken önemli olan bir nokta, bu dizilerin değerlerinin güncellenemeyeceğidir. Aşağıdaki örneği inceleyelim:
        
        // define("RENKLER", ["Kırmızı", "Yeşil", "Mavi"]);
        
        // // Aşağıdaki satır hata verecektir, çünkü sabit dizi değeri güncellenemez
        // // RENKLER[0] = "Turuncu";
        // PHP
        // Yukarıdaki örnekte, RENKLER dizisine erişmeye ve bir değeri güncellemeye çalıştığınızda hata alırsınız. Sabit dizilerin değerleri, tanımlandıktan sonra değiştirilemez.
    
        // Sabit Dizilere Öğe Eklemek
        // Sabit diziler, değeri değiştirilemeyen diziler olduğu için, tanımlandıktan sonra öğe eklemek mümkün değildir. Aşağıdaki örnek, bu durumu gösterir:
        
        // define("RENKLER", ["Kırmızı", "Yeşil", "Mavi"]);
        
        // Aşağıdaki satır hata verecektir, çünkü sabit diziye öğe eklenemez
        // RENKLER[] = "Turuncu";
        // PHP
        // Yukarıdaki örnekte, RENKLER dizisine yeni bir öğe eklemeye çalıştığınızda hata alırsınız. Sabit dizilere öğe eklemek mümkün değildir.
        
        // Bu makalede, PHP'de sabit değişkenlerde dizi kullanımını detaylı bir şekilde ele aldık. Sabit dizilerin nasıl tanımlanacağını ve erişileceğini define() fonksiyonu ve const anahtar kelimesi kullanarak gösterdik. Ayrıca, sabit dizilerin değerlerinin değiştirilemeyeceğini ve yeni öğeler eklenemeyeceğini belirttik. Bu bilgiler, PHP programlamada güvenli ve hatasız kodlar yazarken önemli bir rol oynar.
    
    ?>