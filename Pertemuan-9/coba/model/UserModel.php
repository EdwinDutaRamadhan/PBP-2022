<?php

class UserModel{
    private $DB_HOST = 'localhost';
    private $DB_NAME = 'db_siswa';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $db;

    public function __construct(){
        $this->db = new PDO("mysql:
        host={$this->DB_HOST};
        dbname={$this->DB_NAME}",
        $this->DB_USER, $this->DB_PASS
        );
    }

    public function getAllData(){
        $query = $this->db->prepare('SELECT * FROM tbl_siswa');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function getSingleData($nim){    
        $query = $this->db->prepare('SELECT * FROM tbl_siswa WHERE nim=:nim');
        $query->bindParam(':nim',$nim);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function insertOne($data){
        $query = $this->db->prepare('INSERT INTO 
        tbl_siswa(nama, nim, alamat) 
        VALUES (:nama, :nim, :alamat)');
        $query->bindParam(':nama', $data['nama']);
        $query->bindParam(':nim', $data['nim']);
        $query->bindParam(':alamat', $data['alamat']);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteOne($nim){
        $query = $this->db->prepare('DELETE FROM tbl_siswa WHERE nim=:nim');
        $query->bindParam('nim', $nim);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function updateOne($data){
        $query = $this->db->prepare('UPDATE tbl_siswa SET nama=:nama, alamat=:alamat WHERE nim=:nim');
        $query->bindParam(':nama',$data['nama']);
        $query->bindParam(':alamat',$data['alamat']);
        $query->bindParam(':nim', $data['nim']);
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
    
}