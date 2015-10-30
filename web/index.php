<?php

require __dir__ . '/../config/autoload.php';

use activerecord\User;

var_dump(
    User::find(
        [
            ['name', '=', 'Pisun'],
            ['id', '>=', '17']
        ]
    )
);