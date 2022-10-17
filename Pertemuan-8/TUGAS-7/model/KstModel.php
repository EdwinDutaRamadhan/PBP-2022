<?php
class KstModel{
    private $dumpKst = [
        [
            'kode' => '001',
            'hari' => 'Senin',
            'jam' => '09.00 - 11.00',
            'matkul' => 'Kewarganegaraan',
            'dosen' => 'Wartoyo'
        ],
        [
            'kode' => '002',
            'hari' => 'Selasa',
            'jam' => '07.00 - 10.00',
            'matkul' => 'Pemodelan',
            'dosen' => 'Yulianto'
        ],
        [
            'kode' => '003',
            'hari' => 'Rabu',
            'jam' => '16.00 - 18.00',
            'matkul' => 'Matematika',
            'dosen' => 'Suprihadi'
        ],
        [
            'kode' => '004',
            'hari' => 'Kamis',
            'jam' => '09.00 - 11.00',
            'matkul' => 'Basis Data',
            'dosen' => 'Adi Nugroho'
        ]
    ];

    public function getAll_KST(){
        return $this->dumpKst;
    }
    public function getDetail($kode){
        $data;
        foreach($this->dumpKst as $kst){
            if($kst['kode'] == $kode){
                $data['kode'] = $kst['kode'];
                $data['hari'] = $kst['hari'];
                $data['jam'] = $kst['jam'];
                $data['matkul'] = $kst['matkul'];
                $data['dosen'] = $kst['dosen'];
            }
        }
        return $data;
    }
}