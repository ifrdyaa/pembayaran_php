<?php
require_once 'pembayaran.php';
require_once 'cetak.php';

class ewallet extends pembayaran implements cetak {

    public function prosespembayaran() {
        if ($this->validasi()) {
            return "pembayaran e-wallet rp {$this->jumlah} berhasil";
        }
        return "jumlah tidak valid";
    }

    public function cetakstruk() {
        return "struk e-wallet: rp {$this->jumlah}";
    }
}
?>