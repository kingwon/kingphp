<?php
$database = array(
	//'配置项'=>'配置值'
	// 添加数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'kingphp', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'king_', // 数据库表前缀

);
$config = array(
	'DEFAULT_THEME' => 'Default',
	'DEFAULT_CHARSER' => 'UTF-8',
	'APP_GROUP_LIST' => 'Home,Admin',
	'DEFAULT_GROUP' => 'Home',
	//'TMPL_ACTION_ERROR' => APP_PATH.'/Tpl/Home/Default/Public/success.html',
	//'TMPL_ACTION_SUCCESS' =>  APP_PATH.'/Tpl/Home/Default/Public/success.html',
	);
return array_merge($database, $config);
?>