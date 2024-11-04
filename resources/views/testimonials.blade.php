<!-- Untuk menampilkan testimoni dari orang tua, alumni, dan guru. -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
</head>
<body>
    <header>
        <h1>Testimoni</h1>
    </header>
    <section>
        @foreach($testimonials as $testimonial)
            <h2>{{ $testimonial->name }}</h2>
            <p>{{ $testimonial->message }}</p>
        @endforeach
    </section>
</body>
</html>