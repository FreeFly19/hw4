<?php

require __dir__ . '/../config/autoload.php';

use ActiveRecord\User;

var_dump(
    User::findById(20)
);