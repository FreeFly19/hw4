<?php
/**
 * Created by PhpStorm.
 * User: FreeFly
 * Date: 30.10.15
 * Time: 23:55
 */

namespace App\Provider;

use App\Application;

interface ServiceProviderInterface {

    public function register(Application $app);

} 