<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Beranda::index');
$routes->get('profil', 'Profil::index');
$routes->get('portofolio', 'Portofolio::index');
$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/(:segment)', 'Artikel::detailArtikel/$1');
$routes->get('about-me', 'AboutMe::index');

$routes->get('modul1/prak(:num)', 'Praktikum::modul1/$1');
$routes->get('modul2/prak(:num)', 'Praktikum::modul2/$1');
