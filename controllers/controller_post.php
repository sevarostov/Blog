<?php

/**
 * Контроллер controller_post
 */
class controller_post
{

    /**
     * Action для страницы "Статьи"
     */
    public function action_index()
    {
        $articles = array();
        $articles=Article::getArticleList();

//        echo '<pre>';
//        var_dump($articles);

        // Подключаем вид
        require_once(ROOT . '/views/site/post.php');
        return true;
    }
}
