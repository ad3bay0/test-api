<?php

class DB_Connect{

	private conn;

/*
*connecting to database
*/
public function connect(){

require_once 'include/Config';

this->conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

return this->conn;




}

}

