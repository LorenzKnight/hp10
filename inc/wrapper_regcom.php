<?php
$query_DatosConsulta = sprintf("SELECT * FROM users WHERE id_user=%s", GetSQLValueString($_SESSION['hp10_UserId'], "int"));
$DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formsignup")) {
  $updateSQL = sprintf("UPDATE users SET name=%s, surname=%s, company_name=%s, web_site=%s, phone=%s WHERE id_user=%s",
                       GetSQLValueString($_POST["name"], "text"),
                       GetSQLValueString($_POST["surname"], "text"),
                       GetSQLValueString($_POST["company_name"], "text"),
                       GetSQLValueString($_POST["web_site"], "text"),
                       GetSQLValueString($_POST["phone"], "text"),
					             GetSQLValueString($_POST["id_user"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "create_your_schedule1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<div class="container2">
    <div class="col_2">
        <div class="lin_3" style="color: #666;">
        <h1>Hey Productions</h1>
        <p>Your information is confidential, and we at HP10 protect your information according to GDPR</p>
        <a href="to_complete_signup.php?gdpr=1">more about GDPR</a>
        </div>
    </div>
    <div class="col_2" style="text-align: center;">
        <!-- <p style="color: #666;"><?php //echo $row_DatosConsulta['id_user'];?></p> -->
        <div class="formular_front" style="margin: 5px auto;">
            <form action="to_complete_signup.php" method="post" name="formsignup" id="formsignup">
                <table width="70%" align="center" cellspacing="0" class="list">
                    <tr valign="baseline" height="40">
                        <td colspan="6" align="center" valign="middle"><h4>Complete your information here.</h4></td>      
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="name" id="name" size="45" placeholder="Enter your Name..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="surname" id="surname" size="45" placeholder="Enter your Surname..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="company_name" id="company_name" size="45" placeholder="Name of your Company..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="web_site" id="web_site" size="45" placeholder="Your Web site..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="phone" id="phone" size="45" placeholder="Your phone number..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline">
                        <td style="padding-top:10px;" nowrap="nowrap" align="center"><input style="padding: 20px 125px;" type="submit" class="button" value="NEXT" /></td>
                    </tr>
                </table>
                <input type="hidden" name="id_user" id="id_user" value="<?php echo $row_DatosConsulta['id_user'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formsignup" />
            </form>
        </div>
    </div>
    
</div>