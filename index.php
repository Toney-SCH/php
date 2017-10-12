<?php

	
	// localhost/project1/front/product.php
	// 获取访问的 php 文件路径
	$page_name = $_SERVER['PHP_SELF'];
	// 以 '/' 进行路径拆分
	$page_name = explode('/', $page_name);
	// 取出拆分结果的最后一个元素
	$page_name = array_pop($page_name);
	// 截取取脚本名，用于 head.html 中的 css 名称
	$page_name = substr($page_name, 0, strpos($page_name, '.'));
	
	
	
	
	// 调用 mysql，获取数据库配置
	
	
	// 验证用户是否已登录
	
	
	// 调用视图
	
