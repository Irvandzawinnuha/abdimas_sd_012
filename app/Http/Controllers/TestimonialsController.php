<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display the testimonials page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data testimoni dengan nama, institusi, dan isi
        $testimonials = [
            [
                'name' => 'Andi Pratama',
                'institution' => 'Universitas Telkom',
                'testimonial' => 'Sekolah ini adalah tempat di mana mimpi saya mulai terbentuk. Bukan hanya mendapatkan pendidikan terbaik, tetapi juga nilai-nilai kehidupan yang membentuk karakter saya hingga saat ini. Saya sangat bangga menjadi bagian dari keluarga besar sekolah ini.',
                'image' => 'andi-pratama.jpg', // Path gambar
            ],
            [
                'name' => 'Sarah Amelia',
                'institution' => 'Institut Teknologi Bandung',
                'testimonial' => 'Saya berterima kasih kepada sekolah ini karena telah memberi saya pengalaman belajar yang menyenangkan dan penuh tantangan. Guru-gurunya sangat peduli, dan suasananya mendukung pertumbuhan siswa secara akademik maupun personal.',
                'image' => 'sarah-amelia.jpg',
            ],
            [
                'name' => 'Budi Santoso',
                'institution' => 'Orang Tua Siswa',
                'testimonial' => 'Anak saya menjadi lebih percaya diri dan bersemangat belajar sejak masuk ke sekolah ini. Guru-guru di sini tidak hanya memberikan ilmu pengetahuan, tetapi juga membangun karakter positif. Saya sangat bersyukur anak saya bisa belajar di sini.',
                'image' => 'budi-santoso.jpg',
            ],
        ];

        return view('testimonials', ['testimonials' => $testimonials]);
    }
}
