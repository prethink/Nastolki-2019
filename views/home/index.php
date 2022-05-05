<?php
$title = 'Главная';
include ROOT . '/views/layouts/header.php'; ?>

    <center><H1>Последние новости:</H1></center>

    <?php foreach ($lastnews as $news): ?>
        <hr>
    <div class="col-md-12">
        <h3><a href="/home/news/<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a></h3>
        <p><?php echo $news['content']; ?></p>
        <div class="row">
            <hr>
                <span class="badge col-md-3">Опубликовано <?php echo $news['datenews']; ?></span>
            <span class="badge col-md-3">Коментариев: <?php echo News::getComentsNews($news['id']); ?></span>
            <div class="badge col-md-6"><span class="label label-default">Категория: <?php echo News::getNameCategoryById($news['newscat_id']); ?></span>

        </div>

    </div>
</div><?php endforeach; ?>
<br>
<?php echo $pagination->get(); ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>
