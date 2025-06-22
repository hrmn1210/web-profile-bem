<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blog;

    public function __construct()
    {
        $this->blog = new BlogModel();
    }

    public function index()
    {
        $data['blog'] = $this->blog->findAll();
        return view('blog/index', $data);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store()
    {
        $data = [
            'judul'   => $this->request->getPost('judul'),
            'isi'     => $this->request->getPost('isi'),
            'penulis' => $this->request->getPost('penulis')
        ];
        $this->blog->insert($data);
        return redirect()->to('/blog');
    }

    public function edit($id)
    {
        $data['blog'] = $this->blog->find($id);
        return view('blog/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'judul'   => $this->request->getPost('judul'),
            'isi'     => $this->request->getPost('isi'),
            'penulis' => $this->request->getPost('penulis')
        ];
        $this->blog->update($id, $data);
        return redirect()->to('/blog');
    }

    public function delete($id)
    {
        $this->blog->delete($id);
        return redirect()->to('/blog');
    }
}
