<?php
class Blog_model
{
    private $blog = [
        [
            "penulis" => "Fikrotu Dwi Fuadatuzzahro S.pd",
            "judul" => "Ivan Zuwanta S.Kom",
            "tulisan" => "Estri Handayani S.pd"
        ],
        [
            "penulis" => "Novi Dyah Puspitasari S.pd",
            "judul" => "Labib Fayumi S.pd. Gr",
            "tulisan" => "Savira Maya Shovie S.pd"
        ],
        [
            "penulis" => "Wahyu Tri Wulansari S.pd",
            "judul" => "Ervi Rahmawati ST.",
            "tulisan" => "Fuad"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
        public function tambahData($data)
        {
            $query = "INSERT INTO siswa VALUES
            ('', :nama, :jenis_kelamin, :alamat) ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamim']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->execute();
            return $this->db->rowCount();
        }
        

}