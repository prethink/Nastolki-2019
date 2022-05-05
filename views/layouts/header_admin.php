<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <script type="text/javascript" src="/template/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/template/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/style.css" type="text/css"/>
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/raphael.js"></script>
    <script src="/template/js/morris.min.js"></script>
    <link rel="stylesheet" href="/template/css/morris.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<div class="wrap">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="box-shadow:  0 0 10px rgba(0,0,0,0.5);">
                    <!-- Brand -->

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/chart">Графики</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Новости
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/admin/news">Список новостей</a>
                                <a class="dropdown-item" href="/admin/addnews">Добавить новость</a>
                                <a class="dropdown-item" href="/admin/category">Добавить/удалить категории</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/feedback">Обратная связь</a>
                        </li>
                    </ul>
                    <!-- Right -->
                    <ul class="navbar-nav ml-auto">
                        <?php if (User::isGuest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/user/register/">Регистрация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/user/login/">Авторизация</a>
                            </li>
                        <?php else:?>
                            <?php if(User::getUserRank($_SESSION['user']) == 3): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/chart">Админка</a>
                                </li>
                            <?php endif;?>
                            <li class="nav-item">
                                <a class="nav-link" href="/user/settings/">Настройки профиля</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/user/logout/">Выход</a>
                            </li>
                        <?php endif;?>
                    </ul>
                </nav>

    <div class="container">