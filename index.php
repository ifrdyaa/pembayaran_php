<?php
require_once 'transferbank.php';
require_once 'ewallet.php';
require_once 'qris.php';
require_once 'cod.php';
require_once 'virtualaccount.php';

$hasil = "";

if (isset($_POST['bayar'])) {
    $jumlah = $_POST['jumlah'];
    $metode = $_POST['metode'];

    if ($metode == "transferbank") {
        $pembayaran = new transferbank($jumlah);
    } elseif ($metode == "ewallet") {
        $pembayaran = new ewallet($jumlah);
    } elseif ($metode == "qris") {
        $pembayaran = new qris($jumlah);
    } elseif ($metode == "cod") {
        $pembayaran = new cod($jumlah);
    } elseif ($metode == "virtualaccount") {
        $pembayaran = new virtualaccount($jumlah);
    }

    $hasil = $pembayaran->prosespembayaran() . "<br>" . $pembayaran->cetakstruk();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pembayaran</title>
</head>
<body>

<h2>Sistem Pembayaran</h2>

<p>
Jika total belanja anda melebihi Rp50.000, akan mendapatkan diskon sebesar 10%
dan akan dikenakan biaya pajak sebesar 11%.
</p>

<form method="post">
    Jumlah Bayar:<br>
    <input type="number" name="jumlah" required><br><br>

    Metode Pembayaran:<br>
    <select name="metode">
        <option value="transferbank">Transfer Bank</option>
        <option value="ewallet">E-Wallet</option>
        <option value="qris">QRIS</option>
        <option value="cod">COD</option>
        <option value="virtualaccount">Virtual Account</option>
    </select>
    <br><br>

    <button type="submit" name="bayar">Bayar</button>
</form>

<hr>

<h3>Hasil Pembayaran:</h3>
<?php echo $hasil; ?>

</body>
</html>