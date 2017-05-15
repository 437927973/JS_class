/*创建（使用）数据库 eyunzhu_DB*/
CREATE DATABASE IF NOT EXISTS eyunzhu_DB;
USE eyunzhu_DB;
/*创建表 （用户信息表） eyunzhu_user     */
CREATE TABLE IF NOT EXISTS `eyunzhu_user` (
  `userid` tinyint NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `sex` varchar(2) DEFAULT '男',
  `hobby` varchar(255) DEFAULT NULL,
  `age` tinyint ,
  `user_state` tinyint DEFAULT '1' ,
  primary key (`userid`)
);
/*向用户信息表中插入数据*/
INSERT INTO `eyunzhu_user` ( `username`,`password`,`email`,`sex`,`hobby`, `age`) VALUES
('liqinghua',  '123456','1036795373@qq.com','男','运动','22');


/*创建表 （留言数据表） eyunzhu_message     */

CREATE TABLE IF NOT EXISTS `eyunzhu_message` (
  `messageid` tinyint NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `title` text  NOT NULL,
  `content` text  NOT NULL,
  `time` time ,
  `message_state` tinyint DEFAULT '1' ,
  primary key (`messageid`)
);

/*向留言数据表中插入数据*/
INSERT INTO `eyunzhu_message` (`username`,`title`,`content`,`time`)
VALUES('李庆华','那个辰','对他也就一句话，可否为友','2017-5-15');

INSERT INTO `eyunzhu_message` (`username`,`title`,`content`,`time`)
VALUES('liqinghua','hello,world','welcome to eyunzhu','2017-5-15');