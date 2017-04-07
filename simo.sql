/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : simo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-07 11:44:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ss_about`
-- ----------------------------
DROP TABLE IF EXISTS `ss_about`;
CREATE TABLE `ss_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ss_about
-- ----------------------------

-- ----------------------------
-- Table structure for `ss_advertisement`
-- ----------------------------
DROP TABLE IF EXISTS `ss_advertisement`;
CREATE TABLE `ss_advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '图片名称',
  `pic` varchar(255) DEFAULT NULL COMMENT '列表预览图',
  `img` varchar(255) DEFAULT NULL COMMENT '内容页图',
  `state` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ss_advertisement
-- ----------------------------

-- ----------------------------
-- Table structure for `ss_contact`
-- ----------------------------
DROP TABLE IF EXISTS `ss_contact`;
CREATE TABLE `ss_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgurl` varchar(255) DEFAULT NULL COMMENT '地图图片',
  `mail` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `fax` varchar(20) DEFAULT NULL COMMENT '传真机',
  `zip_code` int(11) DEFAULT NULL COMMENT '邮政编码',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ss_contact
-- ----------------------------

-- ----------------------------
-- Table structure for `ss_movie`
-- ----------------------------
DROP TABLE IF EXISTS `ss_movie`;
CREATE TABLE `ss_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ss_movie
-- ----------------------------

-- ----------------------------
-- Table structure for `ss_user`
-- ----------------------------
DROP TABLE IF EXISTS `ss_user`;
CREATE TABLE `ss_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ss_user
-- ----------------------------
