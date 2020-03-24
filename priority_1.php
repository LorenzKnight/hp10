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
$query_DatosTargetEdit = sprintf("SELECT * FROM target_group WHERE id_target=%s", GetSQLValueString($_GET['editp'], "int"));
$DatosTargetEdit = mysqli_query($con, $query_DatosTargetEdit) or die(mysqli_error($con));
$row_DatosTargetEdit = mysqli_fetch_assoc($DatosTargetEdit);
$totalRows_DatosTargetEdit = mysqli_num_rows($DatosTargetEdit);
?>
<?php
// $res = sumatarget($row_DatosTargetP['id_target']) + (sumatarget($row_DatosTargetP['id_target'])+ 1) + (sumatarget($row_DatosTargetP['id_target'])+ 2);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditp")) {
     //if (comprobaridunico($_POST["given_id"]))
    //{
  $updateSQL = sprintf("UPDATE target_group SET target_percentage=%s WHERE id_target=%s",
                       GetSQLValueString($_POST["target_percentage"], "int"),
					   GetSQLValueString($_POST["id_target"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "priority_1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
     //}
     //else
     //{
     // EL ID NO ES UNICO
     //$insertGoTo ="error.php";
     //header(sprintf("Location: %s", $insertGoTo));
     //}
}
?>
<script>

    function solonumeros(e){

        key=e.KeyCode || e.which;

        teclado=String.fromCharCode(key);

        numeros="0123456789";

        especiales="8-37-38-46";//array

        teclado_especial=false;

        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }

        if(numeros.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }

    }

</script>
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
<?php include("inc/wrapper_priority_1.php"); ?>
<?php include("inc/foot_front.php"); ?>
</body>
</html>