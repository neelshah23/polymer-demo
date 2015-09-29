<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
require_once("connection.php");
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 28/9/15
 * Time: 7:30 PM
 */



if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
}

$userId = $_POST['id'];
if($userId>0){
    $sql = "REPLACE INTO clientList
          SET name=\"".$_POST['name']."\",
          email=\"".$_POST['email']."\",
          mobile=\"".$_POST['mobile']."\",
          address=\"".$_POST['address']."\",
          locality=\"".$_POST['locality']."\",
          id=".$userId.",
          city=\"".$_POST['city']."\"";
}
else{
    $sql = "INSERT INTO clientList(name, email, mobile, address, locality, city)
    VALUES (\"".$_POST['name']."\",
    \"".$_POST['email']."\",
    \"".$_POST['mobile']."\",
    \"".$_POST['address']."\",
    \"".$_POST['locality']."\",
    \"".$_POST['city']."\")";
}
$result = $con->query($sql);


$sql = "SELECT * FROM clientList WHERE id = ".$con->insert_id;
$result = $con->query($sql);
$res = [];
while($resp = $result->fetch_assoc()) {
    $res[] = $resp;
}
echo json_encode($res);
