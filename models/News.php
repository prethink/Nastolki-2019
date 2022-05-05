<?php


class News
{
    const SHOW_BY_DEFAULT = 5; // Показывать количетсво новостей
    const SHOW_BY_DEFAULT_ADMINNEWS = 10; // Показывать количетсво новостей

    public static function getNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM news WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    public static function getNameCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT newscat FROM newscategory WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $row = $result->fetch();
        return $row['newscat'];
    }

    public static function deleteNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM news WHERE  id = :id';


        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM newscategory WHERE  id = :id';


        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    public static function addNews($title, $category, $msg, $author_id)
    {
        $datenews = Home::getDateTimeSQL();
        $imgnews = "imgnews.png";
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO news (newscat_id, title, content, datenews, author_id) '
            . 'VALUES (:newscat_id, :title, :content, :datenews, :author_id)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':newscat_id', $category, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':content', $msg, PDO::PARAM_STR);
        $result->bindParam(':datenews', $datenews, PDO::PARAM_STR);
        $result->bindParam(':author_id', $author_id, PDO::PARAM_STR);
        return $result->execute();

    }

    public static function addCategory($title)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO newscategory (newscat) '
            . 'VALUES (:newscat)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':newscat', $title, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getPageNews($page = 1)
    {
        $limit = News::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, newscat_id, title, content, datenews FROM news '
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
        $lastNews = array();
        while ($row = $result->fetch()) {
            $lastNews[$i]['id'] = $row['id'];
            $lastNews[$i]['title'] = $row['title'];
            $lastNews[$i]['content'] = $row['content'];
            $lastNews[$i]['datenews'] = $row['datenews'];
            $lastNews[$i]['newscat_id'] = $row['newscat_id'];
            $i++;
        }
        return $lastNews;
    }

    public static function getComentNews($page = 1,$id)
    {
        $limit = News::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT login_id, msg, date FROM newscoments '
            . 'WHERE news_id = :news_id ORDER BY id DESC '
            . 'LIMIT :limit OFFSET :offset';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        $result->bindParam(':news_id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $lastcoment = array();
        while ($row = $result->fetch()) {
            $lastcoment[$i]['login_id'] = $row['login_id'];
            $lastcoment[$i]['msg'] = $row['msg'];
            $lastcoment[$i]['date'] = $row['date'];
            $i++;
        }
        return $lastcoment;
    }

    public static function getCategoryNews()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM newscategory';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $NewsCat = array();
        while ($row = $result->fetch()) {
            $NewsCat[$i]['id'] = $row['id'];
            $NewsCat[$i]['newscat'] = $row['newscat'];
            $i++;
        }
        return $NewsCat;
    }

    public static function checkNewsName($namenews)
    {
        if (strlen($namenews) >= 1) {
            return true;
        }
        return false;
    }

    public static function checkNewsContent($content)
    {
        if (strlen($content) >= 1) {
            return true;
        }
        return false;
    }

    public static function getPageNewsAdmin($page = 1)
    {
        $limit = News::SHOW_BY_DEFAULT_ADMINNEWS;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT_ADMINNEWS;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, newscat_id, title, content, datenews FROM news '
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
        $lastNews = array();
        while ($row = $result->fetch()) {
            $lastNews[$i]['id'] = $row['id'];
            $lastNews[$i]['title'] = $row['title'];
            $lastNews[$i]['content'] = $row['content'];
            $lastNews[$i]['datenews'] = $row['datenews'];
            $lastNews[$i]['newscat_id'] = $row['newscat_id'];
            $i++;
        }
        return $lastNews;
    }

    public static function getPageCategoryAdmin($page = 1)
    {
        $limit = News::SHOW_BY_DEFAULT_ADMINNEWS;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT_ADMINNEWS;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, newscat FROM newscategory '
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
        $lastCategory = array();
        while ($row = $result->fetch()) {
            $lastCategory[$i]['id'] = $row['id'];
            $lastCategory[$i]['newscat'] = $row['newscat'];
            $i++;
        }
        return $lastCategory;
    }

    public static function getTotalNews()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM news';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }

    public static function getTotalCategory()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM newscategory';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }

    public static function addComentNews($news_id,$user_id,$msg)
    {
        $comenttime = Home::getDateTimeSQL();

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO newscoments (news_id, login_id, msg, date) '
            . 'VALUES (:news_id, :login_id, :msg, :date)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':news_id', $news_id, PDO::PARAM_STR);
        $result->bindParam(':login_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':msg', $msg, PDO::PARAM_STR);
        $result->bindParam(':date', $comenttime, PDO::PARAM_STR);
        return $result->execute();

    }

    public static function getComentsNews($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(news_id) AS count FROM newscoments WHERE news_id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }
}