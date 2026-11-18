<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function beranda()    { return view('pages/beranda'); }
    public function profil()     { return view('pages/profil'); }
    public function portofolio() { return view('pages/portofolio'); }
    public function artikel()
    {
        return view('pages/artikel');
    }

    public function detailArtikel(string $slug)
    {
        $articles = [
            'perjalanan-belajar-web' => [
                'title' => 'Perjalanan Belajar Web Development di Semester 4',
                'category' => 'Cerita Belajar',
                'author' => 'Moh. Charis Rozikin',
                'date' => '12 Februari 2026',
                'introduction' => 'Memasuki semester 4, saya mulai mempelajari web development secara lebih terarah melalui berbagai praktikum dan proyek kecil. Pada awalnya, saya hanya memahami HTML secara sederhana, tetapi proses perkuliahan membuat saya mengenal tahapan pengembangan website dengan lebih lengkap. Saya mulai menyadari bahwa sebuah website tidak hanya membutuhkan tampilan yang menarik, tetapi juga struktur kode yang rapi dan mudah dikembangkan.',
                'content' => 'Belajar web development dimulai dari memahami struktur HTML, mengatur tampilan dengan CSS, lalu menghubungkan halaman menggunakan PHP dan CodeIgniter 4. Saya mempelajari cara membuat heading, paragraf, gambar, tabel, formulir, dan tautan. Setelah itu, saya belajar menggunakan CSS untuk mengatur warna, jarak, ukuran, layout, dan tampilan responsive agar website dapat digunakan pada berbagai ukuran layar. Saya juga mempelajari pentingnya navigasi agar pengguna dapat berpindah dari satu halaman ke halaman lain dengan mudah. Tahap berikutnya adalah memahami konsep routing, controller, dan view pada CodeIgniter 4. Routing digunakan untuk menentukan alamat halaman, controller mengatur proses aplikasi, dan view bertugas menampilkan isi kepada pengguna. Dalam prosesnya, saya beberapa kali menemukan kesalahan penulisan kode, alamat route yang tidak sesuai, dan tampilan CSS yang belum rapi. Namun, dari masalah tersebut saya belajar membaca pesan error, memeriksa struktur file, dan melakukan perbaikan secara bertahap. Setiap praktikum membantu saya memahami bagaimana sebuah website dibangun mulai dari perencanaan, pembuatan struktur, pengaturan tampilan, sampai pengujian halaman.',
                'conclusion' => 'Proses belajar ini mengajarkan saya bahwa kemampuan web development dibangun melalui latihan yang konsisten, kemauan membaca dokumentasi, dan keberanian untuk mencoba. Saya masih perlu banyak belajar tentang database, keamanan, dan pengembangan fitur yang lebih kompleks. Meskipun begitu, setiap proyek kecil membuat pemahaman saya semakin bertambah dan membantu saya lebih percaya diri dalam membuat aplikasi web.',
            ],
            'membangun-portofolio-pribadi' => [
                'title' => 'Membangun Website Portofolio Pribadi',
                'category' => 'Portofolio',
                'author' => 'Moh. Charis Rozikin',
                'date' => '27 Mei 2026',
                'introduction' => 'Website portofolio menjadi salah satu cara untuk memperkenalkan diri dan menampilkan hasil belajar kepada orang lain. Bagi mahasiswa, portofolio juga dapat menjadi dokumentasi perkembangan kemampuan dari waktu ke waktu. Melalui portofolio, seseorang dapat menunjukkan minat, keterampilan, pengalaman, dan jenis proyek yang pernah dikerjakan.',
                'content' => 'Website portofolio menjadi tempat untuk memperkenalkan diri, menampilkan karya, dan mendokumentasikan proses belajar. Dalam membuat portofolio ini, saya menyusun beberapa halaman seperti Beranda, Profil, Portofolio, Artikel, dan About Me. Saya juga menghubungkan setiap halaman menggunakan routing dan navigasi agar pengunjung dapat berpindah halaman dengan mudah. Selain itu, saya menggunakan satu layout yang sama supaya header, menu, dan footer tetap konsisten. Isi portofolio tidak hanya menampilkan hasil akhir, tetapi juga menjelaskan teknologi dan proses yang digunakan dalam setiap proyek. Dengan cara ini, pengunjung dapat melihat kemampuan sekaligus proses belajar saya. Saya juga berusaha menggunakan bahasa yang sederhana agar informasi di dalam website mudah dipahami. Setiap bagian dibuat memiliki fungsi, mulai dari halaman Beranda sebagai pengenalan, Profil untuk data diri, Portofolio untuk menampilkan karya, Artikel untuk membagikan pengetahuan, dan About Me untuk menceritakan latar belakang secara lebih personal. Pembuatan portofolio juga melatih saya dalam mengatur struktur folder, menulis kode yang terorganisir, dan memperhatikan pengalaman pengguna.',
                'conclusion' => 'Portofolio bukan hanya kumpulan karya, tetapi juga catatan perkembangan dan bukti proses belajar. Saya akan terus memperbarui portofolio ini dengan proyek dan pengalaman baru agar dapat menunjukkan perkembangan kemampuan saya. Dengan memperbarui isi secara berkala, portofolio ini diharapkan dapat menjadi gambaran yang jujur tentang kemampuan dan perjalanan saya di bidang web development.',
            ],
            'mengenal-codeigniter-4' => [
                'title' => 'Mengenal CodeIgniter 4 untuk Pemula',
                'category' => 'CodeIgniter 4',
                'author' => 'Moh. Charis Rozikin',
                'date' => '9 Agustus 2026',
                'introduction' => 'CodeIgniter 4 merupakan framework PHP yang membantu pengembang membuat aplikasi web dengan struktur yang lebih rapi. Framework ini cocok digunakan untuk membuat website sederhana maupun aplikasi yang memiliki banyak fitur. CodeIgniter 4 juga memiliki dokumentasi yang cukup jelas sehingga membantu pemula memahami konsep pengembangan aplikasi web.',
                'content' => 'CodeIgniter 4 membantu pengembangan aplikasi PHP dengan pola MVC. Routing menentukan alamat halaman yang dapat diakses pengguna, controller mengatur proses dan pemanggilan halaman, sedangkan view menampilkan informasi kepada pengguna. Dalam proyek ini, routing digunakan untuk menghubungkan alamat seperti /profil, /portofolio, dan /artikel dengan method yang ada di controller Pages. View kemudian menggunakan layout utama agar tampilan setiap halaman tetap seragam. CodeIgniter juga memiliki struktur folder yang jelas sehingga file controller, view, konfigurasi, dan aset dapat dikelola dengan lebih mudah. Pemisahan tanggung jawab ini membuat kode lebih mudah dibaca, diperbaiki, dan dikembangkan. Controller Pages berfungsi mengatur halaman-halaman utama website, sedangkan view berisi tampilan yang dilihat oleh pengguna. Dengan menggunakan layout, bagian seperti header, navigasi, dan footer tidak perlu ditulis berulang kali pada setiap halaman. Selain itu, penggunaan route membuat alamat halaman lebih teratur dan mudah dipahami. Proses ini membantu saya mengenal konsep pemrograman berorientasi objek karena setiap controller dibuat sebagai sebuah class dengan method yang memiliki tugas tertentu.',
                'conclusion' => 'Dengan memahami konsep MVC dan routing, pembuatan aplikasi CodeIgniter 4 menjadi lebih mudah dipahami dan dikembangkan. Framework ini membantu saya menulis kode secara lebih teratur dibandingkan membuat semua proses dalam satu file PHP. Pengalaman ini juga menjadi dasar penting untuk mempelajari fitur lanjutan seperti model, database, validasi form, autentikasi, dan pembuatan API.',
            ],
        ];

        if (! array_key_exists($slug, $articles)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan.');
        }

        return view('pages/detail-artikel', ['article' => $articles[$slug]]);
    }

    public function aboutMe()    { return view('pages/about-me'); }
}
