<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::beranda');
$routes->get('profil', 'Pages::profil');
$routes->get('portofolio', 'Pages::portofolio');

$routes->get('modul1/prak(:num)', 'Praktikum::modul1/$1');
$routes->get('modul2/prak(:num)', 'Praktikum::modul2/$1');
