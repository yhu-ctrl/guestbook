/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : guestbook1

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2019-03-22 14:06:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chart
-- ----------------------------
DROP TABLE IF EXISTS `chart`;
CREATE TABLE `chart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT NULL,
  `content` text,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chart
-- ----------------------------

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
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
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
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

-- ----------------------------
-- Table structure for userlist
-- ----------------------------
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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userlist
-- ----------------------------
INSERT INTO `userlist` VALUES ('1', 'admin', 'admin', 'admin', 'null', '0', '127.0.0.1', '0', '127.0.0.1', '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('2', 'admin1', 'e3ceb5881a0a1fdaad01296d7554868d', '111111', 'uploadfile/136979696849.jpg', '1367980003', '127.0.0.1', '1369796903', '127.0.0.1', '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('3', 'jeky1', '96e79218965eb72c92a549dd5a330112', 'leo', './uploads/2018/04/201804121710537259.png', '1368584269', '127.0.0.1', '1369140317', '127.0.0.1', '0', '0', '1525413707', '1525413707');
INSERT INTO `userlist` VALUES ('4', 'jeky2', '96e79218965eb72c92a549dd5a330112', 'leo2', './uploads/2018/04/201804121710537259.png', '1368584304', '127.0.0.1', '1368584304', '127.0.0.1', '0', '0', '1525406026', '1525406026');
INSERT INTO `userlist` VALUES ('5', '1231', '202cb962ac59075b964b07152d234b70', '123', './uploads/2018/04/201804121710537259.png', null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('6', '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1234', './uploads/2018/04/201804121710537259.png', null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('7', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1', './uploads/2018/04/201804121710537259.png', null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('19', '12', 'c20ad4d76fe97759aa27a0c99bff6710', '12', './uploads/2018/04/201804121710537259.png', '1523524253', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('11', 'jeky3', '96e79218965eb72c92a549dd5a330112', 'jeky3', './uploads/2018/04/201804121710537259.png', '1522725995', '127.0.0.1', null, null, '0', '0', '1524800687', '1524800687');
INSERT INTO `userlist` VALUES ('12', 'jeky4', '96e79218965eb72c92a549dd5a330112', 'jeky4', './uploads/2018/04/201804121710537259.png', '1522739818', '', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('18', '11', '6512bd43d9caa6e02c990b0a82652dca', '11', './uploads/2018/04/201804121631406436.png', '1523521900', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('26', 'jeky13', '96e79218965eb72c92a549dd5a330112', 'jeky13', './uploads/2018/04/201804121631406436.png', '1524486263', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('25', 'jeky12', '96e79218965eb72c92a549dd5a330112', 'jeky12', './uploads/2018/04/201804121631406436.png', '1524475719', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('27', 'leo1', '96e79218965eb72c92a549dd5a330112', 'leo1', './uploads/2018/04/201804251434208378.png', '1524638060', '', null, null, '0', '0', '1524640711', '1524640710');
INSERT INTO `userlist` VALUES ('28', 'leo2', '96e79218965eb72c92a549dd5a330112', 'leo2', './uploads/2018/04/201804121631406436.png', '1524640561', '127.0.0.1', null, null, '0', '0', '1524797056', '1524797056');
INSERT INTO `userlist` VALUES ('29', 'jeky5', '96e79218965eb72c92a549dd5a330112', 'jeky5', './uploads/2018/04/201804121631406436.png', '1525418672', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('30', 'jeky6', '96e79218965eb72c92a549dd5a330112', 'jeky6', 'uploads/2018/05/201805071737026105.png', '1525685822', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('31', 'jeky7', '96e79218965eb72c92a549dd5a330112', 'jeky7', 'uploads/2018/05/201805072029297272.png', '1525696169', '127.0.0.1', null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('73', 'leo1', '111', 'leo1', null, null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('61', 'jeky', '96e79218965eb72c92a549dd5a330112', 'jeky', null, null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('70', 'leo1', '111111', 'leo', null, null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('71', 'leo1', '111', 'leo1', null, null, null, null, null, '0', '0', '0', '0');
INSERT INTO `userlist` VALUES ('72', 'leo1', '111', 'leo1', null, null, null, null, null, '0', '0', '0', '0');
