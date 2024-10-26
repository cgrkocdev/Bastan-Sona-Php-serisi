<?php



// Operatör	Ad	                                Örnek	            Açıklama
// ==      	Eşit Operatörü      	            5 == 5	            Bir değerin diğer değere eşit olup olmadığını kontrol eder.
// !=      	Eşit Değil Operatörü                5 != 5	            Bir değerin diğer değere eşit olmadığını kontrol eder.
// ===     	Denk Operatörü	                    5 === "5"	        Eşit operatörü gibi davranır, farklı olarak sadece değerleri değil aynı zamanda tiplerininde eşitliğini kontrol eder.
// !==     	Denk Değil Operatörü                5 !== "5"	        Eşit değil operatörü gibi davranır, farklı olarak sadece değerleri değil aynı zamanda tiplerininde eşitsizliğini kontrol eder.
// >       	Büyüktür Operatörü                  5 > 4	            Bir değerin diğer değerden büyük olup olmadığını kontrol eder.
// <       	Küçüktür Operatörü                  5 < 4	            Bir değerin diğer değerden küçük olup olmadığını kontrol eder.
// >=      	Büyüktür ya da Eşittir Operatörü    5 >= 5	            Bir değerin diğer değerden büyük ya da iki değerin birbirine eşit olup olmadığını kontrol eder.
// <=      	Küçüktür ya da Eşittir Operatörü    5 <= 5	            Bir değerin diğer değerden küçük ya da iki değerin birbirine eşit olup olmadığını kontrol eder.



// $x = 3;
// $y = 3;

// echo  $x == $y;
// echo 5 == 3;//false döndürür


// $x = 4;
// $y = 6;

// echo $x != $y;
// echo "Tayfun" != "tayfun";


// $x = 5;
// $y = "5";

// echo $x == $y;

// echo $x === $y;// Çıktı: 0 yani false (Çünkü birinin tipi integer, diğerinin tipi ise string. Sadece değerlerin eşit olması denk operatörü için yeterli değil)



// $x = 5;
// $y = "5";

// echo $x != $y;

// echo $x !== $y;


// $x = 5;
// $y = 6;

// echo $x > $y;

// echo $x < $y;

$x = 5;
$y = 5;

// echo $x > $y;
echo $x >= $y;


?>