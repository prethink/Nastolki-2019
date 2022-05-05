<?php
$title = 'Сообщения обратной связи';
include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="col-md-12" align="right">
    <form method="post">
        <button class="btn btn-danger" type="submit" name="generate">Создать отчет</button>
    </form>
    <br>
</div>
    <center><H1>Обратная связь:</H1></center>
    <hr>
    <?php foreach ($lastFeedback as $feedback): ?>
    <div class="row">
    <div class="col-3">
        <p>Имя: <?php echo $feedback['nick']; ?><p>
        <p>Почта: <?php echo $feedback['email']; ?></p>
        <p>Дата: <?php echo $feedback['date']; ?></p>
        <p>Время: <?php echo $feedback['time']; ?></p>
        <p>IP: <?php echo $feedback['ip']; ?></p>
        <p>ID сообщения: <?php echo $feedback['id']; ?></p>
</div>
        <div class="col-9">
            <p><?php echo $feedback['message']; ?></p>
        </div>
    </div><hr><?php endforeach; ?>
    <br>
<?php echo $pagination->get(); ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>
