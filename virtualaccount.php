<?php
require_once 'pembayaran.php';
require_once 'cetak.php';

class virtualaccount extends pembayaran implements cetak {

    public function prosespembayaran() {
        if ($this->validasi()) {
            return "Virtual Account <br>
                    Jumlah: Rp {$this->jumlah} <br>
                    Diskon 10%: Rp {$this->diskon()} <br>
                    Pajak 11%: Rp {$this->pajak()} <br>
                    Total Bayar: Rp {$this->total()}";
        }
        return "jumlah tidak valid";
    }

    public function cetakstruk() {
        return "Struk Virtual Account - Total: Rp {$this->total()}";
    }
}
?>