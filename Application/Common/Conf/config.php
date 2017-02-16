<?php
return array(
		//'配置项'=>'配置值'
		'DB_TYPE' => 'mysql', // 数据库类型
		//'DB_HOST' => 'localhost', // 服务器地址
		//'DB_NAME' => 'simo', // 数据库名
		//'DB_USER' => 'root', // 用户名
		//'DB_PWD' => '', // 密码
		'DB_HOST' => '127.0.0.1', // 服务器地址
		'DB_NAME' => 'db_name', // 数据库名
		'DB_USER' => 'root', // 用户名
		'DB_PWD' => 'password', // 密码
		'DB_PORT' => 3306, // 端口
		'DB_PREFIX' => 'ss_', // 数据库表前缀
		'APP_DEBUG' => false,
		'DB_CHARSET' => 'utf8',
	//'配置项'=>'配置值'
		'URL_MODEL' => '2',
		'URL_HTML_SUFFIX' => 'html',
		'URL_PARAMS_BIND_TYPE' => '0',
		'URL_PARAMS_BIND' => TRUE,
        'MODULE_ALLOW_LIST' => array('Home','Cp_admin'),
        'DEFAULT_MODULE' => 'Home',
);