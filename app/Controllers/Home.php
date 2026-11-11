<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()      { return view('pages/beranda'); }
    public function profil()     { return view('pages/profil'); }
    public function portofolio() { return view('pages/portofolio'); }
}
