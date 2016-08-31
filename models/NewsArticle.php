<?php

/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 31.08.2016
 * Time: 10:14
 */
class NewsArticle
    extends Model
{
    protected static $table = 'news';
    public $title;
    public $info_news;
    public $image;
    public $author_id;
}