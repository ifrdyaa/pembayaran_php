<?php
class pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    protected function validasi() {
        return $this->jumlah > 0;
    }
}
?>