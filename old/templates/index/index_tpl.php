<div class="wrap__intro">
    <div class="wrap-content">
        <div class="wrap__intro__container">
            <div class="wrap__intro__left">
                <div class="wrap__intro__left-slider owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:2|margin:10,screen:1199|items:2|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" >
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
                    <span class="wrap__intro__right-info--title">giới thiệu</span>
                    <h3 class="wrap__intro__right-info-titleMain">
                        <?=$getIntro['name'.$lang]?>
                    </h3>
                    <p class="wrap__intro__right-info--desc">
                        <?=$getIntro['desc'.$lang]?>
                    </p>
                </div>
                <div class="wrap__intro__right-criteria owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:10,screen:425|items:3|margin:10,screen:575|items:3|margin:10,screen:767|items:3|margin:10,screen:991|items:3|margin:10,screen:1199|items:3|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1">
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
    <div class="tour__hot__container owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:1|margin:0,screen:575|items:1|margin:0,screen:767|items:1|margin:0,screen:991|items:1|margin:0,screen:1199|items:1|margin:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-animations="animate__fadeInUp">
        <?php 
        foreach ($tourHot as $v) {?>
            <div class="tour__hotItem" owl-item-animation>
                <div class="tour__hotItem__image">
                    <img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/1920x784x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" alt="" >
                </div>
                <div class="wrap-content">
                    <div class="tour__hotItem__left">
                        <span class="tour__hotItem__left-titleSub">TOUR HOT</span>
                        <h3 class="tour__hotItem__left-titleMain"><?=$v['name'.$lang]?></h3>
                    </div>
                    <div class="tour__hotItem__right">
                        <p class="tour__hotItem__right-desc">
                            <?=$v['desc'.$lang]?>
                        </p>
                        <a href="<?=$v[$sluglang]?>" class="tour__hotItem__right-btn">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
</div>

<div class="tour__favorite">
    <div class="tour__favorite__container owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:0,screen:425|items:3|margin:0,screen:575|items:3|margin:0,screen:767|items:3|margin:0,screen:991|items:3|margin:0,screen:1199|items:3|margin:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-animations="animate__rotateInDownLeft">
        <?php 
            foreach ($tourFavorite as $v) {?>
                <div class="tour__favorite__item" owl-item-animation>
                    <div class="tour__favorite__item-img">
                        <img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/680x784x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" alt="" >
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
        <div class="foreign__tour__container owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:44,screen:425|items:3|margin:44,screen:575|items:3|margin:44,screen:767|items:3|margin:44,screen:991|items:3|margin:44,screen:1199|items:3|margin:44" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1">
            <?php 
                foreach ($tourOur as $v) {?>
                    <div class="item__tour">
                        <div class="image__tour">
                        <img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/350x210x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" alt="" >
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
                            <a href="<?=$v[$sluglang]?>" class="info__tour__btn">Xem chi tiết</a>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</div>


<?php if(count($newsnb) || count($videonb)) { ?>
<div class="box-tintuc-video">
    <div class="wap_1200">
        <div class="wap-tin-video">
            <div class="left-intro">
                <p class="title-intro"><span>Tin tức mới</span></p>
                <div class="newshome-intro w-clear">                
                    <a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['name'.$lang]?>">
                        <p class="pic-newshome-best scale-img"><img onerror="this.src='<?=THUMBS?>/360x200x2/assets/images/noimage.png';" src="<?=THUMBS?>/360x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['name'.$lang]?>" width="360" height="200"></p>
                        <h3 class="name-newshome text-split"><?=$newsnb[0]['name'.$lang]?></h3>
                        <p class="time-newshome">Ngày đăng: <?=date("d/m/Y",$newsnb[0]['date_created'])?></p>
                        <p class="desc-newshome text-split"><?=$newsnb[0]['desc'.$lang]?></p>
                        <span class="view-newshome transition"><?=xemthem?></span>
                        <?php // $optchinhanh = (isset($newsnb[0]['options']) && $newsnb[0]['options'] != '') ? json_decode($newsnb[0]['options'],true) : null;
                        //echo $optchinhanh["chucvu"]; ?>
                    </a>
                    <div class="newshome-scroll">
                        <div class="chay-tintuc-vertical">
                            <?php foreach($newsnb as $v) {?>                                
                                <a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                    <p class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" width="150" height="120"></p>
                                    <div class="info-newshome-normal">
                                        <h3 class="name-newshome text-split"><?=$v['name'.$lang]?></h3>
                                        <?php /*
                                        <p class="time-newshome"><?=ngaydang?>: <?=date("d/m/Y",$v['date_created'])?></p>
                                        */ ?>
                                        <p class="desc-newshome text-split"><?=$v['desc'.$lang]?></p>
                                    </div>
                                </a>                                
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-intro">
                <p class="title-intro"><span>Video clip</span></p>
                <div class="videohome-intro">
                    <?php /*echo $addons->set('video-fotorama', 'video-fotorama', 4);*/ ?>                    
                    <?php /*echo $addons->set('video-slick', 'video-slick', 4);*/ ?>
                    <?php /*echo $addons->set('video-img-slick', 'video-img-slick', 4);*/ ?>
                    <?php echo $addons->set('video-select', 'video-select', 4);  ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php /*
<?php if (count($partner)) { ?>
    <div class="wrap-partner">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:3|margin:10,screen:575|items:4|margin:10,screen:767|items:4|margin:10,screen:991|items:5|margin:10,screen:1199|items:7|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-partner">
                <?php foreach ($partner as $v) { ?>
                    <div>
                        <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '150x120x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="control-partner control-owl transition"></div>
        </div>
    </div>
<?php } ?>
*/ ?>
<?php /*
<div class="box-tintuc-video">
    <div class="wrap-content py-5">
        <div class="title-main"><span>Video clip - tin tức</span></div>
        <div class="wap-tin-video">
            <div class="left-intro">
                <?php if (!empty($newsnb)) { ?>
                    <div class="news-intro position-relative">
                        <span class="news-control position-absolute transition" id="up"><i class="fas fa-chevron-up"></i></span>
                        <span class="news-control position-absolute transition" id="down"><i class="fas fa-chevron-down"></i></span>
                        <div class="news-scroll position-relative">
                            <div class="chay-tintuc-vertical">
                                <?php foreach ($newsnb as $v) { ?>  
                                        <div class="news-shadow">
                                            <div class="news-item">
                                                <div class="news-shadow-time position-relative text-capitalize text-center">
                                                    <span class="d-block"><?= $func->makeDate($v['date_created']) ?></span>
                                                    <span class="d-block"><?= date("d/m/Y", $v['date_created']) ?></span>
                                                </div>
                                                <div class="news-shadow-article position-relative">
                                                    <a class="news-shadow-image rounded-circle scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '90x90x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                                    </a>
                                                    <div class="news-shadow-info">
                                                        <h3 class="news-shadow-name">
                                                            <a class="text-decoration-none transition text-split" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                                        </h3>
                                                        <div class="news-shadow-desc text-split"><?= $v['desc' . $lang] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                   
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="right-intro">
                <div class="video-intro">
                    <?php // $addons->set('video-fotorama', 'video-fotorama', 4); ?>
                </div>
            </div>
        </div>
    </div>
</div>
*/ ?>