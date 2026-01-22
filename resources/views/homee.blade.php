<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="login-page bg-body-secondary">

<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">

            <p class="login-box-msg">Login Sistem Sekolah</p>

            @if (session('failed'))
                <div class="alert alert-danger">
                    {{ session('failed') }}
                </div>
            @endif

            {{-- <form action="{{ route('login.post') }}" method="POST"> --}}
            <form action="{{ route('login.post') }}" method="POST">

                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<script src="{{ asset('adminlte/js/adminlte.js') }}"></script>
</body>
</html>
