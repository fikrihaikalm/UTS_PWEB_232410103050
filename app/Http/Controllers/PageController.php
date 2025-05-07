<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gallery()
    {
        $artworks = [
            [
                'id' => 1,
                'title' => 'Biawak',
                'artist' => 'Arianto',
                'price' => 50000000,
                'image' => 'https://img.bisik.id/image/https://bisik.b-cdn.net/1745272993020-e5edb8e06bc1605e.webp?blur=0?width=1920',
                'category' => 'Patung'
            ],
            [
                'id' => 2,
                'title' => 'Macan',
                'artist' => 'Seniman Low Budget',
                'price' => 850000,
                'image' => 'https://cdn0-production-images-kly.akamaized.net/oKDsp7l1bJAeZhcd_CcE2E3xXk8=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1540960/original/079538100_1489825134-Macan.jpg',
                'category' => 'Patung'
            ],
            [
                'id' => 3,
                'title' => 'Diponegoro',
                'artist' => 'Raden Saleh',
                'price' => 650000,
                'image' => 'https://cdn.idntimes.com/content-images/post/20220902/image-1-8dcb9f9f5b9007148ad7a232ec9736cc.jpg',
                'category' => 'Lukisan'
            ],
            [
                'id' => 4,
                'title' => 'Monalisa',
                'artist' => 'Leonardo da Vinci',
                'price' => 2200000,
                'image' => 'https://img.idxchannel.com/images/idx/2024/01/30/Screenshot_2024-01-30_175300__1_.png',
                'category' => 'Lukisan'
            ]
        ];

        return view('gallery', compact('artworks'));
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        
        $stats = [
            'total_artworks' => 24,
            'artworks_sold' => 8,
            'new_orders' => 3,
            'total_artists' => 5
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $artworks = [
            [
                'id' => 1,
                'title' => 'Harmoni Alam',
                'artist' => 'Budi Santoso',
                'price' => 1250000,
                'category' => 'Lukisan',
                'status' => 'Tersedia'
            ],
            [
                'id' => 2,
                'title' => 'Patung Kayu Tradisional',
                'artist' => 'Siti Aminah',
                'price' => 850000,
                'category' => 'Patung',
                'status' => 'Terjual'
            ],
            [
                'id' => 3,
                'title' => 'Keramik Modern',
                'artist' => 'Agus Wijaya',
                'price' => 650000,
                'category' => 'Keramik',
                'status' => 'Tersedia'
            ],
            [
                'id' => 4,
                'title' => 'Kaligrafi Emas',
                'artist' => 'Ahmad Fauzi',
                'price' => 2200000,
                'category' => 'Kaligrafi',
                'status' => 'Diproses'
            ],
            [
                'id' => 5,
                'title' => 'Abstraksi Kota',
                'artist' => 'Dewi Lestari',
                'price' => 1750000,
                'category' => 'Lukisan',
                'status' => 'Tersedia'
            ]
        ];

        return view('pengelolaan', compact('artworks'));
    }
}