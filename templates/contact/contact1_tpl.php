<div class="wrap-content">
    <div class="title-main">
        <span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span>
        <p><?=$func->getImage(['upload' => 'assets/images/', 'image' => 'line_2.png', 'alt' => 'line'])?></p>
    </div>
    <?=$flash->getMessages("frontend")?>

    <div class="content-main">
        <div class="contact-article row">
            <div class="contact-text col-lg-6"><?=htmlspecialchars_decode($lienhe['content'.$lang])?></div>
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
        </div>
        <div class="contact-map"><?=htmlspecialchars_decode($optsetting['coords_iframe'])?></div>
    </div>
</div>