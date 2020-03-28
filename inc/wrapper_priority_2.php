<?php include("inc/priority_form2.php");?>
<div class="container2">
    <div class="col_2">
        <div class="lin_3" style="color: #666;">
        <h1>Priority</h1>
        <p>Share priority between trademark<!--your products or services--></p>
        </div>
    </div>
    <div class="col_2" style="text-align: center;">
        <div class="formular_front" style="margin: 5px auto;">
            <form action="" method="post" name="" id="">
                <table width="80%" align="center" cellspacing="0" class="list">
                    <tr valign="baseline" height="40">
                        <td colspan="3" align="center" valign="middle"><h4>Complete your information here.</h4></td>      
                    </tr>
                    <?php if ($row_DatosTrademark > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                    <tr valign="baseline" height="70">
                        <td width="40%" valign="middle" align="right" style="padding:0 20px 0 0;">
                            <?php echo $row_DatosTrademark['name'];?>
                        </td>
                        <td width="30%" valign="middle" align="center">
                            <?php echo $row_DatosTrademark['trademark_percentage'];?> %
                        </td>
                        <td width="30%" valign="middle" align="center"><a href="priority_2.php?editp=<?php echo $row_DatosTrademark['id_trademark']; ?>">ADD %</a></td>
                    </tr>
                    <?php $ProTotal = $ProTotal + $row_DatosTrademark['trademark_percentage'];?>
                    <?php } while ($row_DatosTrademark = mysqli_fetch_assoc($DatosTrademark)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                    <tr valign="baseline" height="40">
                        <td colspan="3" align="center" valign="middle" style="border-top:1px solid #CCC;">
                            <?php echo $ProTotal; ?>% of 100%
                        </td>      
                    </tr>
                    <tr valign="baseline">
                        <td style="padding-top:10px;" colspan="3" align="center" valign="middle" nowrap="nowrap">
                            <?php if ( $ProTotal == 100) { ?>
                                <a href="summary.php"><input style="padding: 20px 80px; text-align:center;" type="" class="button" value="NEXT" /></a>
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>