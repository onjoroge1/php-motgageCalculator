
<?php

$price = $_POST["Principle"];
$down = $_POST["payment"];
$term = $_POST["rate"];

function calculatePayment($price, $down, $term){
$loan = $price;
$rate = $term/100;
$month = $term * 12;
//$payment = floor(($loan*$rate/(1-pow(1+$rate,(-1*$month))))*100)/100;
$payment_rate = pow($down,1+$rate);
$payment_rate_1 = $payment_rate*$rate;
$payment_rate_2 = $payment_rate - 1;
$payment_rate_3 = $payment_rate_1/$payment_rate_2;
$payments = $loan * $payment_rate_3;

echo "The loan was: ".$loan."$"."</br>";
echo "The interest rate was: ".$rate."%"."<br>";
echo "The monthly payments are: ".$payments;
}



calculatePayment($price,$down,$term);
?>
