<?php
/**
 * Created by PhpStorm.
 * User: FreeFly
 * Date: 30.10.15
 * Time: 16:22
 */

namespace ActiveRecord;


class User extends AbstractModel
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $password;

    protected $fields = ['id', 'name', 'password'];

} 