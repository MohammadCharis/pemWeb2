<?php
namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Praktikum extends BaseController
{
    public function modul1(int $no) { return $this->tampil('modul1', $no); }
    public function modul2(int $no) { return $this->tampil('modul2', $no); }

    private function tampil(string $modul, int $no)
    {
        $view = "praktikum/$modul/prak$no";
        if (! is_file(APPPATH . "Views/$view.php")) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view($view);
    }
}