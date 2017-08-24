<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 24/08/2017
 * Time: 19:14
 */

namespace AppBundle\Utils;


class FileUtils
{
    public function getWebDir(){
        return $this->getParameter('web_dir');
    }
}