<div class="head">
    <div class="logo">
        <div class="hp10">
            HP<br>
            10
        </div>
    </div>
    <div id="menu">
        <ul>
            <?php if ($menushow != 1) { ?>
            <li><a href="login.php"<?php if ($menuactive == 1) { ?> class="active" <?php }?>><div style="border:1px solid #FFF; padding: 5px 10px; border-radius: 15px;">Log in</div></a></li>
            <?php } ?>
        <ul>
    </div>
</div>