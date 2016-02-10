<?php
/**
 * Created by PhpStorm.
 * User: tylerdotson
 * Date: 1/26/16
 * Time: 11:17 AM
 */

namespace model;

use db\MySQLI_DB;

class Students{
    public function getStudents(){
        $database = new MySQLI_DB();
        return $database->query("SELECT * FROM  students");
    }

    public function addStudents($body){
        $database = new MySQLI_DB();

        $firstName = $database->escapeString($body['firstName']);
        $lastName = $database->escapeString($body['lastName']);
        $beltColor = $database->escapeString($body['beltColor']);
        $dob = $database->escapeString($body['dob']);
        $sex = $database->escapeString($body['sex']);

        $query = "INSERT INTO `students`(`firstName`, `lastName`, `beltColor`, `dob`, `sex`) VALUES ('$firstName','$lastName','$beltColor','$dob', '$sex')";

        if($results = $database->query($query))
        {
            return ["status" => "success", "data" => $database->getLastInsertedID()];
        }
        else
        {
            return ["status" => "failure", "data" => null];
        }
    }
}