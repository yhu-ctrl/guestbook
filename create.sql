CREATE DATABASE IF NOT EXISTS guestbook;
USE guestbook;

DROP TABLE IF EXISTS 'chart';
CREATE TABLE 'chart' (
  'id' INT NOT NULL AUTO_INCREMENT,
  'uid' INT DEFAULT NULL,
  'content' TEXT,
  'addtime' INT(11) DEFAULT NULL,
  PRIMARY KEY ('id')
);

DROP TABLE IF EXISTS 'guestbook';
CREATE TABLE 'guestbook' (
  'id' INT NOT NULL AUTO_INCREMENT,
  'uid' INT NOT NULL,
  'comment' TEXT NOT NULL,
  'addtime' DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  'ip' VARCHAR(15) NOT NULL,
  'active' BOOLEAN NOT NULL DEFAULT '0',
  PRIMARY KEY ('id'),
  KEY 'uid' ('uid')
);

DROP TABLE IF EXISTS 'userlist';
CREATE TABLE 'userlist' (
  'uid' INT NOT NULL AUTO_INCREMENT,
  'username' VARCHAR(20) NOT NULL,
  'password' char(32) NOT NULL,
  'nickname' VARCHAR(20) NOT NULL,
  'headimg' VARCHAR(255) DEFAULT NULL,
  'regtime' INT DEFAULT NULL,
  'regip' VARCHAR(15) DEFAULT NULL,
  'logintime' INT DEFAULT NULL,
  'loginip' VARCHAR(15) DEFAULT NULL,
  'active' BOOLEAN DEFAULT '0',
  'isadmin' BOOLEAN DEFAULT '0',
  'charttime' INT DEFAULT '0',
  'getcharttime' INT DEFAULT '0',
  PRIMARY KEY ('uid')
);