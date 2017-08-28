<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 28/08/2017
 * Time: 18:25
 */

namespace AppBundle\Service;


class DashboardService
{
    public function getPageMax($page, $nombre){
        return $nombrePageMax = ($nombre === "0") ? 1 : (int) ceil($nombre / 10.0);

    }
}