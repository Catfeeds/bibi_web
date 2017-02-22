<?php

namespace Admin\Controller;

/**
 * 英雄信息
 */
class HeroMessageController extends AdminController{
	//英雄信息列表页
	public function index(){
		$data = M('HeroMessage')->order('id')->select();
		$this->assign('data',$data);
		// var_dump($data);die;
		$this->display();
	}
	//添加英雄资料
	public function add(){
		if(IS_POST){
			$Model = M('HeroMessage');
			$param = I('post.');
			$param['create_time'] = date('y-m-d H:i:s',time());
			$param['update_time'] = date('y_m_d H:i:s',time());
			$result = $Model->data($param)->add();
			$this->success('提交成功',U('index'));
		}
		$this->display();
	}
	//编辑英雄资料
	public function edit(){}
}