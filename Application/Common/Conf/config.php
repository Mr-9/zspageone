<?php
return array(
	//'配置项'=>'配置值'
	//模板常量
	'TMPL_PARSE_STRING' => array(
		'__ADMIN__' => __ROOT__.'/Public/Admin', //后台的公共文件
		'__INDEX__' => __ROOT__.'/Public/Index', //后台的公共文件
	),

	// 数据库设置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_pub',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'pub_',    // 数据库表前缀
);