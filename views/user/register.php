<?php
$title = 'Регистрация';
include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if (User::isGuest()): ?>
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2 style="margin-bottom: 30px">Регистрация на сайте</h2>
                        <form action="#" method="post">
                            <label>Логин</label>
                            <input type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>" class="form-control"/>
                            <label>Почта</label>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"class="form-control"/>
                            <label>Пароль</label>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"class="form-control"/>
                            <label>Повторите пароль</label>
                            <input type="password" name="password2" placeholder="Пароль" value="<?php echo $password2; ?>"class="form-control"/>
                            <br>
                            <input type="submit" name="submit" class="btn btn-outline-success btn-lg" value="Регистрация" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <?php else:?>
                <h2>Вы уже зарегистрированы!</h2>
                <?php endif;?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>