<div class="wrap-content">
    <div class="title-main">
        <span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span>
        <p><?=$func->getImage(['upload' => 'assets/images/', 'image' => 'line_2.png', 'alt' => 'line'])?></p>
    </div>
    <div class="content-main w-clear grid-page">
        <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
        <div class="product">
            <div class="product">
				<a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
					<p class="pic-product scale-img">
						<?=$func->getImage(['sizes' => '415x315x1','prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
					</p>
					<div class="info-product">
						<h3 class="name-product text-split"><?=$v['name'.$lang]?></h3>
						<p class="price-product">
							<?php if($v['discount']) { ?>
								<span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
								<span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
								<span class="price-per"><?='-'.$v['discount'].'%'?></span>
							<?php } else { ?>
								<span class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
								<span class="guarantee"><?=$v['guarantee'.$lang] ? "(".$v['guarantee'.$lang].")" : ""?></span>
							<?php } ?>
						</p>
					</div>
				</a>
                <p class="cart-product w-clear cart1">
					<span class="cart-add <?php if($v['sale_price'] > 0 || $v['regular_price'] > 0){ echo('addcart')?>   <?php } ?> transition" data-id="<?=$v['id']?>" data-action="addnow">Giỏ hàng</span>
				</p>
			</div>
        </div>
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