<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 04.06.2019
 * Time: 7:47
 */

class Pdf
{
    public static function generatePDF($title,$content,$filename)
    {
        $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $obj_pdf->SetCreator(PDF_CREATOR);
        $obj_pdf->SetTitle($title);
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $obj_pdf->SetDefaultMonospacedFont('helvetica');
        $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
        $obj_pdf->setPrintHeader(false);
        $obj_pdf->setPrintFooter(false);
        $obj_pdf->SetAutoPageBreak(TRUE, 10);
        $obj_pdf->SetFont('dejavusans', '', 11);
        $obj_pdf->AddPage();
        $obj_pdf->writeHTML($content);

        return $obj_pdf->Output($filename.'.pdf', 'I');
    }

    public static function generatePDFL($title,$content,$filename)
    {
        $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $obj_pdf->SetCreator(PDF_CREATOR);
        $obj_pdf->SetTitle($title);
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $obj_pdf->SetDefaultMonospacedFont('helvetica');
        $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
        $obj_pdf->setPrintHeader(false);
        $obj_pdf->setPrintFooter(false);
        $obj_pdf->SetAutoPageBreak(TRUE, 10);
        $obj_pdf->SetFont('dejavusans', '', 11);
        $obj_pdf->AddPage();
        $obj_pdf->writeHTML($content);

        return $obj_pdf->Output($filename.'.pdf', 'I');
    }

    public static function generateAllNews()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT news.id,title,newscategory.newscat AS  newscat, user.login AS author,datenews
                FROM news 
                INNER JOIN newscategory ON news.newscat_id = newscategory.id
                INNER JOIN user ON news.author_id = user.id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $content = '';
        $content .= '  
            <h4 align="center">Список всех новостей на сайте</h4><br /> 
            <table border="1" cellspacing="0" cellpadding="3">  
            <tr>  
            <th width="5%">Id</th>  
            <th width="25%">Название</th>  
            <th width="15%">Категория</th>  
            <th width="30%">Автор</th>  
            <th width="30%">Дата</th> 
            </tr>  
            ';
        while ($row = $result->fetch()) {
            $content .= '<tr>  
            <td>'.$row['id'].'</td>  
            <td>'.$row['title'].'</td>  
            <td>'.$row['newscat'].'</td>  
            <td>'.$row['author'].'</td> 
            <td>'.$row['datenews'].'</td>   
            </tr>  
            ';
        }
        $content .= '</table>';

        return $content;
    }

    public static function generateUserByName($user)
    {
        $gamesys = User::getUserGameSystem($user['login_id']);

        $content = '';
        $content .='<h1 align="center">';
        $content .= $user['login'];
        $content .= '</h1>';
        $content .= '<div align="center" style="border-radius: 100px"><img style="border: 3px solid green;margin-bottom: auto" width = "100" height = "100" src = "/uploads/images/avatars/'.$user['avatar'].'"></div><hr>';
        $content .='<h3>О себе:</h3><p>';
        $content .= $user['description'];
        $content .='</p><br />';
        $content .='<table border="1" cellspacing="0" cellpadding="3">  
            <tr>  
            <th width="5%">Id</th>  
            <th width="15%">Дата регистрации</th>  
            <th width="15%">Город</th>  
            <th width="10%">UTC</th>  
            <th width="25%">Почта</th> 
            <th width="25%">ВК</th> 
            <th width="10%">Дискорд</th> 
            </tr>';
        $content .= '<tr>  
            <td>'.$user['login_id'].'</td>  
            <td>'.$user['regdate'].'</td>  
            <td>'.$user['city'].'</td>  
            <td>'.$user['utc'].'</td> 
            <td>'.$user['email'].'</td>   
            <td>vk.com/'.$user['vk'].'</td> 
            <td>'.$user['discord'].'</td>  
            </tr>  
            ';
        $content .= '</table><br>';
        $content .='<div><table border="1" cellspacing="0" cellpadding="3">  
            <tr>  
            <th width="40%">Игровые системы</th>  
            <th width="20%">Игровой опыт</th>  
            <th width="20%">Игровая форма</th>  
            <th width="20%">Роль</th>  

            </tr>';
        $content .= '<tr>
            <td>';
            foreach($gamesys as $gamesystem){
                if (!next($gamesys)) {
                    $content .= $gamesystem['gamesystem'];
                }
                else {
                    $content .= $gamesystem['gamesystem'].",<br>";
                }

            }
            $content .= '</td>  
            <td>'.$user['gamexp'].'</td>  
            <td>'.$user['gameform'].'</td>  
            <td>'.$user['role'].'</td>  
            </tr>  
            ';
        $content .= '</table></div>';
        return $content;

    }

    public static function generateAllFeedback()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM feedback';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $content = '';
        $content .= '  
            <h4 align="center">Список всех сообщений в обратной связи:</h4><br /> 
            <h2>✔ - Означает, что это зарегистрированный пользователь и электронная почта</h2>
            <br>
            <table border="1" cellspacing="0" cellpadding="3">  
            <tr>  
            <th width="4%">id</th>  
            <th width="15%">Ник</th>  
            <th width="25%">Почта</th>  
            <th width="25%">Сообщение</th>  
            <th width="15%">Дата</th>  
            <th width="20%">IP</th> 
            </tr>  
            ';
        while ($row = $result->fetch()) {
            $content .= '<tr>  
            <td>'.$row['id'].'</td>  
            <td>'.$row['nick'].'</td>  
            <td>'.$row['email'].'</td>  
            <td>'.$row['message'].'</td> 
            <td>'.$row['date'].'</td>  
            <td>'.$row['ip'].'</td>   
            </tr>  
            ';
        }
        $content .= '</table>';

        return $content;
    }

    public static function generateAllUsers()
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
        ORDER BY login ASC";

        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();


        $content = '';
        if($result->rowCount() > 0)
        {
            $content .= '  
            <h4 align="center">Список пользователей:</h4><br /> 
            <br>
            <table border="1" cellspacing="0" cellpadding="3">  
            <tr>  
            <th width="4%">id</th>  
            <th width="10%">Ник</th>  
            <th width="10%">Почта</th>  
            <th width="10%">Вк</th>  
            <th width="10%">Дискорд</th>  
            <th width="10%">Город</th> 
            <th width="10%">UTC</th>
            <th width="10%">Игр. форма</th>
            <th width="10%">Игр. опыт</th>
            <th width="10%">Роль</th>
            </tr>  
            ';
            while ($row = $result->fetch()) {
                $content .= '<tr>  
            <td>'.$row['login_id'].'</td> 
            <td>'.$row['login'].'</td>  
            <td>'.$row['email'].'</td>  
            <td>'.$row['vk'].'</td>  
            <td>'.$row['discord'].'</td>  
            <td>'.$row['city'].'</td>  
            <td>'.$row['utc'].'</td>  
            <td>'.$row['gameform'].'</td>  
            <td>'.$row['gamexp'].'</td>  
            <td>'.$row['role'].'</td>    
            </tr>  
            ';
            }
            $content .= '</table>';
        }
        else
        {
            $content .= '  
            <h4 align="center">Не найдены пользователи с такими параметрами!</h4><br />';
        }

        return $content;
    }
}