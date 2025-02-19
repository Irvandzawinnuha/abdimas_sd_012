@include('partials.header')

<section class="news-section">
    <div class="container" style="display: block; text-align: center"> <br>
        <h2 class="section-title">Berita dan Pengumuman</h2>
        <p class="section-subtitle">SDN 012 BABAKAN CIPARAY</p> <br>

        @foreach($news as $item)
        <div class="news-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
            <img src="{{ asset('storage/' . ($item->foto[0] ?? '')) }}" alt="{{ $item->judul }}" style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
            <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
                <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">
                    {{ $item->judul }}
                </h3>
                <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;">
                    <i class="fa fa-calendar"></i> {{ $item->tanggal }}
                </p>
                <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">
                    {{ $item->deskripsi }}
                </p>
                <br>
                <a href="{{ route('news.show', $item->id) }}" style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">
                    Selengkapnya
                </a>
            </div>
        </div>
        @endforeach

        <br><br>
        <!-- Pagination -->
        <div class="pagination" style="display: flex; justify-content: center; gap: 10px; margin-top: 20px;">
            {{ $news->links() }}
        </div>
        <br><br>
    </div>
</section>

@include('partials.footer')

