<?php
    $_SESSION['MM_Username']="";
    $_SESSION['MM_UserGroup']="";
    $_SESSION['std_UserId']="";
    $_SESSION['hp10_Mail']="";
    $_SESSION['hp10_Nivel']="";

    unset($_SESSION['MM_Username']);
    unset($_SESSION['MM_UserGroup']);
    unset($_SESSION['hp10_UserId']);
    unset($_SESSION['hp10_Mail']);
    unset($_SESSION['hp10_Nivel']);
    session_start();
    session_destroy();

    header("Location: ../login.php");
    exit;
?>