<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$password=md5($_POST["password"]);

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formsignin")) {
    if (comprobaremailunico($_POST["email"]))
    {
  $insertSQL = sprintf("INSERT INTO users(email, password, status) VALUES (%s, %s, %s)",
                            GetSQLValueString($_POST["email"], "text"),
                            GetSQLValueString($password, "text"),
                            GetSQLValueString($_POST["status"], "int"));

  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

  $insertGoTo ="reg_access.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
    }
    else
    {
       // EL EMAIL NO ES UNICO
       $insertGoTo ="error.php?error=1";
       header(sprintf("Location: %s", $insertGoTo));
    }
}
?>
<div class="container">
    <div class="col_2">
        <div class="lin_3">
        <h1>Hey Productions</h1>
        <h4>A strategic content calendar</h4>
        </div>
    </div>
    <div class="col_2">
        <div class="formular_front">
            <form action="index.php" method="post" name="formsignin" id="formsignin">
                <table width="70%" align="center" cellspacing="0" class="list">
                    <tr valign="baseline" height="40">
                        <td style="" colspan="6" align="center" valign="middle"><h4>Register and get advice from HP10.</h4></td>      
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                        <input class="text_input" type="email" name="email" id="email" size="45" placeholder="Enter your E-Mail..." title="Enter a valid email" required/>
                        </td>
                    </tr>
                    <tr valign="baseline" height="70">
                        <td style="" colspan="6" valign="middle" align="center">
                        <input class="text_input" type="password" name="password" id="password" size="45" placeholder="Enter your Password..." required/>
                        </td>
                    </tr>
                    <tr valign="baseline">
                        <td style="padding-top:10px;" nowrap="nowrap" align="center"><input style="padding: 20px 125px;" type="submit" class="button" value="SIGN UP" /></td>
                    </tr>
                </table>
                <input type="hidden" name="status" id="status" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formsignin" />
            </form>
        </div>
    </div>
</div>