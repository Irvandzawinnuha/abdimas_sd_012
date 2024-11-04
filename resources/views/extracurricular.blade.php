<!-- buat ektrakulikuler -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Ekstrakurikuler</title>
</head>
<body>
    <header>
        <h1>Kegiatan Ekstrakurikuler</h1>
    </header>
    <section>
        @foreach($extracurriculars as $activity)
            <h2>{{ $activity->name }}</h2>
            <p>{{ $activity->description }}</p>
        @endforeach
    </section>
</body>
</html>
