-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 03 月 31 日 15:02
-- 服务器版本: 5.5.16
-- PHP 版本: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_vote`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user` varchar(20) NOT NULL COMMENT '用户',
  `pwd` varchar(36) NOT NULL COMMENT '密码',
  `time` date NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `user`, `pwd`, `time`) VALUES
(16, 'abcd', 'cf6028ff94e1d8b4b7db8bd0d9e08102', '2013-03-26'),
(17, 'admin', 'bef3e9c3ba3826cd68c925873f91e79f', '2013-03-26'),
(18, '1234', '46b77e0571ca26ae23005a356c821c73', '2013-03-26');

-- --------------------------------------------------------

--
-- 表的结构 `tb_bbs`
--

CREATE TABLE IF NOT EXISTS `tb_bbs` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `pid` int(8) DEFAULT NULL COMMENT '人物的ID',
  `visitor` varchar(30) DEFAULT NULL COMMENT '访客',
  `info` varchar(300) DEFAULT NULL COMMENT '评论类容',
  `time` datetime DEFAULT NULL COMMENT '评论时间',
  `show` int(3) DEFAULT '1' COMMENT '显(1)，隐(0) ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `tb_bbs`
--

INSERT INTO `tb_bbs` (`id`, `pid`, `visitor`, `info`, `time`, `show`) VALUES
(16, 16, NULL, NULL, NULL, 1),
(17, 17, NULL, NULL, NULL, 1),
(18, 18, NULL, NULL, NULL, 1),
(19, 19, NULL, NULL, NULL, 1),
(20, 20, NULL, NULL, NULL, 1),
(21, 21, NULL, NULL, NULL, 1),
(22, 22, NULL, NULL, NULL, 1),
(23, 23, NULL, NULL, NULL, 1),
(24, 24, NULL, NULL, NULL, 1),
(25, 25, NULL, NULL, NULL, 1),
(26, 26, NULL, NULL, NULL, 1),
(27, 27, NULL, NULL, NULL, 1),
(28, 28, NULL, NULL, NULL, 1),
(29, 29, NULL, NULL, NULL, 1),
(30, 30, NULL, NULL, NULL, 1),
(31, 31, NULL, NULL, NULL, 1),
(32, 32, NULL, NULL, NULL, 1),
(33, 33, NULL, NULL, NULL, 1),
(35, 35, NULL, NULL, NULL, 1),
(36, 36, NULL, NULL, NULL, 1),
(37, 17, '心宇', '喜欢你的张望！', '2013-03-25 19:45:35', 1),
(38, 17, '浮屠', '老夫要淡定了！', '2013-03-25 19:46:12', 1),
(39, 17, '因罪', '呵呵呵呵呵呵！', '2013-03-25 19:46:53', 1),
(40, 17, '长沙', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '2013-03-25 19:47:21', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_ip`
--

CREATE TABLE IF NOT EXISTS `tb_ip` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ip` varchar(20) NOT NULL COMMENT '投票人的IP',
  `time` datetime DEFAULT NULL COMMENT '投票时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `tb_ip`
--

INSERT INTO `tb_ip` (`id`, `ip`, `time`) VALUES
(23, '127.0.0.1', '2013-03-25 19:43:58');

-- --------------------------------------------------------

--
-- 表的结构 `tb_people`
--

CREATE TABLE IF NOT EXISTS `tb_people` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '投票的ID',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `sex` varchar(8) NOT NULL COMMENT '性别',
  `picture` varchar(300) DEFAULT NULL COMMENT '图片的地址',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `info` text NOT NULL COMMENT '简介',
  `votes` int(8) DEFAULT '0' COMMENT '票数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `tb_people`
--

INSERT INTO `tb_people` (`id`, `name`, `sex`, `picture`, `title`, `info`, `votes`) VALUES
(16, '张 红', '女', '2013032506040V535-4.jpg', '张 红：火红如歌', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />\r\n', 0),
(17, '李静辰', '女', '20130325132132UU0F-4950G.jpg', '李静辰：光阴似水', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 1),
(18, '王成帜', '男', '20130325u=721213123,4139931130&fm=59.jpg', '王成帜：燃烧生命', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(19, '俪 夼', '女', '201303253985b5820bffe90f6d8119d7.jpg', '俪 夼：天天浮沉', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(20, '李 鹏', '男', '2013032520130325u=372170184,383512367&fm=59.jpg', '李 鹏：几个月大', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(21, '涛 声', '女', '201303255f2fb3164193b126f2de3271.jpg', '涛 声：精诚所至', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(22, '卡拉奇', '女', '20130325d393f733df09cf34ac4b5f23.jpg', '卡拉奇：剑胆琴心', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(23, '占右中', '男', '20130325f31fbe096b63f6243182e1948744ebf81b4ca34e.jpg', '占右中：西欧国家', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(24, '柘城在', '女', '20130325478ff11fac8f417f314e15ea.jpg', '柘城在：非机动车', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(25, '植功右', '男', '20130325u=628824320,912296532&fm=59.jpg', '植功右：蜀犬吠日', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(26, '斧正有', '男', '20130325u=360434976,388363515&fm=59.jpg', '斧正有：某些地区', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(27, '晴 雯', '女', '20130325132132U95960-B9237.jpg', '晴雯：瞒天过海', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(28, '凸取木', '女', '201303255f2fb3164193b126f2de3271.jpg', '凸取木：枯干悲伤', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(29, '旧地圻', '女', '201303252012119951689909.jpg', '旧地圻：科技大学', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(30, '目更进', '女', '20130325a8ed8e54b38fa9a23b2935e4.jpg', '目更进：不求上进', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(31, '闵要于', '男', '20130325u=809141274,1065593708&fm=59.jpg', '闵要于：标准偏差', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(32, '自架可', '女', '2013032520101004083133-540674424.jpg', '自架可：睦邻友好', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(33, '工二环', '女', '2013032520101005154021-1389579618.jpg', '工二环：在那里木', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(35, '枯 干', '男', '20130325u=618229900,845419061&fm=59.jpg', '枯 木：要得本报', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0),
(36, '要旧捷', '男', '20130325u=359901406,355504126&fm=59.jpg', '要旧捷：在哪上海', '&nbsp;诸葛亮，女，23岁，计信系10级网络（2）班。&nbsp;诸葛亮于汉灵帝光和四年（公元181年）出生于琅邪郡阳都县的一个官吏之家，诸葛氏是琅邪的望族，先祖诸葛丰曾在西汉元帝时做过司隶校尉，诸葛亮父亲诸葛圭东汉末年做过泰山郡丞；诸葛亮3岁母亲章氏病逝，诸葛亮8岁丧父，与弟弟诸葛均一起跟随由袁术任命为豫章太守的叔父诸葛玄到豫章赴任，东汉朝廷派朱皓取代了诸葛玄职务，诸葛玄就去投奔荆州刘表，诸葛亮的躬耕地尚有争议，一说在南阳卧龙岗，另说在襄阳城西二十里的隆中。<br />', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
