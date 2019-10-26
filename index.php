<?php
$root = __DIR__;
include "$root/app/config/configdb.php" ; 
include "$root/app/config/Koneksi.php" ; 

$konek_obj = new Koneksi();
$koneksi = $konek_obj->konek($dbphp_learn);
