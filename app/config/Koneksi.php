<?php
class Koneksi{   
    protected $host = '';
    protected $user = '';
    protected $pass = '';
    protected $dabatabase = '';
     
    public function konek($dbconfig){
        $dbconfig = (object) $dbconfig;
        $host = $dbconfig->host;
        $user = $dbconfig->user;
        $pass = $dbconfig->password;
        $dabatabase = $dbconfig->database;
        $koneksi = mysqli_connect($host,$user,$pass,$dabatabase);
        if ($koneksi){
            echo 'Connected';
        }
    }     
}