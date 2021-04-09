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

 Date: 09/04/2021 13:02:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tf_log_mq_rabbit_consumer
-- ----------------------------
DROP TABLE IF EXISTS `tf_log_mq_rabbit_consumer`;
CREATE TABLE `tf_log_mq_rabbit_consumer`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `time_c` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `platform_id` int(11) NULL DEFAULT NULL COMMENT '平台ID',
  `json` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '接收的原数据',
  `exchange_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '交换机',
  `exchange_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '链接类型',
  `queue_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '队列名称',
  `route_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '路由key',
  `consumer_tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '凭证',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4628606 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
