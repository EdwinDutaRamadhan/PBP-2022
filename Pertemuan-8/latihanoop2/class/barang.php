<?php
class Barang{
    public $dataBarang =[
        [
            "nama" => "Baygon",
            "harga" => 45000
        ],
        [
            "nama" => "Nutrisari",
            "harga" => 5000
        ]
        ];
    public $total;
    
    public function menjumlah(){
        foreach($this->dataBarang as $barang){
            $this->total = $this->total + $barang['harga'];
        }
        return $this->total;
    }
    public function menampilkan(){
        return $this->dataBarang;
    }
    public function cari($keyword){
        $hasilNama;
        $hasilHarga;
        foreach($this->dataBarang as $data){
            if($keyword == $data['nama']){
                $hasilNama = $data['nama'];
                $hasilHarga = $data['harga'];
            }
        }
        $hasil = [[
            'nama' => $hasilNama,
            'harga' => $hasilHarga
        ]];
        return $hasil;
    }

}