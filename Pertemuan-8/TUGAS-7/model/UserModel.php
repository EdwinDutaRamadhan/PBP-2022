<?php
class UserModel{
    public $dumpAcc = [
        [
            'nim' => '672020272',
            'pass' => 'edwin'
        ],
        [
            'nim' => '671945272',
            'pass' => 'duta'
        ]
    ];
    public $userLogin;

    public function getNama_nim($nim){
        foreach($this->dumpAcc as $acc){
            if($acc['nim'] == $nim){
                $this->userLogin['nim'] = $acc['nim'];
                $this->userLogin['pass'] = $acc['pass'];
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
                }
            }
            return false;
        }
    }
}