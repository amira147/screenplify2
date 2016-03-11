-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2016 at 09:47 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `screenplify_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `sys_index` int(11) NOT NULL AUTO_INCREMENT,
  `url_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `media_type` varchar(100) DEFAULT NULL,
  `media_link` varchar(255) DEFAULT NULL,
  `created_datetime` int(11) NOT NULL,
  `updated_datetime` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`sys_index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`sys_index`, `url_title`, `title`, `text`, `author`, `media_type`, `media_link`, `created_datetime`, `updated_datetime`, `status_id`) VALUES
(1, 'digital-wayfinding-for-hospitals', 'Case Study: Digital Wayfinding For Hospitals', 'Ever been to a hospital and didn’t know where to go? Where you able to follow the static signs? But still ended up getting lost? It is now common practice for many hospitals to use Digital Wayfinding solutions to guide visitors to their destination. Liverpool Hospital (one of the largest hospitals in New South Wales Australia) is a great example of using Digital Wayfinding in a Hospital. The solutions included a total of 7 Digital Wayfinding units strategically located at the Main entrances and corridors of the Hospital. In addition, there was also 4 Welcome boards displaying communication information and advertisements.\r\n\r\nEver been to a hospital and didn’t know where to go? Where you able to follow the static signs? But still ended up getting lost? It is now common practice for many hospitals to use Digital Wayfinding solutions to guide visitors to their destination. Liverpool Hospital (one of the largest hospitals in New South Wales Australia) is a great example of using Digital Wayfinding in a Hospital. The solutions included a total of 7 Digital Wayfinding units strategically located at the Main entrances and corridors of the Hospital. In addition, there was also 4 Welcome boards displaying communication information and advertisements.', 'John Doe', 'image', 'img/full/04.jpg', 0, 0, 2),
(2, 'which-intel-nuc-for-digital-signage', 'Which Intel NUC Should You Use For Digital Signage?', 'They range from consumer PCs to commercial hardware specifically designed for digital signage. Over the years, we’ve been using the Intel NUCs…in particular the DC53427HYE model because of the Intel vPro technology. vPro technology is a set of hardware features that allows you to remotely manage the PC – this includes being able to remotely restart the NUC if there is an issue with the OS. For those techies out there who are familiar with RIB (Remote Insight Board) or iLO (Integrated Lights Out) on servers, vPro is also very similar and very handy. Basically, with vPro you will be able to remotely restart the NUC if the OS crashes (Blue Screen of Death).\r\n \r\nNow, the DC53427HYE model has now been superseeded by the latest model which is NUC5I5MYHE. This model not only has an i5 processor but it now supports 4K video with eDP. You can read more about this model here: http://www.intel.com/content/www/us/en/nuc/nuc-kit-nuc5i5myhe-board-nuc5i5mybe.html', 'Mark Smith', 'image', 'img/full/11.jpg', 0, 0, 2),
(3, 'importance-of-great-led-software', 'The Importance of Great LED Software', 'Historically, creating content management software for standard resolution screens has been relatively easy. The market is crowded with free and paid software that offer plenty of attractive and complex features to manage the content of monitors, LCDs, plasma, and other standard resolution digital screens. Why is that? LCDs and plasma screens live in close proximity to the software world; people have been using them as monitors for their computers to view images, watch videos, and play games for decades.  So their solutions stay up to date with technology. Nevertheless, little to none of this has migrated to their close relatives, the non-standard resolution digital screens, such as LEDs, to great hindrance to the effectiveness of these type of signs.\r\n\r\nThe dynamics and flexibility of digital signage is one of its main selling points. One display turns into unlimited (and compelling) signs since images and text can be changed rapidly to adjust to current needs. To make this possible, the digital sign is connected to a computer that has a special software that allows users to schedule and manage the screen’s content. The effectiveness of the sign will greatly depend on the software it uses. The highest quality hardware will be ineffective if the content is stale, unattractive, not scheduled properly, or has other playback difficulties.  \r\nA well designed content management software with an intuitive interface will encourage more content variation, more testing, regular updates, and better scheduling. Good content design tools will make creating engaging and attractive content easier and cheaper. Reliable playback systems will make sure that the sign displays content 24 hours a day, 365 days a year. Poorly developed software will have the opposite results.\r\nWith all that said, LED signs are at a clear disadvantage with a few good, inexpensive software options and most solutions stuck in the previous millennium.\r\nTo add insult to injury, most LED sign users are convinced that their sign can only work with the poorly designed software that came with the display. When in 99% of the cases, this is not the true. As we mentioned, digital screens (LED signs included) run their content from a computer (in the LED world it is normally called a controller) so any compatible software can be installed to replace the original software. This misunderstanding comes mostly from the Chinese LED manufacturers, whom are led to believe this by the companies that manufacture the control system electronics and provide them with their software.', 'Jose Chavez', 'video', 'img/full/07.jpg', 0, 0, 2);
