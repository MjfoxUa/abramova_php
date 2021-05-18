<?php
# Example
$n = 8;

#77 a (1)

//echo pow(2, 8);

#77 a (2)

//$b = 2;
//$res = 1;
//for ($i = 1; $i <= $n; $i++) {
//    $res *= $b;
//}
//echo $res;

#77 b (1)
#Installed GMP with apt-get install php5-gmp
#Added extension=php_gmp.so to php.ini

// $result = gmp_fact(5);

#77 b (2)

//$res = 1;
//for ($i = 1; $i <= $n; $i++) {
//    $res *= $i;
//}
//echo $res;

#77 b (3)

//$i =1;
//$res = 1;
//while ($i <= $n) {
//    $res *= $i;
//    $i++;
//}
//
//echo $res;

#77 v (1)

//$b =2;
//$res = 1;
//for ($i = 1; $i < $n; $i++) {
//    $res *= (1 + 1/pow($i, $n));
//}
//
//echo $res;

#77 d (1)

//$i =1;
//$result = 1;
//while ($i <= $n) {
//    $result = sqrt(2 + $result);
//    $i++;
//}
//
//echo $result;

#78 g (1)

# Example
//$a = -8;
//$N = 4;
//
//$res = 1;
//for ($i = 1; $i <= $N; $i++) {
//    $res += 1/($a ** 2 * $N);
//}
//
//echo $res;

#79 a (1)

//$res = 1;
//$p = 10;
//for ($i = 0.1; $i < $p; $i += 0.1) {
//    $res *= (1 + sin($i));
//}
//
//echo $res;

#80 a (1)

//$end = 13;
//$x = 3;
//$division = 1;
//$sign = 1;
//$sum = 1;
//
//for ($i = 3; $i <= $end; $i += 2) {
//    $power = 1;
//    $pow = 1;
// while ($pow <= $i) {
//     $power *= $x;
//     $pow++;
// }
//    $factorial = 1;
//    $powFactorial = 1;
// while ($powFactorial <= $i) {
//     $factorial *= $powFactorial;
//     $powFactorial++;
// }
//
// if($sign % 2) {
//     $sum += 1*$power/$factorial;
// } else {
//     $sum += -1*$power/$factorial;
// }
//    $sign++;
//}
//
//echo $sum;

#81 a (1)
