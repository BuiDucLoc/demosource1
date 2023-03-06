<div class="header">
    <div class="header-top">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <div class="sologan flex">
				<marquee><div class="info-header1"><?=$slogan['name'.$lang]?></div></marquee>
			</div>
            <div class="header_right flex">
                <p class="info-header">
                    <i class="fas fa-envelope"></i>Email: <?=$optsetting['email']?>
                </p>
                <ul class="social flex">
                    <?php foreach($social as $k => $v) { ?>
                    <li class="">
                        <a href="<?=$v['link']?>" target="_blank" class="img-hover">
                            <?=$func->getImage(['sizes' => '16x17x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <a class="logo-header" href="">
                <?=$func->getImage(['sizes' => '98x88x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
            <a class="banner-header" href="">
                <?=$func->getImage(['sizes' => '698x85x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
            <div class="hotline-header">
                <a href="tel:<?=$optsetting['hotline'] ?>"><p><?=$func->formatPhone($optsetting['hotline'])?></p></a>
                <a href="tel:<?=$optsetting['phone'] ?>"><p><p><?=$func->formatPhone($optsetting['phone'])?></p></a>
            </div>
        </div>
    </div>
</div>