/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : db_pub

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-08-26 18:13:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pub_dept
-- ----------------------------
DROP TABLE IF EXISTS `pub_dept`;
CREATE TABLE `pub_dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '50',
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pub_dept
-- ----------------------------
INSERT INTO `pub_dept` VALUES ('9', '李', '11111111111', '0', '123');
INSERT INTO `pub_dept` VALUES ('10', '李小明', '11111111111', '0', '123');
INSERT INTO `pub_dept` VALUES ('8', '赵', '13322232223', '0', '技术');
INSERT INTO `pub_dept` VALUES ('4', '王', '12322222222', '2', '技术');
INSERT INTO `pub_dept` VALUES ('5', '刘', '12366666666', '3', '总经理');
INSERT INTO `pub_dept` VALUES ('6', '李', '12322222222', '2', '技术');
INSERT INTO `pub_dept` VALUES ('7', '刘', '12366666666', '3', '总经理');
INSERT INTO `pub_dept` VALUES ('11', '小名', '123123123123', '2', '消息');
INSERT INTO `pub_dept` VALUES ('12', '嘻嘻', '123123', '2', '3123');
INSERT INTO `pub_dept` VALUES ('13', '张三', '123123123123', '123123123', '好学生\r\n');
INSERT INTO `pub_dept` VALUES ('14', '天真的我', '1231312313', '123123123', '123123123123123123');
INSERT INTO `pub_dept` VALUES ('15', '', '', '50', null);
INSERT INTO `pub_dept` VALUES ('16', '天使', '156794613', '50', null);

-- ----------------------------
-- Table structure for pub_user
-- ----------------------------
DROP TABLE IF EXISTS `pub_user`;
CREATE TABLE `pub_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pub_user
-- ----------------------------
INSERT INTO `pub_user` VALUES ('1', 't10000', '10000t', null, null, null, null);
