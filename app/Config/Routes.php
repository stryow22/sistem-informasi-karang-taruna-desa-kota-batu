<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
// HOME
$routes->get('/', 'Pages::index');
$routes->get('/user', 'Administrator::user', ['filter' => 'role:user']);

// ADMINONLY DISARING
$routes->get('/administrator', 'Administrator::index', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/index', 'Administrator::index', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/galery', 'Administrator::galery', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/berita', 'Administrator::berita', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/pengumuman', 'Administrator::pengumuman', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/aspirasi', 'Administrator::aspirasi', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/detailuserlist/(:num)', 'Administrator::detailuserlist/$1', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/userlist', 'Administrator::userlist', ['filter' => 'role:admin,superadmin']);

// galery
$routes->get('/administrator/tambahgalery', 'Administrator::tambahgalery', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/ubahgalery/(:segment)', 'Administrator::ubahgalery/$1', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/galery/(:any)', 'Administrator::detailGalery/$1', ['filter' => 'role:admin,superadmin']);
$routes->delete('/administrator/(:num)', 'Administrator::hapusgalery/$1', ['filter' => 'role:admin,superadmin']);

// BERITA
$routes->get('/administrator/tambahberita', 'Administrator::tambahberita', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/ubahberita/(:segment)', 'Administrator::ubahberita/$1', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/berita/(:any)', 'Administrator::detailberita/$1', ['filter' => 'role:admin,superadmin']);
$routes->delete('/administrator/(:num)', 'Administrator::hapusberita/$1', ['filter' => 'role:admin,superadmin']);


// pengumuman
$routes->get('/administrator/tambahpengumuman', 'Administrator::tambahpengumuman', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/ubahpengumuman/(:segment)', 'Administrator::ubahpengumuman/$1', ['filter' => 'role:admin,superadmin']);
$routes->get('/administrator/pengumuman/(:any)', 'Administrator::detailpengumuman/$1', ['filter' => 'role:admin,superadmin']);
// ini kurang tau salahnya dimana
$routes->delete('/administrator/pengumuman/(:num)', 'Administrator::hapuspengumuman/$1', ['filter' => 'role:admin,superadmin']);

// aspirasi
$routes->get('/administrator/aspirasi/(:any)', 'Administrator::detailaspirasi/$1', ['filter' => 'role:admin,superadmin']);
$routes->delete('/administrator/(:num)', 'Administrator::hapusaspirasi/$1', ['filter' => 'role:admin,superadmin']);

// REGISTER LOGIN
// $routes->get('/administrator/login', 'Pages::login');
$routes->delete('/administrator/(:num)', 'Administrator::hapususerlist/$1', ['filter' => 'role:admin,superadmin']);


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
