@include('partials.header')

<div class="container" style="display: block; text-align: center;">
    <h2>Galeri Foto dan Video Sekolah</h2>
    <p>SD NEGERI 012 BABAKAN CIPARAY</p>

    @foreach($gallery as $kategori => $data)
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
        <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
            <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">{{ $kategori }}</h2>
            <button id="toggle-button-{{ preg_replace('/\s+/', '-', strtolower($kategori)) }}" style="
                background-color: #005599;
                color: white;
                border: none;
                padding: 10px 30px;
                border-radius: 30px;
                font-size: 16px;
                display: flex;
                align-items: center;
                gap: 10px;
                cursor: pointer;">
                <span id="button-text-{{ preg_replace('/\s+/', '-', strtolower($kategori)) }}">Lihat Selengkapnya</span>
                <span id="arrow-icon-{{ preg_replace('/\s+/', '-', strtolower($kategori)) }}" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
            </button>
        </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" 
                id="gallery-{{ preg_replace('/\s+/', '-', strtolower($kategori)) }}">
                @foreach($data['images'] as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="Kegiatan" style="width: 100%; border-radius: 8px;">
                @endforeach
            </div>
        </div>
    </section>
    @endforeach
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = @json($gallery->keys());
    
    sections.forEach(section => {
        const normalizedSection = section.toLowerCase().replace(/\s+/g, '-');
        const buttonId = `toggle-button-${normalizedSection}`;
        const galleryId = `gallery-${normalizedSection}`;
        const arrowId = `arrow-icon-${normalizedSection}`;
        const textId = `button-text-${normalizedSection}`;
        
        const button = document.getElementById(buttonId);
        const gallery = document.getElementById(galleryId);
        const arrow = document.getElementById(arrowId);
        const text = document.getElementById(textId);
        
        let isExpanded = false;
        
        button.addEventListener('click', () => {
            isExpanded = !isExpanded;
            gallery.style.maxHeight = isExpanded ? 'none' : '300px';
            arrow.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
            text.textContent = isExpanded ? 'Sembunyikan' : 'Lihat Selengkapnya';
        });
    });
});
</script>

@include('partials.footer')
