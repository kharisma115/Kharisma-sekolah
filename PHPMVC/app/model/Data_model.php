<?php
class Data_model
{
    private $data_siswa = [
        [
            "penulis" => "Nevi Yuniawati",
            "judul" => "Tidur",
            "tulisan" => "Bulu agung"
        ],
        [
            "penulis" => "Linda Nuria Abel ",
            "judul" => "Makan",
            "tulisan" => "Srabah"
        ],
        [
            "penulis" => "Kharisma Hidayah",
            "judul" => "Olahraga",
            "tulisan" => "surodakan"
        ]
        ];
        public function getAllSiswa()
        {
            return $this->data_siswa;
        }

    }