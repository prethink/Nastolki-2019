<?php
$title = 'Список новостей';
include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="row text-right">
    <div class="col-7"></div>
    <div class="col-5 " >
        <form action="#" method="post">
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name="add">Добавить категорию</button>
            </div>
        </div>
        </form>
        <br>
    </div>
</div>

    <table class="table table-hover" >
        <thead>
        <tr>
            <th>id</th>
            <th>Название категории</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lastcategory as $cat): ?>
        <tr>
            <th scope="row"><?php echo $cat['id']; ?></th>
            <td><a><?php echo $cat['newscat']; ?></a></td>
            <td><form action="#" method="post">
                <input type="hidden" name="newsid" value="<?php echo $cat['id']; ?>" />
                <input type="submit" name="submit" class="" value="Удалить" /></form></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>

    <br>
<?php echo $pagination->get(); ?>

<?php include ROOT . '/views/layouts/footer.php'; ?>