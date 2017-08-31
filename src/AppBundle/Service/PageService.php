<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 31/08/2017
 * Time: 22:27
 */

namespace AppBundle\Service;


class PageService
{
    /**
     * PageService constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param int $nombre
     * @return int $pageMax
     */
    public function getPageMax( $nombre){
        return ($nombre === "0") ? 1 : (int) ceil($nombre / 10.0);
    }

    public function verifPage($page, $nombrePageMax){
        if ($page > $nombrePageMax) {
            $page = $nombrePageMax;
        }
        return $page;
    }
}