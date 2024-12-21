<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('mongo/(:num)', 'Home::test/$1');
$routes->get('/add-war', 'War::add'); // Formu görüntüleme
$routes->post('/war/add', 'War::add'); // Form verilerini işleme
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');
$routes->get('/war/edit/(:num)', 'War::edit/$1'); // Düzenleme sayfasını göster
$routes->post('/war/update', 'War::update');     // Güncelleme işlemi
$routes->get('/war/add', 'War::add');         // Savaş ekleme sayfası
$routes->post('/war/add', 'War::add');        // Savaş ekleme işlemi
$routes->get('/war/edit/(:num)', 'War::edit/$1'); // Savaş düzenleme sayfası
$routes->post('/war/update', 'War::update'); // Savaş güncelleme işlemi
$routes->get('/war-list', 'War::list');      // Savaş listesi
$routes->get('/war/fetch', 'War::fetch'); // Savaşları listeleyen sayfa
$routes->get('/login', 'Auth::login');    // Giriş sayfası
$routes->post('/login', 'Auth::login');   // Giriş işlemi
$routes->get('/logout', 'Auth::logout');  // Çıkış işlemi
$routes->get('/war/delete/(:num)', 'War::delete/$1'); // Savaş silme işlemi
$routes->post('/war/update', 'War::update'); // Savaş güncelleme işlemi
$routes->get('/war/add', 'War::add');          // Savaş ekleme formu
$routes->post('/war/add', 'War::add');         // Savaş ekleme işlemi
$routes->get('/war/edit/(:num)', 'War::edit/$1'); // Savaş düzenleme formu
$routes->post('/war/update', 'War::update');  // Savaş güncelleme işlemi
$routes->get('/war/delete/(:num)', 'War::delete/$1'); // Savaş silme işlemi
$routes->get('/war-list', 'War::list');       // Savaş listeleme
$routes->get('/war/search', 'War::search');   // Savaş arama
$routes->get('/register', 'Auth::register'); // Kayıt formu
$routes->post('/register', 'Auth::register'); // Kayıt işlemi
$routes->get('/war-list', 'War::list'); // Savaş listeleme
$routes->get('/', 'Home::customIndex');
$routes->get('generic', 'Home::generic'); // Generic sayfası rotası
$routes->get('elements', 'Home::elements'); // Elements sayfası rotası
$routes->post('war/add', 'WarController::add');
$routes->addRedirect('admin-panel', 'dashboard');
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->post('comment/add', 'Comment::add');
$routes->get('comments', 'Comment::list');
$routes->get('/', 'Comment::list'); // Ana sayfaya 'Comment::list' fonksiyonunu bağla
$routes->get('comment/testMongo', 'Comment::testMongo');