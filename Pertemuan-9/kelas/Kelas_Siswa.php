<?php

class Database{
    public $host = 'localhost';
    public $dbname = 'db_siswa';
    public $username = 'root';
    public $password = '';
    public $db;

    //build a connection 
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host={$this->host};dbname={$this->dbname}",
            $this->username, $this->password
        );

    }
    
    public function tampilkan(){
        $query =  $this->db->prepare('SELECT * FROM tb_siswa');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function singleData($nis){
        $query =  $this->db->prepare('SELECT * FROM tb_siswa WHERE nis=:nis');
        $query->bindParam(':nis',$nis);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function insert($nis, $nama, $tanggal_lahir){
        $query = $this->db->prepare('INSERT INTO tb_siswa(nis, nama, tanggal_lahir) VALUES (:nis, :nama, :tanggal_lahir)');
        $query->bindParam(':nis',$nis);
        $query->bindParam(':nama',$nama);
        $query->bindParam(':tanggal_lahir',$tanggal_lahir);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function update($nis, $namaBaru, $tanggal_lahir_baru){
        $query = $this->db->prepare('UPDATE tb_siswa SET nama=:namaBaru, tanggal_lahir=:tanggal_lahir_baru WHERE nis=:nis');

        $query->bindParam(':namaBaru',$namaBaru);
        $query->bindParam(':tanggal_lahir_baru',$tanggal_lahir_baru);
        $query->bindParam(':nis', $nis);
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function delete($nis){
        $query = $this->db->prepare('DELETE FROM tb_siswa WHERE nis=:nis');
        $query->bindParam(':nis',$nis);
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
    
}

