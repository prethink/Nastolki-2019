<?php
$title = 'Авторизация';
include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
            <?php if (User::isGuest()): ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <h2>Авторизация</h2>
                    <form action="#" method="post">
                        <label>Логин</label>
                        <input type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>"class="form-control"/>
                        <label>Пароль</label>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"class="form-control"/>
                        <br>
                        <input type="submit" name="submit" class="btn btn-outline-success btn-lg" value="Вход" />
                    </form>
                </div><!--/sign up form-->


                <br/>
                <br/>
                <?php else:?>
                <h2>Вы уже авторизованы!</h2>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>