<?php
class Article {
    /**
     * Возвращает список пуктов статей
     * @return array <p>Список пуктов статей</p>
     */
    public static function getArticleList()
    {
// Соединение с БД
        $db = Db::getConnection();

// Получение и возврат результатов
        $result = $db->query('SELECT id, title, preview, short_content,
 date, preview_, subtitle, text, text_, text_1, text_2, preview_m, 
  subtitle_, text_3, text_4, blockquote, preview_mi, text_5, subtitle_1, 
   text_6, preview_min, text_muted, text_7 FROM public.article ORDER BY id DESC');
        $articlesList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $articlesList[$i]['id'] = $row['id'];
            $articlesList[$i]['title'] = $row['title'];
            $articlesList[$i]['preview'] = $row['preview'];
            $articlesList[$i]['short_content'] = $row['short_content'];
            $articlesList[$i]['date'] = $row['date'];
            $articlesList[$i]['preview_'] = $row['preview_'];
            $articlesList[$i]['subtitle'] = $row['subtitle'];
            $articlesList[$i]['text'] = $row['text'];
            $articlesList[$i]['text_'] = $row['text_'];
            $articlesList[$i]['text_1'] = $row['text_1'];$articlesList[$i]['id'] = $row['id'];
            $articlesList[$i]['text_2'] = $row['text_2'];
            $articlesList[$i]['preview_m'] = $row['preview_m'];
            $articlesList[$i]['subtitle_'] = $row['subtitle_'];
            $articlesList[$i]['text_3'] = $row['text_3'];
            $articlesList[$i]['text_4'] = $row['text_4'];
            $articlesList[$i]['blockquote'] = $row['blockquote'];$articlesList[$i]['text_3'] = $row['text_3'];
            $articlesList[$i]['preview_mi'] = $row['preview_mi'];
            $articlesList[$i]['text_5'] = $row['text_5'];
            $articlesList[$i]['subtitle_1'] = $row['subtitle_1'];
            $articlesList[$i]['text_6'] = $row['text_6'];
            $articlesList[$i]['preview_min'] = $row['preview_min'];
            $articlesList[$i]['text_muted'] = $row['text_muted'];
            $articlesList[$i]['text_7'] = $row['text_7'];
            $i++;
        }
        return $articlesList;
    }

    public static function getRecomendedArticles()
    {
// Соединение с БД
        $db = Db::getConnection();

// Получение и возврат результатов
        $result = $db->query('SELECT id, title, preview, short_content,
 date  FROM public.article WHERE is_recomended=1 ORDER BY id DESC');

        $recomendedArticles = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $recomendedArticles[$i]['id'] = $row['id'];
            $recomendedArticles[$i]['title'] = $row['title'];
            $recomendedArticles[$i]['preview'] = $row['preview'];
            $recomendedArticles[$i]['short_content'] = $row['short_content'];
            $recomendedArticles[$i]['date'] = $row['date'];
            $i++;
        }
        return $recomendedArticles;
    }

    /**
     * Returns product item by id
     * @param integer $id
     */
    public static function getArticleItemById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM public.article WHERE id = ' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }


    }

}

