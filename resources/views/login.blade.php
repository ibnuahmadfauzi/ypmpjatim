<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

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

        .login-card {
            width: 100%;
            max-width: 430px;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);
        }

        .login-header {
            background: var(--primary);
            color: #fff;
            padding: 35px;
            text-align: center;
        }

        .login-header i {
            font-size: 60px;
            margin-bottom: 15px;
        }

        .login-body {
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

        .btn-login {
            background: var(--primary);
            color: #fff;
            border-radius: 12px;
            height: 50px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-login:hover {
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

            .login-header {
                padding: 25px;
            }

            .login-body {
                padding: 25px;
            }

        }
    </style>

</head>

<body>

    <div class="card login-card">

        <div class="login-header">

            <i class="bi bi-person-circle"></i>

            <div class="brand">
                Login Admin
            </div>

            <div class="subtitle">
                Silakan masuk ke akun Anda
            </div>

        </div>

        <div class="login-body">

            @if (session('error'))
                <div class="alert alert-danger">

                    {{ session('error') }}

                </div>
            @endif

            <form action="/login" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>

                    </div>

                </div>

                <div class="mb-4">

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

                <div class="d-grid">

                    <button class="btn btn-login">

                        <i class="bi bi-box-arrow-in-right me-2"></i>

                        Masuk

                    </button>

                    <div class="mt-3 text-center">
                        <a href="#" class="fw-semibold">daftar sebagai anggota</a>
                    </div>

                </div>

            </form>

        </div>

    </div>

</body>

</html>
