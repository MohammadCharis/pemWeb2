<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function beranda()    { return view('pages/beranda'); }
    public function profil()     { return view('pages/profil'); }
    public function portofolio() { return view('pages/portofolio'); }
}