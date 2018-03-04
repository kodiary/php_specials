-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 01:55 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_specials`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `author`) VALUES
(1, 'Italy votes in uncertain general election ', 'Voting is under way in Italy in one of the most uncertain general elections in years. \r\n\r\nThe economy, unemployment and immigration have dominated public discourse throughout the campaigning season. \r\n\r\nPolls opened at 06:00 GMT and are set to close at 22:00 GMT, with local media expected to publish early exit polls immediately afterwards. More than 46 million Italians are eligible to vote. \r\n\r\nIt could take some time before final results are announced, however, as none of the parties are expected to win the 40 percent needed to form a majority government. The level was introduced in a new law last year. \r\n\r\nSunday''s election to choose a new government comes just two months after Italian President Sergio Mattarella dissolved the country''s parliament on December 28.\r\n\r\nThe main parties competing include the populist Five Star Movement (M5S), The League (also known as the Northern League), the self-professed fascist party CasaPound and the neo-fascist Forza Nuova.', 'Anwar Ali'),
(2, '''The Chinese Dream'', China wants friendship with Taiwan', 'China wants to deepen friendship with Taiwan, the governing Communist Party''s fourth-ranked leader said on Saturday, a day after state media warned China could go to war over Taiwan if a US bill promoting closer ties with the island becomes law.\r\n\r\nChina has been infuriated over the bill, telling Taiwan on Friday it would only get burned if it sought to rely on foreigners, adding to the warnings from state media about the risk of war.\r\n\r\nThe legislation, which only needs President Donald Trump''s signature to become law, says it should be US policy to allow officials at all levels to travel to Taiwan to meet their Taiwanese counterparts, permit high-level Taiwanese officials to enter the United States "under respectful conditions" and meet US officials.', 'Alexander William '),
(3, 'UN on Syria: Collective punishment of civilians unacceptable', 'The UN says "collective punishment of civilians is simply unacceptable" as the Syrian regime forces continue their brutal military offensive in the rebel-held area of Eastern Ghouta.\r\n\r\nThe UN said in a statement on Sunday that it was "deeply concerned" for the safety and protection of millions of civilians across Syria, a week after the UN Security Council passed a resolution calling for a 30-day ceasefire.\r\n\r\nThe UN''s regional humanitarian coordinator for Syria, Panos Moumtzis, in a statement said "in some cases, the violence has escalated", referring to Eastern Ghouta – home to nearly 400,000 people – which has borne the brunt of regime attacks since February 18.', 'Cain Brown'),
(4, '50 Feet from Syria: Inside Al-Amal Hospital', 'A film by Skye Fitzgerald\r\n\r\nArmed with a suitcase full of medical equipment, Syrian-American surgeon Hisham Bismar travels to the Al Amal Hospital on the Turkish-Syrian border, ready for anything.\r\n\r\nWhat he finds there is horror, chaos and a constant stream of refugees in need of medical care from the facility, which is the only hospital in Turkey with government approval to treat victims of the Syrian conflict. \r\n\r\nThe hospital''s volunteer doctors share shocking stories from war-torn Syria: colleagues forced to perform operations without anesthesia, aircraft dropping barrels filled with TNT (explosives) and shrapnel, and makeshift hospital floors flooded with blood.\r\n\r\nBismar works to repair the bodies of the wounded civilians and fighters who manage to find their way across the border to the hospital, leaving behind his family in the United States to care for those who are unable to seek care in their war-torn homeland.', 'Justin Carlos'),
(5, 'Healing on the Syria-Turkey border', 'As the number of dead continues to rise in Syria, other people are struggling to cope with devastating injuries that will stay with them forever, such as the loss of limbs or impaired mobility.\r\n\r\nYet throughout Syria, it has becoming increasingly difficult for victims to access life-saving care. Government hospitals are inaccessible or carry the risk of detention, while medical facilities in opposition-controlled areas are regularly targeted by air strikes. Smaller field hospitals, meanwhile, do not have sufficient equipment.\r\n\r\nUrgent cases are granted entry across the border into Turkey. In a series of transfers at designated points along the border, Syrian and Turkish medical teams coordinate ambulances to shuttle the wounded to Turkish state hospitals.\r\n\r\nFrom there, Syrians who require longer-term treatment are turned over to postoperative recovery centers in Turkish border towns, including Reyhanli, Sanliurfa and Kilis. Known as "houses of healing", they are operated by Syrians with support from international NGOs.\r\n\r\nBed-ridden, in wheelchairs or on crutches, the men here recount battles against regime forces and the Islamic State of Iraq and the Levant (ISIL) group, describing the circumstances of their life-changing injuries with a sense of pride.\r\n\r\nThough grateful for the chance to physically recover in these safe spaces, their thoughts remain riveted on Syria, and on one day returning to the fight.', 'Maya Hautefeuille'),
(6, 'Heavy rains bring flooding to parts of Kenya', 'Although Kenya straddles the equator, it is not a particularly wet country.\r\n\r\nThe rain-bearing intertropical belt of cloud passes quickly through the country, usually in April and again in October.\r\n\r\nThese rains are known as the North and South monsoons respectively.\r\n\r\nBecause these rain bands pass over large tracts of land before reaching the country, rainfall is generally lower than one might expect in an equatorial country.\r\n\r\nPerhaps this is just as well, as 22mm of rain, about a third of the usual March total, was enough to cause significant flooding in Nairobi on Saturday.\r\n\r\nThe flooding was undoubtedly made worse by the state of the city’s drainage system which is under increasing pressure as urbanisation continues apace and the population continues to rise.\r\n\r\nThe city’s authorities were seemingly unprepared for traffic jams, flooded roundabouts and stranded commuters, despite advanced warnings of impending heavy rain by the country’s Meteorological Department.\r\n\r\nOther areas were hit by even heavier rainfall.\r\n\r\nEmbu, 110km northeast of Nairobi recorded 70mm of rain.\r\n\r\nJust to the northeast of Embu, in Tharaka South, a woman and her two teenage sons were killed by a lightning strike as they sought shelter from the rain.\r\n\r\nMeteorologists believe that the early arrival of the rains, which have also hit Tanzania, is the result of the Madden-Julian Oscillation, which is an eastward moving low pressure system that carries cloud and rain around the tropical regions over a 30 to 60 day period.\r\n\r\nShowers are expected to continue across the country on Sunday, but drier weather will return later in the week.\r\n\r\nDespite the inconvenience caused by the flooding, many people have welcomed the rain, as the country remains in the grip of a drought.\r\n\r\nAs recently as last month, the government declared a national drought emergency in 23 of the 47 counties.\r\n\r\nFood insecurity is currently affecting 2.7 million Kenyans, so any rain to help agricultural output is welcome.', 'Sarah John'),
(7, 'Honduras arrests ''mastermind'' behind Berta Caceres'' murder', 'Police in Honduras have arrested a construction executive for his alleged role in the murder of environmental and indigenous activist Berta Caceres.\r\n\r\nDavid Castillo Mejia is charged as being the "intellectual author" of the killing in 2016 while CEO of Desarrollos Energeticos (DESA), the firm behind a project to build a hydroelectric dam across a river on which indigenous communities were dependant.\r\n\r\nCaceres was a vocal opponent of the plans and said she had received death threats from the firm in the run-up to her assassination two years ago in La Esperanza, Honduras. In the past, DESA has denied any involvement in the murder of Caceres. \r\n\r\nThe arrest on Friday brings the total number of individuals arrested to nine, of which eight are already serving sentences for convictions stemming from the murder.', 'David Castillo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`) VALUES
(1, 'Anwar Ali', 'anwar@kodiary.com', 'male'),
(2, 'Adam', 'adam@gmail.com', 'male'),
(3, 'Adolf', 'adolf@gmail.com', 'male'),
(4, 'Alba', 'alba@gmail.com', 'female'),
(5, 'Alma', 'alma@gmail.com', 'female'),
(6, 'Andrea', 'andrea@gmail.com', 'female'),
(7, 'Caesar', 'caesar@gmail.com', 'male'),
(8, 'Cain', 'cain@gmail.com', 'male'),
(9, 'Calvin', 'calvin@gmail.com', 'male'),
(10, 'Cammilla', 'cammilla@gmail.com', 'female'),
(11, 'Dabria', 'dabria@gmail.com', 'female'),
(12, 'David', 'david@gmail.com', 'male'),
(13, 'Dallas', 'dallas@gmail.com', 'female'),
(14, 'Dame', 'dame@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
