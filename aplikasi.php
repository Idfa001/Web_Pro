<?php
function connect_to_db()
{
    $koneksi = mysqli_connect("localhost","root","","test");

    if($koneksi == false)
    {
        echo mysqli_error($koneksi);
        die;
    }
    return $koneksi;
}
?>