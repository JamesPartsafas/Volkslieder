-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 09:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `song_1200`
--

CREATE TABLE `song_1200` (
  `song_number_1200` int(4) NOT NULL,
  `title` varchar(256) NOT NULL,
  `display` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `content` varchar(4096) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_1200`
--

INSERT INTO `song_1200` (`song_number_1200`, `title`, `display`, `link`, `content`) VALUES
(1, 'Slâfest du friedel ziere', 'Slâfest du friedel ziere (~1180)', 'slafestdufriedelziere', '<p>\r\n„Slâfest du, friedel ziere?<br>\r\nman wecket uns leider schiere.<br>\r\nein vogellîn sô wol getân,<br>\r\ndaz ist der linden an daz zwî gegân.“<br>\r\n</p>\r\n<p>\r\n„Ich was vil sanfte entslâfen,<br>\r\nnu rüefest du kint ‚Wâfen‘.<br>\r\nliep âne leit mac niht gesîn.<br>\r\nswaz du gebiutest, daz leiste ich, friundîn mîn.“<br>              \r\n</p>\r\n<p>\r\nDiu frouwe begunde weinen:<br>\r\n„Du rîtest und lâst mich eine.<br>\r\nwenne wilt du wider her zuo mir?<br>\r\n</p>\r\n<p>\r\nôwê, du füerest mîn fröude sament dir!“<br>\r\n</p>\r\n'),
(2, 'Erec', 'Erec, Hartmann von Aue (~1190)', 'erec', '<p>\r\nnu riten ſÿ vnlange friſt<br>\r\nnebeneinander baide<br>\r\nEe daz ſy über die haÿde<br>\r\nverre jn allen gahen<br>\r\nzureÿten ſahen<br>\r\nein Ritter ſelb dritten<br>\r\nVor ein Gezwerg da einmitten<br>\r\nein Jŭnckfrawen gemaÿt<br>\r\nſchon vnd wolgeklait<br>\r\nvnd wundert die kunigin<br>\r\nwer der Ritter moachte ſein<br>\r\nEr was ze harnaſch wol<br>\r\nals ein guot knecht ſol<br>\r\nEregk der iunge man<br>\r\nſein frawen fragen began<br>\r\nob ers erfarn ſolte<br>\r\n</p>\r\n<p>\r\nbî ir und bî ir wîben.<br>\r\ndiz was Êrec fil de roi lac,<br>\r\nder vrümekeit und sælden phlac,<br>\r\ndurch den diu rede erhaben ist.<br>\r\nnû riten si unlange vrist<br>\r\nneben einander beide,<br>\r\nê daz si über die heide<br>\r\nverre in allen gâhen<br>\r\nzuo rîten sâhen<br>\r\neinen ritter selbedritten,<br>\r\nvor ein getwerc, dâ enmitten<br>\r\neine juncvorouwen gemeit,<br>\r\nschœne unde wol gekleit.<br>\r\nnû wunderte die künegîn<br>\r\nwer der ritter möhte sîn.<br>\r\ner was ze harnasche wol,<br>\r\nals ein guot kneht sol.<br>\r\nÊrec der junge man<br>\r\nsîn vrouwen vrâgen began<br>\r\nob erz ervarn solde.<br>\r\ndiu vrouwe des niht enwolde:<br>\r\n</p>\r\n<p>\r\nsi bat in dâ bî ir tweln.<br>\r\nein juncvrouwen begunde si ûz weln<br>\r\ndie si möhte senden dar.<br>\r\nsi sprach: ʽrît und ervar<br>\r\nwer der ritter müge sîn<br>\r\nund sîn geverte, daz magedîn.\'<br>\r\ndiu juncvrouwe huop sich an die vart,<br>\r\nals ir geboten wart,<br>\r\ndâ siz getwerc rîten sach.<br>\r\nmit zühten si zuo im sprach:<br>\r\nʽgot grüeze iuch, geselle,<br>\r\nund vernemet waz ich welle.<br>\r\nmîn vrouwe hât mich her gesant,<br>\r\ndiu ist künegîn überz lant:<br>\r\ndurch ir zuht gebôt si mir<br>\r\ndaz ich iuch gruozte von ir,<br>\r\nund weste gerne mære<br>\r\nwer der ritter wære<br>\r\nund disiu maget wol getân.<br>\r\n</p>\r\n<p>\r\nmuget ir mich daz wizzen lân,<br>\r\nâne schaden ir daz tuot:<br>\r\nmîn vrouwe vrâget wan durch guot.\'<br>\r\ndaz getwerc enwolde ir niht sagen<br>\r\nunde hiez si stille dagen,<br>\r\nunde daz si in vermite:<br>\r\nez enweste war nâch si rite.<br>\r\ndiu maget enlie niht umbe daz<br>\r\nsi enwolde rîten vürbaz,<br>\r\nden ritter vrâgen mære<br>\r\nselben wer er wære.<br>\r\ndaz getwerc werte ir den wec:<br>\r\ndaz sach diu künegîn und Êrec<br>\r\ndaz ez si mit der geisel sluoc<br>\r\ndie ez in der hant truoc,<br>\r\nüber houbet und über hende<br>\r\nze sîner missewende,<br>\r\ndaz si mâl dâ von gewan.<br>\r\n</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song_1200`
--
ALTER TABLE `song_1200`
  ADD PRIMARY KEY (`song_number_1200`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song_1200`
--
ALTER TABLE `song_1200`
  MODIFY `song_number_1200` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
