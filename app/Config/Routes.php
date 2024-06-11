<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin;
use App\Controllers\Barang;
use App\Controllers\User;


/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Mahasiswa::index');

$routes->get('/', [Admin::class, 'index']);
$routes->get('barang', [Barang::class, 'index']);
// $routes->post('barang/tambah_barang', [Barang::class, 'tambah_barang']);
$routes->get('aset', [Barang::class, 'aset']);
$routes->post('barang/tambah_barang', [Barang::class, 'tambah_barang']);
$routes->get('user', [User::class, 'index']);

