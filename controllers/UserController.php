<?php
/**
 * Контроллер UserController
 */
class UserController
{
    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {
        // Переменные для формы
        $login = false;
        $email = false;
        $password = false;
        $password2 = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $login = trim($_POST['login']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkLogin($login)) {
                $errors[] = 'Логин не должен быть короче 2-х символов и больше 16 символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (!User::checkDoublePassword($password,$password2)) {
                $errors[] = 'Пароли не совпадают!';
            }
            if (User::checkLoginExists($login)) {
                $errors[] = 'Такой пользователь уже существует';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такая почта уже есть в базе!';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
                $result = User::register($login, $email, password_hash($password, PASSWORD_DEFAULT));
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    /**
     * Action для страницы "Вход на сайт"
     */
    public function actionLogin()
    {
        // Переменные для формы
        $login = false;
        $password = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $login = trim($_POST['login']);
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($login, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неверный логин или пароль';
            } else {
                User::auth($userId);
                //User::lastlogin($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        // Стартуем сессию
        session_start();

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);
        unset($_SESSION["user_name"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /user/login");
    }

    public function actionSettings()
    {
        $result = null;
        if(USER::isGuest())
            header("Location: /");
        else{


            $city = User::getAllCity();
            $utc = User::getUTC();
            $gamesystem = User::getGameSystem();
            $gamerole = User::getGameRole();
            $gamexp = User::getGameXP();
            $gameform = User::getGameForm();
            $id = $_SESSION["user"];
            $getInfo = User::getUserInfo($id);
            $userinfo = User::getUserInformation($id);

            if (isset($_POST['submit'])) {
                $result = User::uploadImage($_FILES["image"]);
            }

            if (isset($_POST['savecontact'])) {
                $vk = $_POST['vk'];
                $email = $_POST['email'];
                $discord = $_POST['discord'];
                User::updateContactInfo($id,$vk,$email,$discord);
                header("Location: /user/settings/");
            }

            if (isset($_POST['saveinfo'])) {

                $xcity = $_POST['city'];
                $xutc = $_POST['utc'];
                $xgameform = $_POST['gameform'];
                $xgamexp   = $_POST['gamexp'];
                $xrole     = $_POST['role'];
                $xmsg    = $_POST['msg'];
                $gamesystemss = $_POST['gamesystem'];
                User::updateUserInfo($id, $xcity, $xutc, $xgameform, $xgamexp, $xrole, $xmsg);
                User::updateGameSystem($id,$gamesystemss);
            }

            if (isset($_POST['passwordsave'])) {

            }

        }

        require_once(ROOT . '/views/user/settings.php');
        return true;
    }

    public function actionList($page = 1)
    {
        $user = User::getAllUsersInfo($page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = User::getTotalUserInfo();
        if(isset($_POST['generate']))
        {
            $content = Pdf::generateAllUsers();
            Pdf::generatePDFL('Пользователи',$content,'AllUsers');
        }

        if(isset($_POST['search']))
        {

            $total = User::getTotalUserInfo();
            $pagination = new Pagination($total, $page, User::SHOW_BY_DEFAULT, 'page-');
        }
        else{
            $total = User::getTotalUserInfo();
            $pagination = new Pagination($total, $page, User::SHOW_BY_DEFAULT, 'page-');
        }
        // Создаем объект Pagination - постраничная навигация


        require_once(ROOT . '/views/user/index.php');
        return true;
    }

    public function actionName($name)
    {
        User::isUserExists($name);
        $user = User::getAllUsersInfoByName($name);

        if (isset($_POST['generate'])) {
            $content = Pdf::generateUserByName($user);
            Pdf::generatePDF('Пользователь '.$name,$content,'User:'.$name);
        }

        require_once(ROOT . '/views/user/profile.php');
        return true;
    }

    public function actionAjax()
    {
        if(!empty($_POST["city"])){
            $query = $_POST["city"];
            User::citySearch($query);
        }
        if(!empty($_POST["utc"])){
            $query = $_POST["utc"];
            User::utcSearch($query);
        }
        if(!empty($_POST["gameform"])){
            $query = $_POST["gameform"];
            User::gameformSearch($query);
        }
        if(!empty($_POST["gamexp"])){
            $query = $_POST["gamexp"];
            User::gamexpSearch($query);
        }
        if(!empty($_POST["role"])){
            $query = $_POST["role"];
            User::gameroleSearch($query);
        }
        return true;
    }

}
