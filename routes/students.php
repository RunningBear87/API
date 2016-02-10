<?php
/**
 * Created by PhpStorm.
 * User: tylerdotson
 * Date: 1/26/16
 * Time: 11:17 AM
 */

$app->get('/students', function () {
    $students = new model\Students();
    $result = $students->getStudents();
    echo json_encode($result, true);
});

$app->post('/addStudent', function() use ($app){
    $students = new model\Students();
    $result = $students->addStudents($app->request->getBody());
    echo json_encode($result, true);
});