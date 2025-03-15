# phpMyAdmin SQL Dump
# version 2.5.4
# http://www.phpmyadmin.net
#
# 호스트: localhost
# 처리한 시간: 04-01-03 16:52 
# 서버 버전: 4.0.16
# PHP 버전: 4.3.4
# 
# 데이터베이스 : `wilde`
# 

# --------------------------------------------------------

#
# 테이블 구조 `wilde_result`
#

CREATE TABLE `wilde_result` (
  `email` varchar(50) NOT NULL default '',
  `kname` varchar(50) NOT NULL default '',
  `ename` varchar(50) NOT NULL default '',
  `tel` varchar(15) NOT NULL default '',
  `password` varchar(10) NOT NULL default '',
  `PJ` float NOT NULL default '0',
  `NS` float NOT NULL default '0',
  `FT` float NOT NULL default '0',
  `IE` float NOT NULL default '0'
) TYPE=MyISAM COMMENT='wilde test 결과';

#
# 테이블의 덤프 데이터 `wilde_result`
#

INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('dbmaster@dreamwiz.com', '함경우', 'Woo Ham', '011-418-7468', 'tkfkdgo', '25', '25', '5', '15');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('00', '텟', 'tet', '00', '00', '5', '5', '0', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hikari0130@hanmail.net', '윤형석', 'yoon hyoung seok', '016-9655-3515', '134679', '0', '-10', '-40', '-30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('longoodbyes@hanmail.net', '송동훈', 'Song Dong Hoon', '011-9320-0512', 'sdh512', '0', '50', '50', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('okwon@skku.edu', '권오채', 'Oh Chae Kwon', '011-9285-5222', 'hy0903', '-35', '-20', '-10', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jobsfinish@hanmail.net', '추정훈', 'Chu JungHoon', '019-613-5829', 'cjstkwkql', '10', '0', '25', '-50');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('niceshotbebe@hanmail.net', '김경훈', 'KIm KyungHoon', '019-419-3713', '37133713', '30', '0', '30', '0');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jeehyuny@hanmail.net', '김지현', 'Kim jeehyun', '0192486277', 'goqkfkrl', '-20', '0', '-25', '30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('heum@lycos.co.kr', '나동흠', 'heum', '427-8401', '1111', '5', '15', '15', '-5');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('bsjin@bitzkorea.com', '진범석', 'JIN BEOM SUK', '011-895-8231', '1111', '0', '-10', '-10', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('nareul@hanmail.net', '이윤영', 'lee yoon yong', '011-9491-0860', '3710', '-10', '-15', '-5', '-10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('noseline@hanmail.net', '곽호선', 'Kwak Hosun', '018-330-1900', 'sun504', '-10', '40', '-10', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hans7_84@hotmail.com', '조한수', 'Cho Han Soo', '01199338730', '840822', '25', '-20', '0', '-20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('endor117naver.com', '이태호', 'LEE TAE HO', '01192557703', '210312', '15', '45', '35', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jjbmb@lycos.co.kr', '조형민', 'jo hyung min', '016-9766-0621', '2028', '25', '15', '-15', '-20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('seddong84@hanmail.net', '김세희', 'Kim se hee', '0119352-5270', '19452', '-5', '0', '20', '25');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jjno9@hanmail.net', '박준영', 'Park jun young', '011-9392-6241', '45628', '40', '-5', '45', '-35');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('starry-eyes@hanmail.net', '이정태', 'Lee-jeong-tae', '016-787-1731', '1731', '30', '30', '45', '30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('kwsach1018@hanmail.net', '곽상찬', 'Kwak-sang-chan', '011-9908-8835', '3602', '0', '10', '40', '0');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('parametric@chol.com', '황인범', 'in-bum,Hwang', '011-357-3207', '1111', '-10', '0', '0', '40');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('cripson@hanmail.net', '이동원', 'Lee Dong Won', '011-9160-3757', '7787788', '-10', '0', '35', '30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hans2h2@hanmail.net', '한승훈', 'Han Seung-hoon', '011-9232-7754', 'hans3h3', '10', '30', '20', '-30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('dogongksg@hanmail.net', '김석구', 'Kim Suk Ku', '011-9112-3338', '1170319', '10', '0', '40', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jslim01@me.skku.ac.kr', '임진승', 'Lim, JinSeung', '016-293-9212', 'a', '-15', '45', '20', '-30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('olny_u@hotmail.com', '민동훈', 'Min Dong-Hoon', '016-9332-9378', '1403711', '10', '30', '20', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('broksky@hanmail.net', '김성환', 'Kim Seong Hwan', '011-9179-5781', '99', '-5', '-15', '-10', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jeeyin@hotmail.com', '강지현', 'kangjeehyun', '01698382342', '0000', '-20', '30', '-40', '30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('starhms@hanmir.com', '허만승', 'Heo Man-seung', '016-9676-3457', 'chzhdndb', '-25', '0', '-5', '25');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hi_snowman@hotmail.com', '이혜원', 'Lee Hyewon', '011-9400-4827', '0000', '20', '25', '20', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('endearhs@hotmail.com', '권혜수', 'Kwon Hye Soo', '01199382019', '5012019', '20', '10', '0', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('haekyun@msn.com', '이해균', 'lee hae kyun', '011-9257-9758', 'uhaha', '10', '-5', '-10', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('rugeanew@hanmail.net', '조성민', 'Cho Sung Min', '019-325-0270', '29384756', '15', '10', '40', '0');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('kyu0210@netian.com', '상한규', 'Han Kyu Sang', '01697033697', 'gksrb', '20', '30', '15', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jeasungy-s-p@hanmail.net', '박제성', 'park jea sung', '019-306-8751', '1', '0', '20', '35', '20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('mel21@empal.com', '박형민', 'park hyoung min', '017-264-1793', '1478', '-5', '10', '-25', '15');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jjuno03@hanmail.net', '김준오', 'kim jun oh', '011-9476-2226', 'wnsdhdi', '-10', '-20', '-10', '35');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('kiss-_-ljs@hanmail.net', '이정석', 'lee-jeong-seok', '016-9661-1325', '13579', '25', '25', '35', '0');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('leewookuen', '이우건', 'leewookuen', '011-9137-9404', '0106', '-5', '-5', '-20', '-20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('snewage@hanmail.net', '최형국', 'CHOI HyungKuk', '018-711-1957', '0120', '10', '-10', '0', '15');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hoohut@naver.com', '이병일', 'Lee byung il', '01199643732', '30422', '0', '-15', '20', '15');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('jslim01@naver.com', '임진승', 'Lim, JinSeung', '031-290-7933', 'hellopc', '20', '50', '25', '-30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('schma78@hanmail.net', '정재덕', 'jung jae duk', '01196141757', '1024', '40', '-40', '35', '10');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('nareul@nate.com', '이윤영', 'lee yoon yong', '011-9491-0860', '3710', '-30', '-10', '-30', '-30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('zeroth-0@hanmail.net', '정영', 'jung young', '0166869487', 'likemoon', '15', '25', '20', '45');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('yasami@hanmail.net', '하용수', 'HA YONG SOO', '018-552-0749', '7812', '-10', '0', '30', '-20');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hckim@kotef.or.kr', '김현철', 'Kim Hyun Cheol', '02-6009-3132', 'kk0145', '-10', '-10', '-30', '-30');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('plusman2k@nate.com', '남영욱', 'Nam YoungUk', '017-855-9501', '4700', '-20', '-20', '-30', '0');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('hong909018@hanmail.net', '홍성훈', 'hong sung hoon', '019-351-2982', '1110hong', '40', '30', '10', '0');
INSERT INTO `wilde_result` (`email`, `kname`, `ename`, `tel`, `password`, `PJ`, `NS`, `FT`, `IE`) VALUES ('ulan820@naver.com', '박영억`', 'park yeung eok', '32709617', '1234', '0', '0', '0', '-10');
