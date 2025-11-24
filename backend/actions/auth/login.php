<?php
session_start();
include '../../app.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $qSelect = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $qSelect);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_object();

        if (password_verify($password, $row->password)) {
            $_SESSION['id_user']  = $row->id;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $row->username; // default jika username null

            echo "<script>
                    alert('berhasil login');
                    window.location.href='../../pages/dashboard/index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('password salah');
                    window.location.href='../../pages/auth/login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('email salah/belum terdaftar');
                window.location.href='../../pages/auth/login.php';
              </script>";
    }
} else {
    // Jika file diakses tanpa POST
    header('Location: ../../pages/auth/login.php');
    exit;
}
