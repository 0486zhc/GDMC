-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-09-02 18:56:12
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gdmc`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(64) NOT NULL DEFAULT '' COMMENT '账号',
  `name` varchar(64) NOT NULL COMMENT '姓名',
  `password` varchar(64) NOT NULL COMMENT '密码',
  `sex` varchar(2) NOT NULL COMMENT '性别',
  `mobile` varchar(20) NOT NULL COMMENT '手机号',
  `webChat_id` varchar(64) DEFAULT NULL COMMENT '微信号',
  `register_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `info` varchar(64) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `userName`, `name`, `password`, `sex`, `mobile`, `webChat_id`, `register_time`, `info`) VALUES
(1, '1', '小奎', '', '3', '4', NULL, '2014-08-26 00:15:00', NULL),
(2, '2', '小红', '', '女', '123', '456', '2014-08-29 00:27:54', NULL),
(3, '3', '小白', '3', '男', '123', NULL, '2014-08-29 00:28:41', NULL),
(4, '4', '小黑', '', '女', '123', NULL, '2014-08-29 00:28:41', NULL),
(5, '5', '小明', '1', '男', '123', '456', '2014-08-29 00:27:54', NULL),
(6, '6', '小光', '123', '女', '15999823544', '11', '2014-09-03 00:41:57', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
