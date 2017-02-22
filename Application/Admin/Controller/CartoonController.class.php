<?php

namespace Admin\Controller;

/**
 * 漫画控制器
 */
class CartoonController extends AdminController{
	public function index(){
		if(IS_POST){
			$param = I('post.');
			// var_dump($param);
			// die;
		}
		$this->display();
	}
}