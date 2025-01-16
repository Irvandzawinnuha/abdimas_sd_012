<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #2C2C2C;
            height: 100vh; /* Mengisi tinggi layar sepenuhnya */
            display: flex; /* Menggunakan flexbox untuk tengah vertikal */
            justify-content: center; /* Tengah horizontal */
            align-items: center; /* Tengah vertikal */
            margin: 0; /* Hilangkan margin default */
        }

        .form-container {
            max-width: 600px; /* Lebar maksimum diperbesar */
            min-height: 400px; /* Tambahkan tinggi minimum */
            background: #ffffff;
            padding: 40px; /* Padding diperbesar */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            font-size: 26px; /* Ukuran font diperbesar */
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px; /* Ukuran font diperbesar */
            color: #6c757d;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #005599;
            border: none;
            font-weight: 600;
            padding: 12px 0; /* Tinggi tombol ditingkatkan */
            font-size: 16px; /* Ukuran font tombol diperbesar */
        }

        .btn-primary:hover {
            background-color: #004080;
        }

        .back-to-sign-in {
            text-align: center;
            margin-top: 25px;
            font-size: 16px;
        }

        .back-to-sign-in a {
            color: #005599;
            text-decoration: none;
        }

        .back-to-sign-in a:hover {
            text-decoration: underline;
        }

        .form-control::placeholder {
            font-style: italic;
            color: #b0b0b0;
        }

        /* Responsiveness */
        @media (max-width: 576px) {
            .form-container {
                max-width: 277%; /* Mengisi hampir seluruh layar HP */
                padding: 27px;
                min-height: 571px; /* Tinggi minimum untuk perangkat kecil */
            }
        }

        @media (min-width: 992px) {
            .form-container {
                max-width: 700px; /* Tampilan lebih besar untuk layar besar */
                min-height: 450px; /* Tinggi diperbesar untuk layar besar */
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Lupa Kata Sandi</h3>
        <p>Jangan khawatir, kami akan menanganinya.</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('backend.lupa_password.send') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Alamat Email" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Continue</button>
        </form>
        <div class="back-to-sign-in">
            <a href="{{ route('backend.login') }}">Kembali ke Masuk</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.js"></script>
</body>
</html>
