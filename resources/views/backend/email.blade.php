<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #005599;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lupa Kata Sandi?</h1>
        <p>Jangan khawatir! Anda dapat mengatur ulang kata sandi dengan mengklik tombol di bawah ini:</p>
        <a href="{{ $resetLink }}" class="btn">Atur Ulang Kata Sandi</a>
        <p>Jika Anda tidak meminta pengaturan ulang kata sandi, abaikan email ini.</p>
        <p>Salam,</p>
        <p><strong>Tim SD Negeri 012 Babakan Ciparay</strong></p>
    </div>
</body>
</html>
