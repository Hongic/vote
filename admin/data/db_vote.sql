/*
Navicat MySQL Data Transfer

Source Server         : Hong
Source Server Version : 50529
Source Host           : localhost:3306
Source Database       : db_vote

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2013-03-25 05:07:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user` varchar(20) NOT NULL COMMENT '用户',
  `pwd` varchar(36) NOT NULL COMMENT '密码',
  `time` date NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('9', 'admin', 'bef3e9c3ba3826cd68c925873f91e79f', '2013-03-21');
INSERT INTO `tb_admin` VALUES ('10', 'user', '7ab0eca12873be67eedbd348722fcf5c', '2013-03-21');

-- ----------------------------
-- Table structure for `tb_bbs`
-- ----------------------------
DROP TABLE IF EXISTS `tb_bbs`;
CREATE TABLE `tb_bbs` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `pid` int(8) DEFAULT NULL COMMENT '人物的ID',
  `visitor` varchar(30) DEFAULT NULL COMMENT '访客',
  `info` varchar(300) DEFAULT NULL COMMENT '评论类容',
  `time` datetime DEFAULT NULL COMMENT '评论时间',
  `show` int(3) DEFAULT '1' COMMENT '显(1)，隐(0) ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_bbs
-- ----------------------------
INSERT INTO `tb_bbs` VALUES ('1', '2', '翎羽', '四将军', '2013-03-22 14:28:49', '1');
INSERT INTO `tb_bbs` VALUES ('2', '5', '语雨梦', '大美女', '2013-03-25 02:47:17', '1');
INSERT INTO `tb_bbs` VALUES ('3', '2', '何欣', '大美女', '2013-03-25 03:33:30', '1');
INSERT INTO `tb_bbs` VALUES ('4', '2', '琪琪', '完', '2013-03-25 04:36:24', '1');
INSERT INTO `tb_bbs` VALUES ('5', '2', '蓝琪琪', '完美界', '2013-03-25 04:33:34', '1');
INSERT INTO `tb_bbs` VALUES ('6', '2', '王琪', '完美', '2013-03-25 04:33:55', '1');
INSERT INTO `tb_bbs` VALUES ('7', '2', '琪语', '完美世界', '2013-03-25 04:34:04', '1');
INSERT INTO `tb_bbs` VALUES ('8', '5', '坏人', '坏人溜子', '2013-03-25 04:37:02', '1');
INSERT INTO `tb_bbs` VALUES ('9', '5', '拥抱', '拥抱你的未来', '2013-03-25 04:37:53', '1');

-- ----------------------------
-- Table structure for `tb_ip`
-- ----------------------------
DROP TABLE IF EXISTS `tb_ip`;
CREATE TABLE `tb_ip` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ip` varchar(20) NOT NULL COMMENT '投票人的IP',
  `time` datetime DEFAULT NULL COMMENT '投票时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_ip
-- ----------------------------
INSERT INTO `tb_ip` VALUES ('1', '172.168.1.5', '2013-03-21 05:44:47');
INSERT INTO `tb_ip` VALUES ('2', '172.168.12.66', '2013-03-14 05:44:51');

-- ----------------------------
-- Table structure for `tb_people`
-- ----------------------------
DROP TABLE IF EXISTS `tb_people`;
CREATE TABLE `tb_people` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '投票的ID',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `sex` varchar(8) NOT NULL COMMENT '性别',
  `picture` varchar(300) DEFAULT NULL COMMENT '图片的地址',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `info` text NOT NULL COMMENT '简介',
  `votes` int(8) DEFAULT NULL COMMENT '票数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_people
-- ----------------------------
INSERT INTO `tb_people` VALUES ('2', '罗思', '女', '2013032206.jpg', '罗思', '美女罗思，柳岩', '30');
INSERT INTO `tb_people` VALUES ('3', '雪玲', '女', '2013032204.jpg', '女女', '00000', '60');
INSERT INTO `tb_people` VALUES ('4', '小美', '女', '2013032207.jpg', '表妹', '妹纸', '80');
INSERT INTO `tb_people` VALUES ('5', '晓琳', '女', '2013032207.jpg', '妹子', '妹子', '60');
