<?php
$query_DatosConsulta = sprintf("SELECT * FROM users WHERE id_user=%s", GetSQLValueString($_SESSION['hp10_UserId'], "int"));
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
$query_DatosTrade = sprintf("SELECT * FROM trademark WHERE id_user=%s", GetSQLValueString($_SESSION['hp10_UserId'], "int"));
$DatosTrade = mysqli_query($con, $query_DatosTrade) or die(mysqli_error($con));
$row_DatosTrade = mysqli_fetch_assoc($DatosTrade);
$totalRows_DatosTrade = mysqli_num_rows($DatosTrade);
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
  $insertSQL = sprintf("INSERT INTO trademark(name, id_user) VALUES (%s, %s)",
                        GetSQLValueString($_POST["name"], "text"),
                        GetSQLValueString($_POST["id_user"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));


  $insertGoTo = "create_your_schedule2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<div class="container2">
    <div class="col_2">
        <div class="lin_3" style="color: #666;">
        <h1>Trademark</h1>
        <p>Your information is confidential, and we at HP10 protect your information according to GDPR</p>
        </div>
    </div>
    <div class="col_2" style="text-align: center;">
        <!-- <p style="color: #666;"><?php //echo $row_DatosConsulta['id_user'];?></p> -->
        <?php if ($row_DatosTrade > 0) { // Show if recordset not empty ?>
        <?php do { ?>
            <div class="target_trademark" style="margin: 5px auto;">
              <?php echo $row_DatosTrade['name']; ?>
            </div>
        <?php } while ($row_DatosTrade = mysqli_fetch_assoc($DatosTrade)); 
        }
        else
        { // Show if recordset is empty ?>
        <?php } ?>
        <?php if ($totalRows_DatosTrade < 3){?>
        <div class="formular_front" style="margin: 5px auto;">
            <form action="create_your_schedule2.php" method="post" name="formrequest" id="formrequest">
                <table width="70%" align="center" cellspacing="0" class="list">
                    <tr valign="baseline" height="40">
                        <td colspan="6" align="center" valign="middle"><h4>Entre your Trademark here.</h4></td>      
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="name" id="name" size="45" placeholder="Trademark name..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline">
                        <td style="padding-top:10px;" nowrap="nowrap" align="center"><input style="padding: 20px 125px;" type="submit" class="button" value="ADD" /></td>
                    </tr>
                </table>
                <input type="hidden" name="id_user" id="id_user" value="<?php echo $row_DatosConsulta['id_user'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </form>
        </div>
        <?php } ?>
        <?php if ($totalRows_DatosTrade == 3){?>
          <a href="create_your_schedule2.php"><input style="padding: 20px 100px; margin-top: 150px; text-align: center;" type="" class="button" value="NEXT"/></a>
        <?php } ?>
    </div>
</div>