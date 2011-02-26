ALTER TABLE  `page` ADD  `page_navigation` ENUM(  "primary",  "secondary" ) NOT NULL AFTER  `page_tab` ,
ADD INDEX (  `page_navigation` );

# Bump up version
UPDATE `settings` SET `db_version` = '50' WHERE `id`=1 LIMIT 1;
