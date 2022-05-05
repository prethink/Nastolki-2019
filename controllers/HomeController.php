<?php

class HomeController {

	public function actionIndex($page = 1)
	{
	    $lastnews = News::getPageNews($page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = News::getTotalNews();

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(ROOT . '/views/home/index.php');
        return true;
	}

    public function actionNews($id,$page = 1)
    {
        $total = News::getComentsNews($id);
        $lastcoment = News::getComentNews($page,$id);
        $lastnews = News::getNewsById($id);

        if (isset($_POST['submit'])) {
            $msg = $_POST['msg'];
            $user_id = $_SESSION["user"];
            News::addComentNews($id,$user_id,$msg);
            header("Location: /home/news/$id");

        }

        if (isset($_POST['delete'])) {

        }
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/home/news.php');

        return true;
    }

    public function actionChat()
    {
        require_once(ROOT . '/views/home/chat.php');

        return true;
    }

    public function actionFeedback()
    {
        $usermail = false;
        $username = false;

        if (!User::isGuest())
        {
            $username = User::getUserName($_SESSION['user']);
            $usermail = User::getUserEmail($_SESSION['user']);
        }

        if (isset($_POST['submit'])) {
            if (User::isGuest())
            {
                $login = "Гость:".$_POST['login'];
                $email = $_POST['email'];
            }
            else{
                $login = $_POST['login']." ✔";
                $email = $_POST['email']." ✔";
            }



            $msg = $_POST['msg'];
            Home::feedBackMSG($login, $email, $msg);
        }
        require_once(ROOT . '/views/home/feedback.php');

        return true;
    }

	public function action404()
	{
		require_once(ROOT . '/views/home/404.php');

		return true;
	}

}

