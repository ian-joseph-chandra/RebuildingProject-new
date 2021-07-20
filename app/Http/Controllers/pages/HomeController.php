<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show()
    {
        $programs = [
            [
                'title' => 'Pelajaran Umum',
                'quote' => 'Matematika, Bahasa Inggris, dsb.',
                'image' => 'images/home/image1.png'
            ],
            [
                'title' => 'Skill',
                'quote' => 'Bisnis, kepemimpinan, kewirausahaan, seni, public speaking, dsb.',
                'image' => 'images/home/image2.png'
            ],
            [
                'title' => 'Sharing Session',
                'quote' => 'Khusus untuk remaja, sharing session seputar passion dan dunia kerja',
                'image' => 'images/home/image3.png'
            ],
            [
                'title' => 'Pendidikan Karakter',
                'quote' => 'Toleransi, Kerjasama, Saling Menghargai, Kejujuran, dsb.',
                'image' => 'images/home/image4.png'
            ],
        ];

//        $example = $programs[0]['title'];
        $activities = [

        ];

//        return compact('example', 'programs', 'activities');
        return view('home', compact('programs', 'activities'));
    }
}
