<?php


session_start(); 


$_SESSION['username'] = 'nama_pengguna';


echo "Hello, " . $_SESSION['username'];
?>
