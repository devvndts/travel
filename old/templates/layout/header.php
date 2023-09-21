<div class="header">
    <div class="header-top">
        <div class="wrap-content">
            <p class="info-header"><i class="fa-solid fa-phone"></i><?= ($optsetting['hotline']) ?></p>
            <ul class="social social-footer">
            <li>
                <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="<?= tintuc ?>"><?= tintuc ?></a>
                <?php // echo $func->formenu('news','tin-tuc');?>
            </li>
            <li class="menu-line"></li>
            <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
            <li class="menu-line"></li>
                    <?php for($i=0;$i<count($social);$i++) { ?>
                        <li><a href="<?=$social[$i]['link']?>" target="_blank"> <?= $func->getImage(['sizes' => '25x25x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $social[$i]['photo'], 'alt' => $social[$i]['name' . $lang]]) ?></a></li>
                    <?php } ?>
                    </ul>

        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap-content">
            <a class="logo-header shiner" href="">
                <?= $func->getImage(['sizes' => '250x50x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a> 
            <?php 
           include TEMPLATE . LAYOUT . "menu.php";
            ?>
        </div>
    </div>
</div>