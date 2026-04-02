<?php
require_once 'pembayaran.php';
require_once 'cetak.php';

class qris extends pembayaran implements cetak {

    public function prosespembayaran() {
        if ($this->validasi()) {
            return "QRIS <br>
                    Jumlah: Rp {$this->jumlah} <br>
                    Diskon 10%: Rp {$this->diskon()} <br>
                    Pajak 11%: Rp {$this->pajak()} <br>
                    Total Bayar: Rp {$this->total()}";
        }
        return "jumlah tidak valid";
    }

    public function cetakstruk() {
        return "Struk QRIS - Total: Rp {$this->total()}";
    }
}
?>