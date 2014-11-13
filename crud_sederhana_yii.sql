/*
Navicat MySQL Data Transfer

Source Server         : julian
Source Server Version : 50532
Source Host           : 127.0.0.1:3306
Source Database       : crud_sederhana_yii

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-11-14 00:48:59
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
  CONSTRAINT `mas_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `mas_role` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mas_user
-- ----------------------------
INSERT INTO mas_user VALUES ('10902368', 'reza', 'reza', '61f07753e95277cd747a54aee059d3bd', '4');
