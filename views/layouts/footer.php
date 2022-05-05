<nav class="navbar fixed-bottom navbar-dark bg-light">
    <div class="container">
    <a class="navbar-brand text-dark" href="#">Разработчик сайта: Самарин Илья Валерьевич</a>

    <ul class="navbar-nav ml-auto">
        <?php if (!User::isGuest()): ?>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/user/settings/"><img class="rounded-circle border border-dark" width = "30" height = "30" src = "/uploads/images/avatars/<?php echo User::getAvatar()?>">  <strong><?php echo User::getUserName($_SESSION['user'])?></strong></a>
        </li>
        <?php endif;?>
        </div>
</nav>


</body>
</html>