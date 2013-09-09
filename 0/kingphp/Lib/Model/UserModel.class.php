<?php
/**
* 用户模型
* @author xiekangwang <kingwon680@gmail.com>
* @version 1.0 2013.08.31
*
**/
class UserModel extends Model{
    
    protected $tableName = 'user';

    public function findByEmail($email){
        return $this->where(array("user_email" => $email))->find();
    }
}