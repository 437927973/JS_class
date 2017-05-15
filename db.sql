
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyunzhu`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--
CREATE DATABASE IF NOT EXISTS eyunzhu;
USE eyunzhu;

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`user_id`);
  
INSERT INTO `think_user` (`user_id`, `user_name`,`user_password`) VALUES
(1, 'php',  'qqq');

CREATE TABLE IF NOT EXISTS `think_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_title` varchar(255) NOT NULL,
  `message_content` varchar(255) DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `think_message`
ADD PRIMARY KEY (`message_id`);

INSERT INTO `think_message` (`message_id`, `message_title`,`message_content`) VALUES
(1, '你好',  '很高兴见到你');



