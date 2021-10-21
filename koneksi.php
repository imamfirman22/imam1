<?php
    $serverName = "sql108.epizy.com";
    $userName = "epiz_30128191";
    $passwrod = "ZaboOGyvizBlm";
    $dbName = "epiz_30128191_utsimam";

    //Buat Koneksi
    $koneksi = mysqli_connect($serverName, $userName, $passwrod, $dbName);

    //cek koneksi
    if (!$koneksi) {
        die ("Koneksi Gagal".mysqli_connect_error());
    }

?>   