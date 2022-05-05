<?php
$title = 'Добавить новость';
include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <h2>Новая новость</h2>
        <form id="contact" action="#" method="post" name="contact">
            <label>Заголовок</label>
            <input id="name" name="title" type="text" placeholder="Название новости" class="form-control">
            <label>Категория новости</label>
            <select name="category" class="custom-select">
                <?php foreach ($newscat as $cat): ?>
                    <option value="<?php echo $cat['id'];?>" selected><?php echo $cat['newscat'];?></option>
                <?php endforeach; ?>
            </select>
            <label>Текст новости</label>
            <textarea id="msg"  name="msg" placeholder="Текст новости" class="form-control"></textarea>
            <br>
            <input type="submit" name="submit" class="btn btn-outline-success btn-lg" value="Создать новость" />
        </form></div>
    <div class="col-2"></div>
</div>


<?php include ROOT . '/views/layouts/footer.php'; ?>