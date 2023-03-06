<?php  
	if(!defined('SOURCES')) die("Error");

	$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup','photo_static'), 'fetch', 7200);
    $phototk = $cache->get("select name$lang, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('photo-thiet-ke'), 'result', 7200);
    $pronb = $cache->get("select id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'), 'result', 7200);
    $dvlistnb =$cache->get("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'), 'result', 7200);
    $videonb = $cache->get("select id from #_photo where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('video'), 'result', 7200);
    $gioithieu = $cache->get("select name$lang, desc$lang ,slugvi, slugen,photo, id from #_static where type = ? and find_in_set('hienthi',status) limit 0,1", array('gioi-thieu'), 'fetch', 7200);
    $tintuc = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)  order by numb,id desc", array('tin-tuc'), 'result', 7200);
    $doitac = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc ", array('doitac'), 'result', 7200);
    $tieuchi = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)  order by numb,id desc", array('tieu-chi'), 'result', 7200);
    $hinhanh_gioithieu = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,3", array('hinh-anh'), 'result', 7200);
    $sanphamnb = $cache->get("select name$lang, slugvi, regular_price, sale_price, discount, slugen, date_created, id, photo from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) and find_in_set('banchay',status) order by numb,id desc", array('san-pham'), 'result', 7200);
    $danhmuc_list = $cache->get("select name$lang, slugvi, slugen, date_created, id, photo from #_product_list where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);
    $banner1= $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,3", array('banner'), 'result', 7200);
    $danhmuc_list_nb = $cache->get("select name$lang, slugvi, slugen, date_created, id, photo from #_product_list where type = ?  and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb,id desc", array('san-pham'), 'result', 7200);
    $album = $cache->get("select name$lang, slugvi, slugen, photo,id from #_product where type = ? and find_in_set('hienthi',status) order by numb,id desc limit  0,5", array('thu-vien-anh'), 'result', 7200);
    $hinhanhcon = $cache->get("select name$lang,photo,id_parent from #_gallery where type = ? and find_in_set('hienthi',status) order by numb,id desc ", array('thu-vien-anh'), 'result', 7200);
    









    /* SEO */
    $seoDB = $seo->getOnDB(0,'setting','update','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->set('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->set('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->set('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->set('description',$seoDB['description'.$seolang]);
    $seo->set('url',$func->getPageURL());
    $imgJson = (!empty($logo['options'])) ? json_decode($logo['options'],true) : null;
    if(empty($imgJson) || ($imgJson['p'] != $logo['photo']))
    {
        $imgJson = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($imgJson),'photo',$logo['id']);
    }
    if(!empty($imgJson))
    {
        $seo->set('photo',$configBase.THUMBS.'/'.$imgJson['w'].'x'.$imgJson['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->set('photo:width',$imgJson['w']);
        $seo->set('photo:height',$imgJson['h']);
        $seo->set('photo:type',$imgJson['m']);
    }
?>