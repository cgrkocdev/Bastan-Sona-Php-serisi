<?php



// Operatör	    Örnek	            Açıklama
// =	        $web = "prototurk"	$web değişkenine prototurk değerini atadık.
// +=	        $x += 4	$x          değişkeninin değerine 4 eklenir. Uzun hali ise $x = $x + 1 şeklindedir.
// -=	        $x -= 3	$x          değişkeninin değeri 3'den çıkarılır. Uzun hali ise $x = $x - 1 şeklindedir.
// *=	        $x *= 10	        $x değişkeninin değeri 10 ile çarpılır. Uzun hali ise $x = $x * 10 şeklindedir.
// /=	        $x /= 4	            $x değişkeninin değeri 4'e bölünür. Uzun hali ise $x = $x / 4 şeklindedir.
// %=	        $x %= 4	            $x değişkeninin değerinin 4'e bölümünden kalan bulunur. Uzun hali ise $x = $x % 4 şeklindedir.

//değer atama opertörü

// $name = "Çağri";
// echo $name;



//arttırarak değer atama operatörü
// $x = 6;
//uzun hali
// $x = $x + 6;
//kısa hali
// $x += 6;

//azaltarak değer atama 
// $x = 5;
// // $x = $x -5;
// $x -= 5;

//bölerek değer atama 

// $x = 5;
// // $x = $x /2 ;
// $x /= 2;

//çarparak değer atama

// $x = 5;
// // $x = $x * 3;
// $x *= 3;


//modunu alarak değer atama 

// $x = 7;
// // $x = $x % 3;
// $x %= 3;
// echo $x;
//Birleştirme operatörü
// $ad = "Cagri";
// $soyad = "Koc";

// // echo $ad . " " . $soyad;

// $yas = 21;

// echo "ben sene sonunda tam " . $yas . " yaşında olacağım";

$ad = "Cagri";
$soyad = "Koc";

$ad = $ad . $soyad;

// echo $ad;

$ad2 = "cgr";
$soyad2 ="koc";

$ad2 .= $soyad2;

echo $ad2;

?>