<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimeStamp = true;
    protected $allowedFields = ['nim', 'nama', 'slug', 'jurusan', 'jenkel', 'telephone', 'alamat', 'gambar'];

    public function getMahasiswa($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
