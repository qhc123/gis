/*
Navicat MySQL Data Transfer

Source Server         : 121
Source Server Version : 50704
Source Host           : localhost:3306
Source Database       : gis

Target Server Type    : MYSQL
Target Server Version : 50704
File Encoding         : 65001

Date: 2015-12-17 11:22:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_name` char(10) NOT NULL,
  `admin_pwd` char(80) NOT NULL,
  `admin_img` char(100) DEFAULT NULL,
  `admin_rc` int(2) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('4', 'qhc1', 'e10adc3949ba59abbe56e057f20f883e', 'Public/imgpath/56540dbb71c81.jpg', '1');
INSERT INTO `tb_admin` VALUES ('5', 'qhc2', 'e10adc3949ba59abbe56e057f20f883e', 'Public/admin/img/headerlogo.jpg', '0');
INSERT INTO `tb_admin` VALUES ('6', 'qhc3', 'e10adc3949ba59abbe56e057f20f883e', 'Public/admin/img/headerlogo.jpg', '0');
INSERT INTO `tb_admin` VALUES ('7', 'qhc4', 'e10adc3949ba59abbe56e057f20f883e', 'Public/admin/img/headerlogo.jpg', '0');

-- ----------------------------
-- Table structure for `tb_student`
-- ----------------------------
DROP TABLE IF EXISTS `tb_student`;
CREATE TABLE `tb_student` (
  `st_id` int(255) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(10) NOT NULL,
  `st_sex` varchar(2) DEFAULT NULL,
  `st_date` int(255) DEFAULT NULL,
  `st_tel` varchar(20) NOT NULL,
  `st_class` varchar(20) DEFAULT NULL,
  `st_qq` bigint(15) DEFAULT NULL,
  `st_teacher` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_student
-- ----------------------------
INSERT INTO `tb_student` VALUES ('12', '是', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('2', 'df', '', '0', '', null, null, 'qhc4');
INSERT INTO `tb_student` VALUES ('3', 'gs', '', '0', '780541265421', null, '45124512546', 'qhc4');
INSERT INTO `tb_student` VALUES ('4', 'gddf', 'd', '0', '', null, null, 'qhc4');
INSERT INTO `tb_student` VALUES ('5', 'gfd', 'hf', '0', 'sf', 'sdf', null, 'qhc4');
INSERT INTO `tb_student` VALUES ('6', 'sf', 'fg', '0', '', 'sfgs', null, 'qhc3');
INSERT INTO `tb_student` VALUES ('7', 'dffg', 'ff', '0', 'dfg', 'hf', '545', 'qhc3');
INSERT INTO `tb_student` VALUES ('8', 'gdfg', '2', '0', 'ssf', 'gfs', '234', 'qhc3');
INSERT INTO `tb_student` VALUES ('9', 'dsfdsfdsfd', '', '0', 'ff', 'ss', null, 'qhc3');
INSERT INTO `tb_student` VALUES ('10', 'ssx', '', '0', 'xd', 'e', null, 'qhc3');
INSERT INTO `tb_student` VALUES ('11', 'ccc', '', '0', 'e', null, null, 'qhc3');
INSERT INTO `tb_student` VALUES ('13', 'sfgsas', 'ad', '0', 'wwwww', 'asssss', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('14', 'sfgsasddd', 'ad', '0', 'wwwww', 'asssss', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('15', 'sfgsasddd', 'ad', '0', 'wwwww', 'asssss', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('16', 'seqw', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('17', 'we dfgs', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('18', 's', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('144', 'vswj', '', '11', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('168', 'zhaiyu', 'ma', '19931221', '18062607865', '3', '373239705', 'qhc3');
INSERT INTO `tb_student` VALUES ('22', 'zhaiyu', 'ma', '19931221', '18062607865', '3', '373239705', 'qhc3');
INSERT INTO `tb_student` VALUES ('33', '覃海超', '男', '19931229', '18062607865', '3', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('34', '阿斯顿', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('35', '阿斯顿', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('36', '的是是', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('37', '水电费规范', '男', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('145', 'cxewq', '', '15', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('146', 'zhaiyu', 'ma', '19931221', '18062607865', '3', '373239705', 'qhc3');
INSERT INTO `tb_student` VALUES ('147', 'zhaiyu', 'ma', '19931221', '18062607865', '3', '373239705', 'qhc3');
INSERT INTO `tb_student` VALUES ('48', 'name1', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('49', 'name2', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('50', 'name3', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('51', 'name4', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('52', 'name5', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('53', 'name1', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('54', 'name2', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('55', 'name3', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('56', 'name4', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('57', 'name5', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('58', 'name1', '', '19900000', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('59', 'name2', '', '19900000', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('60', 'name3', '', '19900000', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('61', 'name4', '', '19900000', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('62', 'name5', '', '19900000', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('148', 'zhaiyu', 'ma', '19931221', '18062607865', '3', '373239705', 'qhc3');
INSERT INTO `tb_student` VALUES ('68', 'dfwwq', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('69', 'fdfasa', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('70', 'sdfgd', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('71', 'sssww', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('72', '爱上的的', '是谁', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('73', '短裤', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('74', '水水水水', '', '20121201', '', '1', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('75', '中打开话费', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('79', '阿达', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('80', '按时大多数', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('84', '咖啡馆', '', '0', '', '', '0', 'qhc3');
INSERT INTO `tb_student` VALUES ('85', 'vk机顶盒IE', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('86', '啊啊啊', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('87', '的快感和', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('88', 'xxxx', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('89', '擦是', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('90', 'xxxx', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('91', '擦是', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('92', '这些', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('93', '阿萨啊啊', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('94', 'v24h', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('95', 'vko', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('96', 'xccx', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('97', 'nnn', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('98', 'nnn', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('99', 'nnnc', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('100', 'nnnc', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('101', 'nnncc', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('102', 'nnncc', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('103', 'cccx', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('104', 'cccx', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('105', 'mco', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('106', '宣传宣传宣传', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('107', '下次想', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('108', '下去七千', '', '0', '', '', '0', 'qhc4');
INSERT INTO `tb_student` VALUES ('212', 'zhang', '男', '19931221', '12151564', '1', '124521542', 'qhc3');
