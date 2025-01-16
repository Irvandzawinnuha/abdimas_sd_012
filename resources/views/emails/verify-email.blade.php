<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f6f9fc;
        }

        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background: linear-gradient(135deg, #0061f2 0%, #00ba94 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .email-body {
            padding: 40px 30px;
            color: #525f7f;
        }

        .welcome-text {
            font-size: 18px;
            margin-bottom: 25px;
            color: #32325d;
        }

        .verification-button {
            display: inline-block;
            background: linear-gradient(135deg, #0061f2 0%, #00ba94 100%);
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            margin: 25px 0;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 97, 242, 0.2);
        }

        .verification-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 97, 242, 0.3);
        }

        .info-text {
            font-size: 14px;
            color: #8898aa;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #e6ebf1;
        }

        .email-footer {
            background-color: #f8f9fe;
            padding: 20px 30px;
            text-align: center;
            color: #8898aa;
            font-size: 14px;
        }

        .logo {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        @media only screen and (max-width: 600px) {
            .email-container {
                margin: 20px;
                width: auto;
            }

            .email-header {
                padding: 20px;
            }

            .email-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://sdn012babakanciparay.sch.id/logo_sd.png" alt="Logo SDN 012 Babakan Ciparay" class="logo">
            <h1>Verifikasi Email Anda</h1>
        </div>

        <div class="email-body">
            <div class="welcome-text">
                Halo <strong>{{ $user->first_name }} {{ $user->last_name }}</strong>,
            </div>

            <p>Terima kasih telah mendaftar di {{ config('app.name') }}. Untuk menyelesaikan proses pendaftaran, silakan verifikasi alamat email Anda dengan mengklik tombol di bawah ini:</p>

            <div style="text-align: center;">
                <a href="{{ url('/backend/verify-email/' . $user->verification_token) }}" 
                   class="verification-button">
                    Verifikasi Email Saya
                </a>
            </div>

            <div class="info-text">
                <p>Jika Anda tidak merasa mendaftar di website kami, Anda dapat mengabaikan email ini.</p>
                <p>Jika Anda mengalami masalah dengan tombol di atas, copy dan paste URL berikut ke browser Anda:<br>
                <small>{{ url('/backend/verify-email/' . $user->verification_token) }}</small></p>
            </div>
        </div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Semua hak dilindungi.</p>
            <p>Email ini dikirim secara otomatis, mohon tidak membalas email ini.</p>
        </div>
    </div>
</body>
</html> 