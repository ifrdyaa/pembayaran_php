<?php
class pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    public function validasi() {
        return $this->jumlah > 0;
    }

    public function diskon() {
        if ($this->jumlah >= 50000) {
            return $this->jumlah * 0.10;
        }
        return 0;
    }

    public function pajak() {
        if ($this->jumlah >= 50000) {
            return $this->jumlah * 0.11;
        }
        return 0;
    }

    public function total() {
        return $this->jumlah - $this->diskon() + $this->pajak();
    }
}
?>