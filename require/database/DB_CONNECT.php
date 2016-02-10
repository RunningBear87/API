<?php
/**
 * Created by PhpStorm.
 * User: tylerdotson
 * Date: 1/26/16
 * Time: 4:06 PM
 */

namespace db;


class DB_CONNECT
{
    private $DB_HOST = ''; // HOST NAME
    private $DB_NAME = ''; // DATABASE NAME
    private $DB_USERNAME = ''; // USERNAME
    private $DB_PASSWORD = ''; // PASSWORD

    public function getHost(){
        return $this->DB_HOST;
    }

    public function getName(){
        return $this->DB_NAME;
    }

    public function getUsername(){
        return $this->DB_USERNAME;
    }

    public function getPassword(){
        return $this->DB_PASSWORD;
    }
}