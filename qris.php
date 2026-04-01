<?php
require_once 'pembayaran.php';
require_once 'cetak.php';

class qris extends pembayaran implements cetak {

    public function prosespembayaran() {
        if ($this->validasi()) {
            return "pembayaran qris rp {$this->jumlah} berhasil";
        }
        return "jumlah tidak valid";
    }

    public function cetakstruk() {
        return "struk qris: rp {$this->jumlah}";
    }
}
?>