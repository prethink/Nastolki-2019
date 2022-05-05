<?php
/**
 * Класс User - модель для работы с пользователями
 */
class Admin
{

    const SHOW_BY_DEFAULT = 5; // Показывать количетсво новостей

    public static function getPageFeedback($page = 1)
    {
        $limit = News::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, nick, email, message, date, time, ip FROM feedback '
            . 'ORDER BY id DESC '
            . 'LIMIT :limit OFFSET :offset';

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
        $lastFeedback = array();
        while ($row = $result->fetch()) {
            $lastFeedback[$i]['id'] = $row['id'];
            $lastFeedback[$i]['nick'] = $row['nick'];
            $lastFeedback[$i]['email'] = $row['email'];
            $lastFeedback[$i]['message'] = $row['message'];
            $lastFeedback[$i]['date'] = $row['date'];
            $lastFeedback[$i]['time'] = $row['time'];
            $lastFeedback[$i]['ip'] = $row['ip'];
            $i++;
        }
        return $lastFeedback;

        return true;
    }

    public static function getTotalFeedback()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM feedback';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }

    public static function getRegMonthCount()
    {
        $db = Db::getConnection();
        $reg = array();

        for ($i = 1; $i <= 12; $i++) {
            $sql = 'SELECT COUNT(*) as count FROM user WHERE MONTH(regdate) = :month';
            $result = $db->prepare($sql);
            $result->bindParam(':month', $i, PDO::PARAM_INT);
            // Выполнение коменды
            $result->execute();
            $reg[$i]= $result->fetch();

        }

        return $reg;
    }

    public static function getNewsMonthCount()
    {
        $db = Db::getConnection();
        $news = array();

        for ($i = 1; $i <= 12; $i++) {
            $sql = 'SELECT COUNT(*) as count FROM news WHERE MONTH(datenews) = :month';
            $result = $db->prepare($sql);
            $result->bindParam(':month', $i, PDO::PARAM_INT);
            // Выполнение коменды
            $result->execute();
            $news[$i]= $result->fetch();
        }
        return $news;
    }

    public static function getComentByNameCount($name)
    {
        $db = Db::getConnection();
        $names = array();

        for ($i = 1; $i <= 12; $i++) {
            $sql = "SELECT COUNT(`user`.login) as count FROM newscoments INNER JOIN user ON newscoments.login_id = user.id WHERE MONTH(date) = :month AND login = '$name'";
            $result = $db->prepare($sql);
            $result->bindParam(':month', $i, PDO::PARAM_INT);
            // Выполнение коменды
            $result->execute();
            $names[$i]= $result->fetch();
        }
        return $names;
    }
}
