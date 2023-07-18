<?php
$koneksi = mysqli_connect("sql201.infinityfree.com", "if0_34614694", "lMQ73OHDoVsHwp", "if0_34614694_desabangowan");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
