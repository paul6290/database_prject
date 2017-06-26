-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 17-06-25 16:30
-- 서버 버전: 5.6.24
-- PHP 버전: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `music_site`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `administer`
--

CREATE TABLE IF NOT EXISTS `administer` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `administer`
--

INSERT INTO `administer` (`id`, `password`, `name`, `phone_number`, `sex`, `department`, `position`) VALUES
('administer', '1234', '관리자', '01098765432', '남', '관리', '부장'),
('paul6290', 'hec8gum6^', '장용수', '01056932330', '남', '관리', '사장');

-- --------------------------------------------------------

--
-- 테이블 구조 `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `introduction` varchar(300) DEFAULT NULL,
  `enroll_date` date DEFAULT NULL,
  `image_url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `agency`
--

INSERT INTO `agency` (`id`, `name`, `introduction`, `enroll_date`, `image_url`) VALUES
(1, '어쿠스틱블랑', '박기영, 이준호, 박영신이 결성한 밴드, 어쿠스틱 블랑(Acoustic Blanc)입니다!', '2017-06-24', 'http://localhost/music_site/agency/1.png');

-- --------------------------------------------------------

--
-- 테이블 구조 `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(20) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `introduction` varchar(300) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `enroll_date` date DEFAULT NULL,
  `image_url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `album`
--

INSERT INTO `album` (`id`, `title`, `genre`, `release_date`, `introduction`, `artist_id`, `enroll_date`, `image_url`) VALUES
(1, 'Promise', '발라드,락', '1994-04-07', '"시작"이 수록된 박기영 2번째 앨범. 특유의 편안한 락발라드로 구성되어 있다!', 1, '2017-06-24', 'http://localhost/music_site/album/1.png'),
(2, '혼잣말', '락', '2000-03-02', '당찬 여성록커로 알려진 박기영의 3번째 앨범. 2집에서 <시작> 에 이어 <마지막 사랑> 으로 연이은 사랑을 받았던 박기영이었기에 그 기대가 더욱 크다. 이번 앨범에서는 현시대를 같이 살아나가는 젊은이들의 마음을 그려내려는 노력이 그녀의 욕심만큼 잘 표현되어져 있다.', 1, '2017-06-24', 'http://localhost/music_site/album/2.png'),
(3, 'Be Natural', '발라드,락', '2004-11-02', '3년 만에 신보를 발표한 박기영의 다섯번째 앨범. 타이틀 곡<나비>는 무겁지 않은 대중적인 곡이며, 도시적인 느낌의 <Mercy>는 이승열이 참여했다. 성숙한 여성 뮤지션 다운 음악이다.', 1, '2017-06-24', 'http://localhost/music_site/album/3.png'),
(4, 'Brown Eyes', '발라드,알앤비/어반', '2001-06-07', '섬세한 바이브레이션과 부드러운 목소리로 신인답지 않은 모습을 보이는 브라운 아이즈. 윤건과 나얼로 이루어진 이들은 R&B 분위기 물씬 풍기는 오랜만에 나타난 남자 듀엣. 두 멤버가 전곡 작사,작곡,프로듀싱을 한 앨범이다', 2, '2017-06-24', 'http://localhost/music_site/album/4.png'),
(5, 'Reason 4 Breathing?', '알앤비/어반', '2002-11-26', '천재 아티스트로 구성된 브라운 아이즈의 2002년 신보!!  첫 앨범 발표이후 단 한번의 공식적인 방송활동 한번 없이 작년 한해 음악계를 평정했던 브라운 아이즈!! 2집 타이틀곡 "점점"으로 브라운 아이즈의 신화를 이어간다. ', 2, '2017-06-24', 'http://localhost/music_site/album/5.png');

-- --------------------------------------------------------

--
-- 테이블 구조 `album_review`
--

CREATE TABLE IF NOT EXISTS `album_review` (
  `c_id` varchar(20) NOT NULL DEFAULT '',
  `a_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `album_review`
--

INSERT INTO `album_review` (`c_id`, `a_id`, `content`) VALUES
('database', 1, 'with me 너무 좋아요!'),
('Green', 1, '난 네게 말하고 싶어~~!!'),
('Green', 2, '널 보낸 나를. 정말 푹 빠져있던 곡 ㅠㅠ'),
('Green', 3, '그녀의 앨범중 최고의 명반이 아닐까 생각한다. cd 로 구할수만 있다면 ㅠ 테잎으로 산게 후회됨'),
('Green', 4, '명곡은 오래되었다고 그 품격을 잃지 않는다.'),
('Green', 5, '브아 2집은 한곡한곡 따로 듣는것보다 1번트랙부터 차례대로 듣는 걸 추천함.. 곡들분위기가 트랙대로 알맞게 통일되어 있어서 시너지 효과만빵임.'),
('peter', 1, '마지막 사랑 너무너무 좋다'),
('user', 1, '시작 너무 좋아요!');

-- --------------------------------------------------------

--
-- 테이블 구조 `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `debut` date DEFAULT NULL,
  `nation` varchar(20) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `enroll_date` date DEFAULT NULL,
  `image_url` varchar(50) DEFAULT NULL,
  `style` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `artist`
--

INSERT INTO `artist` (`id`, `name`, `debut`, `nation`, `genre`, `agency_id`, `enroll_date`, `image_url`, `style`, `type`) VALUES
(1, '박기영', '1997-11-05', '한국', '가요', 1, '2017-06-24', 'http://localhost/music_site/artist/1.png', '발라드', '여성솔로'),
(2, '브라운아이즈', '2001-06-07', '한국', '가요', NULL, '2017-06-24', 'http://localhost/music_site/artist/2.png', '알앤비', '남성그룹');

-- --------------------------------------------------------

--
-- 테이블 구조 `consumer`
--

CREATE TABLE IF NOT EXISTS `consumer` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `consumer`
--

INSERT INTO `consumer` (`id`, `password`, `name`, `phone_number`, `sex`, `address`, `join_date`) VALUES
('anam', '1234', '안암', '010-1234-5678', '남', '안암', '2017-06-25'),
('database', '1234', '데이터베이스', '010-1234-5678', '남', '안암', '2017-06-25'),
('Green', '1234', '한경혜', '010312412111', '여', '일산', '2017-06-25'),
('peter', '1234', '김사랑', '01034121521', '여', '일산', '2017-06-24'),
('user', '1234', '유저', '010-1234-5678', '남', '안암', '2017-06-25');

-- --------------------------------------------------------

--
-- 테이블 구조 `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `c_id` varchar(20) NOT NULL DEFAULT '',
  `s_id` int(11) NOT NULL DEFAULT '0',
  `p_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `purchase`
--

INSERT INTO `purchase` (`c_id`, `s_id`, `p_date`) VALUES
('database', 10, '2017-06-25'),
('Green', 14, '2017-06-25'),
('Green', 15, '2017-06-25'),
('peter', 1, '2017-06-25'),
('peter', 10, '2017-06-25'),
('peter', 11, '2017-06-25'),
('peter', 12, '2017-06-25'),
('peter', 14, '2017-06-25'),
('peter', 15, '2017-06-25'),
('user', 2, '2017-06-25'),
('user', 10, '2017-06-25');

-- --------------------------------------------------------

--
-- 테이블 구조 `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(20) DEFAULT NULL,
  `lyricist` varchar(20) DEFAULT NULL,
  `songwriter` varchar(20) DEFAULT NULL,
  `enroll_date` date DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `song_url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `song`
--

INSERT INTO `song` (`id`, `title`, `lyricist`, `songwriter`, `enroll_date`, `album_id`, `song_url`) VALUES
(1, '약속', '오석준', '손무현', '2017-06-24', 1, 'http://localhost/music_site/song/1.mp3'),
(2, '시작', '오석준', '신동우', '2017-06-24', 1, 'http://localhost/music_site/song/2.mp3'),
(3, '마지막사랑', '오석준', '신동우', '2017-06-24', 1, 'http://localhost/music_site/song/3.mp3'),
(4, 'with me', '이희승', '김종서', '2017-06-24', 1, 'http://localhost/music_site/song/4.mp3'),
(5, 'blue sky', '박기영', '박기영', '2017-06-24', 2, 'http://localhost/music_site/song/5.mp3'),
(6, '널 보낸 나를', '박기영', '박기영', '2017-06-24', 2, 'http://localhost/music_site/song/6.mp3'),
(7, '활강', '박기영', '박기영', '2017-06-24', 2, 'http://localhost/music_site/song/7.mp3'),
(8, '나비', '박기영,이재학', '박기영,이재학', '2017-06-24', 3, 'http://localhost/music_site/song/8.mp3'),
(9, 'Mercy', '이승열,박기영', '이승열', '2017-06-24', 3, 'http://localhost/music_site/song/9.mp3'),
(10, '벌써일년', '한경혜', '윤건', '2017-06-24', 4, 'http://localhost/music_site/song/10.mp3'),
(11, 'With Coffee', '한경혜', '윤건', '2017-06-24', 4, 'http://localhost/music_site/song/11.mp3'),
(12, '그녀가 나를 보네', '김영아', '윤건', '2017-06-24', 4, 'http://localhost/music_site/song/12.mp3'),
(13, '점점', '한경혜', '윤건', '2017-06-24', 5, 'http://localhost/music_site/song/13.mp3'),
(14, 'For You(돌아가줘)', '한경혜', '윤건', '2017-06-24', 5, 'http://localhost/music_site/song/14.mp3'),
(15, '비오는 압구정', '윤건', '윤건', '2017-06-24', 5, 'http://localhost/music_site/song/15.mp3'),
(16, '너에게 들려주고 싶은 두번째 이야기', '정석원', '정석원', '2017-06-25', 4, 'http://localhost/music_site/song/16.mp3');

-- --------------------------------------------------------

--
-- 테이블 구조 `song_review`
--

CREATE TABLE IF NOT EXISTS `song_review` (
  `c_id` varchar(20) NOT NULL DEFAULT '',
  `s_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `song_review`
--

INSERT INTO `song_review` (`c_id`, `s_id`, `content`) VALUES
('Green', 13, '2002년 그때가 점점 생각난다.'),
('peter', 13, '2집 앨범 최고의 음악!');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `administer`
--
ALTER TABLE `administer`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- 테이블의 인덱스 `album_review`
--
ALTER TABLE `album_review`
  ADD PRIMARY KEY (`c_id`,`a_id`),
  ADD KEY `a_id` (`a_id`);

--
-- 테이블의 인덱스 `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agency_id` (`agency_id`);

--
-- 테이블의 인덱스 `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`c_id`,`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 테이블의 인덱스 `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- 테이블의 인덱스 `song_review`
--
ALTER TABLE `song_review`
  ADD PRIMARY KEY (`c_id`,`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`);

--
-- 테이블의 제약사항 `album_review`
--
ALTER TABLE `album_review`
  ADD CONSTRAINT `album_review_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `consumer` (`id`),
  ADD CONSTRAINT `album_review_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `album` (`id`);

--
-- 테이블의 제약사항 `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`agency_id`) REFERENCES `agency` (`id`);

--
-- 테이블의 제약사항 `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `consumer` (`id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `song` (`id`);

--
-- 테이블의 제약사항 `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);

--
-- 테이블의 제약사항 `song_review`
--
ALTER TABLE `song_review`
  ADD CONSTRAINT `song_review_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `consumer` (`id`),
  ADD CONSTRAINT `song_review_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `song` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
