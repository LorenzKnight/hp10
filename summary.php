<?php require_once('connections/conexion.php');?>
<?php
$query_DatosConsulta = sprintf("SELECT * FROM users WHERE id_user=%s", GetSQLValueString($_SESSION['hp10_UserId'], "int"));
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
$query_DatosTarget = sprintf("SELECT * FROM target_group WHERE id_user=%s", GetSQLValueString($_SESSION['hp10_UserId'], "int"));
$DatosTarget = mysqli_query($con, $query_DatosTarget) or die(mysqli_error($con));
$row_DatosTarget = mysqli_fetch_assoc($DatosTarget);
$totalRows_DatosTarget = mysqli_num_rows($DatosTarget);
?>
<?php

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO target_group(name, id_user) VALUES (%s, %s)",
                        GetSQLValueString($_POST["name"], "text"),
                        GetSQLValueString($_POST["id_user"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));


  $insertGoTo = "create_your_schedule1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>HP10</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<script>
</script>
</head>
<body>
<?php include("inc/header_in.php"); ?>
<?php include("inc/wrapper_summary.php"); ?>
<?php include("inc/foot_front.php"); ?>
</body>
</html>