<?php
$title = 'База игроков';
include ROOT . '/views/layouts/header.php'; ?>
    <script src="/template/js/search.js"></script>
    <style>
        .search{
            position:relative;
        }

        .search_result{
            background: #FFF;
            border: 1px #ccc solid;
            //width: 225px;
            border-radius: 4px;
            max-height:100px;
            overflow-y:scroll;
            display:none;
        }

        .search_result li{
            list-style: none;
            padding: 5px 10px;
            margin: 0 0 0 -40px;
            color: #0896D3;
            border-bottom: 1px #ccc solid;
            cursor: pointer;
            transition:0.3s;
        }

        .search_result li:hover{
            background: #F9FF00;
        }
    </style>
<h3 align="center">Поиск</h3>

    <form action="/user/" method="post">
        <div class="form-row">
            <div class="col-1"></div>
            <div class="col-3">
                <label>Логин</label>
                <input type="text" name="login" class="form-control" placeholder="Логин">
                <label>Почта</label>
                <input type="text" name="email" class="form-control" placeholder="Электронная почта">
                <label>Вк</label>
                <input type="text" name="vk" class="form-control" placeholder="Вк">
            </div>
            <div class="col-3">
                <label>Дискорд</label>
                <input type="text" name="discord" class="form-control" placeholder="Дискорд">
                <label>Город</label>
                <input id="idcity" type="text" name="city" placeholder="Город" value="" class="who form-control"  autocomplete="off">
                <ul id="rcity" class="search_result"></ul>
                <label>UTC</label>
                <input id="idutc" type="text" name="utc" class="whoutc form-control" placeholder="UTC">
                <ul id="rutc" class="search_result"></ul>
            </div>
            <div class="col-5">
                <label>Игровая форма</label>
                <input id="idgameform" type="text" name="gameform" class="form-control" placeholder="Игровая форма">
                <ul id="rgameform" class="search_result"></ul>
                <label>Игровой опыт</label>
                <input id="idgamexp" type="text" name="gamexp" class="form-control" placeholder="Игровой опыт">
                <ul id="rgamexp" class="search_result"></ul>
                <label>Роль</label>
                <input id="idrole" type="text" name="role" class="form-control" placeholder="Роль">
                <ul id="rrole" class="search_result"></ul>
                <br>
                <button align="right" class="btn btn-primary" type="submit" name="search">Поиск</button>
                <br>
                <?php if(User::getUserRank($_SESSION['user']) == 3): ?>
                <br>
                <button align="right" class="btn btn-danger" type="submit" name="generate">Создать отчет о пользователях</button>
                <?php endif ?>
            </div>
        </div>
    </form>
<br>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Ник</th>
            <th>Почта</th>
            <th>ВК</th>
            <th>Дискорд</th>
            <th>Город</th>
            <th>UTC</th>
            <th>Игр. системы</th>
            <th>Игр. форма</th>
            <th>Игр. опыт</th>
            <th>Роль</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($user as $users):?>

        <tr>
            <td><img class="rounded-circle border border-dark" width = "35" height = "35" src = "/uploads/images/avatars/<? echo $users['avatar']?>"></td>
            <td><a href="/user/name/<? echo $users['login']?>"><? echo $users['login']?></a></td>
            <td><a href="mailto:<? echo $users['email']?>"><? echo $users['email']?></td>
            <td><a href="http://vk.com/<? echo $users['vk']?>">vk.com/<? echo $users['vk']?></td>
            <td><? echo $users['discord']?></td>
            <td><? echo $users['city']?></td>
            <td><? echo $users['utc']?></td>
            <td><? $gamesys = User::getUserGameSystem($users['login_id']);
                foreach($gamesys as $gamesystem){
                    if (!next($gamesys)) {
                        echo $gamesystem['gamesystem'];
                    }
                    else {
                        echo $gamesystem['gamesystem'].",<br>";
                    }

                }
                ?></td>
            <td><? echo $users['gameform']?></td>
            <td><? echo $users['gamexp']?></td>
            <td><? echo $users['role']?></td>

        </tr>
        <? endforeach;?>
        </tbody>
    </table>
<?php echo $pagination->get(); ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>