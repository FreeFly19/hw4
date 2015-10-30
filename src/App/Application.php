<?php
/**
 * Created by PhpStorm.
 * User: FreeFly
 * Date: 30.10.15
 * Time: 15:33
 */

namespace App;

use App\Provider\ServiceProviderInterface;


class Application {

    protected $controllers = [];

    protected $services = [];


    public function registerProvider(ServiceProviderInterface $service, $name){
        $service[$name] = $service->register($this);
    }

    public function getProvider($name){
        return $this->services[$name];
    }




} 