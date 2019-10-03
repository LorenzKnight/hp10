<div class="head_in">
    <div class="logo">
        <div class="hp10">
            HP<br>
            10
        </div>
    </div>
    <div id="menu">
        <ul>
            <!-- <li><a href="contact.php"<?php if ($menuactive == 4) { ?> class="active" <?php }?>>kontakt</a></li>
            <li><a href="schemma.php"<?php if ($menuactive == 3) { ?> class="active" <?php }?>>schemma</a></li>
            <li><a href="price_registration.php"<?php if ($menuactive == 2) { ?> class="active" <?php }?>>priser & anmälan</a></li> 
            <li><a href="index.php"<?php if ($menuactive == 1) { ?> class="active" <?php }?>><div style="border:1px solid #FFF; padding: 5px 10px; border-radius: 15px;">Log in</div></a></li>-->
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