<?php

class AdminController {

	public function actionIndex()
	{
        User::checkAdmin();

		require_once(ROOT . '/views/admin/index.php');

		return true;
	}

    public function actionChart()
    {
        User::checkAdmin();
        $reg = Admin::getRegMonthCount();
        $news = Admin::getNewsMonthCount();
        $result = false;
        if (isset($_POST['generate'])) {
            $name = $_POST['name'];
            $result = Admin::getComentByNameCount($name);
        }
        require_once(ROOT . '/views/admin/chart.php');

        return true;
    }

    public function actionNews($page = 1)
    {
        User::checkAdmin();
        if (isset($_POST['submit'])) {
            News::deleteNewsById($_POST['newsid']);
        }

        if (isset($_POST['generate'])) {
            $content = Pdf::generateAllNews();
            Pdf::generatePDF('Список новостей',$content,'allnews');
        }

        $lastnews = News::getPageNewsAdmin($page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = News::getTotalNews();
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT_ADMINNEWS, 'page-');

        require_once(ROOT . '/views/admin/news.php');

        return true;
    }

    public function actionCategory($page = 1)
    {
        User::checkAdmin();
        if (isset($_POST['submit'])) {
            News::deleteCategoryById($_POST['newsid']);
        }
        if (isset($_POST['add'])) {
            News::addCategory($_POST['name']);
        }
        $lastcategory = News::getPageCategoryAdmin($page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = News::getTotalCategory();
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT_ADMINNEWS, 'page-');

        require_once(ROOT . '/views/admin/category.php');

        return true;
    }

    public function actionAddnews()
    {
        User::checkAdmin();

        $newscat = News::getCategoryNews();

        if(isset($_POST['submit'])) {

            $title = $_POST['title'];
            $content = $_POST['msg'];;
            $category = $_POST['category'];

            $author = $_SESSION['user'];
            if (!News::checkNewsName($title)) {
                $errors[] = 'Название новости не должно быть пустым';
            }

            if (!News::checkNewsContent($content)) {
                $errors[] = 'Контент новости не должен быть пустой';
            }

            if ($errors == false) {
                News::addNews($title,$category,$content,$author);
                echo "Новость с названием<br>Новость с контентом<br>Новость успешно добавлена";
            }

        }

        require_once(ROOT . '/views/admin/newsadd.php');

        return true;
    }


    public function actionFeedback($page = 1)
    {
        User::checkAdmin();

        if (isset($_POST['generate'])) {
            $content = Pdf::generateAllFeedback();
            Pdf::generatePDF('Список обратной связи',$content,'feedback');
        }

        $lastFeedback = Admin::getPageFeedback($page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Admin::getTotalFeedback();

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(ROOT . '/views/admin/feedback.php');
        return true;
    }
}

