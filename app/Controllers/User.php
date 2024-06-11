<?php
namespace App\Controllers;

class User extends BaseController {
    public function index() {
        $data = array(
            'judul' => 'Halaman Utama'
        );
        return view('layout', $data);
    }
}
?>