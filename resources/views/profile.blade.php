<!-- untuk profile sekolah -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
</head>
<body>
    <header>
        <h1>Profil Sekolah</h1>
    </header>
    <section>
        <h2>Sejarah Sekolah</h2>
        <p>{{ $profile->history }}</p>
        <h2>Struktur Organisasi</h2>
        <p>{{ $profile->organization_structure }}</p>
        <h2>Fasilitas Sekolah</h2>
        <p>{{ $profile->facilities }}</p>
    </section>
</body>
</html>
