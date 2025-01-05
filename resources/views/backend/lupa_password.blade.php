<!-- resources/views/auth/lupa_password.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center">Forgot Password</h3>
                <p class="text-center">No Worries, we’ll handle it.</p>
                <form action="{{ route('lupa-password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Gmail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Gmail" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Continue</button>
                </form>
                <a href="{{ route('login') }}" class="d-block text-center mt-3">Back to Sign in</a>
            </div>
        </div>
    </div>
</body>
</html>
