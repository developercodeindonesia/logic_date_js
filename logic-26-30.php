<?php

/**
 * @author lolkittens
 * @copyright 2016
 */
$tanggal_check_in="2016-01-26";
$tanggal_check_out="2016-01-30";

echo "Tanggal Check-In : ".$tanggal_check_in;
echo "<br>";
echo "Tanggal Check-Out : ".$tanggal_check_out;
//$potong_check_in=substr($tanggal_check_in,-5,2);  //ambil bulannya
//$potong_check_out=substr($tanggal_check_out,-5,2); //ambil bulannya

$potong_check_in=substr($tanggal_check_in,-2);  //ambil tanggal
$potong_check_out=substr($tanggal_check_out,-2); //ambil tanggal 

//echo "Tanggal Check-In : ".$potong_check_in;
//echo "<br>";
//echo "Tanggal Check-Out : ".$potong_check_out;
echo "<hr>";
//exit();
for($i=$potong_check_in;$i<=$potong_check_out;$i++){
    echo "Tanggal : ".$i."<br>";
}

?>