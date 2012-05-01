-- Add map point reports setting
INSERT INTO `settings` (`key`, `value`) values ('map_point_reports','0');

-- UPDATE db_version
UPDATE `settings` SET `value` = 99 WHERE `key` = 'db_version';
