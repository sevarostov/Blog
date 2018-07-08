<?php

/**
 * Контроллер controller_about
 */
class controller_about
{

    /**
     * Action для страницы "обо мне"
     */
    public function action_index()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

    
}
