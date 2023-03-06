<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="box_footer">
                <div class="footer-news">
                    <h2 class="title-footer"><?=$setting['name'.$lang]?></h2>
                    <div class="footer_icon">
                        <ul>
                            <li>
                                <?=$func->getImage(['upload' => 'assets/images/', 'image' => 'check.png', 'alt' => 'line'])?>
                                <span><?= $optsetting["address"] ?></span>
                            </li>
                            <li>
                                <?=$func->getImage(['upload' => 'assets/images/', 'image' => 'call.png', 'alt' => 'line'])?>
                                <span><?= $optsetting["phone"] ?></span>
                            </li>
                            <li>
                                <?=$func->getImage(['upload' => 'assets/images/', 'image' => 'mail1.png', 'alt' => 'line'])?>
                                <span><?= $optsetting["email"] ?> </span>
                            </li>
                            <li>
                                <?=$func->getImage(['upload' => 'assets/images/', 'image' => 'w.png', 'alt' => 'line'])?>
                                <span><?= $optsetting["website"] ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="list_icon">
                        <ul>
                            <?php foreach ($social_footer as $key => $value) {?>
                                <li>
                                    <a href="<?= $value['link'] ?>" class="img-hover">
                                        <?=$func->getImage(['sizes' => '43x43x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $value['photo'], 'alt' => $value['name'.$lang]])?>
                                     </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="footer-news">
                    <h2 class="title-footer1 chinh_sach">CHÍNH SÁCH CHÚNG TÔI</h2>
                    <ul class="footer-ul">
                        <?php foreach($policy as $v) { ?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="footer-news">
                    <h2 class="title-footer1 chinh_sach">MÃ QR</h2>
                    <a class="logo-header " href="<?=$qrcode['link'] ?>">
                        <?=$func->getImage(['sizes' => '124x124x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $qrcode['photo'], 'alt' => $qrcode['name'.$lang]])?>
                    </a>
                </div>
                <div class="footer-news">
                    <h2 class="title-footer1 chinh_sach">FANPAGE</h2>
                    <?=$addons->set('fanpage-facebook', 'fanpage-facebook', 2);?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-powered">
            <div class="wrap-content">
                <div class="row">
                    <div class="footer-copyright col-md-6">2022 XƯỞNG MAY THỜI TRANG NAM NỮ BẢO ANH. Design by ABC.vn</div>
                    <div class="footer-statistic col-md-6">
                        <span><?=dangonline?>: <?=$online?></span>
                        <span><?=trongthang?>: <?=$counter['month']?></span>
                        <span><?=tongtruycap?>: <?=$counter['total']?></span>
                    </div>
                </div>
            </div>
        </div>
    <?=$addons->set('footer-map', 'footer-map', 6);?>
    <?=$addons->set('messages-facebook', 'messages-facebook', 2);?>
</div>

<!-- <?php if($com!='gio-hang') { ?>
    <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?=(!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
    </a>
<?php } ?> -->

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?=$func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo'])?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?=$func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline'])?></i>
</a>