<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                    onkeypress="doEnter(event,'keyword-res');" />
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="" title="<?=trangchu?>"><?=trangchu?></a></li>
            <li><a href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li>
                <a href="san-pham" title="sanpham">Sản phẩm</a>
                <?php if(count($splist)) { ?>
                <ul>
                    <?php foreach($splist as $klist => $vlist) {
                        $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                    <li>
                        <a href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        <?php if(count($spcat)) { ?>
                        <ul>
                            <?php for($s=0;$s<count($spcat);$s++) { ?>
                            <li>
                                <a href="<?=$spcat[$s][$sluglang]?>"><?=$spcat[$s]['name'.$lang]?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li><a href="dat-theo-yeu-cau" title="đặt theo yêu cầu">Đặt theo yêu cầu</a></li>
            <li><a href="tin-tuc" title="tin tức">Tin tức</a></li>
            <li><a href="lien-he" title="liennhe">Liên hệ</a></li>
        </ul>
    </nav>
</div>