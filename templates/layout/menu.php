<div class="menu">
    <ul class=" wrap-content d-flex align-items-center justify-content-between">
        <li class="home"><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href="" title="<?=trangchu?>"><?=trangchu?></a></li>
        <li class="line"></li>
        <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
        <li class="line"></li>
        <li>
            <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham" title="<?=sanpham?>"><?=sanpham?></a>
            <?php if(count($splist)) { ?>
                <ul>
                    <?php foreach($splist as $klist => $vlist) {
                        $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                        <li>
                            <a class="has-child transition" title="<?=$vlist['name'.$lang]?>" href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                            <?php if(!empty($spcat)) { ?>
                                <ul>
                                    <?php foreach($spcat as $kcat => $vcat) {
                                        $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                                        <li>
                                            <a class="has-child transition" title="<?=$vcat['name'.$lang]?>" href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <li class="line"></li>
        <li>
            <a class="has-child <?php if($com=='dat-theo-yeu-cau') echo 'active'; ?> transition" href="dat-theo-yeu-cau" title="Đặt theo yêu cầu">ĐẶT THEO YÊU CẦU</a>
        </li>
        <li class="line"></li>
        <li>
            <a class="has-child <?php if($com=='tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a>
        </li>
        <li class="line"></li>
        <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
        <li class="ml-auto">
                <div class="search w-clear">
                    <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                    <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                </div>
            </li>
    </ul>
</div>