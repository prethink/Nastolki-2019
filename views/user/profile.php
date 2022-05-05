<?php
$title = 'Профиль '.$name;
include ROOT . '/views/layouts/header.php'; ?>
<?php if(User::getUserRank($_SESSION['user']) == 3): ?>
    <div class="col-md-12" align="right">
    <form method="post">
        <button class="btn btn-danger" type="submit" name="generate">Создать отчет о пользователе <? echo $name ?></button>
    </form>
    <br>
    </div>
<?php endif ?>
    <div class="row">
        <div class="col-3 text-center" >
            <img class="rounded-circle border border-dark" width = "100" height = "100" src = "/uploads/images/avatars/<? echo $user['avatar']?>"><br><br>
            <h2><strong><span class="badge badge-pill badge-info"><? echo $user['login']?></span></strong></h2>
        </div>
        <div class="col-9 text-center" >
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Дата регистрации</th>
                    <th>Город</th>
                    <th>UTC</th>
                    <th>Почта</th>
                    <th>ВК</th>
                    <th>Дискорд</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><? echo $user['regdate']?></td>
                    <td><? echo $user['city']?></td>
                    <td><? echo $user['utc']?></td>
                    <td><a href="mailto:<? echo $user['email']?>"><? echo $user['email']?></td>
                    <td><a href="http://vk.com/<? echo $user['vk']?>">vk.com/<? echo $user['vk']?></td>
                    <td><? echo $user['discord']?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 text-center" >
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>О себе</th>
                    <th>Игровые системы</th>
                    <th>Игровой опыт</th>
                    <th>Игровая форма</th>
                    <th>Роль</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><? echo $user['description']?></td>
                    <td><? $gamesys = User::getUserGameSystem($user['login_id']);
                        foreach($gamesys as $gamesystem){
                            if (!next($gamesys)) {
                                echo $gamesystem['gamesystem'];
                            }
                            else {
                                echo $gamesystem['gamesystem'].",<br>";
                            }

                        }
                        ?></td>
                    <td><? echo $user['gamexp']?></td>
                    <td><? echo $user['gameform']?></td>
                    <td><? echo $user['role']?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



<?php include ROOT . '/views/layouts/footer.php'; ?>