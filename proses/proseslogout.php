<?php

session_start(); // Start session nya
session_unset();
session_destroy(); // Hapus semua session
header("location: ../login.php"); // Redirect ke halaman index.php
?>
