<?php
    // PHP array_keys() Fonksiyonu
    // Belirtilen diziye ait tüm anahtarları geriye döndürür.

    // Yapısı (Syntax)
    // array_keys ( array $array , mixed $search_value [, bool $strict = FALSE ] ) : array

//     PHP array_keys() Fonksiyonu
// PHP 4
// PHP 5
// PHP 7
// Belirtilen diziye ait tüm anahtarları geriye döndürür.

// Yapısı (Syntax)
// array_keys ( array $array , mixed $search_value [, bool $strict = FALSE ] ) : array
// PHP
// Parametreler
// $array array
// Anahtarların döndürüleceği dizi
// $search_value mixed
// Değerler içerisinde arama yapılacak kelime
// $strict = FALSE boolean
// Arama yaparken eşittir yerine denktir ifadesiyle arama yapacaktır.
// Dönen Değer
// array - Belirtilen dizilerin anahtarları bir dizi olarak geriye döner.


// $dizi = [
//         'ad' => 'Cagri',
//         'soyad' => 'Koc',
//         'site' => 'cagrikoc.com',
//         21,
//         'COACH SOFTWARE'
//         ];


//         echo '<pre>';
//         print_r(array_keys($dizi));

//İç içe dizilerde tüm anahtarlar için fonksiyon işe yaramamaktadır. Onun yerine aşağıdaki gibi bir alternatif yazılabilir.

function all_array_keys($arr)
{
    static $keys = [];
    foreach ($arr as $key => $val){
        $keys[] = $key;
        if (is_array($val))
            return all_array_keys($val);
    }
    return $keys;
}

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',
    'a' => [
        'b' => 'c',
        'd' => [
            'e' => 'f'
        ]
    ]
];

$keys = all_array_keys($arr);
//print_r($keys);


//Değeri eşleşen anahtarları döndürmeye bir örnek verecek olursak;

$dizi = [
    'Tayfun',
    'Güner',
    'Hakan',
    'Tayfun',
    'Burak',
    'ad' => 'Tayfun',
    'Tayfun'
];

// print_r(array_keys($dizi));
// 3. parametreyi kullanarak aranan değeri denkse olarak kontrol edilecek bir örnek vermek gerekirse;

$dozo = [
            1,
            'yas' => '1',
            'yasi' => 1
        ];

print_r(array_keys($dozo,1));
print_r(array_keys($dozo,1,true));

?>