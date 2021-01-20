/*
 Navicat Premium Data Transfer

 Source Server         : test_MySQL
 Source Server Type    : MySQL
 Source Server Version : 50730
 Source Host           : 192.168.0.8:7003
 Source Schema         : zhianyun

 Target Server Type    : MySQL
 Target Server Version : 50730
 File Encoding         : 65001

 Date: 20/01/2021 16:32:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tf_ip_pool
-- ----------------------------
DROP TABLE IF EXISTS `tf_ip_pool`;
CREATE TABLE `tf_ip_pool`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `host` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '链接地址',
  `port` int(11) NOT NULL COMMENT '端口',
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '登录账号',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '登录密码',
  `vhost` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `proportion` int(11) NOT NULL COMMENT '权重比',
  `total` int(11) NOT NULL COMMENT '总数',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '类型：rabbitMQ',
  `token` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '令牌用来按类准确查找',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 104 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
