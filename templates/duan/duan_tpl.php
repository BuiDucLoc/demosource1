<div class="wrap-content">
    <div class="title-main">
        <span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span>
        <p><?=$func->getImage(['upload' => 'assets/images/', 'image' => 'line_2.png', 'alt' => 'line'])?></p>
    </div>
    <div class="content-main <?php if($type=="dich-vu"){ ?> w-clear <?php }else{ ?> row <?php } ?>">
        <?php if(!empty($news)) { ?>
        <div class="gird_duan">
            <?php foreach($news as $k => $v) {  ?>
            <div class="box_duan_list">
                <a class=" text-decoration-none scale-img img_duan_list" href="<?=$v[$sluglang]?>"
                    title="<?=$v['name'.$lang]?>">
                    <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '305x235x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                </a>
                <a href="<?=$v[$sluglang]?>"><h3 class="duan_vi text-split1 dong1"><?=$v['name'.$lang] ?></h3></a>
            </div>
            <?php } ?>
        </div>
        <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <div class="col-12">
            <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
        </div>
    </div>
</div>