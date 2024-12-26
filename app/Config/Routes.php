<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'landing-page']);
$routes->get('/home/ebook', 'Home::ebook', ['as' => 'main-page']);

$routes->get(
    '/admin', 
    'Admin::index',
     ['filter' => 'role:admin', 'as' => 'admin']
);

// $routes->get(
//     '/admin/userList', 
//     'Admin::userList', 
//     ['filter' => 'role:admin', 'as' => 'userList']
// );

$routes->get(
    '/penulis/index', 
    'Penulis::index', 
    ['filter' => 'role:admin', 'as' => 'listPenulis']
);

$routes->get(
    '/penulis', 
    'Penulis::index', 
    ['filter' => 'role:admin']
);

$routes->get(
    '/penulis/formTambah', 
    'Penulis::formTambah', 
    ['filter' => 'role:admin', 'as' => 'formTambahPenulis']
);

$routes->get(
    '/penulis/tambah', 
    'Penulis::tambah', 
    ['filter' => 'role:admin', 'as' => 'tambahPenulis']
);

$routes->get(
    '/buku/index', 
    'Buku::index', 
    ['filter' => 'role:admin', 'as' => 'listBuku']
);

$routes->get(
    '/buku', 
    'Buku::index', 
    ['filter' => 'role:admin']
);

$routes->get(
    '/buku/formTambah', 
    'Buku::formTambah', 
    ['filter' => 'role:admin', 'as' => 'formTambahBuku']
);

$routes->get(
    '/buku/tambah', 
    'Buku::tambah', 
    ['filter' => 'role:admin', 'as' => 'tambahBuku']
);

$routes->get(
    '/buku/formUbah/(:any)', 
    'Buku::formUbah/$1', 
    ['filter' => 'role:admin']
);

$routes->get(
    '/buku/ubah', 
    'Buku::ubah', 
    ['filter' => 'role:admin', 'as' => 'ubahBuku']
);

$routes->get(
    '/penulis/formUbah/(:any)', 
    'Penulis::formUbah/$1', 
    ['filter' => 'role:admin']
);

$routes->get(
    '/penulis/ubah', 
    'Penulis::ubah', 
    ['filter' => 'role:admin', 'as' => 'ubahPenulis']
);

$routes->get(
    '/penulis/hapus', 
    'Penulis::hapus', 
    ['filter' => 'role:admin']
);

$routes->get(
    '/admin/hapusUser', 
    'Admin::hapusUser', 
    ['filter' => 'role:admin', 'as' => 'hapusUser']
);

$routes->get(
    '/admin/index',
    'Admin::index', 
    ['filter' => 'role:admin', 'as' => 'userList']
);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
