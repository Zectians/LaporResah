<?php
	require_once("classes/Database.php");
    require_once("classes/Login.php");
    session_start();
   
    session_destroy();
    session_start();
    session_regenerate_id();
    echo "<script>window.alert('Anda berhasil logout!');
                        window.location=(href='login.php')</script>";
?>