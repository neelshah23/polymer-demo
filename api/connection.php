<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 29/9/15
 * Time: 9:43 AM
 */

header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "iauro100";
$dbname = "polymer";

// Create connection
$con = new mysqli($servername, $username, $password,$dbname);