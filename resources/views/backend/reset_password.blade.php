<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #2C2C2C;
    }
    .container {
        margin-top: 5%; /* Turunkan posisi ke tengah */
        max-width: 600px; /* Lebarkan container */
        padding: 40px; /* Tambahkan padding untuk memperbesar kotak */
        background: #fff;
        border-radius: 12px; /* Perbesar sudut melengkung */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Tambahkan shadow */
    }
    h3 {
        font-size: 28px; /* Perbesar ukuran judul */
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }
    .form-label {
        font-weight: 500;
        font-size: 16px; /* Sedikit perbesar label */
    }
    .btn-primary {
        background-color: #005599;
        border: none;
        font-weight: 600;
        padding: 12px; /* Perbesar tombol */
        font-size: 16px; /* Perbesar font tombol */
    }
    .btn-primary:hover {
        background-color: #004080;
    }
    .toggle-password {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        cursor: pointer;
    }
    .form-check-label {
        font-size: 14px;
    }
    .footer-link {
        text-align: center;
        font-size: 14px;
        margin-top: 20px;
    }
    .footer-link a {
        color: #005599;
        text-decoration: none;
    }
    .footer-link a:hover {
        text-decoration: underline;
    }
</style>


</head>
<body>
    <div class="container">
        <h3>Atur Ulang Kata Sandi Anda</h3>

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

        <form action="{{ route('backend.password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi Baru</label>
                <div class="position-relative">
                    <input type="password" name="password" id="password" class="form-control" 
                           placeholder="Masukkan kata sandi baru" required>
                    <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password')"></i>
                </div>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Ketik Ulang Kata Sandi</label>
                <div class="position-relative">
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           class="form-control" placeholder="Ketik ulang kata sandi baru" required>
                    <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password_confirmation')"></i>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
        </form>

        <div class="footer-link">
            <a href="{{ route('backend.login') }}">Kembali ke Halaman Login</a>
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
