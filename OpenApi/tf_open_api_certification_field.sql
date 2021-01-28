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

 Date: 28/01/2021 14:46:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tf_open_api_certification_field
-- ----------------------------
DROP TABLE IF EXISTS `tf_open_api_certification_field`;
CREATE TABLE `tf_open_api_certification_field`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `platform_id` int(11) NOT NULL COMMENT '平台id',
  `field` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '入参',
  `type` enum('params','header') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'params' COMMENT '字段所属类型：params参数字段，header头部字段',
  `is_must` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否必填，默认0非必填，1必填',
  `explain` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '字段说明',
  `is_del` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除，默认0正常，1删除',
  `time_c` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `time_u` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0) COMMENT '修改时间',
  `default_value` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '默认值',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
