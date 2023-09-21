<div class="wrap__intro">
    <div class="wrap-content ">
        <div class="wrap__intro__container">
            <div class="wrap__intro__left">
                <div class="wrap__intro__left-slider owl-page owl-carousel owl-theme wow animate__backInLeft" data-wow-delay="800ms" data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:2|margin:10,screen:1199|items:2|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="1">
                    <?php
                        foreach ($photoIntro as $v) {?>
                    <div class="wrap__intro__left-slider--item">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '310x480x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="wrap__intro__right">
                <div class="wrap__intro__right-info">
                    <span class="wrap__intro__right-info--title wow animate__backInRight" data-wow-delay="600ms">giới thiệu</span>
                    <h3 class="wrap__intro__right-info-titleMain wow animate__backInRight" data-wow-delay="600ms">
                        <?=$getIntro['name'.$lang]?>
                    </h3>
                    <p class="wrap__intro__right-info--desc wow animate__backInRight" data-wow-delay="800ms">
                        <?=$getIntro['desc'.$lang]?>
                    </p>
                </div>
                <div class="wrap__intro__right-criteria owl-page owl-carousel owl-theme wow animate__backInRight" data-wow-delay="700ms" data-items="screen:0|items:3|margin:10,screen:425|items:3|margin:10,screen:575|items:3|margin:10,screen:767|items:3|margin:10,screen:991|items:3|margin:10,screen:1199|items:3|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="1">
                    <?php 
                        foreach ($photoCriteria as $v) {?>
                    <div class="wrap__introRight__criteria-item">
                        <div class="wrap__introRight__criteria-item--img">
                            <?= $func->getImage(['class' => 'lazy ', 'sizes' => '50x50x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <span class="wrap__introRight__criteria-item--title">
                            <?=$v['name'.$lang]?>
                        </span>
                    </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tour__hot">
    <div class="tour__hot__container owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:1|margin:0,screen:575|items:1|margin:0,screen:767|items:1|margin:0,screen:991|items:1|margin:0,screen:1199|items:1|margin:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="1" data-mousedrag="1" data-touchdrag="1" data-smartspeed="50000"
        data-autoplayspeed="3000" data-dots="0" data-nav="0" data-animations="animate__slideInUp">
        <?php 
        foreach ($tourHot as $v) {?>
        <div class="tour__hotItem" owl-item-animation>
            <div class="tour__hotItem__image">
                <img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/1920x784x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" alt="">
            </div>
            <div class="wrap-content">
                <div class="tour__hotItem__left">
                    <span class="tour__hotItem__left-titleSub wow animate__fadeInLeft" data-wow-delay="600ms">TOUR HOT</span>
                    <h3 class="tour__hotItem__left-titleMain wow animate__fadeInLeft" data-wow-delay="600ms"><?=$v['name'.$lang]?></h3>
                </div>
                <div class="tour__hotItem__right">
                    <p class="tour__hotItem__right-desc wow animate__fadeInRight" data-wow-delay="700">
                        <?=$v['desc'.$lang]?>
                    </p>
                    <a href="<?=$v[$sluglang]?>" class="tour__hotItem__right-btn wow animate__fadeInRight" data-wow-delay="700">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <?php }
        ?>
    </div>
</div>

<div class="tour__favorite">
    <div class="tour__favorite__container owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:0,screen:425|items:3|margin:0,screen:575|items:3|margin:0,screen:767|items:2|margin:0,screen:991|items:3|margin:0,screen:1199|items:3|margin:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
        data-autoplayspeed="3500" data-dots="0" data-nav="1" data-animations="animate__rotateInDownLeft">
        <?php 
            foreach ($tourFavorite as $v) {?>
        <div class="tour__favorite__item" owl-item-animation>
            <div class="tour__favorite__item-img">
                <img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/680x784x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" alt="">
            </div>
            <div class="tour__favorite__item-info">
                <span class="tour__favorite__item-info--sub">FAVORITE</span>
                <h3 class="tour__favorite__item-info--title"><?=$v['name'.$lang]?></h3>
                <p class="tour__favorite__item-info--desc">
                    <?=$v['desc'.$lang]?>
                </p>
                <a href="<?=$v[$sluglang]?>" class="tour__favorite__item-info--btn">Xem chi tiết</a>
            </div>
        </div>
        <?php }
        ?>
    </div>
</div>

<div class="foreign__tour">
    <div class="wrap-content">
        <div class="title-main">
            <span>Tour Nước Ngoài</span>
        </div>
        <div class="foreign__tour__container owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:30,screen:425|items:3|margin:30,screen:575|items:3|margin:30,screen:767|items:2|margin:30,screen:991|items:3|margin:15,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
            data-autoplayspeed="3500" data-dots="0" data-nav="1">
            <?php 
                foreach ($tourOur as $v) {?>
            <div class="item__tour">
                <div class="image__tour">
                    <img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/350x210x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" alt="">
                </div>
                <div class="date__tour">
                    <div class="date__tour__address">
                        <i class="fa-light fa-location-dot"></i>
                        <span><?=$v['location'.$lang]?></span>
                    </div>
                    <div class="date__tour__time">
                        <i class="fa-light fa-clock"></i>
                        <span><?=$v['timer'.$lang]?></span>
                    </div>
                </div>
                <div class="info__tour">
                    <h3 class="info__tour__name"><?=$v['name'.$lang]?></h3>
                    <div class="info__tour__price">
                        <span><b>From</b><?= $func->formatMoney($v['regular_price']) ?></span>
                        <p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </p>
                    </div>
                </div>
                <a href="<?=$v[$sluglang]?>" class="info__tour__btn">Xem chi tiết</a>
            </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<div class="gallary__tour">
    <div class="wrap-content">
        <div class="title-main wow animate__fadeInLeft " data-wow-delay="600ms">
            <span>Gallery</span>
        </div>
        <div class="gallary__tour__container">
            <?php foreach($getPhotoGallary as $v) {?>
            <a href="<?=$v[$sluglang]?>" class="gallary__tour_item">
                <div class="gallary__tour__img">
                    <?= $func->getImage(['sizes' => '381x236x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                </div>
            </a>
            <?php }?>
        </div>
        <div class="btn-viewMore">
            <a href="thu-vien-anh">Xem thêm</a>
        </div>
    </div>
</div>
<div class="report__customer">
    <div class="wrap-content">
        <div class="report__customer__container">
            <div class="title-main wow animate__backInLeft report__title" data-wow-delay="600ms">
                <span>Khách Hàng Nói Gì Về Chúng Tôi?</span>
            </div>
            <div class="report__customer__content owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:30,screen:425|items:3|margin:30,screen:575|items:3|margin:30,screen:767|items:2|margin:30,screen:991|items:3|margin:30,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
        data-autoplayspeed="3500" data-dots="0" data-nav="1" data-animations="animate__rotateInDownLeft">
                <?php 
                foreach ($report as $v) {?>
                    <div class="report__customer__item">
                        <p class="report__customer__item-desc"><?=$v['desc'.$lang]?></p>
                        <div class="report__customer__item-info">
                            <div class="report__customer__item-info--img">
                                <?= $func->getImage(['sizes' => '100x100x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                            <div class="report__customer__item-info--name">
                                <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                </span>
                                <h3><?=$v['name'.$lang]?></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
