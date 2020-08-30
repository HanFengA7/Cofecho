-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-08-30 16:27:30
-- 服务器版本： 5.7.31-log
-- PHP 版本： 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `Cofecho`
--
CREATE DATABASE IF NOT EXISTS `Cofecho` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Cofecho`;

-- --------------------------------------------------------

--
-- 表的结构 `Cofecho_Contents`
--

CREATE TABLE `Cofecho_Contents` (
  `cid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Cofecho_Contents`
--

INSERT INTO `Cofecho_Contents` (`cid`, `title`, `text`, `created`, `modified`) VALUES
(51, 'Women\'s clothing from zero to countless', 'Women\'s clothing from zero to countless', '2020-08-24 14:57:50', '2020-08-24 14:57:50'),
(53, 'gggf', '&lt;p&gt;ffffffffffffffffffffg&lt;/p&gt;', '2020-08-24 15:03:14', '2020-08-24 15:03:14'),
(54, 'gggggggggggggggggggg', '&lt;p&gt;ggfg&lt;img alt=&quot;Image&quot;&gt;ggggg&lt;/p&gt;', '2020-08-24 15:03:17', '2020-08-24 15:03:17'),
(55, 'ggggg', '&lt;p&gt;ggggggggggggggggggggggggggggggggggggggggg&lt;/p&gt;', '2020-08-24 15:03:20', '2020-08-24 15:03:20'),
(56, '2222222222', '&lt;p&gt;333333333333&lt;/p&gt;', '2020-08-24 17:53:08', '2020-08-24 17:53:08'),
(57, '33333333333333333', '&lt;p&gt;&lt;i&gt;0000000000000000&lt;/i&gt;&lt;/p&gt;', '2020-08-24 17:53:16', '2020-08-24 17:53:16'),
(58, 'test', '&lt;p&gt;&lt;i&gt;33333333333&lt;/i&gt;&lt;/p&gt;', '2020-08-24 17:53:25', '2020-08-24 17:53:25'),
(59, '文章只能写不能看', '&lt;p&gt;滑天下之大稽&lt;/p&gt;', '2020-08-24 18:12:18', '2020-08-24 18:12:18'),
(65, '啊这', '&lt;p&gt;text&lt;/p&gt;', '2020-08-25 09:46:07', '2020-08-25 09:46:07'),
(66, '欢迎使用 Cofecho', '&lt;p&gt;Cofecho 0.1&amp;nbsp;&lt;/p&gt;', '2020-08-26 11:40:34', '2020-08-26 11:40:34'),
(67, '1', '&lt;p&gt;etmd&lt;/p&gt;', '2020-08-27 10:39:19', '2020-08-27 10:39:19'),
(68, 'Hello', '<p>Hello <b>2020 8.28</b></p><blockquote><p><b>23333</b></p></blockquote>', '2020-08-28 14:29:02', '2020-08-28 14:29:02'),
(69, 'mdui nb', '<p><span style=\"\">&nbsp; &lt;div class=\"mdui-typo\"&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;a href=\"#\"&gt;这是一个链接&lt;/a&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;使用 mark 标签来&lt;mark&gt;高亮文本&lt;/mark&gt;。&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;del&gt;这行文本被视为已删除文本。&lt;/del&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;ins&gt;这行文本是被强势插入的元素。&lt;/ins&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;u&gt;这行文本带有下划线。&lt;/u&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;small&gt;这行文本字体被缩小了。&lt;/small&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;strong&gt;这行文本被加粗了。&lt;/strong&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;em&gt;这段文本是斜体的。&lt;/em&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;响应式设计缩写 &lt;abbr title=\"Responsive web design\"&gt;RWD&lt;/abbr&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;这行文本包含内联代码 &lt;code&gt;&amp;lt;code&amp;gt;&lt;/code&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;按下 &lt;kbd&gt;Esc&lt;/kbd&gt; 可以关闭对话框&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;var&gt;y&lt;/var&gt; = &lt;var&gt;m&lt;/var&gt;&lt;var&gt;x&lt;/var&gt; + &lt;var&gt;b&lt;/var&gt;&lt;/p&gt;</span></p><p><span style=\"\">&nbsp; &lt;/div&gt;</span></p>', '2020-08-28 14:31:25', '2020-08-28 14:31:25'),
(70, 'mdui nb', '<p style=\"\"><b>111</b></p><p style=\"\">&lt;div class=\"mdui-typo\"&gt;&lt;p&gt;&lt;a href=\"#\"&gt;这是一个链接&lt;/a&gt;&lt;/p&gt;&lt;p&gt;使用 mark 标签来&lt;mark&gt;高亮文本&lt;/mark&gt;。&lt;/p&gt;&lt;p&gt;&lt;del&gt;这行文本被视为已删除文本。&lt;/del&gt;&lt;/p&gt;&lt;p&gt;&lt;ins&gt;这行文本是被强势插入的元素。&lt;/ins&gt;&lt;/p&gt;&lt;p&gt;&lt;u&gt;这行文本带有下划线。&lt;/u&gt;&lt;/p&gt;&lt;p&gt;&lt;small&gt;这行文本字体被缩小了。&lt;/small&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;这行文本被加粗了。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;这段文本是斜体的。&lt;/em&gt;&lt;/p&gt;&lt;p&gt;响应式设计缩写 &lt;abbr title=\"Responsive web design\"&gt;RWD&lt;/abbr&gt;&lt;/p&gt;&lt;p&gt;这行文本包含内联代码 &lt;code&gt;&amp;lt;code&amp;gt;&lt;/code&gt;&lt;/p&gt;&lt;p&gt;按下 &lt;kbd&gt;Esc&lt;/kbd&gt; 可以关闭对话框&lt;/p&gt;&lt;p&gt;&lt;var&gt;y&lt;/var&gt; = &lt;var&gt;m&lt;/var&gt;&lt;var&gt;x&lt;/var&gt; + &lt;var&gt;b&lt;/var&gt;&lt;/p&gt;&lt;/div&gt;</p>', '2020-08-28 14:34:12', '2020-08-28 14:34:12'),
(71, 'mdui nb', '<p><span style=\"color: rgb(0, 0, 255);\">&lt;div <span style=\"color: red;\">class</span>=<span style=\"color: rgb(163, 21, 21);\">\"</span></span><span style=\"color: rgb(255, 64, 129);\">mdui-typo</span><span style=\"color: rgb(0, 0, 255);\"><span style=\"color: rgb(163, 21, 21);\">\"</span>&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;a <span style=\"color: red;\">href</span>=<span style=\"color: rgb(163, 21, 21);\">\"#\"</span>&gt;</span>这是一个链接<span style=\"color: rgb(0, 0, 255);\">&lt;/a&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>使用 mark 标签来<span style=\"color: rgb(0, 0, 255);\">&lt;mark&gt;</span>高亮文本<span style=\"color: rgb(0, 0, 255);\">&lt;/mark&gt;</span>。<span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;del&gt;</span>这行文本被视为已删除文本。<span style=\"color: rgb(0, 0, 255);\">&lt;/del&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;ins&gt;</span>这行文本是被强势插入的元素。<span style=\"color: rgb(0, 0, 255);\">&lt;/ins&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;u&gt;</span>这行文本带有下划线。<span style=\"color: rgb(0, 0, 255);\">&lt;/u&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;small&gt;</span>这行文本字体被缩小了。<span style=\"color: rgb(0, 0, 255);\">&lt;/small&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;strong&gt;</span>这行文本被加粗了。<span style=\"color: rgb(0, 0, 255);\">&lt;/strong&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;em&gt;</span>这段文本是斜体的。<span style=\"color: rgb(0, 0, 255);\">&lt;/em&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>响应式设计缩写 <span style=\"color: rgb(0, 0, 255);\">&lt;abbr <span style=\"color: red;\">title</span>=<span style=\"color: rgb(163, 21, 21);\">\"Responsive web design\"</span>&gt;</span>RWD<span style=\"color: rgb(0, 0, 255);\">&lt;/abbr&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>这行文本包含内联代码 <span style=\"color: rgb(0, 0, 255);\">&lt;code&gt;</span><span style=\"color: rgb(0, 176, 232);\">&amp;lt;</span>code<span style=\"color: rgb(0, 176, 232);\">&amp;gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/code&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>按下 <span style=\"color: rgb(0, 0, 255);\">&lt;kbd&gt;</span>Esc<span style=\"color: rgb(0, 0, 255);\">&lt;/kbd&gt;</span> 可以关闭对话框<span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>y<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span> = <span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>m<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>x<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span> + <span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>b<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/div&gt;</span><br></p>', '2020-08-28 14:45:45', '2020-08-28 14:45:45'),
(72, 'mdui nb', '<p><span style=\"color: rgb(0, 0, 255);\">&lt;div <span style=\"color: red;\">class</span>=<span style=\"color: rgb(163, 21, 21);\">\"</span></span><span style=\"color: rgb(255, 64, 129);\">mdui-typo</span><span style=\"color: rgb(0, 0, 255);\"><span style=\"color: rgb(163, 21, 21);\">\"</span>&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;a <span style=\"color: red;\">href</span>=<span style=\"color: rgb(163, 21, 21);\">\"#\"</span>&gt;</span>这是一个链接<span style=\"color: rgb(0, 0, 255);\">&lt;/a&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>使用 mark 标签来<span style=\"color: rgb(0, 0, 255);\">&lt;mark&gt;</span>高亮文本<span style=\"color: rgb(0, 0, 255);\">&lt;/mark&gt;</span>。<span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;del&gt;</span>这行文本被视为已删除文本。<span style=\"color: rgb(0, 0, 255);\">&lt;/del&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;ins&gt;</span>这行文本是被强势插入的元素。<span style=\"color: rgb(0, 0, 255);\">&lt;/ins&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;u&gt;</span>这行文本带有下划线。<span style=\"color: rgb(0, 0, 255);\">&lt;/u&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;small&gt;</span>这行文本字体被缩小了。<span style=\"color: rgb(0, 0, 255);\">&lt;/small&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;strong&gt;</span>这行文本被加粗了。<span style=\"color: rgb(0, 0, 255);\">&lt;/strong&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;em&gt;</span>这段文本是斜体的。<span style=\"color: rgb(0, 0, 255);\">&lt;/em&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>响应式设计缩写 <span style=\"color: rgb(0, 0, 255);\">&lt;abbr <span style=\"color: red;\">title</span>=<span style=\"color: rgb(163, 21, 21);\">\"Responsive web design\"</span>&gt;</span>RWD<span style=\"color: rgb(0, 0, 255);\">&lt;/abbr&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>这行文本包含内联代码 <span style=\"color: rgb(0, 0, 255);\">&lt;code&gt;</span><span style=\"color: rgb(0, 176, 232);\">&amp;lt;</span>code<span style=\"color: rgb(0, 176, 232);\">&amp;gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/code&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span>按下 <span style=\"color: rgb(0, 0, 255);\">&lt;kbd&gt;</span>Esc<span style=\"color: rgb(0, 0, 255);\">&lt;/kbd&gt;</span> 可以关闭对话框<span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span>  <span style=\"color: rgb(0, 0, 255);\">&lt;p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>y<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span> = <span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>m<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>x<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span> + <span style=\"color: rgb(0, 0, 255);\">&lt;var&gt;</span>b<span style=\"color: rgb(0, 0, 255);\">&lt;/var&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/p&gt;</span><span style=\"color: rgb(0, 0, 255);\">&lt;/div&gt;</span><br></p>', '2020-08-28 14:45:49', '2020-08-28 14:45:49'),
(73, 'mdui nb', '<div><span style=\"\">&nbsp; &lt;div class=\"mdui-typo\"&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;a href=\"#\"&gt;这是一个链接&lt;/a&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;使用 mark 标签来&lt;mark&gt;高亮文本&lt;/mark&gt;。&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;del&gt;这行文本被视为已删除文本。&lt;/del&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;ins&gt;这行文本是被强势插入的元素。&lt;/ins&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;u&gt;这行文本带有下划线。&lt;/u&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;small&gt;这行文本字体被缩小了。&lt;/small&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;strong&gt;这行文本被加粗了。&lt;/strong&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;em&gt;这段文本是斜体的。&lt;/em&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;响应式设计缩写 &lt;abbr title=\"Responsive web design\"&gt;RWD&lt;/abbr&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;这行文本包含内联代码 &lt;code&gt;&amp;lt;code&amp;gt;&lt;/code&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;按下 &lt;kbd&gt;Esc&lt;/kbd&gt; 可以关闭对话框&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &nbsp; &lt;p&gt;&lt;var&gt;y&lt;/var&gt; = &lt;var&gt;m&lt;/var&gt;&lt;var&gt;x&lt;/var&gt; + &lt;var&gt;b&lt;/var&gt;&lt;/p&gt;</span></div><div><span style=\"\">&nbsp; &lt;/div&gt;</span></div>', '2020-08-28 14:48:13', '2020-08-28 14:48:13'),
(74, '2222222222', '<p><img alt=\"Image\" src=\"https://gw.alicdn.com/tps/TB1W_X6OXXXXXcZXVXXXXXXXXXX-400-400.png\">23333333333333333333333333333333333<br></p>', '2020-08-28 14:49:06', '2020-08-28 14:49:06');

-- --------------------------------------------------------

--
-- 表的结构 `Cofecho_User`
--

CREATE TABLE `Cofecho_User` (
  `uid` mediumint(8) NOT NULL COMMENT 'ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `password` char(255) NOT NULL COMMENT '密码',
  `gender` char(3) NOT NULL DEFAULT '神秘' COMMENT '性别',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `qq` int(255) NOT NULL COMMENT 'QQ',
  `birthday` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '生日',
  `last_login_ip` varchar(500) NOT NULL DEFAULT '''127.0.0.1''' COMMENT '上次登录IP',
  `last_login_time` int(10) NOT NULL DEFAULT '0' COMMENT '上次登录时间',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Cofecho_User`
--

INSERT INTO `Cofecho_User` (`uid`, `username`, `password`, `gender`, `email`, `qq`, `birthday`, `last_login_ip`, `last_login_time`, `status`, `create_time`, `update_time`) VALUES
(1, 'HanFen', '$2y$10$WdprvIiny8.svDns5yJppuDOcifRLwWzYBuH2WM6Qjazb2XJEqoG2', '男', '1091044631@qq.com', 1091044631, '2004-03-31 00:00:00', '127.0.0.1', 0, 1, '2020-06-07 11:19:15', '2020-06-07 11:19:15');

--
-- 转储表的索引
--

--
-- 表的索引 `Cofecho_Contents`
--
ALTER TABLE `Cofecho_Contents`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- 表的索引 `Cofecho_User`
--
ALTER TABLE `Cofecho_User`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Cofecho_Contents`
--
ALTER TABLE `Cofecho_Contents`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- 使用表AUTO_INCREMENT `Cofecho_User`
--
ALTER TABLE `Cofecho_User`
  MODIFY `uid` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
