-- Not sure if this is correct, but this is a SQL change
CREATE TABLE IF NOT EXISTS `message_hash` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `message_id` bigint(20) unsigned NOT NULL,
 `hash_a` bigint(20) unsigned NOT NULL,
 `hash_b` bigint(20) unsigned NOT NULL,
 PRIMARY KEY (`id`),
 KEY `hash_a` (`hash_a`,`hash_b`)
) ENGINE=MyISAM;