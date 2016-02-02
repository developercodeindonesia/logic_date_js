<?php
require_once('inc-db.php');
/**
 * @author lolkittens
 * @copyright 2016
 */
 
$id=date('m');
$show_reservasi="select * from reservation  where reservation_id='3'";
echo $show_reservasi;
$result=mysql_query($show_reservasi);
$data=mysql_fetch_array($result);
//exit();
$tanggal_check_in=$data['check_in'];
$tanggal_check_out=$data['check_out'];
//exit;
echo "<br>";
echo "Tanggal Check-In : ".$tanggal_check_in;
echo "<br>";
echo "Tanggal Check-Out : ".$tanggal_check_out;
//exit;
//$potong_check_in=substr($tanggal_check_in,-5,2);  //ambil bulannya
//$potong_check_out=substr($tanggal_check_out,-5,2); //ambil bulannya

$check_in=substr($tanggal_check_in,-2);  //ambil tanggal
$check_out=substr($tanggal_check_out,-2); //ambil tanggal 

echo "<hr>";
//exit();
echo "Check-in : ".$check_in;
echo "<br>";
echo "Check-out : ".$check_out;
echo "<hr>";

if($check_out >= $check_in){
for($i=$check_in;$i<=$check_out;$i++){
    echo "Tanggal : ".$i."<br>";
}   
exit;
}else{
    for($i=$check_in;$i<=31;$i++){
    echo "Tanggal : ".$i."<br>";
}
for($a=1;$a<=$check_out;$a++){
    echo "Tanggal : ".$a."<br>";
}

}
   
?>