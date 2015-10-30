<?php
/**
 * Created by PhpStorm.
 * User: FreeFly
 * Date: 30.10.15
 * Time: 23:12
 */

namespace ActiveRecord;

class Post extends AbstractModel{

    public $id;
    public $title;
    public $body;
    public $author_id;


    protected $fields = ['id', 'title', 'body', 'author_id'];
} 