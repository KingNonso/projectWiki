-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 01:14 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_wiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_history`
--

CREATE TABLE `about_history` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `details` text,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_history`
--

INSERT INTO `about_history` (`id`, `title`, `details`, `date`) VALUES
(6, 'Achievements', '&lt;p&gt;The NIEEE\r\nhas won eleven out of the thirteen Group Dynamics Competition of the NSE that\r\nit has participated in (the competition is organized by the NSE and it is the\r\nhighest professional excellence honour for NSE divisions).\r\n\r\n&lt;/p&gt;&lt;p&gt;In\r\n2010, the NIEEE became the first division to introduce a special annual retreat\r\ncalled &lt;b&gt;Annual Retreat/Performance\r\nAssessment&lt;/b&gt; for National Executive and Chapter chairmen of the institution.\r\nThe retreat provides a forum for the leaders of the institution to strategize\r\non programmes and resources that will aid the development and growth of the\r\ninstitution, electrical and electronics engineers as well as the\r\nelectrical/electronics engineering profession. This first retreat was held\r\nduring the NIEEE chairmanship of Engr.Olafemi Olaniyan, MNSE.&lt;/p&gt;\r\n\r\n\r\n\r\n\r\n\r\n&lt;br&gt;&lt;p&gt;&lt;/p&gt;', '2016-12-03 09:46:03'),
(7, 'Major activities of the NIEEE include', '&lt;ul&gt;&lt;li&gt;Publication of Newpapers and magazines of which Electrical News is the flagship publication. Electrical News was first published in 1991; the last publication is Vol 3 Issue No. 4 (Oct - Dec 1995) However the magazine has since been rebranded in 2000 and repackaged as ee+t magazine which runs till date&lt;/li&gt;&lt;li&gt;Publication of NIEEE 10th Year Souvenir Book (1985 - 1995)&lt;/li&gt;&lt;li&gt;Conducted National Seminars in association with Federal Ministry of Power in 1990 and 1993 to review the Revised Electricity Supply and Wiring regulations Cap 57 of the Laws of the Federation ( so as to produce the gazette and remaned Cap 106: Electricity Supply and Wiring Regulations: Laws of Nigeria, 1990)&lt;/li&gt;&lt;li&gt;Publication of Annual Conference Proceedings since 1993&lt;/li&gt;&lt;li&gt;Industrial visits to Electrical and Electronics and Telecommunications firms &lt;br&gt;&lt;/li&gt;&lt;li&gt;Organization of Professional Development courses such as The Engineer in Management Seminar, Electrical Plant Operators course&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '2016-12-03 09:54:27'),
(8, 'A new about us', 'Just cool stuffs', '2017-09-23 23:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `project_review`
--

CREATE TABLE `project_review` (
  `id` int(123) NOT NULL,
  `name` varchar(160) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(160) NOT NULL,
  `project_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_review`
--

INSERT INTO `project_review` (`id`, `name`, `user_id`, `message`, `date`, `email`, `project_id`) VALUES
(2, 'Usman Dan fodio', NULL, 'qaz', '2016-07-01 12:51:26', 'nonso@frogfreezone.com', 19),
(3, 'Parry Hedima', NULL, 'szx eveve', '2016-07-01 13:01:02', 'achinonso@gmail.com', 20),
(4, 'rnuornur', NULL, 'njbjbk', '2016-07-01 13:48:39', 'mykingnonso@gmail.com', 19),
(5, 'Cool Farmer', NULL, 'bgubuy bybybuybb', '2016-07-01 13:50:52', 'jesse@gmail.com', 20),
(6, 'Cool Farmer You', NULL, 'bdrtdrdrbd vgfg fvg', '2016-07-01 13:53:32', 'jesse@gmail.com', 19),
(7, 'We Farmer Nonny', NULL, 'My comment on what they see is just too awesome\r\nWow, what is happening\r\n\r\n\r\nWorship here I come\r\n\r\nGood', '2016-07-01 13:58:22', 'mykingnonso@gmail.com', 1),
(8, 'Parry Hedima', NULL, 'asdsa', '2016-07-01 13:59:47', 'achinonso@gmail.com', 20),
(14, 'Philip Rowland ', 1, 'Bow wow..................\nIf this post inspired you, made sense, got you thinking, or you just loved it', '2016-10-01 12:47:23', 'philip@gmail.com', 26),
(15, 'Philip Rowland ', 1, 'Manner of men... whence If this post inspired you, made sense, got you thinking, or you just loved it', '2016-10-01 12:48:58', 'philip@gmail.com', 26),
(16, 'Philip Rowland ', 1, 'Beautifully for all creations', '2016-10-01 12:52:38', 'philip@gmail.com', 26),
(17, 'Philip Rowland ', 1, 'Hmmm......', '2016-10-01 12:53:35', 'philip@gmail.com', 26),
(18, 'Henry Okafor ', 2, 'I am loving this', '2016-10-01 13:14:09', 'achinonso@gmail.com', 26),
(19, 'Philip Rowland ', 1, 'Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.\n\nContinue Reading &raquo; ', '2016-10-03 02:17:09', 'philip@gmail.com', 26),
(20, 'Philip Rowland ', 1, 'Something\'s moving', '2016-10-03 22:22:45', 'philip@gmail.com', 26),
(21, 'Philip Rowland ', 1, 'qqq', '2016-10-03 23:12:51', 'philip@gmail.com', 26),
(22, 'Philip Rowland ', 1, 'qqqq', '2016-10-03 23:16:23', 'philip@gmail.com', 26),
(23, 'Philip Rowland ', 1, 'qq', '2016-10-03 23:16:37', 'philip@gmail.com', 26),
(24, 'Philip Rowland ', 1, 'sss', '2016-10-04 07:54:35', 'philip@gmail.com', 26),
(25, 'Henry Okafor ', 2, 'qqq', '2016-10-04 07:55:11', 'achinonso@gmail.com', 26),
(26, 'Henry Okafor ', 2, 'aa', '2016-10-04 07:55:50', 'achinonso@gmail.com', 26),
(27, 'Henry Okafor ', 2, 'weww', '2016-10-04 10:42:07', 'achinonso@gmail.com', 26),
(28, 'Walter', 0, 'Nice post', '2016-10-07 13:25:19', 'achinonso@gmail.com', 30),
(29, 'Henry Okafor ', 2, 'sdssas', '2016-10-07 13:26:28', 'achinonso@gmail.com', 29),
(30, 'James Masterfield', 0, 'Awesome post, well thought through and put together. \nI see you going places g', '2016-10-07 13:31:24', 'achinonso@gmail.com', 30),
(31, 'Yunisa Amina', 0, 'alsjdkldjkfjskljdkkljs', '2016-10-07 14:00:24', 'achinonso@gmail.com', 31),
(32, 'Support Team', 1, 'sdsdfs', '2017-06-26 20:30:29', 'support@bsso.org.ng', 1),
(33, 'Support Team', 1, 'sdsdfs', '2017-06-26 20:32:15', 'support@bsso.org.ng', 1),
(34, 'First Man Gana Solo', 16, 'dsfss', '2017-06-26 20:38:07', 'sms@gmail.com', 32),
(38, 'Epic Paul', 0, 'alkdsjja', '2017-09-23 15:01:26', 'epic@gamil.com', 91),
(39, 'Younce Satomi', 0, 'When you wish to add to the File, there are a couple of things you need to note. The Paper: Just upload a single picture, ensure it is of a high resolution. The Title: This is the header, usually appears in bold. The Paper Description: Tell everyone about the Paper, what it means and what it symbolizes.\r\nWhen you wish to add to the File, there are a couple of things you need to note. The Paper: Just upload a single picture, ensure it is of a high resolution. The Title: This is the header, usually appears in bold. The Paper Description: Tell everyone about the Paper, what it means and what it symbolizes.\r\nWhen you wish to add to the File, there are a couple of things you need to note. The Paper: Just upload a single picture, ensure it is of a high resolution. The Title: This is the header, usually appears in bold. The Paper Description: Tell everyone about the Paper, what it means and what it symbolizes.', '2017-09-23 15:03:26', 'musa@gmail.com', 91);

-- --------------------------------------------------------

--
-- Table structure for table `technical_papers`
--

CREATE TABLE `technical_papers` (
  `paper_id` int(255) NOT NULL,
  `uploaded_by` int(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `paper_title` text NOT NULL,
  `paper_author` text NOT NULL,
  `date_presented` date DEFAULT NULL,
  `place_presented` text,
  `occasion` text,
  `abstract` text,
  `full_paper_pdf` text,
  `paper_slide` text,
  `tags` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_papers`
--

INSERT INTO `technical_papers` (`paper_id`, `uploaded_by`, `uploaded_on`, `paper_title`, `paper_author`, `date_presented`, `place_presented`, `occasion`, `abstract`, `full_paper_pdf`, `paper_slide`, `tags`) VALUES
(12, 1, '2017-01-04 23:03:15', 'POST LIBERALISATION CHALLENGES IN NIGERIA’S ELECTRICITY SECTOR', 'Olice Kemenanabo FNSE', '2012-10-01', NULL, '12', NULL, 'Post_Liberalization_Challenges_....__(Kemenanabo_O).pdf', NULL, NULL),
(14, 1, '2017-01-04 23:04:51', 'P r o j e c t  R i s k  M a n a g e me n t', 'E n g r .  A s o g w a  J .  C', '2012-10-01', NULL, '14', NULL, 'Project_Risk_Management_(Asogwa__JC).pdf', NULL, NULL),
(15, 1, '2017-01-04 23:05:53', 'TELETRAFFIC ENGINEERING IN BROADBAND NETWORKS', 'Engr. C. A. Nwabueze and Engr. J. K. Offor', '2012-10-01', NULL, '15', NULL, 'Teletraffic_Engineering_in__Broadband_Network_(Nwabueze_et_al).pdf', NULL, NULL),
(16, 1, '2017-01-04 23:06:37', 'THE BASE TRANSCEIVER STATION (BTS) PLACEMENT: - ISSUES AND OPTIMALITY', 'Alenoghena C. O and  Emagbetere J. O', '2012-10-01', NULL, '16', NULL, 'The_Base_Transceiver_Station_.....__(Alenoghena_et_al).pdf', NULL, NULL),
(17, 1, '2017-01-04 23:07:18', 'TRANSFORMATION IN  POWER AND TELECOMMUNICATIONS  THROUGH  PUBLIC-PRIVATE PARTNERSHIP', 'DR. SAM AMADI', '2012-10-01', NULL, '17', NULL, 'Transformation_in_Power_n_Telecomms__(Amadi_S).pdf', NULL, NULL),
(18, 1, '2017-01-04 23:08:00', 'TRANSFORMING THE POWER SECTOR USING RENEWABLE ENERGY  TECHNOLOGY IN THE ECOSYSTEM', 'IBRAHEEM T.B', '2012-10-01', NULL, '18', NULL, 'Transforming_the_Power_Sector_Using___Renewable_Energy_...._(Ibraheem_TB).pdf', NULL, NULL),
(20, 1, '2017-01-04 23:12:53', 'Power Transmission in the Niger Delta  Creeks: Challenges and Prospects', 'Engr Kelechi Eke', '2013-10-01', NULL, '20', NULL, 'Power_transmission_in_the_ND_Creeks__(Kelechi_Eke).pdf', 'Power_trxn_in_the_ND_Creeks___(Kelechi_Eke)_(presentation_slides).pdf', NULL),
(21, 1, '2017-01-04 23:14:18', 'A SIMPLE RELAY DESIGN AND CONSRUCTION', 'AKPOYIBO, FAMOUS EBIOWEI', '2014-10-01', NULL, '21', NULL, 'A_Simple_Relay_Design_and__Construction_(Akpoyibo_F).pdf', 'A_simple_relay_design_n__construction_(Akpoyibo_Famous)_[Compatibility_Mode].pdf', NULL),
(22, 1, '2017-01-04 23:15:07', 'DEPLOYMENT OF SUSTAINABLE ICT INFRASTRUCTURE IN NIGERIA VIS A VIS  THE NATION BUILDING', 'David O. Odedele', '2014-10-01', NULL, '22', NULL, 'Deployment_Sustainable_ICT_Infrast__in_Nig_vis_a_vis_Nation_Building_(Odedele_D).pdf', 'Deployment_Sustainable_ICT____Infrastructure_in_Nigeria_vis_a_vis_nation_Building_(slides)_(Odedele___D.pdf', NULL),
(23, 1, '2017-01-04 23:15:49', 'DESIGN AND CONSTRUCTION OF 1500VA VARIABLE OUTPUT STEP DOWN  TRANSFORMER', 'OGUNDARE AYOADE B. , OMOGOYE O. SAMUEL &amp;  OLUWASANYA OMOTAYO J.', '2014-10-01', NULL, '23', NULL, 'Design_and_Construction_of_1500VA__Variable__Output_Step_Down_Transformer_(Ogundare_et_al).pdf', NULL, NULL),
(24, 1, '2017-01-04 23:17:23', 'Design and simulation of Automatic Transfer Switch with shutdown timing  using Programmable logic controller.', 'Omogoye, O.S,  Ogundare. A.B. , Ojo F.E.', '2014-10-01', NULL, '24', NULL, 'Design_and_Simulation_of_Automatic__Transfer_Switch_with_Shutdown_Timing_using_Programmable_Logic_Controller__(O.pdf', 'Design_and_simulation_of_Automatic__Transfer_Switch_with_shutdown_timing_using_Programmable_logic_controller__(s.pdf', NULL),
(25, 1, '2017-01-04 23:18:18', 'DETERMINATION AND COMPARISON OF PENETRATION LOSS OFGSM SIGNALS BETWEEN  CONCRETE, BLOCK AND MUD BUILDINGS IN ORHUWHORUN, DELTA STATE, NIGERIA', 'Idim, A. I and  Anyasi F.I', '2014-10-01', NULL, '25', NULL, 'Determination_and_Comparison__Penetran_Loss_(Idim_A_et_al).pdf', 'Determination_and_Comparison__Penetran_Loss_(Idim_A_et_al.pdf', NULL),
(26, 1, '2017-01-04 23:20:27', 'EARTHING ARRAGEMENTS', 'AKPOYIBO, FAMOUS EBIOWEI', '2014-10-01', NULL, '26', NULL, 'Earthing_Arrangements_(Akpoyibo__F).pdf', 'Earthing_arrangements_(Akpoyibo__Famous)_[Compatibility_Mode].pdf', NULL),
(27, 1, '2017-01-04 23:21:22', 'Electrical Protection of AC Transmission  Lines', 'Engr Kelechi Eke', '2014-10-01', NULL, '27', NULL, 'Electrical_Protection_of_AC__Transmission_Lines_(Kelechi_Eke).pdf', 'Electrical_Protection_of_AC__Transmission_Lines_(slides)_(Kelechi_Eke.pdf', NULL),
(28, 1, '2017-01-04 23:22:06', 'ELECTRICAL SAFETY IN BUILDINGS', 'ENGR. BENJAMIN U., OZOBEME', '2014-10-01', NULL, '28', NULL, 'Electrical_safety_in_buildings_(Ben__Ozobome).pdf', 'Electrial_safety_in_buildings_(Ben__Ozobome)_[Compatibility_Mode].pdf', NULL),
(29, 1, '2017-01-04 23:23:24', 'Fiber technology: The Future of Broadband in Nigeria', 'Adekunle, Oluwadara Victoria.,  Olorundajo, Babatunde Alfred,  Engr. John Funso-Adebayo', '2014-10-01', NULL, '29', NULL, 'Fiber_tech_(the_future_of_broadband__nig_(John_Funsho_Adebayo_et_al).pdf', NULL, NULL),
(30, 1, '2017-01-04 23:24:12', 'FIRE DETECTORS IN BUILDING INSTALLATIONS', 'ENGR. BENJAMIN U., OZOBEME', '2014-10-01', NULL, '30', NULL, 'Fire_detectors_in_building__installations_(Ben_Ozobome).pdf', 'Fire_detection_systems_in_buildings__(Ben_Ozobome)_[Compatibility_Mode].pdf', NULL),
(31, 1, '2017-01-04 23:52:40', 'Infrastructure Financing of Nigeria’s \nPower Sector', 'Engr Kelechi Eke', '2014-10-01', NULL, '31', NULL, '', NULL, NULL),
(32, 1, '2017-01-04 23:25:36', 'Modelling and simulation of altitude effects on weather balloon microsatellite sensors', 'Busari, Sherif A. and Akingbade, Kayode F.', '2014-10-01', NULL, '32', NULL, 'Modelling_and_Simulation_of__Altitude_Effects_on_Weather_Balloon_Microsatellite_Sensors_(Busari_et__al).pdf', NULL, NULL),
(33, 1, '2017-01-04 23:28:17', 'Renewable Energy Technologies, Key to Developing National  Sustainable Power Infrastructure', 'Engr. Babatunde Akanbi', '2014-10-01', NULL, '33', NULL, 'Renewable_Energy_Technologies,_Key__to_Developing_National_Sustainable_Power_Infrastructure_(Babatunde__Akanbi.pdf', NULL, NULL),
(34, 1, '2017-01-04 23:29:01', 'S o l a r  H o m e  S y s t e m s  F e a t u r e s ,  D e s i g n  a n d  M a i n t e n a n c e', 'Engr. Asogwa Jude Chukwugozie', '2014-10-01', NULL, '34', NULL, 'Solar_Home_System,_Feature_Design__and_Maintenance_(Asogwa_Jude_Chukwugozie).pdf', NULL, NULL),
(35, 1, '2017-01-04 23:30:10', 'Sustainable Development: Renewable Energy and Energy Efficiency Impacts in Nigeria', 'A. A. Dawuda, F. O. Olu and T. B. Ibraheem', '2014-10-01', NULL, '35', NULL, 'Sustainable_Development_Renewable__Energy_and_Energy_Efficiency_Impacts_in_Nigeria_(Dawuda_AA_et_al.pdf', 'Sustainable_Development_Renewable__Energy_and_Energy_Efficiency_Impacts_in_Nigeria_(slides)_(Dawuda_AA_et_al)__[Com.pdf', NULL),
(36, 1, '2017-01-04 23:31:13', 'Technology Education key to Developing Human Capacity for Sustainable Growth in Communication Sector', 'Engr. J. N Eneh, Prof. H. C Inyiama, H. O Orah', '2014-10-01', NULL, '36', NULL, 'Technology_Education__Key_to__Developing_Human_Capacity_for_Sustainable_Growth_in_Communication_Sector___(Eneh_e_1.pdf', 'Technology_Education_as_key_to__Developing_Human_capacity_for_Sustainable_Growth_in_Communication_Sector__(slides)_(Eneh_at_al)_1.pdf', NULL),
(37, 1, '2017-01-04 23:31:53', 'The Viability and Cost Effectiveness of Wind as Energy Source in  Three Cities of Southwestern Nigeria', 'Nze-Esiaga Nnawuike, Okogbue Emmanuel C.', '2014-10-01', NULL, '37', NULL, 'The_Viability_and_Cost__Effectiveness_of_Wind_as_Energy_Source_in_Three_Cities_of_Southwestern__Nigeria_(Nze_Esi.pdf', NULL, NULL),
(38, 1, '2017-01-04 23:33:28', 'UNRELIABLE ELECTRIC POWER SUPPLY IN NIGERIA  (Akure 11kV feeders a case study)', 'Ale, T. O., Odesola, A. O.', '2014-10-01', NULL, '38', NULL, 'Unreliable_Electric_Power_Supply_in__Nigeria_(Ale_TO_et_al).pdf', 'Unreliable_Power_Supply_in_Nigeria__(Akure_11kV_feeders_a_case_study)_(slides)_(Ale_TO_et_al)_[Compatibil.pdf', NULL),
(39, 1, '2017-01-04 23:34:28', 'Assessment of Electric Power Distribution Feeders Reliability', 'Johnson Daniel Ogheneovo', '2015-10-01', NULL, '39', NULL, 'Assessment_Electric_Power_Distn__Feeders_(Johnson_D.pdf', NULL, NULL),
(40, 1, '2017-01-04 23:50:21', 'Assessment of Steady State Stability In MultiMachine Using Synchronous Power Coefficients.', 'Ayoade Benson OGUNDARE, I. A. ADEJUMOBI', '2015-10-01', NULL, '40', NULL, '', NULL, NULL),
(41, 1, '2017-01-04 23:55:49', 'COMPUTER NETWORK MANAGEMENT USING CYBEROAM THREAT MANAGER: ISSUES AND  CHALLENGES', 'Olu F.O., Adedayo O.S., Ayanleke O.A., Mohammed A.N., Mohammed H.', '2015-10-01', NULL, '41', NULL, 'Computer_Network_Mgt_using_Cyberoam__...(Olu_F.O._et_al.pdf', NULL, NULL),
(43, 1, '2017-01-04 23:57:53', 'DESIGN AND DEVELOPMENT OF FINGERPRINT BASED CAR STARTING SYSTEM', 'C.O Folorunso,  L.A.Akinyemi, A.A. Ajasa, and Oladipupo Kazeem', '2015-10-01', NULL, '43', NULL, 'Design_n_Devt_Fingerprint_Car_Syst__(Folorunsho_C_et_al.pdf', 'Design_and_Development_of__Fingerprint_based_Car_Starting_System_(Folorunsho_C_et_al.pdf', NULL),
(45, 1, '2017-01-05 00:01:50', 'Design and Implementation of a Secured Entry/Exit Car Parking Lot Using  Programmable Logic Controller (PLC)', 'Engr. David O. Odedele, MNSE,  Abiola L. Yusuf, Engr. (Mrs.) Omolola A. Ogbolumani, MNSE', '2015-10-01', NULL, '45', NULL, 'Design_n_Implementation_Secured__Entry.._(Odedele_et_al.pdf', 'Design_n_Implementation_Secured__Entry.._(Odedele_et_al).pdf', NULL),
(47, 1, '2017-01-05 00:03:35', 'Energy Harvesting for Remote Sensor Networks and  Low Power Electronic Devices', 'Nwabueze, C. A. and Nwosu, A. W.', '2015-10-01', NULL, '47', NULL, 'Energy_Harvesting_Remote_sensor__Networks_(Nwabueze_et_al.pdf', 'Energy_Harvesting_for_Remote_Sensor__Networks_and_Low_Power_Electronic_Devices_(Nwabueze_et_al).pdf', NULL),
(49, 1, '2017-01-05 00:04:51', 'Green and Mobile Broadband Communications for Africa', 'Engr. John Funso-Adebayo, Adekunle, Oluwadara Victoria, and Olorundajo, Babatunde Alfred', '2015-10-01', NULL, '49', NULL, 'Green_n_Mobile_Broadband__Communications_(Adekule_OV,_Funso-Adebayo_J_et_al.pdf', NULL, NULL),
(51, 1, '2017-01-05 00:07:12', 'Home Automation System, New Frontier for Building Services Development in Nigeria.', 'Engr. Babatunde Akanbi', '2015-10-01', NULL, '51', NULL, 'Home_Automation_System,_New__Frontier_..._(Akanbi_B.pdf', 'Home_Automation_System,_New__Frontier_for_Building_Services_Development_in_Nigeria_(Akanbi_B).pdf', NULL),
(52, 1, '2017-01-05 00:08:23', 'LOAD GROWTH DESIGN  AND MANAGEMENT', 'Engr. Thomas C. Ifechukwu', '2015-10-01', NULL, '52', NULL, 'Load_Growth_Design_&_Mgt_(Ifechukwu__Thomas.pdf', 'Transmission_and_Distribution_Load___Growth_Design_&_Mgt_(Ifechukwu_Thomas.pdf', NULL),
(53, 1, '2017-01-05 00:09:44', 'Managing Engineering Projects in \nNigeria’s Joint Venture Exploration and \nProduction Industry', 'Engr Kelechi Eke', '2015-10-01', NULL, '53', NULL, 'Managing_Engg_Projs_in_Nig_JV_E&amp;P__Indt_(Kelechi_Eke.pdf', 'Managing_Engineering_Projects_in_Nigeria’s_Joint_Venture_Exploration_and_Production_Industry__(Kelechi_Ek.pdf', NULL),
(54, 1, '2017-01-05 00:11:07', 'MICROGRID IN SMART GRID VOLTAGE CONTROL', 'Petinrin, J.O., Agbolade, J.O. and Mojibola, O.G.', '2015-10-01', NULL, '54', NULL, 'Microgrid_Smart_Grid_Vtg_Cntrl__(Petirin_JO.pdf', 'Microgrid_Smart_Grid_Vtg_Cntrl__(Petirin_JO_1.pdf', NULL),
(55, 1, '2017-01-05 00:11:57', 'Natural Lighting System to Promote Energy Efficiency and Reduce Cost', 'LAWORE OLUFEMI MICHEAL', '2015-10-01', NULL, '55', NULL, 'Natural_Lighting_System_(Lawore_O__M.pdf', NULL, NULL),
(56, 1, '2017-01-05 00:13:03', 'ON THE PERFORMANCE OF CELLULAR MOBILE TECHNOLOGY FOR UBIQUITOUS LEARNING', 'Obiyemi, O.O., Abdulmajeed M.K., and Lasisi, H', '2015-10-01', NULL, '56', NULL, 'On_the_Performance_Cellular_Mobile__Tech_(Obiyemi_O_et_al.pdf', NULL, NULL),
(57, 1, '2017-01-05 00:15:09', 'POTENTIAL CONTRIBUTION OF HYDROKINETIC POWER IN NIGERIA', 'Asogwa J. C. &amp; Gidado M. H.', '2015-10-01', NULL, '57', NULL, 'Potential_Contribution_of__Hydrokinetic_Power_(Asogwa_et_al_2.pdf', 'Potential_Contribution_of__Hydrokinetic_Power_(Asogwa_et_al)_1.pdf', NULL),
(58, 1, '2017-01-05 00:16:46', 'PROSPECT OF EQUIPMENT ASSET MANAGEMENT IN NIGERIA ELECTRICITY SUPPLY INDUSTRY (NESI)', 'Dr. Peter O. Oluseyi, ENGR. Clement O. Ayegbusi , ENGR. Olubayo M. Babatunde', '2015-10-01', NULL, '58', NULL, 'Prospect_Equipment_Asset_Mgt__(Oluseyi_P_et_al.pdf', 'Prospect_Equipment_Asset_Mgt___(Oluseyi_P_et_al)_[Compatibility_Mode].pdf', NULL),
(59, 1, '2017-01-05 00:18:07', 'SOIL CONDITIONING FOR EARTHING', 'ENGR. Famous E. Akpoyibo', '2015-10-01', NULL, '59', NULL, 'Soil_Conditioning_for_Earthing__(Akpoyibo_F.pdf', 'Soil_Conditioning_for_Earthing____(Akpoyibo_F)_[Compatibility_Mode].pdf', NULL),
(60, 1, '2017-01-05 00:18:59', 'Strategies for Effective Building  Electrical Services in Nigeria', 'Engr Kelechi Eke', '2015-10-01', NULL, '60', NULL, 'Strategies_Effective_Building_Elect__Servs_in_Nig_(Kelechi_Eke.pdf', 'Strategies_for_Effective_Building___Electrical_Services_in_Nigeria_(Kelechi_Eke).pdf', NULL),
(61, 1, '2017-01-05 00:19:39', 'SYNERGY OF EFFECTIVE POWER SECTOR AND TOWN PLANNINGUNIT', 'OLASUNKANMI Omowumi Grace', '2015-10-01', NULL, '61', NULL, 'Synergy_Effective_Power_n_Town__Planning_(Olasunkanmi_O_et_al.pdf', NULL, NULL),
(62, 1, '2017-01-05 00:20:47', 'The Business of Electric Power Systems Engineering', 'Chinonso Ani', '2015-10-01', NULL, '62', NULL, 'The_Business_of_Electric_Power__Systems_Engineering_(Ani_C.pdf', 'The_Business_of_Electric_Power__Systems_Engineering(Chinonso_Ani).pdf', NULL),
(63, 1, '2017-01-05 00:21:46', 'THE EFFECT OF RESISITVITY ON ELECTRICAL GROUNDING SYSTEM', 'ENGR. D.A. FOLARIN, ENGR. H.A. ZUBAYR', '2015-10-01', NULL, '63', NULL, 'The_Effect_of_Resistivity_on_Elect__Grounding_Syst_(Folarin_DA.pdf', 'The_Effect_of_Resistivity_on__Electrical_Grounding_Systems_(Folarin_DS).pdf', NULL),
(64, 1, '2017-01-05 00:26:25', 'ANALYSIS OF AVERAGE HOURLY LOAD IN UMUAHIA, ABIA  STATE NIGERIA', 'Obi, P. I. FNSE, MNIEEE, Orioha, Morgan, Emeghara, M. C', '2016-10-01', NULL, '64', NULL, 'Analysis_of_Avearge_Hourly_Load_in__Umuahia_(Obi_P.I._et_al).pdf', NULL, NULL),
(65, 1, '2017-01-05 00:27:36', 'Analysis of Internet and Social Media Engagement Behaviour of Nigerians for E-Business Advantage', 'B.O.Omijeh MNSE, MNIEEE and Mbanefo B.C.O', '2016-10-01', NULL, '65', NULL, 'Analysis_of_Internet_and_Social__Media_Engagement_Behaviour_..._(Omijeh,_B.I._and_Mbanefo_B.C.O.).pdf', 'Impact_of_Social_Media_on___Businesses_in_Nigeria_(Lawore__O.M.).pdf', NULL),
(66, 1, '2017-01-05 00:28:42', 'Channel capacity and outage probability investigation of Selective Relaying in Power  Line Cooperative Communication System.', 'Peter O. Aiyelabowo, A. Sali, Samsul Bahari b. Noor and Nor Kamariah Noordin', '2016-10-01', NULL, '66', NULL, 'Channel_Capacity_and_Outage___Probability_Investigation_....__(Aiyelabowo_et_al).pdf', NULL, NULL),
(67, 1, '2017-01-05 00:29:34', 'DC Micro-grid and Renewable Energy System: An Efficient and Sustainable Power  Sector Solution', 'Engr. Babatunde Akanbi', '2016-10-01', NULL, '67', NULL, 'DC_Micro-grid_and_Renewable__Energy___System_..._(Akanbi_B.).pdf', NULL, NULL),
(68, 1, '2017-01-05 00:30:18', 'ENGINEERING APPLICATIONS OF CHAOS', 'Edwin A. Umoh', '2016-10-01', NULL, '68', NULL, 'Engineering_Applican_Chaos_(Umoh___EA,_Wudil_TSG).pdf', 'Engineering_Applican_Chaos_(Umoh__EA,_Wudil_TSG).pdf', NULL),
(69, 1, '2017-01-05 00:31:31', 'General Algebraic Modelling System Applied to the Economic  Dispatch of Generation Plants', 'Dr P.O. Oluseyi, U. Damisa, Engr. O. O. Babayomi', '2016-10-01', NULL, '69', NULL, 'General_Algebraic_Modelling_System__...._Generation_Plants__(Oluseyi_et_al).pdf', 'General_Algebraic_Modelling_System___Applied_to_the_Economic_Dispatch_of_Generation_Plants__(Oluseyi_et_al.pdf', NULL),
(70, 1, '2017-01-05 00:32:20', 'Impact of Social Media on Businesses in Nigeria', 'LAWORE OLUFEMI MICHEAL', '2016-10-01', NULL, '70', NULL, 'Impact_of_Social_Media_on__Businesses_in_Nigeria_(Lawore__O.M.).pdf', NULL, NULL),
(71, 1, '2017-01-05 00:34:23', 'MAINTENANCE SOFWARE MODULE FOR EFFECTIVE MAINTENANCE MANAGEMENT', 'B.I Gwaivangmin, MNIEEE, MNSE', '2016-10-01', NULL, '71', NULL, 'Maintenance_of_Software_Module_for__Effective_Engineering__Mtce__(Gwaivangmin_B.I.).pdf', 'Maintenance_of_Software_Module_for___Effective_Engineering__Mtce__(Gwaivangmin_B.I.).pdf', NULL),
(72, 1, '2017-01-05 00:37:04', 'Model of Emitter Location System Based on Correlative Interferometer Principle', 'U.I. Bature, A. Y. Nasir, K. I. Jahun, Nura M. Tahir', '2016-10-01', NULL, '72', NULL, 'Model_of_Emitter_Location_System__Based_...._(Bature_U.I._et_al).pdf', 'Model_of_Emitter_Location_System___Based_...._(Bature_U.I._et_al).pdf', NULL),
(73, 1, '2017-01-05 00:38:58', 'Optimal Dispatch of Generation: Case Study', 'Dr. S. Adetona, Engr. O. O. Babayomi, U. Damisa', '2016-10-01', NULL, '25', NULL, 'Optimal_Dispatch_of_Generation_Case__Study_(Adetona_S).pdf', 'Optimal_Dispatch_of_Generation_Case__Study_(Adetona_S)_1.pdf', NULL),
(74, 1, '2017-01-05 00:40:25', 'Optimal Siting and Tuning of Thyristor Controlled Series  Compensator (TCSC) Using Bacterial Foraging Algorithm (BFA)', 'Haruna, Y. S, Oroniyi, A. A, Bakare, G. A', '2016-10-01', NULL, '25', NULL, 'Optimal_Siting_and_Tuning_of__Thyristor_Controlled_....__(Haruna_Y.S._et_al).pdf', 'Optimal_Siting_and_Tuning_of__Thyristor_Controlled_....__(Haruna_Y.S._et_al)_1.pdf', NULL),
(75, 1, '2017-01-05 00:41:42', 'Performance Evaluation of a Matched Filter in detecting pulse transmitted over a noisy Channel', 'B. O. Omijeh MNSE, MNIEEE and M.Ehikhamenle  MNSE', '2016-10-01', NULL, '25', NULL, 'Performance_Evaluation_of_a_Matched__Filter_in_Detecting_...._(Omijeh,_B.I._and_Ehikhamenle,_M.).pdf', NULL, NULL),
(76, 1, '2017-01-05 00:42:37', 'POWER FACTOR CORRECTION: AN ECONOMIC TOOL FOR PLANNING A SUSTAINABLE POWER  SYSTEM', 'Sadiku Liyasu Umar', '2016-10-01', NULL, '25', NULL, 'Power_Factor_Correction_....__(Sadiku_L._Umar).pdf', NULL, NULL),
(77, 1, '2017-01-05 00:43:59', 'ROBOT-CHAOS INTERACTION', 'Edwin A. Umoh, Ogri J. Ushie, Omokhafe J. Tola', '2016-10-01', NULL, '25', NULL, 'Robot_Chaos_Interaction_(Umoh_EA_at__al).pdf', NULL, NULL),
(78, 1, '2017-01-05 00:44:56', 'The Impact of System Component Ratings on the TotalOutput  Power of a Solar-Diesel Hybrid System.', 'Mustafa Abba Imam', '2016-10-01', NULL, '25', NULL, 'The_Impact_of_System_Component__Ratings_on_the_....._(Mustafa_A.I.).pdf', NULL, NULL),
(79, 1, '2017-01-05 00:45:56', 'Transition in Global Energy Carrier From Carbon Economy to Hydrogen Economy', 'Engr Kelechi Eke', '2016-10-01', NULL, '25', NULL, 'Transition_in_Global_Energy_Carrier__From_Carbon_Economy_to_Hydrogen_Economy_(Engr_Kelechi_Eke).pdf', 'Transition_in_Global_Energy_Carrier___..._Hydrogen_Economy_(Kelechi_Eke).pdf', NULL),
(81, 1, '2017-01-07 22:52:19', 'ELECTRIC POWER  SUBSTATIONS, COMPONENTS  AND FUNCTIONs', 'ENGR. ISIBOR SIMEON', '2015-10-01', NULL, '25', NULL, NULL, 'Electric_Power_Substations__Components_and_Functions_(Ibibor_S.pdf', NULL),
(82, 1, '2017-01-07 22:53:45', 'ACCESS CONTROL IN  CONTEMPORARY TIMES', 'ENGR. ADEGBOYEGA ADELEYE', '2014-10-01', NULL, '25', NULL, NULL, 'Access_control_contemporary_times__(Adegboyega_A.pdf', NULL),
(83, 1, '2017-01-07 22:54:51', 'LAUNCHING YOUR CAREER: HOW  TO FIND YOUR PERFECT JOB', 'ENGR. BENJAMIN U., OZOBEME', '2014-10-01', NULL, '25', NULL, NULL, 'Launching_your_career_how_to_find___perfect_job_(Ben_Ozobome)_(slides)_[Compatibility_Mode].pdf', NULL),
(84, 1, '2017-01-07 22:57:16', 'BASIC PRINCIPLES OF  ROBOTICS', 'RAPHAEL ONOSHAKPOR', '2012-10-01', NULL, '25', NULL, NULL, 'Basic_Principles_of_Robotics__(Onoshakpor_R)_(slides).pdf', NULL),
(85, 1, '2017-01-07 22:58:35', 'ROADWAY LIGHTING CONCEPTS AND DESIGN', 'Engr. Isibor Simeon U. O.', '2012-10-01', NULL, '25', NULL, NULL, 'Roadway_Lighting_Concept_n_Design__(Isibor_S)_(slides).pdf', NULL),
(86, 1, '2017-01-07 23:00:48', 'Simulation Model of an Input Power Factor of a Single - Phase AC-DC Drive', 'OSUNDE, O.D', '2012-10-01', NULL, '25', NULL, NULL, 'Simulation_Model_Input_Power_Factor___(Osunde_OD)_(slides).pdf', NULL),
(87, 1, '2017-06-06 16:15:09', 'tEST', 'KING', '2017-10-01', NULL, '25', NULL, 'arduino_notebook.pdf', NULL, NULL),
(88, 1, '2017-09-22 16:49:55', 'Place of  Glory', 'King', '2017-10-01', NULL, '64', 'this is the abstract', NULL, NULL, NULL),
(89, 1, '2017-09-22 17:00:00', 'Paper World 2020', 'Jamie King', '2013-10-01', NULL, '64', 'if ($upload) {\r\n                    $this-&gt;model-&gt;add_file($upload,$update,$type);\r\n                } else {\r\n                    $this-&gt;model-&gt;add_file(Input::get($type),$update,$type);\r\n                    Session::put(\'home\', \'No Image was Uploaded.\');\r\n                }', 'ImageSearchEngineResourceGuide.pdf', NULL, NULL),
(90, 1, '2017-09-22 22:45:32', 'Design and Construction of a microcontroller based irrigation system', 'Micheal Onyekwel', '2017-10-01', NULL, '64', 'this is a good abstract', 'Raspberry_Pi_Notes.pdf', NULL, NULL),
(91, 3, '2017-09-22 21:14:52', 'Design and Construction of a microcontroller based inverter software system', 'Alagu Henry, Chibuike Emmanuel', '2017-10-01', NULL, '25', 'When you wish to add to the File, there are a couple of things you need to note.\r\n\r\n    The Paper: Just upload a single picture, ensure it is of a high resolution.\r\n    The Title: This is the header, usually appears in bold.\r\n    The Paper Description: Tell everyone about the Paper, what it means and what it symbolizes.', 'PINS-School_Education(11).pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unizik_acad_levels`
--

CREATE TABLE `unizik_acad_levels` (
  `id` int(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unizik_acad_levels`
--

INSERT INTO `unizik_acad_levels` (`id`, `level`, `alias`) VALUES
(1, '100', NULL),
(2, '200', NULL),
(3, '300', NULL),
(4, '400', NULL),
(5, '500', NULL),
(6, '600', NULL),
(7, '700', NULL),
(8, '800', NULL),
(9, '900', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unizik_depts`
--

CREATE TABLE `unizik_depts` (
  `id` int(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(10) DEFAULT NULL,
  `shortcode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unizik_depts`
--

INSERT INTO `unizik_depts` (`id`, `faculty_id`, `name`, `alias`, `shortcode`) VALUES
(1, 1, 'English Language', NULL, NULL),
(2, 1, 'French', NULL, NULL),
(3, 1, 'History and International Studies', NULL, NULL),
(4, 1, 'Igbo', NULL, NULL),
(5, 1, 'Linguistics', NULL, NULL),
(6, 1, 'Music', NULL, NULL),
(7, 1, 'Philosophy', NULL, NULL),
(8, 1, 'Religious Studies', NULL, NULL),
(9, 1, 'Theatre Arts', NULL, NULL),
(10, 2, 'Education Foundation', NULL, NULL),
(11, 2, 'Health and Physical Education', NULL, NULL),
(12, 2, 'Library Science', NULL, NULL),
(13, 2, 'Science Education', NULL, NULL),
(14, 2, 'Vocational Education', NULL, NULL),
(15, 2, 'Adult Education', NULL, NULL),
(16, 2, 'Early Childhood and Primary Education', NULL, NULL),
(17, 2, 'Educational Management and Policy', NULL, NULL),
(18, 2, 'Guidance and Counseling', NULL, NULL),
(19, 3, 'Chemical Engineering', NULL, NULL),
(20, 3, 'Civil Engineering', NULL, NULL),
(21, 3, 'Electrical Engineering', NULL, NULL),
(22, 3, 'Mechanical Engineering', NULL, NULL),
(23, 3, 'Materials and Metallurgical Engineering', NULL, NULL),
(24, 3, 'Agricultural and Bio-Resources Engineering', NULL, NULL),
(25, 3, 'Electronics and Computer Engineering', NULL, NULL),
(26, 3, 'Industrial and Production Engineering', NULL, NULL),
(27, 3, 'Polymer and Textile Engineering', NULL, NULL),
(28, 4, 'Crop Science', NULL, NULL),
(29, 4, 'Animal Science', NULL, NULL),
(30, 4, 'Food Science and Technology', NULL, NULL),
(31, 4, 'Agric Economics and Extension', NULL, NULL),
(32, 4, 'Forestry and Wildlife', NULL, NULL),
(33, 5, 'Computer Science', NULL, NULL),
(34, 5, 'Geological Science', NULL, NULL),
(35, 5, 'Geophysics', NULL, NULL),
(36, 5, 'Industrial Maths', NULL, NULL),
(37, 5, 'Physics and Industrial Physics', NULL, NULL),
(38, 5, 'Pure and Industrial Chemistry', NULL, NULL),
(39, 5, 'Statistics', NULL, NULL),
(40, 6, 'Applied Biochemistry', NULL, NULL),
(41, 6, 'Applied Microbiology and Brewing', NULL, NULL),
(42, 6, 'Botany', NULL, NULL),
(43, 6, 'Parasitology and Entomology', NULL, NULL),
(44, 6, 'Zoology', NULL, NULL),
(45, 7, 'Architecture', NULL, NULL),
(46, 7, 'Building', NULL, NULL),
(47, 7, 'Estate Management', NULL, NULL),
(48, 7, 'Geography/Meteorology', NULL, NULL),
(49, 7, 'Surveying/Geo-informatics', NULL, NULL),
(50, 7, 'Fine Arts', NULL, NULL),
(51, 7, 'Environmental Management', NULL, NULL),
(52, 7, 'Quantity Surveying', NULL, NULL),
(53, 8, 'Medical Lab. Tech', NULL, NULL),
(54, 8, 'Medical Rehabilitation and Physiotherapy', NULL, NULL),
(55, 8, 'Nursing Science', NULL, NULL),
(56, 8, 'Radiography', NULL, NULL),
(57, 9, 'Law', NULL, NULL),
(58, 10, 'Accountancy', NULL, NULL),
(59, 10, 'Banking and Finance', NULL, NULL),
(60, 10, 'Business Administration', NULL, NULL),
(61, 10, 'Co-operative Economics', NULL, NULL),
(62, 10, 'Marketing', NULL, NULL),
(63, 10, 'Public Administration', NULL, NULL),
(64, 11, 'Medicine', NULL, NULL),
(65, 12, 'Economics', NULL, NULL),
(66, 12, 'Mass Communication', NULL, NULL),
(67, 12, 'Political Science', NULL, NULL),
(68, 12, 'Psychology', NULL, NULL),
(69, 12, 'Sociology', NULL, NULL),
(70, 13, 'Pharmacy', NULL, NULL),
(71, 14, 'Anatomy', NULL, NULL),
(72, 14, 'Physiology', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unizik_faculties`
--

CREATE TABLE `unizik_faculties` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(10) DEFAULT NULL,
  `shortcode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unizik_faculties`
--

INSERT INTO `unizik_faculties` (`id`, `name`, `alias`, `shortcode`) VALUES
(1, 'Arts', NULL, NULL),
(2, 'Education', NULL, NULL),
(3, 'Engineering', NULL, NULL),
(4, 'Agriculture', NULL, NULL),
(5, 'Physical Sciences', NULL, NULL),
(6, 'Bio Sciences', NULL, NULL),
(7, 'Environmental Sciences', NULL, NULL),
(8, 'Health Sciences and Technology', NULL, NULL),
(9, 'Law', NULL, NULL),
(10, 'Management Sciences', NULL, NULL),
(11, 'Medicine', NULL, NULL),
(12, 'Social Sciences', NULL, NULL),
(13, 'Pharmaceutical Sciences', NULL, NULL),
(14, 'Basic Medical Sciences', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unizik_grad_yr`
--

CREATE TABLE `unizik_grad_yr` (
  `id` int(255) NOT NULL,
  `year` int(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `shortcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unizik_grad_yr`
--

INSERT INTO `unizik_grad_yr` (`id`, `year`, `alias`, `shortcode`) VALUES
(1, 1980, NULL, NULL),
(2, 1981, NULL, NULL),
(3, 1982, NULL, NULL),
(4, 1983, NULL, NULL),
(5, 1984, NULL, NULL),
(6, 1985, NULL, NULL),
(7, 1986, NULL, NULL),
(8, 1987, NULL, NULL),
(9, 1988, NULL, NULL),
(10, 1989, NULL, NULL),
(11, 1990, NULL, NULL),
(12, 1991, NULL, NULL),
(13, 1992, NULL, NULL),
(14, 1993, NULL, NULL),
(15, 1994, NULL, NULL),
(16, 1995, NULL, NULL),
(17, 1996, NULL, NULL),
(18, 1997, NULL, NULL),
(19, 1998, NULL, NULL),
(20, 1999, NULL, NULL),
(21, 2000, NULL, NULL),
(22, 2001, NULL, NULL),
(23, 2002, NULL, NULL),
(24, 2003, NULL, NULL),
(25, 2004, NULL, NULL),
(26, 2005, NULL, NULL),
(27, 2006, NULL, NULL),
(28, 2007, NULL, NULL),
(29, 2008, NULL, NULL),
(30, 2009, NULL, NULL),
(31, 2010, NULL, NULL),
(32, 2011, NULL, NULL),
(33, 2012, NULL, NULL),
(34, 2013, NULL, NULL),
(35, 2014, NULL, NULL),
(36, 2015, NULL, NULL),
(37, 2016, NULL, NULL),
(38, 2017, NULL, NULL),
(39, 2018, NULL, NULL),
(40, 2019, NULL, NULL),
(41, 2020, NULL, NULL),
(42, 2021, NULL, NULL),
(43, 2022, NULL, NULL),
(44, 2023, NULL, NULL),
(45, 2024, NULL, NULL),
(46, 2025, NULL, NULL),
(47, 2026, NULL, NULL),
(48, 2027, NULL, NULL),
(49, 2028, NULL, NULL),
(50, 2029, NULL, NULL),
(51, 2030, NULL, NULL),
(52, 2031, NULL, NULL),
(53, 2032, NULL, NULL),
(54, 2033, NULL, NULL),
(55, 2034, NULL, NULL),
(56, 2035, NULL, NULL),
(57, 2036, NULL, NULL),
(58, 2037, NULL, NULL),
(59, 2038, NULL, NULL),
(60, 2039, NULL, NULL),
(61, 2040, NULL, NULL),
(62, 2041, NULL, NULL),
(63, 2042, NULL, NULL),
(64, 2043, NULL, NULL),
(65, 2044, NULL, NULL),
(66, 2045, NULL, NULL),
(67, 2046, NULL, NULL),
(68, 2047, NULL, NULL),
(69, 2048, NULL, NULL),
(70, 2049, NULL, NULL),
(71, 2050, NULL, NULL),
(72, 2051, NULL, NULL),
(73, 2052, NULL, NULL),
(74, 2053, NULL, NULL),
(75, 2054, NULL, NULL),
(76, 2055, NULL, NULL),
(77, 2056, NULL, NULL),
(78, 2057, NULL, NULL),
(79, 2058, NULL, NULL),
(80, 2059, NULL, NULL),
(81, 2060, NULL, NULL),
(82, 2061, NULL, NULL),
(83, 2062, NULL, NULL),
(84, 2063, NULL, NULL),
(85, 2064, NULL, NULL),
(86, 2065, NULL, NULL),
(87, 2066, NULL, NULL),
(88, 2067, NULL, NULL),
(89, 2068, NULL, NULL),
(90, 2069, NULL, NULL),
(91, 2070, NULL, NULL),
(92, 2071, NULL, NULL),
(93, 2072, NULL, NULL),
(94, 2073, NULL, NULL),
(95, 2074, NULL, NULL),
(96, 2075, NULL, NULL),
(97, 2076, NULL, NULL),
(98, 2077, NULL, NULL),
(99, 2078, NULL, NULL),
(100, 2079, NULL, NULL),
(101, 2080, NULL, NULL),
(102, 2081, NULL, NULL),
(103, 2082, NULL, NULL),
(104, 2083, NULL, NULL),
(105, 2084, NULL, NULL),
(106, 2085, NULL, NULL),
(107, 2086, NULL, NULL),
(108, 2087, NULL, NULL),
(109, 2088, NULL, NULL),
(110, 2089, NULL, NULL),
(111, 2090, NULL, NULL),
(112, 2091, NULL, NULL),
(113, 2092, NULL, NULL),
(114, 2093, NULL, NULL),
(115, 2094, NULL, NULL),
(116, 2095, NULL, NULL),
(117, 2096, NULL, NULL),
(118, 2097, NULL, NULL),
(119, 2098, NULL, NULL),
(120, 2099, NULL, NULL),
(121, 2100, NULL, NULL),
(122, 2101, NULL, NULL),
(123, 2102, NULL, NULL),
(124, 2103, NULL, NULL),
(125, 2104, NULL, NULL),
(126, 2105, NULL, NULL),
(127, 2106, NULL, NULL),
(128, 2107, NULL, NULL),
(129, 2108, NULL, NULL),
(130, 2109, NULL, NULL),
(131, 2110, NULL, NULL),
(132, 2111, NULL, NULL),
(133, 2112, NULL, NULL),
(134, 2113, NULL, NULL),
(135, 2114, NULL, NULL),
(136, 2115, NULL, NULL),
(137, 2116, NULL, NULL),
(138, 2117, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `yearbook_id` int(255) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `reg_no` varchar(40) DEFAULT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `joined` datetime NOT NULL,
  `user_perms_id` int(11) NOT NULL,
  `user_status` int(2) NOT NULL DEFAULT '1',
  `lastLogin` datetime NOT NULL,
  `email` varchar(160) NOT NULL,
  `profile_picture` text,
  `slug` text,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `surname`, `firstname`, `yearbook_id`, `level`, `reg_no`, `password`, `salt`, `joined`, `user_perms_id`, `user_status`, `lastLogin`, `email`, `profile_picture`, `slug`, `date_created`) VALUES
(1, 'Chisom', 'Oladimeji', 1, 9, '2010232123', '7d21a90afeb1cd11ef5b71c5910a7746f4095f334f55d5f68f3624d3439826a0', '¯m<ÍÃÏòÚ<•õ\ZAŸ ýO.‘?Ø³mwR_00ì', '2017-09-19 23:52:08', 1, 1, '2017-09-24 00:07:40', 'sms@gmail.com', NULL, NULL, '2017-09-19 23:52:08'),
(2, 'Mohammed', 'Gana', 2, 4, '2010232123', '26a91bf468c8841217ffd78e285adeba532b525399de1baffea4a83543e38104', '*þØoº]|–³„á¦ ªÃéO¬`v4,Œ(£', '2017-09-20 00:16:43', 2, 1, '2017-09-23 23:57:09', 'himalayas@gmail.com', NULL, NULL, '2017-09-20 00:16:43'),
(3, 'Alagu', 'Henry', 3, 5, '2012364135', 'be9f55a6b7f04b324d1034e742c748bd3889b42599b8851c0c7a0ca8e9f16be4', '6\r´˜oæËú¦Õª6Ð›wä\"ÉØ×yqRYL!¼', '2017-09-22 21:11:37', 1, 1, '2017-09-22 21:11:37', 'ycbtr@gmail.com', NULL, NULL, '2017-09-22 21:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `permissions` text NOT NULL,
  `default_page` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `name`, `permissions`, `default_page`) VALUES
(1, 'Standard User', '{\"role\":\"user\"}', 'dashboard'),
(2, 'Super User', '{\"role\":\"super\"}', 'dashboard'),
(3, 'Hostel Manager', '{\"role\":\"admin\"}', 'admin'),
(4, 'Student Affairs (DSA)', '{\"role\":\"dean\"}', 'dean'),
(5, 'Member Staff', '{\"role\":\"staff\"}', 'staff'),
(6, 'Manager', '{\"role\":\"manager\"}', 'manager'),
(7, 'Web Master', '{\"role\":\"webmaster\"}', 'webmaster');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(60) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `yearbook`
--

CREATE TABLE `yearbook` (
  `id` int(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `program` varchar(24) NOT NULL,
  `faculty` int(4) NOT NULL,
  `dept` int(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook`
--

INSERT INTO `yearbook` (`id`, `year`, `program`, `faculty`, `dept`, `date`) VALUES
(1, '2025/2026', 'CEP', 11, 64, '2017-09-19 23:52:08'),
(2, '2016/2017', 'Regular', 6, 40, '2017-09-20 00:16:43'),
(3, '2016/2017', 'Regular', 3, 25, '2017-09-22 21:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_joins`
--

CREATE TABLE `yearbook_joins` (
  `id` int(255) NOT NULL,
  `yearbook_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook_joins`
--

INSERT INTO `yearbook_joins` (`id`, `yearbook_id`, `user_id`, `date`) VALUES
(1, 1, 1, '2017-09-19 23:52:08'),
(2, 2, 2, '2017-09-20 00:16:43'),
(3, 3, 3, '2017-09-22 21:11:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_history`
--
ALTER TABLE `about_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_review`
--
ALTER TABLE `project_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_papers`
--
ALTER TABLE `technical_papers`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `unizik_acad_levels`
--
ALTER TABLE `unizik_acad_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unizik_depts`
--
ALTER TABLE `unizik_depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unizik_faculties`
--
ALTER TABLE `unizik_faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unizik_grad_yr`
--
ALTER TABLE `unizik_grad_yr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `yearbook`
--
ALTER TABLE `yearbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_joins`
--
ALTER TABLE `yearbook_joins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_history`
--
ALTER TABLE `about_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `project_review`
--
ALTER TABLE `project_review`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `technical_papers`
--
ALTER TABLE `technical_papers`
  MODIFY `paper_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `unizik_acad_levels`
--
ALTER TABLE `unizik_acad_levels`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `unizik_depts`
--
ALTER TABLE `unizik_depts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `unizik_faculties`
--
ALTER TABLE `unizik_faculties`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `unizik_grad_yr`
--
ALTER TABLE `unizik_grad_yr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `yearbook`
--
ALTER TABLE `yearbook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `yearbook_joins`
--
ALTER TABLE `yearbook_joins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
