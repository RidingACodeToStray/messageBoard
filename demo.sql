CREATE TABLE `comments`(
`id` int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`user` varchar(50),
`comment` varchar(200),
`addtime` datetime not null
)engine=MYISAM CHARACTER SET UTF8 COLLATE utf8_unicode_ci;