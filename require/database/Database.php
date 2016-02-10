<?php
/**
 * Created by PhpStorm.
 * User: tylerdotson
 */

namespace db;

abstract class Database
{
    abstract public function __construct();
    abstract public function query($query);
    abstract public function __destruct();
}