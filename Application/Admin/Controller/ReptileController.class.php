<?php

namespace Admin\Controller;

/**
 * 爬虫抓取controller
 */
class ReptileController extends AdminController{
	/**
	 * 抓取图片
	 */
	public function captureImage(){
		return $this->sucSysJson(123);die;
		for ($pageno = 1 ; $pageno < 5; $pageno ++) {
		    $content = file_get_contents('http://www.haha.mx/topic/1/new/'.$pageno);
		    
		    preg_match_all('/class=\"joke-main-img\" src=\"(.*?)\"/',$content,$matches);
		    foreach ($matches[1] as $url) {
		        $url = str_replace('small','big',$url);
		        $img = file_get_contents($url);
		        file_put_contents('./save/'.basename($url),$img);
		    }
		}
	}
	/**
	 * 抓取nuomiphp文章
	 */
	public function captureArticle(){
		var_dump(99999999999999);die;
		// for($page = 1 ; $page<100 ; $page ++){
			$content = file_get_contents('http://www.nuomiphp.com/Article/detail/id/'.'42');
			preg_match_all('/class=\"main-content\" contents=\"(.*?)\"/',$content,$matches);
			
		// }
			var_dump($matches);die;
	}
}