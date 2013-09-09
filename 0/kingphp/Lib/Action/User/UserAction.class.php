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
        $args = $this->_param();
        dump($args);
        $model = D('User');
        $rs = $model->findByEmail('king123@163.com');

        echo $model->getLastSql();
        var_dump($rs);
        exit;
        $re = $model->add($args);
        var_dump($re);
        EXIT;
    }
}