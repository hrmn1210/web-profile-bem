<?php

namespace App\Controllers;

use App\Models\DokumentasiModel;

class Galeri extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new DokumentasiModel();
    }

    public function index()
    {
        $data['galeri'] = $this->model->findAll();
        echo view('layout/header');
        echo view('galeri/index', $data);
        echo view('layout/footer');
    }
    public function create()
    {
        return view('galeri/create');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        $namaFile = $file->getRandomName();
        $file->move('uploads/galeri', $namaFile);

        $this->model->save([
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kategori'  => $this->request->getPost('kategori'),
            'gambar'    => $namaFile
        ]);

        return redirect()->to('/galeri');
    }

    public function edit($id)
    {
        $data['kegiatan'] = $this->model->find($id);
        return view('galeri/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kategori'  => $this->request->getPost('kategori')
        ];

        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/galeri', $namaFile);
            $data['gambar'] = $namaFile;
        }

        $this->model->update($id, $data);
        return redirect()->to('/galeri');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/galeri');
    }

    public function detail($id)
    {
        $data['galeri'] = $this->model->find($id);
        return view('layout/header')
            . view('galeri/detail', $data)
            . view('layout/footer');
    }
}
