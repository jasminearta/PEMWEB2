<?php
require_once '../dbkoneksi.php';


// menangkap data iddel dari URL

$id = $_GET['iddel'];
$dbh->query("DELETE FROM kartu where id=$id");

header('location:index.php');