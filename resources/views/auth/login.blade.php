<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://ik.imagekit.io/akmaladidotid/uas%20pemrograman%20web/public/images/bg-library.jpg?updatedAt=1740070776223');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .login-box {
            background-color: rgba(0, 0, 0, 0.7); /* Warna hitam transparan */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 300px; /* Atur lebar box */
        }
        footer {
            position: absolute;
            bottom: 20px;
            text-align: center;
            width: 100%;
            color: white;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h3 class="text-center">Login</h4>

        <div>
            <ul>
                <li>email: admin@perpus.com</li>
                <li>password: admin123</li>
            </ul>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
