<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $MahasiswaModel;
    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Halaman | Dashboard'
        ];
        return view('mahasiswa/home', $data);
    }
    public function datamahasiswa()
    {
        // $mahasiswa = $this->MahasiswaModel->findAll();

        $data = [
            'title' => 'Halaman | Data Mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->getMahasiswa()
        ];

        return view('mahasiswa/datamahasiswa', $data);
    }
    public function detail($slug)
    {


        $data = [
            'title' => 'Halaman | Detail Mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->getMahasiswa($slug)
        ];

        return view('/mahasiswa/detail', $data);
    }
    public function create()
    {
        $session = \Config\Services::session();
        helper('form');

        $data = [
            'title' => 'Halaman | Tambah Data Mahasiswa'
        ];


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'nim' => [
                    'label' => 'Nim Mahasiswa',
                    'rules' => 'required|is_unique[mahasiswa.nim]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],

                'nama' => [
                    'label' => 'Nama Mahasiswa',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'jurusan' => [
                    'label' => 'Jurusan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'jenkel' => [
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ], 'telephone' => [
                    'label' => 'Nomor Telpon Mahasiswa',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'gambar' => [
                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang Anda Pilih Bukan Gambar',
                        'mime_in' => 'Yang Anda Pilih Bukan Gambar',
                    ]
                ]
            ]);

            if ($input == true) {
                // Form Validasi Sukses
                $MahasiswaModel = new MahasiswaModel();

                // ambil gambar
                $filegambar = $this->request->getFile('gambar');

                // apakah tidak ada gambar yang di upload
                if ($filegambar->getError() == 4) {
                    $namagambar = 'buku.jpeg';
                } else {

                    // generate nama gambar random
                    $namagambar = $filegambar->getRandomName();

                    // pindahka file ke folder img
                    $filegambar->move('img', $namagambar);
                }


                $slug = url_title($this->request->getVar('nama'), '-', true);
                $MahasiswaModel->save([
                    'nim' => $this->request->getVar('nim'),
                    'nama' => $this->request->getVar('nama'),
                    'slug' => $slug,
                    'jurusan' => $this->request->getVar('jurusan'),
                    'jenkel' => $this->request->getVar('jenkel'),
                    'telephone' => $this->request->getVar('telephone'),
                    'alamat' => $this->request->getVar('alamat'),
                    'gambar' => $namagambar
                ]);

                $session->setFlashdata('sukses', 'Data Berhasil Di tambahkan');

                return redirect()->to('Mahasiswa/datamahasiswa');
            } else {
                // Form Validasi Gagal
                $data['validation'] = $this->validator;
            }
        }

        return view('/Mahasiswa/create', $data);
    }

    public function delete($id)
    {
        $session = \Config\Services::session();
        $this->MahasiswaModel->delete($id);
        $session->setFlashdata('sukses', 'Data Berhasil Dihapus');
        return redirect()->to('/Mahasiswa/datamahasiswa');
    }

    public function edit($slug)
    { {
            $session = \Config\Services::session();
            helper('form');

            $data = [
                'title' => 'Halaman | Ubah Data Mahasiswa',
                'mahasiswa' => $this->MahasiswaModel->getMahasiswa($slug)
            ];


            if ($this->request->getMethod() == 'post') {
                $input = $this->validate([
                    'nim' => [
                        'label' => 'Nim Mahasiswa',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],

                    'nama' => [
                        'label' => 'Nama Mahasiswa',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'jurusan' => [
                        'label' => 'Jurusan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'jenkel' => [
                        'label' => 'Jenis Kelamin',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ], 'telephone' => [
                        'label' => 'Nomor Telpon Mahasiswa',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'alamat' => [
                        'label' => 'Alamat',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                ]);

                if ($input == true) {
                    // Form Validasi Sukses
                    $MahasiswaModel = new MahasiswaModel();

                    $slug = url_title($this->request->getVar('nama'), '-', true);
                    $MahasiswaModel->save([
                        'nim' => $this->request->getVar('nim'),
                        'nama' => $this->request->getVar('nama'),
                        'slug' => $slug,
                        'jurusan' => $this->request->getVar('jurusan'),
                        'jenkel' => $this->request->getVar('jenkel'),
                        'telephone' => $this->request->getVar('telephone'),
                        'alamat' => $this->request->getVar('alamat'),
                    ]);

                    $session->setFlashdata('sukses', 'Data Berhasil Diubah');

                    return redirect()->to('Mahasiswa/datamahasiswa');
                } else {
                    // Form Validasi Gagal
                    $data['validation'] = $this->validator;
                }
            }

            return view('/Mahasiswa/edit', $data);
        }
    }

    public function update($slug)
    {
        dd($this->request->getVar());
    }

    public function contact()
    {
        $data = [
            'title' => 'Halaman | Contact'
        ];
        return view('mahasiswa/contact', $data);
    }
}
