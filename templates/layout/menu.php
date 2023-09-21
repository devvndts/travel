<div class="menu">
    <div class="wrap-content">
        <ul class="menu-main">
            <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
            <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
            <li>
                <a class="has-child <?php if ($com == 'du-lich-nuoc-ngoai') echo 'active'; ?> transition" href="du-lich-nuoc-ngoai" title="Du Lịch Nước Ngoài">Du Lịch Nước Ngoài</a>
                <?php echo $func->formenu('product','tour-outside');?>
            </li>
            <li>
                <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Cẩm Nang Du Lịch">Cẩm Nang Du Lịch</a>
                <?php // echo $func->formenu('news','tin-tuc');?>
            </li>
            <li>
                <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Du Lịch Trong Nước">Du Lịch Trong Nước</a>
                <?php // echo $func->formenu('news','tin-tuc');?>
            </li>
            <li><a class="<?php if ($com == 'tuyen-dung') echo 'active'; ?> transition" href="tuyen-dung" title="Lịch Khởi Hành">Lịch Khởi Hành</a></li>
            
        </ul>
    </div>
</div>