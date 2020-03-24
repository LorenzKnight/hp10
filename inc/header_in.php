<div class="head_in">
    <div class="logo">
        <div class="hp10">
            HP<br>
            10
        </div>
    </div>
    <div id="menu">
        <ul>
            <!-- <li><a href="contact.php"<?php if ($menuactive == 4) { ?> class="active" <?php }?>>kontakt</a></li>-->
            <li><a href="inc/logout.php"<?php if ($menuactive == 3) { ?> class="active" <?php }?>>Log out</a></li>
            <li><a href="my_dash.php">
            <?php
            if ((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
            {
                echo ObtenerNombreUsuario($_SESSION['hp10_UserId']);
                echo " ". ObtenerApellidoUsuario($_SESSION['hp10_UserId']);
            }
            else
            { ?>
                No User...
            <?php } ?>
            </a></li>
            <!--<li><a href="#"<?php if ($menuactive == 1) { ?> class="active" <?php }?>><div style="border:1px solid #FFF; padding: 5px 10px; border-radius: 15px;"><?php echo $_SESSION['hp10_UserId']; ?></div></a></li>-->
        <ul>
    </div>
    <?php if($_GET["gdpr"]):?>
      <div class="popup_cont">
        <div class="popup_windows">
            <table width="100%" align="center" cellspacing="0" style="border-radius: 7px;">
                <tr valign="baseline" height="465">
                    <td style="padding-top:10px; " nowrap="nowrap" align="center">
                    </td>
                <tr>
                <tr valign="baseline">
                    <td style="padding-top:10px;" nowrap="nowrap" align="center">
                        <a href="to_complete_signup.php"><input class="button_a" style="padding: 20px 50px; text-align: center;" value="CLOSE" /></a>
                    </td>
                <tr>
            </table>
        </div>
      </div>
    <?php endif ?>
</div>