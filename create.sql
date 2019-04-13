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
  `addtime` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
);

INSERT INTO `guestbook` VALUES ('1', '2', '1111', '1369134008', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('2', '2', '沈大高速', '1369134061', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('3', '2', '考虑好了', '1369134488', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('4', '2', '四点半', '1369134500', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('5', '2', 'sdfsdf', '1369134502', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('6', '2', 'sdfsdfassdsdf', '1369134505', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('7', '2', 'sdfsdfsdfsdfsdfs', '1369134508', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('8', '2', 'sdfsdfsd sdfsdfsdsdvsd sdfdsfds ', '1369134513', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('9', '2', 'sdfsd fsd sfsd dsfs fdf sd', '1369134518', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('10', '2', 'test留言信息', '1369134535', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('11', '2', 'test留言信息test留言信息test留言信息test留言信息', '1369134537', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('12', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134540', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('13', '2', 'test留言信息test留言信息test留言信息', '1369134543', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('14', '2', 'test留言信息test留言信息test留言信息test留言信息', '1369134545', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('15', '2', 'test留言信息test留言信息test留言信息test留言信息', '1369134548', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('16', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134551', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('17', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134555', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('18', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134558', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('19', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134562', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('20', '2', 'test留言信息test留言信息test留言信息', '1369134574', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('21', '2', 'test留言信息test留言信息', '1369134576', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('22', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134580', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('23', '2', 'test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息test留言信息', '1369134584', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('24', '3', 'testleo、', '1369138593', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('25', '3', '司法鉴定所浪费', '111', '111', '0');
INSERT INTO `guestbook` VALUES ('26', '2', '123456', '1505961064', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('27', '2', '', '1505961931', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('28', '2', '1', '1505961986', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('29', '2', '1', '1505961991', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('30', '2', '1', '1505962012', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('31', '2', '123', '1505976467', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('32', '12', 'ceshiliuyan', '1523416148', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('33', '3', '留言1111111', '1523587542', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('34', '3', 'liuyan11111', '1523600871', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('37', '3', '111', '1524032932', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('38', '3', '222', '1524039219', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('39', '3', '1112222224444', '1524464246', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('40', '27', '添加', '1524638100', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('41', '3', '123', '1524808874', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('42', '3', '11111', '1525242250', '127.0.0.1', '0');
INSERT INTO `guestbook` VALUES ('43', '3', 'aaa', '1525245578', '127.0.0.1', '0');

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

INSERT INTO `userlist` VALUES ('1', 'admin', 'e3ceb5881a0a1fdaad01296d7554868d', '111111', 'uploadfile/136979696849.jpg', '1367980003', '127.0.0.1', '1369796903', '127.0.0.1', '0', '0', '0', '0');