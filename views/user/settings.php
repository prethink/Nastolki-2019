<?php
$title = 'Настройки профиля';
include ROOT . '/views/layouts/header.php'; ?>

<?php if (User::isGuest()): ?>

<?php else:?>
    <h2>Добро пожаловать в настройки профиля <b><?php echo User::getUserName($_SESSION['user'])?></b></h2><br>
    <div class="row">

        <div class="col-3 text-center alert alert-dark" >
            <?php echo $result?>
            <h5>Ваш аватар</h5><br>
            <img class="rounded-circle border border-dark "  width = "150" height = "150" src = "/uploads/images/avatars/<?php echo User::getAvatar()?>">
            <form action="#" method="post" enctype="multipart/form-data"><br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" aria-describedby="fileHelp" >
                    <label class="custom-file-label text-left" for="customFile">Выберите файл</label>
                    <hr>
                    <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                </div>
            </form>
        </div>
        <div class="col-9">
        <div class="row text-center">
            <div class="col-6"><h5>Контактная информация:</h5>
                <label>Дискорд</label>
                <form method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Discord</span>
                        </div>
                        <input name="discord" type="text" class="form-control"value="<?php echo $userinfo['discord']?>">
                    </div>
                    <label>Электронная почта</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@почта</span>
                        </div>
                        <input name="email" type="text" class="form-control" value="<?php echo $userinfo['email']?>">
                    </div>
                    <label>Профиль вконтакте</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">vk.com/</span>
                    </div>
                    <input name="vk" type="text" class="form-control"value="<?php echo $userinfo['vk']?>">
                </div>
                    <br><br>
                    <input type="submit" name="savecontact" class="btn btn-default" value="Сохранить">
                </form>
            </div>
            <div class="col-6"><h5>Смена пароля</h5>
                <form action="#" method="post">
                    <label>Старый пароль</label>
                    <input type="password" name="oldpassword" placeholder="Пароль" class="form-control"/>
                    <label>Новый пароль</label>
                    <input type="password" name="password" placeholder="Пароль" class="form-control"/>
                    <label>Повторите пароль</label>
                    <input type="password" name="password2" placeholder="Пароль "class="form-control"/>
                    <br><br>
                    <input type="submit" name="passwordsave" class="btn btn-default" value="Сохранить">
                </form></div>
        </div>

        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
<div class="col-6">
    <form id="contact" action="#" method="post" name="contact">
        <label>Город</label>
        <select name="city" class="custom-select">
            <?php foreach ($city as $citys): ?>
                <option value="<?php echo $citys['id'];?>" selected><?php echo $citys['name'];?></option>
            <?php endforeach; ?>
        </select>
         <label>Часовой пояс</label>
        <select name="utc" class="custom-select">
            <?php foreach ($utc as $uts): ?>
                <option value="<?php echo $uts['id'];?>" selected><?php echo $uts['TimeZone'];?></option>
            <?php endforeach; ?>
        </select>
        <label>Игровая форма</label>
        <select name="gameform" class="custom-select">
            <?php foreach ($gameform as $gameforms): ?>
                <option value="<?php echo $gameforms['id'];?>" selected><?php echo $gameforms['GameForm'];?></option>
            <?php endforeach; ?>
        </select>
        <label>Игровая Опыт</label>
        <select name="gamexp" class="custom-select">
            <?php foreach ($gamexp as $gamexps): ?>
                <option value="<?php echo $gamexps['id'];?>" selected><?php echo $gamexps['rank']." ".$gamexps['games']." Игр ".$gamexps['system']." Игровых систем";?></option>
            <?php endforeach; ?>
        </select>
        <label>Роль</label>
        <select name="role" class="custom-select">
            <?php foreach ($gamerole as $gameroles): ?>
                <option value="<?php echo $gameroles['id'];?>" selected><?php echo $gameroles['role'];?></option>
            <?php endforeach; ?>
        </select>
        <label>Игровые системы</label>
            <select multiple name="gamesystem[]" class="custom-select">
            <?php foreach ($gamesystem as $gamesystems): ?>
                <option value="<?php echo $gamesystems['id'];?>"><?php echo $gamesystems['GameSystem'];?></option>
            <?php endforeach; ?>
        </select>
        <label>О себе</label>
        <textarea id="msg"  name="msg" placeholder="Ваше сообщение:" class="form-control"><?php echo $getInfo['description'];?></textarea>
        <br>
    <input type="submit" name="saveinfo" class="btn btn-outline-success btn-lg text-center" value="Сохранить информацию" /></form>
</div>
        <div class="col-3"></div></div>


<?php endif;?>

<?php include ROOT . '/views/layouts/footer.php'; ?>