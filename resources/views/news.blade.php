<!-- buat views/news.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita dan Pengumuman</title>
</head>
<body>
    <header>
        <h1>Berita dan Pengumuman</h1>
    </header>
    <section>
        @foreach($news as $item)
            <h2>{{ $item->title }}</h2>
            <p>{{ $item->content }}</p>
        @endforeach
    </section>
</body>
</html>
