
CREATE DATABASE IF NOT EXISTS eyunzhu_DB;
USE eyunzhu_DB;

CREATE TABLE IF NOT EXISTS `eyunzhu_user` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(2) DEFAULT '男',
  `hobby` varchar(255) DEFAULT NULL,
  `age` tinyint ,
  `user_state` tinyint DEFAULT '1' 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `eyunzhu_user`
--
ALTER TABLE `eyunzhu_user`
ADD PRIMARY KEY (`userid`);
  
INSERT INTO `eyunzhu_user` (`userid`, `username`,`password`,`email`,`sex`,`hobby`, `age`) VALUES
(1, 'liqinghua',  '123456','1036795373@qq.com','男','运动','22');



CREATE TABLE IF NOT EXISTS `eyunzhu_message` (
`messageid` int(4) NOT NULL AUTO_INCREMENT,
`username` varchar(255) NOT NULL,
`title`  varchar(255) NOT NULL,
`content` char(255) NOT NULL,
`time` date,
`message_state` tinyint DEFAULT '1' 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `eyunzhu_message`
ADD PRIMARY KEY (`messageid`);
  
INSERT INTO `eyunzhu_user` (`messageid`, `username`,`title`,`content`) VALUES
(1, 'liqinghua',  '留言','第一次留言');