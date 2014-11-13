/*
Navicat MySQL Data Transfer

Source Server         : julian
Source Server Version : 50532
Source Host           : 127.0.0.1:3306
Source Database       : dbs_resto_app

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-11-13 18:46:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `mas_role`
-- ----------------------------
DROP TABLE IF EXISTS `mas_role`;
CREATE TABLE `mas_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mas_role
-- ----------------------------
INSERT INTO mas_role VALUES ('3', 'Admin');
INSERT INTO mas_role VALUES ('4', 'Super Admin');
INSERT INTO mas_role VALUES ('5', 'Developer');

-- ----------------------------
-- Table structure for `mas_user`
-- ----------------------------
DROP TABLE IF EXISTS `mas_user`;
CREATE TABLE `mas_user` (
  `nip` varchar(15) NOT NULL DEFAULT '',
  `username` varchar(40) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `fk_user_to_role` FOREIGN KEY (`role_id`) REFERENCES `mas_role` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mas_user
-- ----------------------------

-- ----------------------------
-- Table structure for `tes`
-- ----------------------------
DROP TABLE IF EXISTS `tes`;
CREATE TABLE `tes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tes` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tes
-- ----------------------------
