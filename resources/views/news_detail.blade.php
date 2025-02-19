@include('partials.header')

<section class="news-section">
    <div class="container" style="display: block;"> <br>
        <div class="breadcrumb" style="font-size: 25px;"> <br> <br>
            <a href="/">Beranda</a> &gt;&gt; <a href="{{ route('news.index') }}">Berita dan Pengumuman</a> &gt;&gt; 
            <span style="font-weight: 600; color:#000000;">{{ $news->judul }}</span> <br>
        </div>

        <div class="news-detail"> <br>
            <!-- Gambar Utama -->
            <img src="{{ asset('storage/' . ($news->foto[0] ?? '')) }}" alt="{{ $news->judul }}" 
                style="width: 700px; max-height: 400px; object-fit: cover; margin-bottom: 20px; border-radius: 10px; height: 744px; width: 100%;">

            <!-- Galeri Gambar Tambahan -->
            @if(count($news->foto) > 1)
            <div class="image-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 20px 0;">
                @foreach($news->foto as $index => $foto)
                    @if($index > 0) {{-- Skip gambar utama --}}
                    <img src="{{ asset('storage/' . $foto) }}" 
                         alt="{{ $news->judul }} - Gambar {{ $index + 1 }}"
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px; cursor: pointer;"
                         onclick="showFullImage(this.src)">
                    @endif
                @endforeach
            </div>
            @endif

            <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 20px; color: #333;">{{ $news->judul }}</h1>
            <p style="font-size: 0.9rem; color: #000000; margin-bottom: 20px;">
                <i class="fa fa-calendar"></i> {{ $news->tanggal }}
            </p>

            <p style="font-size: 1rem; line-height: 1.8; color: #000000; margin-bottom: 20px;">
                {!! nl2br(e($news->konten)) !!}
            </p>
        </div>
    </div>

    <!-- Modal untuk menampilkan gambar full -->
    <div id="imageModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.9); z-index: 1000;">
        <span style="position: absolute; right: 30px; top: 15px; color: white; font-size: 40px; cursor: pointer; font-weight: bold;" onclick="closeModal()">&times;</span>
        <img id="modalImage" style="max-width: 90%; max-height: 90%; margin: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 5px;">
    </div>
</section>

<script>
function showFullImage(src) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    modal.style.display = "block";
    modalImg.src = src;
}

function closeModal() {
    document.getElementById('imageModal').style.display = "none";
}

// Tutup modal ketika mengklik di luar gambar
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Tambahkan keyboard support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>

@include('partials.footer')
