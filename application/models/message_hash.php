<?php

class Message_Hash_Model extends ORM
{
	protected $belongs_to = array('message');
	
	// Database table name
	protected $table_name = 'message_hash';
}
