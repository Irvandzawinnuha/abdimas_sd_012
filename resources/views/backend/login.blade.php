<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Include necessary styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* Custom styles */
        .show-hide {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .show-hide i {
            font-size: 18px;
            color: #000000;
        }
        .show-hide i:hover {
            color: #005599;
        }
        .create-account {
            color: #005599; /* Warna teks */
            text-decoration: none; /* Menghapus garis bawah */
        }
        .create-account:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-main">
                <form class="theme-form" method="POST" action="{{ route('backend.login.post') }}">
                    @csrf <!-- Laravel CSRF token -->
                    <h2 class="text-center">Sign in to account</h2>  <br>
                    <p class="text-center">Masukkan Alamat Email Anda &amp; kata sandi untuk masuk</p>

                    <!-- Display error messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="col-form-label">Alamat Email</label>
                        <input class="form-control" type="email" name="email" required placeholder="Test@gmail.com" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Katasandi</label>
                        <div class="form-input position-relative">
                            <input class="form-control" type="password" id="password" name="password" required placeholder="*********">
                            <span class="show-hide" onclick="togglePassword()">
                                <i id="password-icon" class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group mb-0 checkbox-checked">
                        <div class="form-check checkbox-solid-info">
                            <input class="form-check-input" id="solid6" type="checkbox" name="remember">
                            <label class="form-check-label" for="solid6">Ingat kata sandi</label>
                        </div>
                                <a class="link" href="{{ route('password.request') }}">Lupa kata sandi?</a>
                        <div class="text-end mt-3">
                            <button class="btn btn-primary btn-block w-100" type="submit">Masuk</button>
                        </div>
                    </div>
                    
                    <p class="mt-4 mb-0 text-center">
                        Don't have an account?
                        <a class="create-account" href="{{ route('backend.daftar') }}">Buat Akun</a>
                    </p>

                </form>
            </div>
        </div>
    </div>

    <!-- FontAwesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        // Function to toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
