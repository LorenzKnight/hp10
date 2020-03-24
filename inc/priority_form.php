<script>
    // function asegurar()
    // {
    //         rc = confirm("Är du säkert på den här ändring?");
    //         return rc;
    // }
</script>
<?php if($_GET["editp"]):?>
    <div class="subform_cont1">
        <form action="priority_1.php" method="post" name="formeditp" id="formeditp">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Target priority</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center">
                        <?php echo $row_DatosTargetEdit['name'];?>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center">
                        <input style="text-align:center;" class="text_input" type="text" max="1" value="<?php echo $row_DatosTargetEdit['target_percentage'];?>" placeholder="Procent" name="target_percentage" id="target_percentage" size="3" onkeypress="return solonumeros(event)" onpaste="return false"/> %
                    <!-- <input style="text-align:center;" type="range" list="tickmarks" value="<?php //echo $row_DatosTargetEdit['target_percentage'];?>" placeholder="Procent" name="target_percentage" id="target_percentage" size="3" onkeypress="return solonumeros(event)" onpaste="return false"/> %
                        <datalist id="tickmarks">
                            <option value="0" label="0%">
                            <option value="10">
                            <option value="20">
                            <option value="30">
                            <option value="40">
                            <option value="50" label="50%">
                            <option value="60">
                            <option value="70">
                            <option value="80">
                            <option value="90">
                            <option value="100" label="100%">
                        </datalist> -->
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="priority_1.php"><input class="button_a" style="padding: 10px 0px; text-align: center;" value="avbryt" /></a> <input style="padding: 10px 20px;" type="submit" class="button" value="Uppdatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_target" id="id_target" value="<?php echo $_GET['editp'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formeditp" />
            </table>
        </form>
    </div>
<?php endif ?>