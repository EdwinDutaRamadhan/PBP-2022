<?php
class UserModel{
    private $dumpAcc = [
        [
            'nim' => 672020272,
            'nama' => 'Edwin',
            'pass' => 'edwin'
        ],
        [
            'nim' => 602000100,
            'nama' => 'Duta',
            'pass' => 'duta'
        ],
        [
            'nim' => 672040100,
            'nama' => 'Ramadhan',
            'pass' => 'ramadhan'
        ]
    ];
    public $userLogin;

    public function getNama_nim($nim){
        foreach($this->dumpAcc as $acc){
            if($acc['nim'] == $nim){
                $this->userLogin['nim'] = $acc['nim'];
                $this->userLogin['pass'] = $acc['pass'];
                $this->userLogin['nama'] = $acc['nama'];
            }
        }
        return $this->userLogin;
    }

    public function cekLogin($nim, $pass){
        foreach($this->dumpAcc as $acc){
            if($acc['nim'] == $nim){
                //nim sesuai data
                if($acc['pass'] == $pass){
                    //nim dan password sesuai data
                    return true;
                    exit;
                }
            }
        }
        return false;
    }
}