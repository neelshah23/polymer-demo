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
//echo $_POST['id']; die();

$sql = "SELECT * FROM clientList WHERE id = ".$_POST['id'];
$result = $con->query($sql);
$res = [];
while($resp = $result->fetch_assoc()) {
    $res[] = $resp;
}
$con->close();
echo json_encode($res);

//// mysqli
//$con = mysqli_connect($servername,$username, $password);
//mysqli_select_db($con, $dbname);
//$res = mysqli_query($con, $sql);
//
//while($resp = mysqli_fetch_array($res))
//{
//    print_r($resp);
//}
//
//mysqli_close($con);


