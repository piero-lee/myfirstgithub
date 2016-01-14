<?php
return array(
	/* 认证相关 */
    'USER_AUTH_KEY'	=>'auth_id',	// 用户认证SESSION标记
    'ADMIN_USER_LIST'	=>'admin',        
    'USER_AUTH_GATEWAY'	=>'public/login',// 默认认证网关

    //URL模式
    'URL_MODEL'=>0, // 如果你的环境不支持PATHINFO 请设置为3,

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写 URL中的参数传给后台是自动转换为小写
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符 参数分割符号（当URL——MODEL是1的时候）



    //-------------------为了隐藏URL里的模块（HOME）--------------------------------
    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
    'DEFAULT_MODULE'       =>    'Home',  // 默认模块
    //-------------------为了隐藏URL里的模块（HOME）--------------------------------


    //--------------------DB环境变量---------------------------
    //数据库连接参数
    'DB_TYPE'=>'mysql',
    'DB_HOST' => 'localhost',
    'DB_USER' => 'root',
    'DB_PWD' => '123456',
    'DB_NAME' => 'sitsys',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'sit_'
    //--------------------DB环境变量---------------------------
);