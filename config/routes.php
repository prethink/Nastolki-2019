<?php
return array(

    'home/news/([0-9]+)/page-([0-9]+)' => 'home/news/$1/$2',
	'home/news/([0-9]+)' => 'home/news/$1',
    'home/news' => 'home/index',
    // Админка:
    'admin/news/page-([0-9]+)' => 'admin/news/$1',
    'admin/addnews' => 'admin/addnews',
    'admin/news' => 'admin/news',
    'admin/chart' => 'admin/chart',
    'admin/category' => 'admin/category',
    'admin/feedback/page-([0-9]+)' => 'admin/feedback/$1',
    'admin/feedback' => 'admin/feedback',
    'admin' => 'admin/index',
    // Пользователь:
    'user/ajax' => 'user/ajax',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/settings' => 'user/settings',
    'user/name/(\w)' => 'user/name/$1',
    'user/name/' => 'user/list',
    'user/page-([0-9]+)' => 'user/list/$1',
    'user' => 'user/list',
    //Общее
    'home/feedback' => 'home/feedback', // actionIndex в SiteController
    //Главная страница
    'index.php' => 'home/index', // actionIndex в SiteController
    'page-([0-9]+)' => 'home/index/$1', // actionCategory в CatalogController
    '' => 'home/index',// actionIndex в SiteController
    '^.*' => 'home/404',// actionIndex в SiteController
	);