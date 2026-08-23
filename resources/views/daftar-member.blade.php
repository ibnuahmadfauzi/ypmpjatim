<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Member</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #8D826C;
            --primary-dark: #786d5c;
            --bg: #f8f7f4;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f7f5f2, #ece8e1);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .register-card {
            width: 100%;
            max-width: 430px;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);
        }

        .register-header {
            background: var(--primary);
            color: #fff;
            padding: 30px;
            text-align: center;
        }

        .register-header i {
            font-size: 55px;
            margin-bottom: 10px;
        }

        .register-body {
            background: #fff;
            padding: 35px;
        }

        .form-control {
            height: 50px;
            border-radius: 12px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 .2rem rgba(141, 130, 108, .25);
        }

        .input-group-text {
            background: #fff;
            border-radius: 12px 0 0 12px;
        }

        .btn-register {
            background: var(--primary);
            color: #fff;
            border-radius: 12px;
            height: 50px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-register:hover {
            background: var(--primary-dark);
            color: #fff;
        }

        .brand {
            font-size: 26px;
            font-weight: 700;
        }

        .subtitle {
            opacity: .9;
            font-size: 14px;
        }

        .alert {
            border-radius: 10px;
        }

        @media(max-width:576px) {

            body {
                padding: 20px;
            }

            .register-header {
                padding: 25px;
            }

            .register-body {
                padding: 25px;
            }

        }
    </style>

</head>

<body>

    <div class="card register-card">

        <div class="register-header">

            <i class="bi bi-person-plus-fill"></i>

            <div class="brand">
                Daftar Member
            </div>

            <div class="subtitle">
                Silakan buat akun anggota Anda
            </div>

        </div>

        <div class="register-body">

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/register" method="POST">

                @csrf

                <!-- Email -->
                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input type="email" class="form-control" name="email" placeholder="Masukkan email"
                            value="{{ old('email') }}" required>

                    </div>

                </div>

                <!-- Username -->
                <div class="mb-3">

                    <label class="form-label">
                        Username
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input type="text" class="form-control" name="username" placeholder="Masukkan username"
                            value="{{ old('username') }}" required>

                    </div>

                </div>

                <!-- Password -->
                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input type="password" class="form-control" name="password" placeholder="Masukkan password"
                            required>

                    </div>

                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-4">

                    <label class="form-label">
                        Konfirmasi Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </span>

                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Ulangi password" required>

                    </div>

                </div>

                <!-- Button -->
                <div class="d-grid">

                    <button type="submit" class="btn btn-register">

                        <i class="bi bi-person-plus me-2"></i>

                        Daftar Member

                    </button>

                </div>

                <!-- Login -->
                <div class="mt-3 text-center">

                    <span class="text-muted">
                        Sudah memiliki akun?
                    </span>

                    <a href="/login" class="fw-semibold">
                        Login

                    </a>

                </div>

            </form>

        </div>

    </div>

</body>

</html>
