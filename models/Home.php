<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 04.06.2019
 * Time: 7:47
 */

class Home
{
    public static function getDate()
    {
        return date("d.m.Y");
    }

    public static function getTime()
    {
        return date("H:i:s");
    }

    public static function getDateTimeSQL()
    {
        return date("Y.m.d H:i:s");
    }

    public static function GetIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public static function feedBackMSG($login, $email, $msg)
    {
        $ip = Home::GetIP();
        $gDate = Home::getDate();
        $gTime = Home::getTime();

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO feedback (nick, email, message, date, time, ip) '
            . 'VALUES (:nick, :email, :message, :date, :time, :ip)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':nick', $login, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':message', $msg, PDO::PARAM_STR);
        $result->bindParam(':date', $gDate, PDO::PARAM_STR);
        $result->bindParam(':time', $gTime, PDO::PARAM_STR);
        $result->bindParam(':ip', $ip, PDO::PARAM_STR);
        return $result->execute();
    }

}