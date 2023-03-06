<div class="wrap-content">
    <div class="title-main">
        <span>
            <?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span>
            <p><?=$func->getImage(['upload' => 'assets/images/', 'image' => 'line_2.png', 'alt' => 'line'])?></p>
    </div>
    <div class="content-main <?php if($type=="dich-vu"){ ?> w-clear <?php }else{ ?> row <?php } ?>">
        <?php if(!empty($news)) { foreach($news as $k => $v) { ?>
        <?php if($type=="dich-vu"){ ?>
        <div class="service-home">
            <a class="service-home-image scale-img" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '309x309x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
            </a>
            <div class="service-home-info">
                <h3 class="service-home-name">
                    <a class="text-decoration-none transition text-split" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                </h3>
            </div>
        </div>
        <?php }else{ ?>
        <div class="news col-md-6">
            <div class="row">
                <a class="news-image col-sm-5" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                    <span class="scale-img">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '190x130x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </span>
                </a>
                <div class="news-info col-sm-7">
                    <h3 class="news-name">
                        <a class="text-decoration-none text-split transition" href="<?=$v[$sluglang]?>"
                            title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    </h3>
                    <p class="news-time"><?=ngaydang?>: <?=date("d/m/Y h:i A",$v['date_created'])?></p>
                    <div class="news-desc text-split dong3"><?=$v['desc'.$lang]?></div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } } else { ?>
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