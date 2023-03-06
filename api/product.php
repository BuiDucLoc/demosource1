<?php 
	include "config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
	$idCat = (!empty($_GET['idCat'])) ? htmlspecialchars($_GET['idCat']) : 0;
	$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "api/product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";
	$params = array();

	/* Math url */
	$tempLink .= "&idCat=".$idCat."&idList=".$idList;

	if($idCat)
	{
		$where .= " and id_cat = ".$idCat;
		array_push($params, $idCat);
	}else{
		$where .= " and id_list = ".$idList;
		array_push($params, $idList);
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, guarantee$lang, type from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->get($sqlCache, $params, 'result', 7200);

	/* Count all data */
	$countItems = count($cache->get($sql, $params, 'result', 7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if($countItems) { ?>
	<div class="grid-page w-clear">
		<?php foreach($items as $k => $v) { ?>
			<div class="product">
				<a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
					<p class="pic-product scale-img">
						<?=$func->getImage(['sizes' => '274x300x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
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
			</div>
		<?php } ?>
	</div>
	
<?php } ?>