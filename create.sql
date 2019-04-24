CREATE DATABASE IF NOT EXISTS guestbook;
USE guestbook;

DROP TABLE IF EXISTS `chart`;
CREATE TABLE `chart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT NULL,
  `content` text,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `comment` text NOT NULL,
  `addtime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
);

DROP TABLE IF EXISTS `userlist`;
CREATE TABLE `userlist` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  `regtime` int(11) DEFAULT NULL,
  `regip` varchar(15) DEFAULT NULL,
  `logintime` int(11) DEFAULT NULL,
  `loginip` varchar(15) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `isadmin` tinyint(1) DEFAULT '0',
  `charttime` int(11) DEFAULT '0',
  `getcharttime` int(11) DEFAULT '0',
  PRIMARY KEY (`uid`)
);