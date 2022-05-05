<?php
$title = 'Обратная связь';
include ROOT . '/views/layouts/header.php'; ?>



<div id="inline">
    <h2>Обратная связь</h2>
    <form id="contact" action="#" method="post" name="contact">
        <?php if (User::isGuest()): ?>
            <label>Ник</label>
            <input id="name" name="login" type="name" placeholder="Ваше имя" class="form-control">
            <label>Электронная почта</label>
            <input id="email"  name="email" type="email" placeholder="Ваш e-mail" class="form-control">
        <?php else: ?>
            <label>Ник</label>
            <input id="name" name="login" type="name" value="<?php echo $username; ?>" class="form-control" readonly>
            <label>Электронная почта</label>
            <input id="email"  name="email" type="email" value="<?php echo $usermail; ?>" class="form-control" readonly>
        <?php endif; ?>
            <label>Сообщение</label>
            <textarea id="msg"  name="msg" placeholder="Ваше сообщение:" class="form-control"></textarea>
            <br>
            <input type="submit" name="submit" class="btn btn-outline-success btn-lg" value="Отправить" />
    </form>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>