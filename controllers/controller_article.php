<?php


class controller_article
{


    public function action_index($id)
    {
        if ($id) {
            $articleItem = Article::getArticleItemById($id);

//            echo '<pre>';
//            print_r($articleItem);
//            echo '</pre>';


//            echo 'action_index';
        }

        // Подключаем вид
        require_once(ROOT . "/views/articles/view.php");

        return true;
    }







}