<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$db = new mysqli("192.168.14.37", 'DbMysql08', 'DbMysql08', 'db_project_test');
$db->set_charset('utf8');

//$db = new mysqli('localhost', 'DbMysql08', 'DbMysql08', 'DbMysql08', 3305);  # for nova
// TODO: handle problem connecting to mysql!!!!

function run_sql_select_query($sql_query){
    global $db;
    if(!$result = $db->query($sql_query)){
        die('There was an error running the query [' . $db->error . ']');
    }
    return $result;
}

function run_sql_insert_query($sql_query){
    global $db;
    if($db->query($sql_query) === TRUE){
        return true;
    }
    else {
        die('There was an error running the query [' . $db->error . ']');
    }
}
?>