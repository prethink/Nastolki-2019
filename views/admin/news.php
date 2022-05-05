<?php
$title = 'Список новостей';
include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="col-md-12" align="right">
        <form method="post">
            <button class="btn btn-danger" type="submit" name="generate">Создать отчет</button>
        </form>
        <br>
    </div>
    <table class="table table-hover" >
        <thead>
        <tr>
            <th>id</th>
            <th>Заголовок</th>
            <th>Категория</th>
            <th>Дата</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lastnews as $news): ?>
        <tr>
            <th scope="row"><?php echo $news['id']; ?></th>
            <td><a href="/home/news/<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a></td>
            <td><?php echo News::getNameCategoryById($news['newscat_id']); ?></td>
            <td><?php echo $news['datenews']; ?></td>
            <td><form method="post">
                <input type="hidden" name="newsid" value="<?php echo $news['id']; ?>" />
                <input type="submit" name="submit" class="" value="Удалить" /></form></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>

    <br>
<?php echo $pagination->get(); ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>