<?php

namespace App\Controllers;
use App\Controllers\BaseCpntroller;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\AsetModel;

class Barang extends BaseController
{
    protected $barangModel;
    protected $kategoriModel;

    public function __construct() {
        $this->barangModel = new BarangModel();
        $this->kategoriModel = new KategoriModel();

    }
    public function index()
    {        
        $daftarBarang = $this->barangModel->findAll();
        $kategori = $this->kategoriModel->findAll();
        $data = array(
            'daftarBarang' => $daftarBarang,
            'kategori' => $kategori,
            'judul' => 'Daftar Barang'
        );
        return view('ContentProyek', $data);
    }

    public function tambah_barang()
    {
        $namaBarang = $_POST['namaBarang'];
        $merek = $_POST['merek'];
        $tahun_perolehan = $_POST['tahun_perolehan'];
        // if (!isset($merek)) {
        //     echo json_encode(array('status' => 'failed', 'message' => 'merek tidak boleh kosong'));
        //     exit();
        // } else {
        $data = array(
            'nama_barang' => $namaBarang,
            'merek' => $_POST['merek'],
            'tahun_perolehan' => $_POST['tahun_perolehan'],
            'id_kategori_barang' => $_POST['id_kategori'],
        );
        $id = $this->barangModel->insert($data);
        
        echo json_encode(array('status' => 'success', 'id_barang' => $id));
        exit();
     // }
    }

    public function aset() {
        $dataBarang = $this->barangModel->findAll();
        dd($dataBarang);
        return view('ContentProyek2');
    }
}