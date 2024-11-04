<!-- Untuk informasi pendaftaran siswa baru. -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
        <h1>Informasi Pendaftaran Siswa Baru</h1>
    </header>
    <section>
        <h2>Persyaratan</h2>
        <p>{{ $admission->requirements }}</p>
        <h2>Jadwal</h2>
        <p>{{ $admission->schedule }}</p>
        <h2>Biaya</h2>
        <p>{{ $admission->fees }}</p>
    </section>
</body>
</html>