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

 Date: 09/04/2021 13:02:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tf_log_request_api
-- ----------------------------
DROP TABLE IF EXISTS `tf_log_request_api`;
CREATE TABLE `tf_log_request_api`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `request_time` datetime(0) NULL DEFAULT NULL COMMENT '请求时间',
  `request_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '请求ip',
  `routeOpen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '路由·对外',
  `route` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '路由·实际',
  `controller` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '控制器中文',
  `action` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '方法中文',
  `method` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '请求方式',
  `header` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'token',
  `token` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'token',
  `platform_id` int(11) NULL DEFAULT NULL COMMENT '平台id',
  `params` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '请求参数',
  `return_data` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '返回参数',
  `uid` int(11) NULL DEFAULT NULL COMMENT '操作人id',
  PRIMARY KEY (`id`) USING BTREE,
  FULLTEXT INDEX `routeOpen`(`routeOpen`)
) ENGINE = InnoDB AUTO_INCREMENT = 931280 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '日志-接口请求-前端' ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
