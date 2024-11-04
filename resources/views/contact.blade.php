<!-- Untuk informasi kontak dan lokasi sekolah. -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak dan Lokasi</title>
</head>
<body>
    <header>
        <h1>Kontak dan Lokasi</h1>
    </header>
    <section>
        <h2>Informasi Kontak</h2>
        <p>Telepon: {{ $contact->phone }}</p>
        <p>Email: {{ $contact->email }}</p>
        <h2>Lokasi</h2>
        <!-- Google Maps embed -->
    </section>
</body>
</html>