<div class="container2">
    <div class="col_2" style="text-align: center;">
        <!-- <p style="color: #666;"><?php //echo $row_DatosConsulta['id_user'];?></p> -->
        <?php if ($row_DatosTarget > 0) { // Show if recordset not empty ?>
        <?php do { ?>
            <div class="target_trademark" style="margin: 5px auto;">
              <?php echo $row_DatosTarget['name']; ?>
            </div>
        <?php } while ($row_DatosTarget = mysqli_fetch_assoc($DatosTarget)); 
        }
        else
        { // Show if recordset is empty ?>
        <?php } ?>
        <?php if ($totalRows_DatosTarget < 3){?>
        <div class="formular_front" style="margin: 5px auto;">
            <form action="create_your_schedule1.php" method="post" name="formrequest" id="formrequest">
                <table width="70%" align="center" cellspacing="0" class="list">
                    <tr valign="baseline" height="40">
                        <td colspan="6" align="center" valign="middle"><h4>Entre your target here.</h4></td>      
                    </tr>
                    <tr valign="baseline" height="70">
                        <td colspan="6" valign="middle" align="center">
                          <input class="text_input" type="text" name="name" id="name" size="45" placeholder="Target name..." required/>
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
        <?php if ($totalRows_DatosTarget == 3){?>
          <a href="create_your_schedule2.php"><input style="padding: 20px 100px; margin-top: 150px; text-align: center;" type="" class="button" value="NEXT"/></a>
        <?php } ?>
    </div>
    <div class="col_2">
        <div class="lin_3" style="color: #666;">
        <h1>Target group</h1>
        <p>Your information is confidential, and we at HP10 protect your information according to GDPR</p>
        </div>
    </div>
</div>