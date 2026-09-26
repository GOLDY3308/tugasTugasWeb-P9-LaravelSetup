<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'name' => 'Farhan Zuhairi Harahap',
            'nim' => '0000000',
            'prodi' => 'Ilmu Komputer - FMIPA UNIMED',
            'courses' => [
                'Pemrograman Web (Laravel 12)',
                'Arsitektur MVC & Composer',
                'Blade Templating & Routing',
                'Database Migration & Eloquent ORM'
            ]
        ];
        return view('welcome', $data);
    }

    public function about()
    {
        $skills = ['HTML5 & CSS3', 'Tailwind CSS', 'PHP & MySQL', 'Laravel Framework', 'Git & GitHub'];
        return view('about', compact('skills'));
    }

    public function contact()
    {
        $contacts = [
            'Email' => 'farhan@mahasiswa.unimed.ac.id',
            'GitHub' => 'github.com/goldy3308',
            'Lokasi' => 'Medan, Sumatera Utara'
        ];
        return view('contact', compact('contacts'));
    }

    public function hello($nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}