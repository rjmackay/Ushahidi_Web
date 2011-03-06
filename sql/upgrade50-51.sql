CREATE TABLE `ushahidi`.`layer_category` (
`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
`layer_id` int( 11 ) NOT NULL default '0',
`category_id` int( 11 ) NOT NULL default '0',
PRIMARY KEY ( `id` ) ,
UNIQUE KEY `layer_category_ids` ( `layer_id` , `category_id` )
) ENGINE = MYISAM DEFAULT CHARSET = utf8;
