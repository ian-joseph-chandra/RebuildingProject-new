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

        $activities = [
            [
                'id' => '01',
                'image' => 'images/home/ilus1.png',
                'description' => 'Merancang program edukasi
berkonsep Fun-Learning
sesuai dengan kategori umur
setiap anak'
            ],
            [
                'id' => '02',
                'image' => 'images/home/ilus2.png',
                'description' => 'Memperluas pengetahuan
anak-anak yatim piatu di luar
institusi pendidikan formal'
            ],
            [
                'id' => '03',
                'image' => 'images/home/ilus3.png',
                'description' => 'Mendorong pengembangan
kemampuan serta membangun
pendidikan karakter'
            ],
            [
                'id' => '04',
                'image' => 'images/home/ilus4.png',
                'description' => 'Mendorong partisipasi
anak-anak muda untuk
berkontribusi dalam
meningkatkan kualitas edukasi
di panti asuhan di Indonesia'
            ]
        ];

//        return compact('example', 'programs', 'activities');
        return view('home', compact('programs', 'activities'));
    }
}
