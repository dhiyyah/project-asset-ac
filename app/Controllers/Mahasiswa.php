<?php
namespace App\Controllers;
class Mahasiswa extends BaseController
{
    public function index() {
        $data = array(
            'judul' => 'Daftar Mahasiswa'
        );
        return view('ContentTabel2', $data);

    }

    public function daftar_aset() {
        $data = array(
            'judul' => 'Daftar Aset'
        );
        return view('ContentTabel2', $data);
    }

    public function statistic() {
        $data = array(
            'judul' => 'Statistik'
        );
        return view('ContentStatistic2', $data);
    }

    public function proyek() {
        $data = array(
            'judul' => 'Proyek',
            'judul_tabel' => 'Daftar Proyek Berjalan'
        );
        return view('ContentProyek2', $data);
    }
}
?>