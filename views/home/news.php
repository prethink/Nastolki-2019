<?php
$title = 'Главная';
include ROOT . '/views/layouts/header.php'; ?>

    <div class="col-md-12">
        <?php if ($lastnews != false): ?>
        <h3><?php echo $lastnews['title']; ?></a></h3>
        <p><?php echo $lastnews['content']; ?></p>
        <div class="row">

                <span class="badge col-md-3">Опубликовано <?php echo $lastnews['datenews']; ?></span>
            <span class="badge col-md-3">Коментариев: <?php echo News::getComentsNews($lastnews['id']); ?></span>
            <div class="badge col-md-6"><span class="label label-default">Категория: <?php echo News::getNameCategoryById($lastnews['newscat_id']); ?></span>
        </div>

    </div>
</div>
<hr>
<div class="" style="background: #e9ecef;border-radius: 10px;">
    <div class="row">
<?php if (!User::isGuest()): ?>

    <div class="col-2 text-center">
        <br>
        <span class="badge badge-info" style="margin-bottom: 15px;"><?php echo User::getUserName($_SESSION['user'])?></span><br>
        <img class="rounded-circle border border-dark" width = "100" height = "100" src = "/uploads/images/avatars/<?php echo User::getAvatar()?>">
    </div>
    <div class="col-9 text-center">
        <form id="contact" action="#" method="post" name="contact">
            <br>
            <textarea id="msg"  name="msg" placeholder="Ваше сообщение:" class="form-control" style="resize: none;"></textarea>
            <br>
            <input type="submit" name="submit" class="btn btn-outline-success btn-lg" value="Отправить" />
        </form>
    </div>
<?php endif;?>
</div>
</div>
<?php foreach ($lastcoment as $comment):?>
    <br>
    <div class="" style="background: #e9ecef;border-radius: 10px; padding: 15px;">
        <div class="row">
            <div class="col-2 text-center">
                <br>
                <span class="badge badge-info" style="margin-bottom: 15px;"><?php echo User::getUserName($comment['login_id'])?></span><br>
                <img class="rounded-circle border border-dark" width = "100" height = "100" src = "/uploads/images/avatars/<?php echo User::getAvatarByID($comment['login_id'])?>">
                <hr>
                <span class="badge badge-light" style="margin-bottom: 15px;"><?php echo $comment['date']?></span><br>
            </div>
            <div class="col-9">
                <?php echo $comment['msg']?>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<br>
<?php echo $pagination->get(); ?>
    <?php else: ?>
    <h1>Новости с таким id не существует!<h1>
    <?php endif; ?>

    <?php include ROOT . '/views/layouts/footer.php'; ?>
