<?php
    // PHP array_key_exists() Fonksiyonu
    // PHP 4
    // PHP 5
    // PHP 7
    // Dizi içerisinde belirtilen anahtarın olup olmadığını kontrol eder.
    
    // Yapısı (Syntax)
    // array_key_exists ( mixed $key , array $array ) : bool
//     Dönen Değer
// boolean - Kontrol edilen anahtar dizi içerisinde var ise TRUE yok ise FALSE döner.

// NOT
// İç içe dizilerde bu fonksiyon işe yaramamaktadır.
       // $dizi = [
        //             'ad' => 'Cagri',
        //             'soyad' => 'Koc'
        //         ];

        // if(array_key_exists('soyad',$dizi))
        // {
        //     //echo '$dizi içerisinde "soyad" anahtarı bulunuyor';
        // }

        $dizi = [
            'ad' => 'cagri',
            'soyad' => 'koc',
            'yas' => NULL
        ];

       // var_dump() => değişken türü ve detaylarıyla beraber ekrana yazdırır.

    //    var_dump(isset($dizi['yas']));
    //    var_dump(array_key_exists('yas', $dizi));

    // Ayrıca objelerinde kontrolünü yapabiliyorsunuz. Sınıf içinde private ya da protected olarak tanımlanmadığı sürece kontrolü yapılabilir ancak php tarafından 2. parametrenin her zaman array olması öneriliyor. Bu gibi durumlarda en doğru sonuç için property_exists() fonksiyonunu kullanın.

    class Test
    {
        private $test1;
        protected $test2;
        public $test3;
        public $test4 = "Linux";
    }
    
    $php = new Test();
    
    // Nesne özelliklerini kontrol etmek için property_exists() kullanmalısınız
    var_dump(property_exists($php, 'test1')); // Çıktı: bool(true)
    var_dump(property_exists($php, 'test2')); // Çıktı: bool(true)
    var_dump(property_exists($php, 'test3')); // Çıktı: bool(true)
    var_dump(property_exists($php, 'test4')); // Çıktı: bool(true)


    function _array_key_exists($cur_key, $arr){
        if ( array_key_exists($cur_key, $arr) )
            return true;
        else
            foreach ($arr as $key => $val)
                if (is_array($val)) return _array_key_exists($cur_key, $val);
    }
    
    $arr = [
        'ad' => 'tayfun',
        'soyad' => 'erbilen',
        'a' => [
            'b' => [
                'c' => 'd'
            ]
        ]
    ];
    
    echo _array_key_exists('c', $arr); // Çıktı: 1


?>