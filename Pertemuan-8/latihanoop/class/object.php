<?php
class Calculator{
    //Attribute
    public $nilai1, $nilai2,$hasil, $keterangan;

    
    //Method
    public function tambah(){
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->$hasil;
    }
    public function cekBilangan(){
        if($this->hasil % 2 == 0){
            //Genap
            $this->keterangan = "Genap";
        }else{
            $this->keterangan = "Ganjil";
        }
        return $this->keterangan;
    }
    
}
?>





