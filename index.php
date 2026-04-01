<?php
require_once 'transferbank.php';
require_once 'ewallet.php';
require_once 'qris.php';

$transfer = new transferbank(100000);
$ewallet = new ewallet(50000);
$qris = new qris(75000);

echo $transfer->prosespembayaran();
echo "<br>";
echo $transfer->cetakstruk();

echo "<hr>";

echo $ewallet->prosespembayaran();
echo "<br>";
echo $ewallet->cetakstruk();

echo "<hr>";

echo $qris->prosespembayaran();
echo "<br>";
echo $qris->cetakstruk();
?>