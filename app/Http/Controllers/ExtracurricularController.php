<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $data = [
            'extracurriculars' => [
                'Pramuka' => [
                    'images' => [
                        'https://example.com/foto1.jpg',
                        'https://example.com/foto2.jpg',
                    ],
                ],
                'Paskibraka' => [
                    'images' => [
                        'https://example.com/foto3.jpg',
                        'https://example.com/foto4.jpg',
                    ],
                ],
                'Sepak Bola' => [
                    'images' => [
                        'https://example.com/foto5.jpg',
                        'https://example.com/foto6.jpg',
                    ],
                ],
                'Rohis' => [
                    'images' => [
                        'https://example.com/foto7.jpg',
                        'https://example.com/foto8.jpg',
                    ],
                ],
                'Marching Band' => [
                    'images' => [
                        'https://example.com/foto9.jpg',
                        'https://example.com/foto10.jpg',
                    ],
                ],
            ],
        ];

        return view('extracurricular', $data);
    }
}
