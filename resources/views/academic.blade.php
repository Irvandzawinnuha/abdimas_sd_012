<!-- buat akademik-->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Akademik</title>
</head>
<body>
    <header>
        <h1>Informasi Akademik</h1>
    </header>
    <section>
        <h2>Kurikulum</h2>
        <p>{{ $academic->curriculum }}</p>
        <h2>Program Pembelajaran</h2>
        <p>{{ $academic->learning_program }}</p>
        <h2>Kalender Akademik</h2>
        <p>{{ $academic->academic_calendar }}</p>
    </section>
</body>
</html>
