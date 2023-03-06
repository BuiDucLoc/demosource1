<div class="wrap-content">
    <div class="title-main1">
        <span><?=$rowDetail['name'.$lang]?></span>
        <p><?=$func->getImage(['upload' => 'assets/images/', 'image' => 'line_2.png', 'alt' => 'line'])?></p>
    </div>
    <?php if(!empty($rowDetail['content'.$lang])) { ?>
    <div class="content-main w-clear"><?=htmlspecialchars_decode($rowDetail['content'.$lang])?></div>
    <div class="share">
        <b><?=chiase?>:</b>
        <div class="social-plugin w-clear">
            <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
            ?>
        </div>
    </div>
    <?php } else { ?>
    <div class="alert alert-warning w-100" role="alert">
        <strong><?=noidungdangcapnhat?></strong>
    </div>
    <?php } ?>
    <?php if(!empty($news)) { ?>
    <div class="share othernews mb-3">
        <b><?=baivietkhac?>:</b>
        <ul class="list-news-other">
            <?php foreach($news as $k => $v) { ?>
            <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                    title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?> - <?=date("d/m/Y",$v['date_created'])?></a></li>
            <?php } ?>
        </ul>
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
    <?php } ?>
</div>