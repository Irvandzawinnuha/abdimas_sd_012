<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create your account with an interactive form.">
    <meta name="keywords" content="register, create account, responsive form, show hide password">
    <meta name="author" content="developer">
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- App css -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            padding: 84px;
        }

        .container {
            max-width: 500px; /* Lebar diperbesar */
            min-height: 700px; /* Tinggi minimal */
            margin: 50px auto;
            background: #ffffff;
            padding: 40px; /* Padding dalam ditambah */
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 10px 40px 10px 10px; /* Tambahkan ruang untuk ikon mata */
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }


        .form-input {
            position: relative;
            width: 100%;
        }

        .show-hide {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #888;
        }
        
    button.btn-primary {
        width: 100%; /* Tombol seragam dengan input */
        padding: 10px;
        background-color: #005599;
        border: none;
        border-radius: 5px;
        color: #ffffff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 15px;
    }

    button.btn-primary:hover {
        background-color: #005599;
    }

    .text-center {
        text-align: center;
    }

    .text-muted {
        color: #6c757d;
    }

    .link {
        color: #005599;
        text-decoration: none;
    }

    .link:hover {
        text-decoration: underline;
    }

    .checkbox-container {
        display: flex;
        align-items: center; /* Menyelaraskan vertikal */
        gap: 10px; /* Jarak antara checkbox dan teks */
        margin-top: 10px; /* Jarak dengan elemen sebelumnya */
    }

    .checkbox-container .form-check-input {
        width: 18px;
        height: 18px;
          cursor: pointer; /* Menambahkan efek kursor */
    }

    .checkbox-container .form-check-label {
        font-size: 14px;
        color: #000; /* Warna teks */
    }

    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Buat akun Anda</h2>
        <p class="text-center text-muted">Masukkan detail pribadi Anda untuk membuat akun</p>
        <form method="POST" action="{{ route('backend.daftar.store') }}">
            @csrf
            <div class="form-group">
                <label>Nama Anda</label>
                <div style="display: flex; gap: 10px;">
                    <input class="form-control" type="text" name="first_name" required="" placeholder="Nama depan">
                    <input class="form-control" type="text" name="last_name" required="" placeholder="Nama akhir">
                </div>
            </div>
            <div class="form-group">
                <label>Alamat email</label>
                <input class="form-control" type="email" name="email" required="" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label>Kata sandi</label>
                <div class="form-input">
                    <input class="form-control" type="password" name="password" id="password" required="" placeholder="*********">
                    <div class="show-hide" onclick="togglePassword()">
                        <i class="fa fa-eye" id="toggleIcon"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="gender" required="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group checkbox-container">
                <input type="checkbox" id="agree" name="agree" required="">
                <label for="agree">Setuju dengan <a href="{{ route('privacy-policy') }}" class="link">Kebijakan Privasi</a></label>
            </div>

            <button class="btn btn-primary" type="submit">Buat Akun</button>
        </form>
            <p class="text-center mt-3">Sudah memiliki akun? <a href="{{ route('backend.login') }}" class="link">Masuk</a></p>
    </div>

    <!-- JavaScript -->
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
