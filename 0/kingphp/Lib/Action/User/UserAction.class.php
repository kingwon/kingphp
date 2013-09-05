<?php
/**
* 用户管理
* @author xiekangwang <kingwon680@gmail.com>
* @version 1.0 2013.08.31
* 
**/
class UserAction extends Action{
	public function index(){
		echo 'hello world!';
		//$this->display();
	}

	/**
	* 用户登录
	*
	*/
	public function login(){

		$this->display();
	}

	/**
	* 用户注册
	*
	**/
	public function register(){

		$this->display();
	}

	public function doRegister(){
		$args = $_POST;
		$model = D('user');
		var_dump(get_class_methods($model));
		var_dump($rs);
		$rs = $model->findByEmail('king123@163.com');

		var_dump($rs);
		$re = $model->add($args);
		echo $model->getLastSql();
		var_dump($re);
		EXIT;
	}
}