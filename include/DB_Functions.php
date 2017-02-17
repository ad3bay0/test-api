<?php

class DB_Functions{

private $conn;

function __construct(){

require_once 'DB_Connect.php';

$db =  new DB_Connect();

$this->conn = $db->connect();


}



function __destruct(){



}


/**
*store new user
*retruns user details
*/

public function storeUser($name,$email,$password){

$uuid = uniqid('',true);
$hash =  $this->hashSSHA($password);
$encrypted_password = $hash["encrypted"];
$salt = $hash["salt"];

$stmt = $this->conn->prepare("INSERT INTO users(unique_id, name, email,pass_encrypt,pass_salt,created_at) VALUES (?,?,?,?,?,NOW()");

$stmt->bind_param("sssss",$uuid,$name,$email,$encrypted_password,$salt);
$result = $stmt->execute();





}




}


