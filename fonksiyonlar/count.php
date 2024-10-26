<?php
//     Bir dizideki eleman sayısını veya bir nesnedeki özellik sayısını döndürür.
// Nesneler için, eğer SPL kuruluysa Countable tarafından gerçeklenen count() yöntemini sonucu almak için kullanabilirsiniz. Nesne arayüzü sadece bir yönteme, count() işlevinden dönen değeri döndüren count() yöntemine sahiptir.

// count ( mixed $girdi [, int $kip = COUNT_NORMAL ] ) : int
// Parametreler
// $girdi = $girdi array
// Dizi veya nesne

// Dönen Değer
// int - Bir dizi dışında her şey tek elemanlı bir dizi kabul edilebileceğinden işlev daima girdi'deki eleman sayısını döndürür. Eğer girdi array veya object türünde değilse Countable arayüzü, 1 döndürür. Tek istisnası girdi'nin NULL olması durumu olup böyle bir durumda 0 döner.

// NOT
// Bir dizideki eleman sayısını veya bir nesnedeki özellik sayısını döndürür

$arr = ["cagri","koc","ankara"];
//echo count($arr);

//ardışık count örneği

$arr = array('meyveler' => array('portakal', 'muz' , 'elma'),
        'vejeteryan' => array('havuc', 'karalahana', 'bezelye'));

        echo count($arr,COUNT_RECURSIVE);
        //echo count($arr);


?>