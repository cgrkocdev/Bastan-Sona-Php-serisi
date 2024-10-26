<?php
    // Dizinin sonundaki elemanı diziden çıkartır.

    // Yapısı (Syntax)
    // array_pop ( array $dizi ) : mixed


    // $depo = array('kavun','muz','kiwi','ahududu');
    // $meyve = array_pop($depo);
    // print_r($depo);
    // echo $meyve;
    //son elemanı kaldırıyor  yukarıda son elemanı $meyve ye atanmıştır.

    $depo = array('portakal','muz','elma','ahududu');
    $meyve = array_pop($depo);
    echo $meyve;

?>