<?php

namespace App\Controllers;
use App\Controllers\BaseCpntroller;
use App\Models\AdminModel;

class Admin extends BaseController
{

    public function index(): string
    {
        return view('ContentStatistic');
    }

    public function daftar()
    {
        
        return view('ContentTabel', $data);
    }

    public function daftar_aset()
    {
        $adminModel = new \App\Models\AdminModel();
        $daftar_mahasiswa = $adminModel->findAll();
        dd($daftar_mahasiswa);
        // $data = array(
        //     'daftar_mahasiswa' => $daftar_mahasiswa
        // );
        return view('ContentProyek', $data);
    }

    // public function proyek($number = 0)
    // {
    //     return view('proyek');
    // }
}
