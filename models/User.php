<?php
/**
 * Класс User - модель для работы с пользователями
 */
class User
{
    const SHOW_BY_DEFAULT = 10; // Показывать количетсво новостей
    /**
     * Регистрация пользователя 
     * @param string $login <p>Имя</p>
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function register($login, $email, $password)
    {
        $regtime = Home::getDateTimeSQL();
        $rank = 0;
        $noavatar = "noavatar.png";

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO user (login, email, password, regdate,rank,avatar,vk,discord) '
                . 'VALUES (:login, :email, :password, :regdate, :rank, :avatar,"-","-")';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':regdate', $regtime, PDO::PARAM_STR);
        $result->bindParam(':rank', $rank, PDO::PARAM_INT);
        $result->bindParam(':avatar', $noavatar, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Редактирование данных пользователя
     * @param integer $id <p>id пользователя</p>
     * @param string $login <p>Имя</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function edit($id, $login, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE user 
            SET login = :login, password = :password 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function updateContactInfo($id, $vk, $email, $discord)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE user 
            SET vk = :vk, email = :email , discord = :discord 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':vk', $vk, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':discord', $discord, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function updateUserInfo($id, $city, $utc, $gameform, $gamexp, $role, $msg)
    {
        // Соединение с БД
        $db = Db::getConnection();

        $sql = "SELECT * FROM userinfo WHERE login_id = :login_id";

        $result = $db->prepare($sql);
        $result->bindParam(':login_id', $id, PDO::PARAM_INT);
        $result->execute();
        if($result->fetch())
        {
            $sql = "UPDATE userinfo 
            SET login_id = :login_id, city_id = :city_id , utc_id = :utc_id 
             , gameform_id = :gameform_id  , gamexp_id = :gamexp_id  , role_id = :role_id
             , description = :description 
            WHERE login_id = :login_id";

            // Получение и возврат результатов. Используется подготовленный запрос
            $result = $db->prepare($sql);
            $result->bindParam(':login_id', $id, PDO::PARAM_INT);
            $result->bindParam(':city_id', $city, PDO::PARAM_STR);
            $result->bindParam(':utc_id', $utc, PDO::PARAM_STR);
            $result->bindParam(':gameform_id', $gameform, PDO::PARAM_STR);
            $result->bindParam(':gamexp_id', $gamexp, PDO::PARAM_STR);
            $result->bindParam(':role_id', $role, PDO::PARAM_STR);
            $result->bindParam(':description', $msg, PDO::PARAM_STR);
            return $result->execute();

        }else{
            $sql = 'INSERT INTO userinfo (login_id, city_id, utc_id, gameform_id,gamexp_id,role_id,description) '
                . 'VALUES (:login_id, :city_id, :utc_id, :gameform_id, :gamexp_id, :role_id, :description)';

            // Получение и возврат результатов. Используется подготовленный запрос
            $result = $db->prepare($sql);
            $result->bindParam(':login_id', $id, PDO::PARAM_INT);
            $result->bindParam(':city_id', $city, PDO::PARAM_STR);
            $result->bindParam(':utc_id', $utc, PDO::PARAM_STR);
            $result->bindParam(':gameform_id', $gameform, PDO::PARAM_STR);
            $result->bindParam(':gamexp_id', $gamexp, PDO::PARAM_STR);
            $result->bindParam(':role_id', $role, PDO::PARAM_STR);
            $result->bindParam(':description', $msg, PDO::PARAM_STR);
            return $result->execute();
        }


    }


    public static function getUserInfo($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        $sql = "SELECT * FROM userinfo WHERE login_id = :login_id";

        $result = $db->prepare($sql);
        $result->bindParam(':login_id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch();

    }


    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return mixed : integer user id or false
     */
    public static function checkUserData($login, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        //// Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE login = :login';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();
        if($user)
        {
            if(password_verify($password, $user['password'])) {
                return $user['id'];
            }
        }

        return false;
    }


    /**
     * Запоминаем пользователя
     * @param integer $userId <p>id пользователя</p>
     */
    public static function auth($userId)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;

    }

    public static function lastlogin($userId)
    {
        $lastlog = date("Y.m.d H:i:s");
        $help = "help";
        // Соединение с БД
        $db = Db::getConnection();

        $sql = "UPDATE user SET regdate = :regdate WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $userId, PDO::PARAM_INT);
        $result->bindParam(':regdate', $lastlog, PDO::PARAM_STR);
        $result->execute();
        return true;

    }

    /**
     * Возвращает идентификатор пользователя, если он авторизирован.<br/>
     * Иначе перенаправляет на страницу входа
     * @return string <p>Идентификатор пользователя</p>
     */
    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    /**
     * Проверяет является ли пользователь гостем
     * @return boolean <p>Результат выполнения метода</p>
     */

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function getAvatar()
    {
        // Проверяем авторизирован ли пользователь. Если нет, он будет переадресован
        $userId = User::checkLogged();

        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        return $user['avatar'];
    }

    public static function getAvatarByID($id)
    {
        // Получаем информацию о текущем пользователе
        $user = User::getUserById($id);

        return $user['avatar'];
    }

    public static function checkAdmin()
    {
        // Проверяем авторизирован ли пользователь. Если нет, он будет переадресован
        $userId = User::checkLogged();

        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        // Если роль текущего пользователя "admin", пускаем его в админпанель
        if ($user['rank'] == 3) {
            return true;
        }

        // Иначе завершаем работу с сообщением об закрытом доступе
        die('Нет доступа!');
    }
    /**
     * Проверяет имя: не меньше, чем 2 символа
     * @param string $login <p>Имя</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkLogin($login)
    {
        if (strlen($login) >= 2 AND strlen($login) < 16) {
            return true;
        }
        return false;
    }

    public static function checkDoublePassword($password,$password2)
    {
        if ($password == $password2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет телефон: не меньше, чем 10 символов
     * @param string $phone <p>Телефон</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email
     * @param string $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет не занят ли email другим пользователем
     * @param type $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmailExists($email)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }
    public static function checkLoginExists($login)
    {
        // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM user WHERE login = :login';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /**
     * Возвращает пользователя с указанным id
     * @param integer $id <p>id пользователя</p>
     * @return array <p>Массив с информацией о пользователе</p>
     */
    public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getUserName($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $username = $result->fetch();
        return $username['login'];
    }

    public static function getUserByName($name)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE login = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $name, PDO::PARAM_STR);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $username = $result->fetch();
        return $username['login'];
    }

    public static function getUserEmail($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $username = $result->fetch();
        return $username['email'];
    }

    public static function getUserInformation($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, login, email, rank, vk, discord FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $username = $result->fetch();
        return $username;
    }

    public static function getUserRank($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $username = $result->fetch();
        return $username['rank'];
    }

    public static function uploadImage($file)
    {
        $max_image_width	= 401;
        $max_image_height	= 401;
        $max_image_size		= 1024 * 1024;
        $valid_types 		= array("gif","jpg", "png", "jpeg");
        $filename = uniqid();

        $ext = substr($file['name'],
            1 + strrpos($file['name'], "."));
        if (filesize($file['tmp_name']) > $max_image_size) {
            return $result = 'Ошибка: Размер изображения больше чем 1мб';
        } elseif (!in_array($ext, $valid_types)) {
            return $result = 'Ошибка: поддерживаются только типы файлов gif,jpg,png,jpeg';
        } else {
            $size = GetImageSize($file['tmp_name']);
            if (($size) && ($size[0] < $max_image_width)
                && ($size[1] < $max_image_height)) {
                if (is_uploaded_file($file["tmp_name"])) {

                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($file["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/uploads/images/avatars/{$filename}.{$ext}");


                    $id = $_SESSION['user'];
                    $db = Db::getConnection();
                    $avatar = $filename.".".$ext;

                    // Текст запроса к БД
                    $sql = "UPDATE user 
                    SET avatar = :avatar
                    WHERE id = :id";

                    // Получение и возврат результатов. Используется подготовленный запрос
                    $result = $db->prepare($sql);
                    $result->bindParam(':id', $id, PDO::PARAM_INT);
                    $result->bindParam(':avatar', $avatar, PDO::PARAM_STR);
                    $result->execute();
                    return $result = 'Файл загружен, профиль обновлен!';
                } else {
                    return $result = 'Ошибка перемещения файла';
                }
            } else {
                return $result = 'Ошибка: Максимальный размер изображение 400х400';
            }
        }
    }

    public static function getAllCity()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM city ORDER BY name DESC';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $city = array();
        while ($row = $result->fetch()) {
            $city[$i]['id'] = $row['id'];
            $city[$i]['name'] = $row['name'];
            $i++;
        }
        return $city;
    }

    public static function getUTC()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM timezone ORDER BY id DESC';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $city = array();
        while ($row = $result->fetch()) {
            $city[$i]['id'] = $row['id'];
            $city[$i]['TimeZone'] = $row['TimeZone'];
            $i++;
        }
        return $city;
    }

    public static function getGameForm()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM gameform ORDER BY id DESC';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $gameform = array();
        while ($row = $result->fetch()) {
            $gameform[$i]['id'] = $row['id'];
            $gameform[$i]['GameForm'] = $row['GameForm'];
            $i++;
        }
        return $gameform;
    }

    public static function getGameXP()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM gamexp ORDER BY id DESC';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $gamexp = array();
        while ($row = $result->fetch()) {
            $gamexp[$i]['id'] = $row['id'];
            $gamexp[$i]['rank'] = $row['rank'];
            $gamexp[$i]['games'] = $row['games'];
            $gamexp[$i]['system'] = $row['system'];
            $i++;
        }
        return $gamexp;
    }

    public static function getGameRole()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM role ORDER BY id DESC';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $gamerole = array();
        while ($row = $result->fetch()) {
            $gamerole[$i]['id'] = $row['id'];
            $gamerole[$i]['role'] = $row['role'];
            $i++;
        }
        return $gamerole;
    }

    public static function getGameSystem()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM gamesystem ORDER BY id DESC';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $gamesystem = array();
        while ($row = $result->fetch()) {
            $gamesystem[$i]['id'] = $row['id'];
            $gamesystem[$i]['GameSystem'] = $row['GameSystem'];
            $i++;
        }
        return $gamesystem;
    }

    public static function getAllUsersInfo($page = 1)
    {
        $limit = self::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $login = $_POST['login'];
        $email = $_POST['email'];
        $vk = $_POST['vk'];
        $discord = $_POST['discord'];
        $city = $_POST['city'];
        $utc = $_POST['utc'];
        $gameform = $_POST['gameform'];
        $gamexp = $_POST['gamexp'];
        $role = $_POST['role'];

        // Соединение с БД
        $db = Db::getConnection();

        $sql = "SELECT login_id, `user`.login, `user`.email,`user`.avatar,`user`.vk,`user`.discord, `user`.regdate,
        city.`name` AS city,timezone.TimeZone AS utc, gameform.GameForm AS gameform, gamexp.rank as gamexp,
        role.role as role, description
        FROM userinfo 
        INNER JOIN city ON userinfo.city_id = city.id 
        INNER JOIN user ON userinfo.login_id = user.id 
        INNER JOIN timezone ON userinfo.utc_id = timezone.id 
        INNER JOIN gameform ON userinfo.gameform_id = gameform.id
        INNER JOIN gamexp ON userinfo.gamexp_id = gamexp.id
        INNER JOIN role ON userinfo.role_id = role.id
        				WHERE login LIKE '%$login%'
				AND email LIKE '%$email%'
				AND vk LIKE '%$vk%'
				AND discord LIKE '%$discord%'
				AND city.`name` LIKE '%$city%'
				AND timezone.TimeZone LIKE '%$utc%'
				AND gameform.GameForm LIKE '%$gameform%'
				AND gamexp.rank LIKE '%$gamexp%'
				AND role.role LIKE '%$role%'
        ORDER BY login_id DESC
        LIMIT :limit OFFSET :offset ";

            // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();



        // Получение и возврат результатов
        $i = 0;
        $userinfo = array();
        while ($row = $result->fetch()) {
            $userinfo[$i]['login_id'] = $row['login_id'];
            $userinfo[$i]['login'] = $row['login'];
            $userinfo[$i]['email'] = $row['email'];
            $userinfo[$i]['avatar'] = $row['avatar'];
            $userinfo[$i]['vk'] = $row['vk'];
            $userinfo[$i]['discord'] = $row['discord'];
            $userinfo[$i]['regdate'] = $row['regdate'];
            $userinfo[$i]['city'] = $row['city'];
            $userinfo[$i]['utc'] = $row['utc'];
            $userinfo[$i]['gameform'] = $row['gameform'];
            $userinfo[$i]['gamexp'] = $row['gamexp'];
            $userinfo[$i]['role'] = $row['role'];
            $userinfo[$i]['description'] = $row['description'];
            $i++;
        }
        return $userinfo;
    }

    public static function getAllUsersInfoByName($name)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT login_id, `user`.login, `user`.email,`user`.avatar,`user`.vk,`user`.discord, `user`.regdate,
                city.`name` AS city,timezone.TimeZone AS utc, gameform.GameForm AS gameform, gamexp.rank as gamexp,
                role.role as role, description
                FROM userinfo 
                INNER JOIN city ON userinfo.city_id = city.id 
                INNER JOIN user ON userinfo.login_id = user.id 
                INNER JOIN timezone ON userinfo.utc_id = timezone.id 
                INNER JOIN gameform ON userinfo.gameform_id = gameform.id
                INNER JOIN gamexp ON userinfo.gamexp_id = gamexp.id
                INNER JOIN role ON userinfo.role_id = role.id
                WHERE user.login = :login';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $name, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        while ($row = $result->fetch()) {
            $userinfo['login_id'] = $row['login_id'];
            $userinfo['login'] = $row['login'];
            $userinfo['email'] = $row['email'];
            $userinfo['avatar'] = $row['avatar'];
            $userinfo['vk'] = $row['vk'];
            $userinfo['discord'] = $row['discord'];
            $userinfo['regdate'] = $row['regdate'];
            $userinfo['city'] = $row['city'];
            $userinfo['utc'] = $row['utc'];
            $userinfo['gameform'] = $row['gameform'];
            $userinfo['gamexp'] = $row['gamexp'];
            $userinfo['role'] = $row['role'];
            $userinfo['description'] = $row['description'];
        }
        return $userinfo;
    }

    public static function getTotalUserInfo()
    {
        // Соединение с БД
        $db = Db::getConnection();

        $login = $_POST['login'];
        $email = $_POST['email'];
        $vk = $_POST['vk'];
        $discord = $_POST['discord'];
        $city = $_POST['city'];
        $utc = $_POST['utc'];
        $gameform = $_POST['gameform'];
        $gamexp = $_POST['gamexp'];
        $role = $_POST['role'];

        // Текст запроса к БД
        //$sql = 'SELECT count(id) AS count FROM userinfo';

        $sql = "SELECT count(*) AS count, `user`.login, `user`.email,`user`.avatar,`user`.vk,`user`.discord, `user`.regdate,
        city.`name` AS city,timezone.TimeZone AS utc, gameform.GameForm AS gameform, gamexp.rank as gamexp,
        role.role as role, description
        FROM userinfo 
        INNER JOIN city ON userinfo.city_id = city.id 
        INNER JOIN user ON userinfo.login_id = user.id 
        INNER JOIN timezone ON userinfo.utc_id = timezone.id 
        INNER JOIN gameform ON userinfo.gameform_id = gameform.id
        INNER JOIN gamexp ON userinfo.gamexp_id = gamexp.id
        INNER JOIN role ON userinfo.role_id = role.id
				WHERE login LIKE '%$login%'
				AND email LIKE '%$email%'
				AND vk LIKE '%$vk%'
				AND discord LIKE '%$discord%'
				AND city.`name` LIKE '%$city%'
				AND timezone.TimeZone LIKE '%$utc%'
				AND gameform.GameForm LIKE '%$gameform%'
				AND gamexp.rank LIKE '%$gamexp%'
				AND role.role LIKE '%$role%'
        ORDER BY login ASC";

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }

    public static function getUserGameSystem($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT gamesystem 
              FROM usergameid 
              INNER JOIN gamesystem ON usergameid.gamesystemid = gamesystem.id 
              INNER JOIN user ON usergameid.userid = user.id
WHERE userid = :userid';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':userid', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $games = array();
        while ($row = $result->fetch()) {
            $games[$i]['gamesystem'] = $row['gamesystem'];
            $i++;
        }
        return $games;
    }

    public static function updateGameSystem($id ,$games)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM usergameid WHERE  userid = :id';


        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();
        if($games)
        {
            foreach ($games as $gamesystem)
            {
                $sql = 'INSERT INTO usergameid (userid, gamesystemid) '
                    . 'VALUES (:userid, :gamesystemid)';

                // Получение и возврат результатов. Используется подготовленный запрос
                $result = $db->prepare($sql);
                $result->bindParam(':userid', $id, PDO::PARAM_INT);
                $result->bindParam(':gamesystemid', $gamesystem, PDO::PARAM_INT);
                // Указываем, что хотим получить данные в виде массива
                $result->setFetchMode(PDO::FETCH_ASSOC);

                // Выполнение коменды
                $result->execute();
            }
        }


    }

    public static function isUserExists($name)
    {
        // Получаем информацию о текущем пользователе
        $user = User::getUserByName($name);
        // Если роль текущего пользователя "admin", пускаем его в админпанель
        if ($user == $name) {
            return true;

        }

        // Иначе завершаем работу с сообщением об закрытом доступе
        die('Пользователя с ником '.$name.' не существует');
    }

    public static function citySearch($query)
    {
        $db = Db::getConnection();

        $sql = "SELECT name from city WHERE name LIKE '%$query%'";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        if($result->rowCount() > 0)
        {
            while ($row = $result->fetch()) {
                echo "\n<li>".$row["name"]."</li>"; //$row["name"] - имя поля таблицы
            }
        }else
        {
            echo "\n<li>Нет совпадений!</li>"; //$row["name"] - имя поля таблицы
        }
    }

    public static function utcSearch($query)
    {
        $db = Db::getConnection();

        $sql = "SELECT TimeZone from timezone WHERE TimeZone LIKE '%$query%'";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();


        if($result->rowCount() > 0)
        {
            while ($row = $result->fetch()) {
                echo "\n<li>".$row["TimeZone"]."</li>"; //$row["name"] - имя поля таблицы
            }
        }else
        {
            echo "\n<li>Нет совпадений!</li>"; //$row["name"] - имя поля таблицы
        }
    }

    public static function gameformSearch($query)
    {
        $db = Db::getConnection();

        $sql = "SELECT GameForm from gameform WHERE GameForm LIKE '%$query%'";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        if($result->rowCount() > 0)
        {
            while ($row = $result->fetch()) {
                echo "\n<li>".$row["GameForm"]."</li>"; //$row["name"] - имя поля таблицы
            }
        }else
        {
            echo "\n<li>Нет совпадений!</li>"; //$row["name"] - имя поля таблицы
        }
    }

    public static function gamexpSearch($query)
    {
        $db = Db::getConnection();

        $sql = "SELECT rank from gamexp WHERE rank LIKE '%$query%'";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        if($result->rowCount() > 0)
        {
            while ($row = $result->fetch()) {
                echo "\n<li>".$row["rank"]."</li>"; //$row["name"] - имя поля таблицы
            }
        }else
        {
            echo "\n<li>Нет совпадений!</li>"; //$row["name"] - имя поля таблицы
        }
    }

    public static function gameroleSearch($query)
    {
        $db = Db::getConnection();

        $sql = "SELECT role from role WHERE role LIKE '%$query%'";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();
        if($result->rowCount() > 0)
        {
            while ($row = $result->fetch()) {
                echo "\n<li>".$row["role"]."</li>"; //$row["name"] - имя поля таблицы
            }
        }else
        {
            echo "\n<li>Нет совпадений!</li>"; //$row["name"] - имя поля таблицы
        }

    }

}
