CREATE TABLE `typecho_links` (
  `lid` int(10) unsigned NOT NULL auto_increment COMMENT 'links������',
  `name` varchar(200) default NULL COMMENT 'links����',
  `url` varchar(200) default NULL COMMENT 'links��ַ',
  `description` varchar(200) default NULL COMMENT 'links����',
  `order` int(10) unsigned default '0' COMMENT 'links����',
  PRIMARY KEY  (`lid`)
) ENGINE=MYISAM  DEFAULT CHARSET=%charset%;
