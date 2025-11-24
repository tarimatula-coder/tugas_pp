<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <link rel="shortcut icon" type="image/png" href="../../spike-bootstrap-1.0.0/spike-bootstrap-1.0.0/src/assets/images/logos/user6.png" />
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
        }

        .register-box {
            max-width: 450px;
            margin: auto;
            margin-top: 5%;
            padding: 30px;
            background-color: blanchedalmond;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .register-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="register-box text-center">
            <!-- Gambar di atas tulisan Register -->
            <img src="../../spike-bootstrap-1.0.0/spike-bootstrap-1.0.0/src/assets/images/logos/user6.png" alt="Register Icon" class="register-img rounded-circle">
            <h2 class="mb-4">Register</h2>
            <form action="../../actions/auth/register.php" method="post">
                <div class="mb-3 text-start">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Daftar</button>
            </form>
            <p class="mt-3">Sudah punya akun? <a href="./login.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>