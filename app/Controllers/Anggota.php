<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    protected $anggota;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->anggota = new AnggotaModel();
    }

    public function index()
    {
        $data['anggota'] = $this->anggota->findAll();
        return view('layout/header')
            . view('anggota/index', $data)
            . view('layout/footer');
    }

    public function create()
    {
        return view('anggota/create');
    }

    public function store()
    {
        $file = $this->request->getFile('foto');

        // Siapkan nama file foto
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFoto = $file->getRandomName();
            $file->move('uploads/anggota', $namaFoto);
        } else {
            $namaFoto = 'default.jpg'; // fallback jika tidak ada upload
        }

        $data = [
            'nama'    => $this->request->getPost('nama'),
            'email'   => $this->request->getPost('email'),
            'jabatan' => $this->request->getPost('jabatan'),
            'foto'    => $namaFoto
        ];

        $this->anggota->insert($data);
        return redirect()->to('/anggota');
    }

    public function edit($id)
    {
        $data['anggota'] = $this->anggota->find($id);
        return view('anggota/edit', $data);
    }

    public function update($id)
    {
        $anggotaLama = $this->anggota->find($id);
        $file = $this->request->getFile('foto');

        // Jika ada foto baru, ganti yang lama
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFoto = $file->getRandomName();
            $file->move('uploads/anggota', $namaFoto);
        } else {
            $namaFoto = $anggotaLama['foto'] ?? 'default.jpg';
        }

        $data = [
            'nama'    => $this->request->getPost('nama'),
            'email'   => $this->request->getPost('email'),
            'jabatan' => $this->request->getPost('jabatan'),
            'foto'    => $namaFoto
        ];

        $this->anggota->update($id, $data);
        return redirect()->to('/anggota');
    }

    public function delete($id)
    {
        $this->anggota->delete($id);
        return redirect()->to('/anggota');
    }
}
