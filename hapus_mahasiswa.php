<?php
session_start();

if (!isset($_SESSION['login'])) {
        if ($_SESSION['login'] != true) {
            header("Location: login.php");
            exit;
        }
    }

$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$nim = $_GET['nim'];
$delete = $mysqli->query("DELETE FROM `students` WHERE nim = '$nim'");

if ($delete) {
	$_SESSION['success'] = true;
    $_SESSION['message'] = 'Data Berhasil Dihapus!';
	header("Location: mahasiswa.php");
	exit();
}
?>
