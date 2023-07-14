<?php

function tambahuser($data){
    global $koneksi;

    $nama = $data['nama'];
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($koneksi,$data["password"]);
    $level = $data['level'];

    //cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM tb_user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah terdaftar');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

   //tambahkan user baru  ke database
   mysqli_query($koneksi, "INSERT INTO tb_user VALUES('$nama','$username','$password','$level')");

    return mysqli_affected_rows($koneksi);
}

?>