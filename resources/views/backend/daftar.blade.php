<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            margin: auto;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            color: #2C2C2C;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #6c757d;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 500;
            color: #2C2C2C;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px;
            border: 1px solid #dce7f1;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #005599;
            box-shadow: 0 0 0 0.2rem rgba(0, 85, 153, 0.25);
        }

        .name-inputs {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .name-inputs {
                flex-direction: column;
                gap: 10px;
            }
        }

        .password-field {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #005599;
            border: none;
            padding: 12px;
            font-weight: 600;
            font-size: 16px;
            width: 100%;
            border-radius: 8px;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #004080;
            transform: translateY(-1px);
        }

        .footer-text {
            text-align: center;
            margin-top: 25px;
            color: #6c757d;
            font-size: 15px;
        }

        .footer-text a {
            color: #005599;
            text-decoration: none;
            font-weight: 500;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
        }

        .alert-danger {
            background-color: #fff2f2;
            border-color: #ffcfcf;
            color: #dc3545;
        }

        .alert-success {
            background-color: #f0fff4;
            border-color: #c3fad3;
            color: #198754;
        }

        .gender-select {
            width: 100%;
            padding: 12px;
            border: 1px solid #dce7f1;
            border-radius: 8px;
            font-size: 15px;
            color: #2C2C2C;
            background-color: white;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 30px 20px;
                margin: 15px;
            }

            .form-header h2 {
                font-size: 24px;
            }

            .form-header p {
                font-size: 14px;
            }

            .btn-primary {
                padding: 10px;
                font-size: 15px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .form-container {
                padding: 20px 15px;
            }

            .form-control, .gender-select {
                font-size: 14px;
                padding: 10px;
            }

            .footer-text {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h2>Buat Akun Baru</h2>
            <p>Silakan lengkapi data diri Anda</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('backend.daftar.store') }}" method="POST">
            @csrf
            <div class="name-inputs">
                <div class="form-group flex-grow-1">
                    <label class="form-label" for="first_name">Nama Depan</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" 
                           value="{{ old('first_name') }}" required placeholder="Masukkan nama depan">
                </div>
                <div class="form-group flex-grow-1">
                    <label class="form-label" for="last_name">Nama Belakang</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" 
                           value="{{ old('last_name') }}" required placeholder="Masukkan nama belakang">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="{{ old('email') }}" required placeholder="contoh@email.com">
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Kata Sandi</label>
                <div class="password-field">
                    <input type="password" class="form-control" id="password" name="password" 
                           required placeholder="Minimal 8 karakter">
                    <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password')"></i>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="gender">Jenis Kelamin</label>
                <select class="gender-select" id="gender" name="gender" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" {{ old('gender') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>

        <div class="footer-text">
            Sudah memiliki akun? <a href="{{ route('backend.login') }}">Masuk</a>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling;
            
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }
    </script>
</body>

</html>
