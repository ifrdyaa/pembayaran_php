<?php
require_once 'pembayaran.php';
require_once 'cetak.php';

class transferbank extends pembayaran implements cetak {

    public function prosespembayaran() {
        if ($this->validasi()) {
            return "transfer bank sebesar rp {$this->jumlah}";
        }
        return "jumlah tidak valid";
    }

    public function cetakstruk() {
        return "struk transfer bank: rp {$this->jumlah}";
    }
}
?>