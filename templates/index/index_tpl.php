<div class="noidung">

    <div class="tieuchi">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:20" data-md-items="3:30"
                data-lg-items="4:30" data-xlg-items="4:40" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="500"
                data-dots="0" data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-brand">
                <?php foreach($tieuchi as $v) { ?>
                <div class="box_tieuchi">
                    <p class="img_tieuchi">
                        <?=$func->getImage(['class' => 'lazy', 'sizes' => '100x100x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </p>
                    <h3 class="tieuchi_vi text-split dong1"><?=$v['name'.$lang] ?></h3>
                    <p class="tieuchi_mt text-split dong2"><?=$v['desc'.$lang] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="gioithieu">
        <div class="wrap-content">
            <div class="box_gioithieu flex">
                <div class="gioithieu_left">
                    <div class="gioithieu_left1">
                        <p class="doinet">Về chúng tôi</p>
                        <p class="doinet1">Xưởng may thời trang</p>
                        <p class="gioithieu_vi"><?=$gioithieu['name'.$lang] ?></p>
                        <p class="gioithieu_mota  text-split dong9"><?=$gioithieu['desc'.$lang] ?></p>
                        <a class="xemthem" href="gioi-thieu">Xem Thêm</a>
                    </div>
                </div>
                <div class="gioithieu_right">
                    <div class="qc_sl clearfix ">
                        <?php foreach ($hinhanh_gioithieu as $key => $v) {
                        switch ($key) {
                            case '0':
                            $size="500x545x1";
                            break;
                            case '1':
                            $size="360x260x1";
                            break;
                            case '2':
                            $size="360x260x1";
                            break;
                            default:
                            break;
                        }
                        ?>
                        <div class="box_ab zoom_hinh scale-img">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => $size, 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="danmuc_sp">
        <div class="wrap-content1">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:20" data-md-items="3:10"
                data-lg-items="4:2" data-xlg-items="4:2" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="500"
                data-dots="0" data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-brand">
                <?php foreach($danhmuc_list as $v) { ?>
                <div class="danhmuc_list">
                    <p class="scale-img">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '340x430x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </p>
                    <div class="danh_muc_title">
                        <h3 class="danhmuc_vi"><?=$v['name'.$lang] ?></h3>
                        <a class=" text-decoration-none scale-img xemthem" href="<?=$v[$sluglang]?>">
                            Xem thêm
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="sanpham_banchay">
        <div class="wrap-content">
            <div class="noidung_top">
                <div class="title_h2">Sản phẩm bán chạy</div>
                <p class="slogan1"><?= $slogan1['name'.$lang] ?></p>
                <p class="line_top">
                    <?=$func->getImage(['upload' => 'assets/images/image/', 'image' => 'banchay.png', 'alt' => 'line'])?>
                </p>
            </div>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:20" data-md-items="3:20"
                data-lg-items="4:20" data-xlg-items="4:20" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="500"
                data-dots="0" data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-brand">
                <?php foreach($sanphamnb as $v) { ?>
                <div class="product">
                    <a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <p class="pic-product scale-img">
                            <?=$func->getImage(['sizes' => '285x305x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </p>
                        <div class="info-product">
                            <h3 class="name-product text-split"><?=$v['name'.$lang]?></h3>
                            <p class="price-product">
                                <span class="gia">Giá:</span>
                                <?php if($v['discount']) { ?>
                                <span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
                                <span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
                                <span class="price-per"><?='-'.$v['discount'].'%'?></span>
                                <?php } else { ?>
                                <span
                                    class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
                                <span
                                    class="guarantee"><?=$v['guarantee'.$lang] ? "(".$v['guarantee'.$lang].")" : ""?></span>
                                <?php } ?>
                            </p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="banner_index">
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0"
            data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
            data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="500" data-dots="0"
            data-nav="1"
            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
            data-navcontainer=".control-brand">
            <?php foreach($banner1 as $v) { ?>
            <div class="box_banner">
                <a class=" text-decoration-none" href="<?=$v['link']?>" title="<?=$v['name'.$lang]?>">
                    <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '1366x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>


    <div class="danhmuc_sanpham_index">
        <?php foreach($danhmuc_list_nb as $key => $val) { 
			$spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($val['id']));
			?>
        <div class="wrap-content space_sp">
            <div class="noidung_top_title">
                <div class="noidung_top">
                    <div class="title_h2"><?= $val['name'.$lang] ?></div>
                    <p class="slogan1"><?= $slogan1['name'.$lang] ?></p>
                    <p class="line_top">
                        <?=$func->getImage(['upload' => 'assets/images/image/', 'image' => 'banchay.png', 'alt' => 'line'])?>
                    </p>
                    <ul class="danhmuc_sanpham flex">
                        <li class=" li_a"><a data-list="<?=$val['id']?>" data-cat="0" class="active">Tất cả</a></li>
                        <?php  foreach ($spcat as $key1 => $value1) {?>
                        <li class="li_a"><a data-list="<?=$val['id']?>" data-cat="<?=$value1['id']?>">
                                <?= $value1["name".$lang] ?>
                            </a></li>
                        <?php }  ?>
                    </ul>
                </div>

            </div>
            <div class=" paging-homes-category-<?= $val["id"] ?>"></div>
        </div>
        <?php } ?>
    </div>


    <div class="album_anh">
        <div class="wrap-content">
            <div class="noidung_top">
                <div class="title_h2 mau">Album ảnh</div>
                <p class="slogan1 mau"><?=$slogan1['name'.$lang] ?></p>
                <p class="line_top">
                    <?=$func->getImage(['upload' => 'assets/images/image/', 'image' => 'banchay.png', 'alt' => 'line'])?>
                </p>
            </div>
            <div class="qc_sl1 clearfix ">
                <?php foreach ($album as $key => $v) {
					switch ($key) {
						case '0':
						$size="380x260x1";
						break;
						case '1':
						$size="380x260x1";
						break;
						case '2':
						$size="390x550x1";
						break;
						case '3':
						$size="380x260x1";
						break;
						case '4':
						$size="380x260x1";
						break;
						default:
						break;
					}
					?>
                <div class="box_ab1 zoom_hinh">
                    <a data-fancybox="imagesab<?=$v['id']?>" href="<?=UPLOAD_PRODUCT_L.$v['photo']?>"
                        title="<?=$v['ten']?>" class="scale-img box_album">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => $size, 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="album_gallery">
        <?php foreach ($hinhanhcon as $key => $value) { ?>
        <div class="box_ab zoom_hinh">
            <a data-fancybox="imagesab<?=$value['id_parent']?>" href="<?=UPLOAD_PRODUCT_L.$value['photo']?>"
                title="<?=$value['ten']?>">
                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '330x200x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $value['photo'], 'alt' => $value['name'.$lang]])?>
            </a>
        </div>
        <?php } ?>
    </div>

    <div class="camnhanhachhang_index">
        <div class="wrap-content">
            <div class="noidung_top">
                <div class="title_h2">Cảm nhận khách hàng</div>
                <p class="slogan1"><?=$slogan1['name'.$lang] ?></p>
                <p class="line_top">
                    <?=$func->getImage(['upload' => 'assets/images/image/', 'image' => 'banchay.png', 'alt' => 'line'])?>
                </p>
            </div>
            <div class="camnhan_id_box">
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0"
                    data-md-items="2:20" data-lg-items="3:30" data-xlg-items="3:30" data-rewind="1" data-autoplay="1"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="1" data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-camnhan">
                    <?php foreach($camnhan_khachhang as $v) { ?>
                    <div class="box_camnhan flex1">
                        <a class=" text-decoration-none  img_camnhan" href="<?=$v[$sluglang]?>"
                            title="<?=$v['name'.$lang]?>">
                            <p class="scale-img">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '200x300x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                            </p>
                        </a>
                        <div class="box_title_camnhan">
                            <a href="<?=$v[$sluglang]?>">
                                <p class="chat">
                                    <?=$func->getImage(['upload' => 'assets/images/image/', 'image' => 'chat.png', 'alt' => 'line'])?>
                                </p>
                                <div class="camnhan_noidung text-split dong4">
                                    <?=htmlspecialchars_decode($v['content'.$lang]) ?></div>
                                <h3 class="duan_vi text-split dong1"><?=$v['name'.$lang] ?></h3>
                                <h3 class="duan_mota text-split dong1"><?=$v['desc'.$lang] ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="control-camnhan control-owl transition"></div>
            </div>
        </div>
    </div>

    <div class="tintuc_video">
        <div class="wrap-content">
            <div class="noidung_top">
                <div class="title_noidung">
                    <div class="title_h2">Tin tức & Video</div>
                    <p class="slogan1"><?=$slogan1['name'.$lang] ?></p>
                    <p class="line_top">
                    <?=$func->getImage(['upload' => 'assets/images/image/', 'image' => 'banchay.png', 'alt' => 'line'])?>
                </p>
                </div>
            </div>
            <div class="box_tintuc_video flex">
                <div class="tintuc_index ">
                    <div class="newshome-scroll">
                        <ul>
                            <?php foreach ($tintuc as $key => $value) {?>
                            <li>
                                <a class="newshome-normal text-decoration-none w-clear" href="<?= $value[$sluglang] ?>"
                                    title="<?=$value['ten'.$lang]?>">
                                    <div class="tintuc_box">
                                        <div class="tintuc_img scale-img">
                                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '215x150x1', 'upload' => UPLOAD_NEWS_L, 'image' => $value['photo'], 'alt' => $value['name'.$lang]])?>
                                        </div>
                                        <div class="tintuc_title">
                                            <p class="tintuc_top text-split1 dong2"><?=$value['name'.$lang]?></p>
                                            <p class="tintuc_title1 text-split dong2"><?=$value['desc'.$lang] ?></p>
                                            <p class="xemthem_vi" href="<?=$value[$sluglang] ?>">Xem thêm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="video_index">
                    <?=$addons->set('video-fotorama', 'video-fotorama', 4);?>
                    <?php /* $addons->set('video-select', 'video-select', 4); */ ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="lienhe_baogia">
        <div class="wrap-content">
            <div class="noidung_top">
                <div class="title_noidung">
                    <div class="title_h2">LIÊN HỆ BÁO GIÁ</div>
                    <p class="line_top">
                        <?=$func->getImage(['upload' => 'assets/images/', 'image' => 'line_top.png', 'alt' => 'line'])?>
                    </p>
                </div>
            </div>
            <div class="box_baogia flex">
                <div class="hinhanh_baogia">
                    <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '630x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh_baogia['photo'], 'alt' => $hinhanh_baogia['name'.$lang]])?>
                </div>
                <div class="form_lienhe">
                    <form class="form-contact validation-newsletter form1" id="FormContact" novalidate method="post"
                        action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-contact col-sm-6">
                                <input type="text" class="form-control form-contro1 text-sm" id="fullname-newsletter"
                                    name="dataNewsletter[fullname]" placeholder="<?=hoten?>" required />
                                <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                            </div>
                            <div class="input-contact col-sm-6">
                                <input type="number" class="form-control form-contro1 text-sm" id="phone-newsletter"
                                    name="dataNewsletter[phone]" placeholder="<?=sodienthoai?>" required />
                                <div class="invalid-feedback"><?=vuilongnhapsodienthoai?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-contact col-sm-6">
                                <input type="email" class="form-control form-contro1 text-sm" id="email-newsletter"
                                    name="dataNewsletter[email]" placeholder="<?=nhapemail?>" required />
                                <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
                            </div>
                            <div class="input-contact col-sm-6">
                                <input type="text" class="form-control form-contro1 text-sm" id="address-newsletter"
                                    name="dataNewsletter[address]" placeholder="<?=diachi?>" required />
                                <div class="invalid-feedback"><?=vuilongnhapdiachi?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-contact  col-sm-12">
                                <textarea class="form-control form-contro2 text-sm" id="content-contact"
                                    name="dataNewsletter[content]" placeholder="<?=noidung?>" required /></textarea>
                                <div class="invalid-feedback"><?=vuilongnhapnoidung?></div>
                            </div>
                        </div>
                        <input type="submit" class="btn1 btn-sm btn-danger" name="submit-newsletter"
                            value="GỬI THÔNG TIN" disabled>
                        <input type="hidden" class="btn btn-sm btn-danger w-100" name="recaptcha_response_newsletter"
                            id="recaptchaResponseNewsletter">
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="doitac_index">
        <div class="wrap-content">
            <div class="box_doitac flex">
                <div class="doitac_left">
                    <p class="doitac">ĐỐI TÁC</p>
                </div>
                <div class="doitac_right">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="5:10"
                        data-md-items="5:10" data-lg-items="3:10" data-xlg-items="6:20" data-rewind="1"
                        data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="500" data-dots="0" data-nav="1"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".control-brand">
                        <?php foreach($doitac as $v) { ?>
                        <div class="box_doitac_item">
                            <a class=" text-decoration-none scale-img scale-img" href="<?=$v['link']?>"
                                title="<?=$v['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '185x77x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>