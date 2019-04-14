/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : zippo rs

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 14/04/2019 13:14:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for lighter
-- ----------------------------
DROP TABLE IF EXISTS `lighter`;
CREATE TABLE `lighter`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image_path` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of lighter
-- ----------------------------
INSERT INTO `lighter` VALUES (1, 'Metalic grey', 2500, 'Some ', 'img/zippo/zippo1.png');
INSERT INTO `lighter` VALUES (2, 'Metalic gold', 3500, 'Some description', 'img/zippo/zippo2.png');
INSERT INTO `lighter` VALUES (3, 'Metal grey harsh', 2500, 'Some desc', 'img/zippo/zippo3.png');
INSERT INTO `lighter` VALUES (4, 'Plastic', 3200, 'Desc', 'img/zippo/zippo4.png');
INSERT INTO `lighter` VALUES (5, 'Plastic A', 3900, 'Plastic', 'img/zippo/zippo5.png');
INSERT INTO `lighter` VALUES (6, 'Metal harsh decoration', 2900, 'desc', 'img/zippo/zippo6.png');
INSERT INTO `lighter` VALUES (7, 'Plastic lucky', 4000, 'desc', 'img/zippo/zippo6.png');
INSERT INTO `lighter` VALUES (8, 'Harley D', 4000, 'desc', 'img/zippo/zippo8.png');
INSERT INTO `lighter` VALUES (9, 'Plastic blue', 3500, 'desc blue', 'img/zippo/zippo9.png');
INSERT INTO `lighter` VALUES (10, 'Plastic red', 3500, 'desc red', 'img/zippo/zippo10.png');

SET FOREIGN_KEY_CHECKS = 1;
