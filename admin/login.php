<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include './assets/conn/koneksi.php';

// menangkap data yang dikirim dari form login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];



    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
    // menghitung jumlah data yang ditemukan

    // cek apakah username dan password di temukan pada database
    if (mysqli_num_rows($login) === 1) {
        $data = mysqli_fetch_assoc($login);

        //cek username dan password
        if (password_verify($password, $data["password"]) || $data['level'] == 'admin') {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:index.php");
            exit;
        } else {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "adminberita";
            header("location:index.php");
            exit;
        }
    } else {

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>LOGIN ADMIN | Wisata Desa Bangowan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/logodesa.ico">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username atau Password Salah !</div>";
        }
    }
    ?>

    <div class="panel_login">
        <p class="tulisan_atas">Silahkan Login</p>

        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" required="required">

            <label>Password</label>
            <input type="password" name="password" id="pass" class="form_login" placeholder="Password" required="required">
            <br>
            <input type="checkbox" onclick="myFunction()">Show Password
            <br>
            <br>
            <input type="submit" class="tombol_login" value="LOGIN" name="login" id="login">

            <br />
            <br />

        </form>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>