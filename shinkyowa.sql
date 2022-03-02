-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shinkyowa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$J0mFUozdGPvmB3T7Gns9veOyIK6H2CDodvPzlhexd2yf0EfcAeFFu');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `details`, `image`, `date`) VALUES
(1, 'Buy used commercial vehicles from Japanese truck exporters ', 'Commercial vehicles can be also called a motor vehicle. Commercial vehicles are usually used for transportation of cargo or paying passengers.\r\nThere are three types of commercial vehicles:\r\n1.	Heavy Duty Commercial Vehicle\r\n2.	Medium-Duty Commercial Vehicle\r\n3.	Light Duty Commercial Vehicle     \r\nCommercial vehicles broadly include Commercial Buses, Coasters, Caravan, minibusses whereas commercial trucks include Dumps, Pickup trucks, wing-body trucks, flat body trucks, trailer trucks, crane trucks, Japanese mini trucks, freezer trucks, etc.\r\nAs these Japanese commercial vehicles are easy to maintain and consume less fuel than other trucks in the market they got so much popular all across the world in a very short time. There were highly demanded especially in Africa and Europe. Many car/commercial vehicle dealers and importers started buying more Japanese trucks keeping in mind their demand by the customers in Europe, Africa, and the Caribbean.\r\nHere are some top commercial vehicles from japan:\r\nHino Ranger:\r\nItâ€™s a perfectly over-designed commercial truck. It was launched in 1969. It comes with medium and heavy-duty specifications. This truck also includes a versatile range of functionalities with high-end dynamic structure and performance.\r\n\r\nIsuzu Elf:\r\nIsuzu is an extraordinary business load truck propelled in August 1959 intended for various body style details of light, medium, and rock-solid transportation. It offers an unrivaled edge in complex styling structure, tough mobility, with an outrageous feeling of solace and wellbeing execution.\r\nMitsubishi Fuso Canter:\r\nMitsubishi Fuso Canter is a light-duty truck that holds a dominant rank in the field of the commercial vehicle industry. It was initially launched in 1963 and became so popular because of its specifications and quality performance therefore thereâ€™s also an increase in its demand all around the globe. It is a multi-purpose truck mostly used to carry cargo goods to its destination point.\r\n\r\nMost buyers worry about, how to get a vehicle from japan auction?\r\nHow to get a vehicle shipped from japan?\r\nBut, no need to worry about that Shinkyowa Int. will take care of it for you. You can simply browse our stock to look for your desired vehicle or can contact us anytime so that we can get the best deal for you. Shinkyowa International will make sure of the safe and fast delivery of your vehicle.   ', 'Popular commercial.jpeg', '2020-04-17 09:21:37'),
(2, 'Buy used commercial vehicles from Japanese truck exporters ', 'Commercial vehicles can be also called a motor vehicle. Commercial vehicles are usually used for transportation of cargo or paying passengers.\r\nThere are three types of commercial vehicles:\r\n1.	Heavy Duty Commercial Vehicle\r\n2.	Medium-Duty Commercial Vehicle\r\n3.	Light Duty Commercial Vehicle     \r\nCommercial vehicles broadly include Commercial Buses, Coasters, Caravan, minibusses whereas commercial trucks include Dumps, Pickup trucks, wing-body trucks, flat body trucks, trailer trucks, crane trucks, Japanese mini trucks, freezer trucks, etc.\r\nAs these Japanese commercial vehicles are easy to maintain and consume less fuel than other trucks in the market they got so much popular all across the world in a very short time. There were highly demanded especially in Africa and Europe. Many car/commercial vehicle dealers and importers started buying more Japanese trucks keeping in mind their demand by the customers in Europe, Africa, and the Caribbean.\r\nHere are some top commercial vehicles from japan:\r\nHino Ranger:\r\nItâ€™s a perfectly over-designed commercial truck. It was launched in 1969. It comes with medium and heavy-duty specifications. This truck also includes a versatile range of functionalities with high-end dynamic structure and performance.\r\n\r\nIsuzu Elf:\r\nIsuzu is an extraordinary business load truck propelled in August 1959 intended for various body style details of light, medium, and rock-solid transportation. It offers an unrivaled edge in complex styling structure, tough mobility, with an outrageous feeling of solace and wellbeing execution.\r\nMitsubishi Fuso Canter:\r\nMitsubishi Fuso Canter is a light-duty truck that holds a dominant rank in the field of the commercial vehicle industry. It was initially launched in 1963 and became so popular because of its specifications and quality performance therefore thereâ€™s also an increase in its demand all around the globe. It is a multi-purpose truck mostly used to carry cargo goods to its destination point.\r\n\r\nMost buyers worry about, how to get a vehicle from japan auction?\r\nHow to get a vehicle shipped from japan?\r\nBut, no need to worry about that Shinkyowa Int. will take care of it for you. You can simply browse our stock to look for your desired vehicle or can contact us anytime so that we can get the best deal for you. Shinkyowa International will make sure of the safe and fast delivery of your vehicle.   ', 'Popular commercial.jpeg', '2020-04-17 09:20:24'),
(3, 'Era of Japanese Electric Vehicles (EV)', 'Electric vehicles are getting in trend of auto-mobile market now. Many American, German and euoropion car companies competing in this race to serve with the best they can. But Japanese car manufacture put their hand on the tools in 40â€™s to make an electric car so that they wonâ€™t face the shortage of gasoline after a lot of hard work they came up with Nissan Tama the first Japanese electric car to be launched and it got a lot of success in market people liked it but that time they were not so much ready to get use to of it. In 2013 Toyota launched their legendary Hybrid Electric Car Toyota Prius after its launch it got so much popularity in auto-mobile market that it donâ€™t need any introduction now. While Hybrid Electric Vehicles dominate the EV market in Japan, Pure Electric Vehicles are becoming more popular. Nowadays Nissan Leaf a Japanese electric car is taking over the Japanese electric car market.    Now in Japan electric vehicles are available in body types such as Sedan, Sports Sedan, Sports Utility Vehicle, Mini Car, Mini Truck and Mini Van. Electric Vehicles are available from Auctions, Dealers, wholesalers and directly from End Users throughout Japan.\r\n\r\n', 'Buy Japanese electric cars .jpeg', '2020-03-11 19:24:55'),
(4, 'Most Popular Used Japanese Cars in Europe at Affordable Price ', 'Europe is a big importer of Japanese used cars because they are affordable and highly reliable. And the demand for Japanese vehicles in European countries is rising day by day.UK imports several thousand of Japanese used cars every month. As discussing its reliability and affordable price we canâ€™t ignore the third main catch which is their low fuel consumption mechanism. Even the Japanese hybrid cars require very low maintenance, these hybrid cars runs on two types of power source such as internal combustion engine to drive an electric generator that powers an electric motor due to which you can drive the vehicle on electric power as it is the alternative power source in hybrid cars below a specific speed limit. Now a days there are many Japanese hybrid and other vehicles in the market. Here are some most popular Japanese used cars which Europe imports the most.\r\n1-Toyota Prius:\r\nToyota Prius is a legendary car itâ€™s the most selling hybrid car of Toyota. This fascinating Japanese car is demanded all across the globe. Starting its production from 1997, since then Toyota has never looked back and brought 4 generations of Toyota Prius, not only that but Toyota also added Prius E, Prius S(touring) and Prius A(touring) to its lineup to cater different range of customers. Toyota Prius was launched in multiple variants with different engine capacities, fuel consumption, interior designs, and drive options. Some these variants include 1500cc and 1800cc engine with 2 wheel drive and 4 wheel drive. \r\n\r\nIt is also rated as one of the most fuel economic vehicles in its competitive market. The second-generation Toyota Prius was launched in 2004 and its exterior design changed significantly from an orthodox sedan to a more aerodynamic four-door with a large lift back-type hatch.\r\nIt also won the 2004 car of the year award for its spacious interior and notable fuel economy. But it was considered ugly by some car analysts.\r\n2-Toyota Voxy:\r\nToyota Voxy is one of the best models designed by Toyota. It comes with a high capacity engine and large boot space. Toyota Voxy is fully equipped with high-end mechanisms and technology. Following are some of its basic features:\r\nENGINE\r\nâ€¢Engine Capacity:\r\n1,986 cc\r\nâ€¢Engine Configuration\r\n4-cylinder in-line 16-valve DOHC\r\nâ€¢Compression Ratio\r\n10.5\r\nâ€¢Bore x Stroke\r\n(80.5 x 97.6) mm\r\nâ€¢Fuel Type\r\nPetrol\r\n\r\nPERFORMANCE\r\nâ€¢Power\r\n112kW (150 bhp)\r\nâ€¢Torque\r\n193 Nm\r\nâ€¢Fuel Consumption\r\n16 km/l\r\nâ€¢CO2 emission\r\n145 g/km (Manufacturer specs)\r\n\r\nMISC TECHNICAL DATA\r\nâ€¢Transmission\r\n7-speed (A) Super CVT-I\r\nâ€¢Drive Type\r\nFront-wheel drive\r\n\r\nMEASUREMENTS\r\nâ€¢Type\r\nMPV\r\nâ€¢Dimension (L x W x H)\r\n(4,710 x 1,730 x 1,825) mm\r\nâ€¢Wheelbase\r\n2,850 mm\r\nâ€¢Min Turning Radius\r\n5,500 mm\r\nâ€¢Kerb Weight\r\n-\r\nâ€¢Fuel Tank Capacity\r\n55 L\r\nâ€¢Cargo/Boot Capacity\r\nunknown\r\n\r\nBRAKES\r\nâ€¢Brakes (Front)\r\nVentilated disc\r\nâ€¢Brakes (Rear)\r\nDisc\r\n\r\nSUSPENSION\r\nâ€¢Suspension (Front)\r\nMcPherson strut type coil spring\r\nâ€¢Suspension (Rear)\r\nTorsion beam type coil spring', 'Popularcarsineuorope.jpeg', '2020-04-09 23:29:55'),
(5, 'How to import car from Japan in Jamaica?', 'As we all know Japan is known for its quality in all industries. Especially for their elegantly designed Japanese cars that give low fuel consumption need low maintenance and are very cost-effective. People usually think about how to import a car from Japan? What should they do to get it maybe itâ€™s a costly and lengthy procedure. But now Shin kyowa is here to serve you so just set back and browse Shin kyowa International Showroom online for brand new and especially Japanese used cars choose the car you want and your car will be delivered to your desired country port. \r\nShin kyowa is specialized in all kinds of cars to full fill Jamaicaâ€™s demand for cars.\r\nThere is a great demand for the Japanese used cars in the Caribbean with Jamaica to be the biggest importer of Japanese used cars in the Caribbean. Jamaica is the fourth largest island in the Caribbean countries. This high demand for Japanese vehicles in the Caribbean is due to its right-hand drive car market and reliability of the Japanese vehicles. But unlike other countries, there is an edge that Jamaica can import cars up to an age limit of 5 years. And it uses its major port of Kingston to import vehicles from Japan.\r\nHere are some things you need to know before importing a vehicle from Japan to Jamaica:\r\nAge :\r\nâ€¢	Cars should not be more than 5 years old.\r\nâ€¢	For pickups the age limit is 6 years.\r\nâ€¢	For used trucks, trailers, and other heavy-duty equipment are ten years.\r\nShipment Port:\r\nâ€¢	The most recommended port for shipment from Japan to Jamaica is â€˜Kingstonâ€™.\r\nRoadworthiness:\r\nâ€¢	For Jamaica, a roadworthiness certificate is required.\r\n\r\nRight-Hand Drive Vehicles:\r\nâ€¢	Jamaica allows the import of Right Hand used cars.\r\n\r\nHere are some important paperwork required to import a vehicle from japan: \r\nâ€¢	Identification proofs:\r\nFor the import of Japanese used cars, two identification proofs are required like passport, driverâ€™s license, and national identification.\r\nâ€¢	Invoice:\r\nWhen you order your vehicle supplier send you an invoice.\r\nâ€¢	Bill of Sight:\r\nIt contains details about the imported vehicle. The dealer prepares and signs it.\r\nâ€¢	Tax Compliance:\r\nTax Administration Certificate Services Department issues it.\r\nâ€¢	Import Entry:\r\nThis import document should be provided by the broker to the customs. It should contain all the details about the vehicle, shipping information, importer name, and responsibilities.\r\nâ€¢	TRN:\r\nIt is called the Taxpayer Registration Number. It is nine-digit unique identification numbers that are obtained from the revenue board.\r\nâ€¢	Bill of Lending:\r\nIt is a bill of lending contains the information about the vehicle, date of lending and entry port.\r\nSome other documents are also required when importing Japanese used cars to Jamaica like Tax Compliance Certificate and import license.\r\nOther Relevant Information:\r\nâ€¢	Non-Jamaicans should show proof of immigration status like a work permit.\r\nâ€¢	If the buyer wants to sell the used vehicle, a warranty of 90 days is required.\r\nThere are some taxes and duties that are applied when importing Japanese used cars to Jamaica.', 'Toyotapriusinuk.jpeg', '2020-04-22 09:54:30'),
(6, 'Top 3 commercial trucks in East Africa', 'The Eastern region of Africa imports a great number of commercial vehicles including Japanese trucks, Coasters, and Vans. Because Africa is running various mining projects so mostly they need these Japanese commercial vehicles for transporting goods and labor. \r\nEast Africa includes the following countries: \r\nâ€¢	Burundi \r\nâ€¢	Comoros\r\nâ€¢	Djibouti\r\nâ€¢	Ethiopia \r\nâ€¢	Eritrea\r\nâ€¢	Kenya Madagascar \r\nâ€¢	Malawi \r\nâ€¢	Mauritius \r\nâ€¢	Mozambique \r\nâ€¢	RÃ©union \r\nâ€¢	Rwanda \r\nâ€¢	Seychelles \r\nâ€¢	Somalia \r\nâ€¢	Somaliland \r\nâ€¢	Tanzania \r\nâ€¢	Uganda \r\nâ€¢	Zambia\r\nâ€¢	Zimbabwe\r\nThey buy Japanese commercial trucks because of their affordable prices, reliability, and heavy-duty machinery. Japanese motor company Isuzu that mainly manufactures commercial vehicles are the biggest manufacturers in the eastern Africa region. Isuzu also has a manufacturing plant in Nairobi.\r\n \r\nIsuzu Motors acquired 57.7 percent of General Motorsâ€™ East African unit last year, becoming Isuzu East Africa, an auxiliary of the Japanese commercial vehicle maker.\r\nThe company said the unit will focus on making more sales and making customer service better after-sales.\r\nEast Africa needs to have standardized regulations for importing used vehicles and that if governments adopted policies favoring new vehicles that will represent â€œa big opportunityâ€. Infrastructure development across East Africa, and the nascent oil and gas sector in Uganda are offering potential demand for Isuzu trucks. These are some popular Isuzu trucks in East Africa:\r\nHino Ranger: \r\nItâ€™s a perfectly over-designed commercial truck. It was launched in 1969. It comes with medium and heavy-duty specifications. This truck also includes a versatile range of functionalities with high-end dynamic structure and performance. \r\nIsuzu Elf:\r\nIsuzu is an extraordinary business load truck propelled in August 1959 intended for various body style details of light, medium, and rock-solid transportation. It offers an unrivaled edge in complex styling structure, tough mobility, with an outrageous feeling of solace and wellbeing execution.\r\nMitsubishi Fuso Canter: \r\nMitsubishi Fuso Canter is a light-duty truck that holds a dominant rank in the field of the commercial vehicle industry. It was initially launched in 1963 and became so popular because of its specifications and quality performance therefore thereâ€™s also an increase in its demand all around the globe. It is a multi-purpose truck mostly used to carry cargo goods to its destination point.', 'east afrian commerical trucks.jpeg', '2020-04-26 14:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog_replies`
--

CREATE TABLE `blog_replies` (
  `id` int(11) NOT NULL,
  `blogid` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `website` varchar(25) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `vehicleid`, `image`) VALUES
(1, 12, 'MW7RL28ZGT.jpg'),
(2, 12, 'MEPS9HKAT1.jpg'),
(3, 12, 'PISTK6G50U.jpg'),
(4, 12, 'LVSYF8MDK6.jpg'),
(5, 12, 'AQVYURC1FB.jpg'),
(6, 12, 'VNXYBTFI7P.jpg'),
(7, 12, 'OCMJF4YV0A.jpg'),
(8, 12, '6VQ2ZNAJXU.jpg'),
(9, 12, 'IJR781ZPGU.jpg'),
(10, 12, 'BZ3CEWG6Y0.jpg'),
(11, 12, 'BDKQ3AW1IO.jpg'),
(12, 18, 'LUVNTJDAM7.jpg'),
(13, 18, '5CRO1EGY7S.jpg'),
(14, 18, '45XOE7TMBY.jpg'),
(15, 18, 'TQLCZKP6HD.jpg'),
(16, 18, 'VQ3AZHB85J.jpg'),
(17, 18, 'QBOMYPXAK8.jpg'),
(18, 18, '6BYZ2FAX37.jpg'),
(19, 18, 'RQ09KHYICG.jpg'),
(20, 18, '20USW1T7CX.jpg'),
(21, 17, 'K2NSIY56PW.jpg'),
(22, 17, '0F9Q6PWRTD.jpg'),
(23, 17, 'DR21C86SFH.jpg'),
(24, 17, '5CHRXSAOPT.jpg'),
(25, 17, 'N4WVY6CBZD.jpg'),
(26, 17, 'I21JZDUTFC.jpg'),
(27, 17, 'XEZU3OJ9KN.jpg'),
(28, 17, 'N3EALIKD9F.jpg'),
(41, 7, 'Q4XDGFU60J.jpg'),
(42, 7, 'XR7U6CQYB2.jpg'),
(43, 7, 'PWL063X7BK.jpg'),
(44, 7, '3DXEWR0PZ7.jpg'),
(45, 7, 'F1JYL3NXB4.jpg'),
(46, 7, 'EUZ1Y3WJP7.jpg'),
(47, 7, 'LPN7B96T4G.jpg'),
(48, 7, 'IVSJULGQPC.jpg'),
(49, 7, 'H3MTJ7Z9YF.jpg'),
(50, 7, 'PXHFYTDLA6.jpg'),
(73, 14, 'KDXS8IELY1.jpg'),
(74, 14, 'IX4B7S19V8.jpg'),
(75, 14, '8072ZX1LFA.jpg'),
(76, 14, 'VF1T5K6XPQ.jpg'),
(77, 14, 'WB4R3HNT1U.jpg'),
(78, 14, 'FU2BW78ETM.jpg'),
(79, 14, '8F5YIGZ2KW.jpg'),
(80, 14, '57NPKXAYF1.jpg'),
(81, 22, 'Y6ZPKQCA21.jpg'),
(82, 22, 'B9S5RZ1GF8.jpg'),
(83, 22, 'JG9KTZ5CD8.jpg'),
(84, 22, 'IZGSOFDHP1.jpg'),
(85, 22, 'PAZ67LJN4F.jpg'),
(86, 22, '7JH1RVI4DN.jpg'),
(87, 22, '8F4UXDV5OR.jpg'),
(88, 22, 'A60O3JGPF2.jpg'),
(89, 22, 'C4YASHK68E.jpg'),
(90, 22, 'V6FWZQSJK5.jpg'),
(91, 22, 'ZRATSLUDQ9.jpg'),
(92, 1, 'V43GU9B0FQ.jpg'),
(93, 1, 'XPH62Q9BF3.jpg'),
(94, 1, 'X1B0VUWJDF.jpg'),
(95, 1, 'IKW14R3Y9U.jpg'),
(96, 1, '23VB5RXZH1.jpg'),
(97, 1, 'VGXAUOBTN5.jpg'),
(98, 1, '7G5I9NSWQB.jpg'),
(99, 1, 'UE03BTSAV4.jpg'),
(100, 1, 'FNOT3Y6RIP.jpg'),
(101, 1, 'K34V2PIAWN.jpg'),
(102, 1, 'CYI6NGU3DR.jpg'),
(103, 1, 'Z2V743LTAR.jpg'),
(104, 1, 'U1DZ2YE0PX.jpg'),
(105, 1, 'YK24T9UQRX.jpg'),
(106, 1, 'HWVA3OBM58.jpg'),
(107, 1, 'P76QHZ8XLG.jpg'),
(108, 1, '75XSLU4CZ8.jpg'),
(109, 1, 'VYRTNPLZC2.jpg'),
(110, 1, 'QUFBC1IT2Z.jpg'),
(111, 1, '054CQDNHPV.jpg'),
(112, 1, '8N72TUR9EG.jpg'),
(113, 1, 'UKVIPX3JBY.jpg'),
(114, 13, 'W1ZNJ85LSU.jpg'),
(115, 13, 'FQWGOBT5V7.jpg'),
(116, 13, 'BEOIZCJLK2.jpg'),
(117, 13, '6IVHOS1AQP.jpg'),
(118, 13, 'JNYE530PB8.jpg'),
(119, 13, 'BLQY5VUMSZ.jpg'),
(120, 13, 'ZK5OHV3MWG.jpg'),
(121, 13, '1ULS4V6T32.jpg'),
(122, 13, 'Q1AI8CSZBV.jpg'),
(123, 16, 'PKMZ1GOY5W.jpg'),
(124, 16, 'RY76ULBIM4.jpg'),
(125, 16, 'MLYB7UROIE.jpg'),
(126, 16, 'KT36YHNFG7.jpg'),
(127, 16, 'SETVN72AMF.jpg'),
(128, 16, '0CZLJTNIBQ.jpg'),
(129, 16, '8EBUDHRJWK.jpg'),
(130, 16, 'LMZYIWQT84.jpg'),
(131, 16, 'NI5XUTH9YB.jpg'),
(132, 15, '1E6UDK5BG7.jpg'),
(133, 15, 'T062OWVFRB.jpg'),
(134, 15, '57W0SHLMPN.jpg'),
(135, 15, '2UAK8MSLZ4.jpg'),
(136, 15, '3DEJY5Q97B.jpg'),
(137, 15, 'UNGELSYW13.jpg'),
(138, 15, 'JV8GQNFHBR.jpg'),
(139, 15, 'YFVJXM1R64.jpg'),
(140, 7, 'P4859OTC6J.jpg'),
(141, 7, 'WIEUBZ7HYA.jpg'),
(142, 7, 'CZ81YVGK62.jpg'),
(143, 7, 'TCF4V0ZGUA.jpg'),
(144, 7, 'XHGVLIT2DE.jpg'),
(145, 7, 'HFRSB05MWI.jpg'),
(146, 7, 'DOEIF4G52J.jpg'),
(147, 7, 'K4RLV2HFCB.jpg'),
(148, 7, 'HZQY84MLJE.jpg'),
(149, 7, 'HMR3L2N0D9.jpg'),
(150, 7, 'DNIL0S83FQ.jpg'),
(151, 7, 'WV4630RJZF.jpg'),
(152, 7, 'QMO59Z72NB.jpg'),
(153, 7, 'EQNA8MB430.jpg'),
(154, 7, 'Q7HTWOS4NG.jpg'),
(155, 12, 'OJSTVYF8DR.jpg'),
(156, 12, 'PM97N2XYAG.jpg'),
(157, 12, 'MWYAURIXD2.jpg'),
(158, 12, 'USB9IPZTY4.jpg'),
(159, 12, 'A51HYOGXLD.jpg'),
(160, 12, 'IDZGCRTOB6.jpg'),
(161, 12, 'C047GRYUHQ.jpg'),
(182, 20, 'L2CHJUQXSP.jpg'),
(183, 20, 'V7D1TH4LOC.jpg'),
(184, 20, '3SHFBRQDNP.jpg'),
(185, 20, 'QBO1G2FNVD.jpg'),
(186, 20, 'PFBORN2EH5.jpg'),
(187, 20, 'IGTE0X76UA.jpg'),
(188, 20, 'KHETOQ5L27.jpg'),
(189, 20, 'GWQXAV8RN9.jpg'),
(190, 5, 'T8V4NQZ137.jpg'),
(191, 5, 'TPVU6KIQ38.jpg'),
(192, 5, 'GFACOP6JSH.jpg'),
(193, 5, 'VTOJD7L1CI.jpg'),
(194, 5, 'B2ODXLI4ZF.jpg'),
(195, 5, 'KV43QRT9I6.jpg'),
(196, 5, 'HZCKIVSWJL.jpg'),
(197, 5, '2MKQC61790.jpg'),
(198, 5, 'F8O5ZT2EV7.jpg'),
(199, 5, 'H23SUMLORJ.jpg'),
(200, 5, 'NQ258D4YJI.jpg'),
(201, 5, 'A3KBJ5D28O.jpg'),
(202, 5, '0KYPD8C9TO.jpg'),
(203, 5, 'M9ENF3KRVW.jpg'),
(204, 3, '1SL0RCJKHT.jpg'),
(205, 3, '14MVI02KE8.jpg'),
(206, 3, 'KEFH0G1UZT.jpg'),
(207, 3, 'WZ0F3N2DSK.jpg'),
(208, 3, 'TVZ5IMK4EC.jpg'),
(209, 3, 'TDIBNF4RCQ.jpg'),
(210, 3, 'UDSQX5N9C6.jpg'),
(211, 3, '6RABCTHJ2Z.jpg'),
(212, 3, 'SDHFP61237.jpg'),
(213, 3, '26Z51I73OT.jpg'),
(214, 3, 'KULX3M4156.jpg'),
(215, 7, '4SQ0XJFH2T.jpg'),
(216, 7, 'S75VJHMC43.jpg'),
(217, 7, 'OJL5EXGKCT.jpg'),
(218, 7, 'X3RTUE2DWN.jpg'),
(219, 7, 'GPJW9KBIMY.jpg'),
(220, 7, '6IGZDH7EWB.jpg'),
(221, 7, '48MJHW3QEL.jpg'),
(222, 7, 'Q6WAUD2YPT.jpg'),
(223, 7, 'Z6B1P973US.jpg'),
(224, 7, 'N3UV49M6E0.jpg'),
(225, 7, '2YXV4LPDKJ.jpg'),
(226, 7, 'B5YL9PQA23.jpg'),
(227, 7, 'KW830P4Z1C.jpg'),
(228, 7, 'TA3G6ZPO15.jpg'),
(229, 7, 'ZVCGKPW0YD.jpg'),
(230, 7, 'MZ9XKAHUEQ.jpg'),
(231, 7, 'SAIFRCUVBO.jpg'),
(232, 7, 'RY06TC4KZ8.jpg'),
(233, 7, 'DIM7T1OFJU.jpg'),
(234, 7, 'DOKPBSJ1I5.jpg'),
(235, 7, 'HGZR1F5M3U.jpg'),
(236, 7, '5HIRSDQVNK.jpg'),
(237, 7, 'MYCXTE8AN5.jpg'),
(238, 7, 'L3WXQ6780R.jpg'),
(239, 3, 'ET8ZKCGS4V.jpg'),
(240, 3, 'O29CVTJBXQ.jpg'),
(241, 3, '92FMYJSTVP.jpg'),
(242, 3, 'P8DZT1OLMQ.jpg'),
(243, 3, 'OT79MPVD5E.jpg'),
(244, 3, '7F2PBCG91U.jpg'),
(245, 3, 'LJREFQV7OA.jpg'),
(246, 3, 'DIS5VAQ6X2.jpg'),
(247, 3, 'E6YO8KFAXN.jpg'),
(248, 3, 'OEXYPNU1HS.jpg'),
(249, 3, '6NCU8VG1TW.jpg'),
(250, 3, '5N6G42OR3C.jpg'),
(251, 3, '1IXP7SA8KZ.jpg'),
(252, 3, '2GRSMD6BHU.jpg'),
(253, 3, 'XSNWYHI7ZV.jpg'),
(254, 3, 'QJB6VZF4O7.jpg'),
(255, 3, 'ZSB5TOKC84.jpg'),
(256, 3, 'KOQCVSHP21.jpg'),
(257, 3, '8UWHMNGIP2.jpg'),
(258, 3, '9Y3KFT7W4C.jpg'),
(259, 3, '8JC46TZWQU.jpg'),
(260, 3, 'E9F3JPOKX2.jpg'),
(261, 3, '46IWNLD7O1.jpg'),
(262, 3, 'S3KYQL5VZU.jpg'),
(263, 3, 'EC1IDAN9J5.jpg'),
(264, 3, '86PMYCNHZI.jpg'),
(265, 3, 'KHR1VP85IM.jpg'),
(266, 3, '96FURPIW4L.jpg'),
(267, 3, 'KU3MTIWR6V.jpg'),
(268, 3, 'PRS1M03VHL.jpg'),
(269, 3, 'LOAR63D4YB.jpg'),
(270, 3, '5IWXKUH37B.jpg'),
(271, 3, 'KWOYNP9IVF.jpg'),
(272, 3, 'JZVKPOITA9.jpg'),
(273, 3, 'AKQW8B4SED.jpg'),
(274, 3, 'GM0IPJ1LT2.jpg'),
(275, 3, 'BS5R60Z23E.jpg'),
(276, 3, 'VKNEYFZ4O1.jpg'),
(277, 3, 'BKDZOA028M.jpg'),
(278, 3, '7PGF5VTAI2.jpg'),
(279, 3, '51YSTWCFXV.jpg'),
(280, 3, 'HMYNZLAFSG.jpg'),
(281, 3, 'XAWTCF4QV6.jpg'),
(282, 3, '4I1Q5VSL8F.jpg'),
(283, 3, 'UT4ZK9HM1V.jpg'),
(284, 3, 'P6ZNQ1FAH9.jpg'),
(285, 3, 'PW1RQ8F6G4.jpg'),
(286, 3, 'LBIGRH6UE0.jpg'),
(287, 3, 'TGQN4K81UP.jpg'),
(288, 3, '6AXCLY8M79.jpg'),
(289, 3, '30IPMUK1YO.jpg'),
(290, 3, 'MV3TWKXCLB.jpg'),
(291, 3, 'EHFJT6GC85.jpg'),
(292, 3, 'A9JO8TKULC.jpg'),
(293, 3, 'GTJF4O5Q93.jpg'),
(294, 3, '6SZRJB2PX8.jpg'),
(295, 3, 'KFC5NR3MYJ.jpg'),
(296, 3, 'VZW6TQMFR5.jpg'),
(297, 3, 'YQHDMEX2BA.jpg'),
(298, 3, '6IRX1GJMSU.jpg'),
(299, 3, '6XGLWHF7OY.jpg'),
(300, 3, 'A6742EGOQ9.jpg'),
(301, 3, '82ZHT7NYMB.jpg'),
(302, 3, 'DBN0Q5LIMG.jpg'),
(303, 3, 'H1DZ5NQ308.jpg'),
(304, 3, 'LSU9HZ43A0.jpg'),
(305, 3, 'X9F35MURKZ.jpg'),
(306, 3, '5YZ4UJIT8F.jpg'),
(307, 3, 'MAHJN29PQC.jpg'),
(308, 3, '3IKQWUVOAJ.jpg'),
(309, 3, 'ZFX7YQJ95V.jpg'),
(310, 3, '0N541BEYZ2.jpg'),
(311, 3, 'Q7ASBJYP4M.jpg'),
(312, 3, 'I428FZ06WL.jpg'),
(313, 4, 'AB8DGUC4SJ.jpg'),
(314, 4, 'WMQ096IF2T.jpg'),
(315, 4, 'OGENK1SIV0.jpg'),
(316, 4, 'MDVXJKZ1C7.jpg'),
(317, 4, 'CXPUZ1JIT8.jpg'),
(318, 4, '7MJEWA41HR.jpg'),
(319, 4, 'EYWB9VP8FC.jpg'),
(320, 4, '4DPJSVITR0.jpg'),
(321, 4, '7XLH21V3JW.jpg'),
(322, 4, '08HDQY7I23.jpg'),
(323, 4, 'JSCU8AFZ65.jpg'),
(324, 4, 'EIPKBHTRQ9.jpg'),
(325, 4, 'M1U3BQIEJN.jpg'),
(326, 4, 'XZFJ27ITQO.jpg'),
(327, 10, '43MRG0PX2N.jpg'),
(328, 10, 'Y0Q4DA7N36.jpg'),
(329, 10, '4R2A9O3LUP.jpg'),
(330, 10, 'I397WZ0HN1.jpg'),
(331, 10, 'UIL5WVRG93.jpg'),
(332, 10, '3U12804VFS.jpg'),
(333, 10, 'RA1B0COH9W.jpg'),
(334, 10, '2ZVT8XA7E5.jpg'),
(335, 10, '5DZ4PR62WJ.jpg'),
(336, 10, 'FRT3IODJG9.jpg'),
(337, 10, 'SNU1IQ5MB0.jpg'),
(351, 11, 'E4N86IWPFU.jpg'),
(352, 11, 'ZCTMSXF9E8.jpg'),
(353, 11, 'YOB2FU93I0.jpg'),
(354, 11, 'P4ENGUFAS6.jpg'),
(355, 11, 'KAZJ3NW70O.jpg'),
(356, 11, 'DHZLI2NGXQ.jpg'),
(357, 11, 'LC2X08TH9M.jpg'),
(358, 11, 'Z4RNFPJV8Q.jpg'),
(359, 11, '8WQOU3LM71.jpg'),
(360, 11, 'EON3IZL25S.jpg'),
(361, 11, 'IU51WCFPXM.jpg'),
(362, 11, 'DPCKE6J2RI.jpg'),
(363, 2, 'BC8LQ6DFH7.jpg'),
(364, 2, 'TCJGAIWM28.jpg'),
(365, 2, 'Z9X3P7UGB6.jpg'),
(366, 2, '78WPBTVMHA.jpg'),
(367, 2, 'K4VAYZEJ8X.jpg'),
(368, 2, 'I3LGN6ZVH2.jpg'),
(369, 2, 'P57WK3TOUL.jpg'),
(370, 2, 'F0UC8MT9KN.jpg'),
(371, 2, '85Q7ITMSRW.jpg'),
(372, 2, 'JEUIWGN9DS.jpg'),
(373, 2, '6KYB8TMIUF.jpg'),
(383, 8, 'UMZK5O23WT.jpg'),
(384, 8, 'YKIRLPZUT4.jpg'),
(385, 8, 'JSQMUGDBFR.jpg'),
(386, 8, '3WVQ9AZMK4.jpg'),
(387, 8, 'QVPMIZO67X.jpg'),
(388, 8, '1AYK82REGD.jpg'),
(389, 8, 'G94SWFLE08.jpg'),
(390, 24, 'QK3HX9RDW8.jpg'),
(391, 24, '0CG7NBZIQ5.jpg'),
(392, 24, '7ECTAP814O.jpg'),
(393, 24, 'PVFAJKGN5B.jpg'),
(394, 24, '02OXFYJPNR.jpg'),
(395, 24, 'MQGCH8ELOY.jpg'),
(396, 24, '2UVTYKG5Q0.jpg'),
(397, 25, 'Q38US9YEGF.jpg'),
(398, 25, '039B8YFCT4.jpg'),
(399, 25, '61DUCNWVO2.jpg'),
(400, 25, 'EI10SOXNVF.jpg'),
(401, 25, '9KU8FTYI1Z.jpg'),
(402, 25, 'D219IVXNP7.jpg'),
(403, 25, 'NJF7ILVE0H.jpg'),
(404, 25, '2RJ6UYX19O.jpg'),
(405, 25, 'FGVX2WLU4P.jpg'),
(406, 25, 'KWJIRB0O4V.jpg'),
(407, 25, 'XBP6CKSJ2F.jpg'),
(408, 25, 'TKF0VYBP3C.jpg'),
(409, 26, 'IVT71GQCHE.jpg'),
(410, 26, 'O30WNSCUKB.jpg'),
(411, 26, 'ULYZFT18M2.jpg'),
(412, 26, 'XRKCISN2AM.jpg'),
(413, 26, '92BLESYR4P.jpg'),
(414, 26, 'IZWXQ0O4TF.jpg'),
(415, 26, 'N4HCS0DMUQ.jpg'),
(416, 26, '149CUE68GI.jpg'),
(417, 26, 'BC43DZNEIU.jpg'),
(418, 26, '895VZJHWMQ.jpg'),
(419, 26, 'PVY90R8532.jpg'),
(420, 27, '67SNEH40Q1.jpg'),
(421, 27, 'Q40BAUR6YE.jpg'),
(422, 27, 'P35U98Q1RA.jpg'),
(423, 27, '9XIM2CEZQT.jpg'),
(424, 27, 'WT4P5HIKCL.jpg'),
(425, 27, 'HMKIN2VY0Z.jpg'),
(426, 27, '8HX9F4JAKE.jpg'),
(427, 27, 'A6PEUD4Z2H.jpg'),
(428, 27, 'MWSB0OHVPL.jpg'),
(429, 27, '2L184SF0YN.jpg'),
(430, 28, 'RJF4TOI2N7.jpg'),
(431, 28, 'OAJ9C43VPG.jpg'),
(432, 28, '9XRY78ONW6.jpg'),
(433, 28, 'T65WDUB49M.jpg'),
(434, 28, '9B1TA8X6ZM.jpg'),
(435, 28, 'AKPZRFLNE1.jpg'),
(436, 28, '91KNM3D0PF.jpg'),
(437, 28, 'VQBR9SF3J4.jpg'),
(438, 29, '0MK9X5B81Z.png'),
(439, 29, 'EP9R243WMU.PNG'),
(440, 29, 'XHBUFD2SV6.PNG'),
(441, 29, 'G3THKBONC7.png'),
(442, 29, '6CIWETJ2GB.png'),
(443, 29, '0AOKP1HRE2.PNG'),
(444, 29, 'DNOEXZ08SG.PNG'),
(445, 29, 'T8XLEGW942.PNG'),
(446, 29, '2VEHDLNY3X.PNG'),
(447, 29, 'ZGYA2DBCR6.PNG'),
(448, 29, 'VSU1OEQ0WY.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `offer` text NOT NULL,
  `country` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_country`
--

CREATE TABLE `stock_country` (
  `id` int(11) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `stockid` varchar(25) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_country`
--

INSERT INTO `stock_country` (`id`, `vehicleid`, `stockid`, `country`, `enabled`) VALUES
(1, 2, '', 'UK', 1),
(3, 8, '', 'Jamaica', 1),
(4, 11, '', 'UK', 1),
(6, 24, '', 'Jamaica', 1),
(7, 25, 'SK121', 'UK', 1),
(8, 26, 'SK122', 'UK', 1),
(9, 27, 'SK123', 'UK', 1),
(10, 28, 'SK124', 'UK', 1),
(11, 29, 'SK125', 'UK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_type`
--

CREATE TABLE `stock_type` (
  `id` int(11) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `type` varchar(25) DEFAULT NULL,
  `enabled` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_type`
--

INSERT INTO `stock_type` (`id`, `vehicleid`, `type`, `enabled`) VALUES
(1, 12, 'domestic', 0),
(2, 18, 'domestic', 0),
(3, 17, 'domestic', 0),
(5, 7, 'commercial', 0),
(8, 14, 'commercial', 1),
(9, 22, 'domestic', 0),
(10, 1, 'domestic', 0),
(11, 13, 'domestic', 0),
(12, 16, 'domestic', 0),
(13, 15, 'commercial', 0),
(14, 20, 'domestic', 0),
(15, 5, 'domestic', 0),
(16, 3, 'domestic', 0),
(17, 11, 'domestic', 0),
(18, 10, 'domestic', 0),
(19, 4, 'domestic', 0),
(21, 2, 'domestic', 0),
(23, 8, 'commercial', 0),
(24, 24, 'domestic', 0),
(25, 25, 'domestic', 0),
(26, 26, 'domestic', 0),
(27, 27, 'domestic', 0),
(28, 28, 'domestic', 0),
(29, 29, 'domestic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`) VALUES
(1, 'Usman', 'Abid', '$2y$10$PYB7LbGkvjeqeprQQj29p.9.Mnd6TJicMZVC.BiglFKbVD7nh.szK', 'usmanabid935@gmail.com'),
(2, 'raja', 'hashim', '$2y$10$BSu7P/wZ.ghzcXFyvpQ8de4GE5TXUN8CXbUDLf5GkmAQmH5zZjoi2', 'rajamoja@yahoo.co.jp'),
(3, 'Nadeem', 'Jabbar', '$2y$10$Sr7grFzNhxOxFJH4Yv.8I.zohRANM7fbRqQgtTAB5icK3Bigf62Wi', 'jabbarnadeem@hotmail.com'),
(4, 'AWAIS', 'JAFFAR', '$2y$10$2UecOueVOWstkIn9r/8zPeen1KXNSEjeJ0CFsOSjNNekeBU1/sD92', 'awaismhd@yahoo.com'),
(5, 'DAVID', 'TESTER', '$2y$10$MLCng/pKWvmcRNs0rAhYcOUvssC5Qm6d1xx..Z5PbrUFx5DLTHSMW', 'zahidfra@hotmail.com'),
(6, 'Haroon', 'Bhatti', '$2y$10$hK3BNCJbdBmb8J2jDMjEsuZvGLJV8xzaC8vnwSK4PQhdHm4yeaefO', 'test@tt.com'),
(7, 'test', 'user', '$2y$10$XGhKrpwET4BJogsNDsNu5.yjtrnP.iVEDgYMxCEwpYDeCkcyBSIeS', 'test@test.com'),
(8, 'muhmad', 'maaaaz', '$2y$10$pBBu5hbSFxdjPQI8oP773uPtNN9.ZoiOsxBiIEgi37Bxw/MFn1wLG', 'shazshykh@gmail.com'),
(9, 'Zaka', 'Awan', '$2y$10$6iOBlymwkKKUDmVgvpVwPuwOwxw3Feg.2tn3hVIBaR3ocRA5DgvAi', 'zaka_awan15@yahoo.com'),
(10, 'vladimir', 'volodin', '$2y$10$xqDHsYh9/mDDFbtm1.rDSuQsrxT6MBOkHP.dPFgRz9GS5Iv6Y0iLm', 'laufen@mail.ru'),
(11, 'Tes', 'Tes', '$2y$10$fLdJ0TW5F9gfc9us1UKsweuQv5xg3LCp4gYyxcGxMMYNwbQSQejZq', 'abcdefg123@gmail.cok');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `chasisno` varchar(25) DEFAULT NULL,
  `make` varchar(25) DEFAULT NULL,
  `model` varchar(25) DEFAULT NULL,
  `year` varchar(25) DEFAULT NULL,
  `milage` varchar(25) DEFAULT NULL,
  `color` varchar(25) DEFAULT NULL,
  `countrystock` varchar(25) DEFAULT NULL,
  `stocktype` varchar(25) DEFAULT NULL,
  `pricefob` varchar(25) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `steering` varchar(25) DEFAULT NULL,
  `drive4w` varchar(25) DEFAULT NULL,
  `grade` varchar(25) DEFAULT NULL,
  `availability` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `chasisno`, `make`, `model`, `year`, `milage`, `color`, `countrystock`, `stocktype`, `pricefob`, `enabled`, `steering`, `drive4w`, `grade`, `availability`) VALUES
(1, '6RCJZ', 'VOLKSWAGEN ', 'Polo', '2016', '87000km', 'White ', 'UK', 'deals of the week', '€5800', 1, 'RHD', '2WD', 'TSI Comfort Line', 'available'),
(2, '6RZGU', 'VOLKSWAGEN ', 'Polo', '2016', '63000KMkm', 'Red', 'UK', 'best seller cars', '€5500', 1, 'RHD', '2WD', 'TSI', 'available'),
(3, 'AACHY ', 'VOLKSWAGEN ', 'UP', '2015', '46000KM', 'Red ', 'UK', 'best seller cars', '€3200', 1, 'RHD', '2WD', 'High Up', 'available'),
(4, 'AACHY-', 'VOLKSWAGEN ', 'UP', '2015', '46000KM', 'Red ', 'UK', 'recently added', '€3400', 1, 'RHD', '2WD', 'High Up', 'available'),
(5, 'AUCPT', 'VOLKSWAGEN ', 'Golf ', '2015', '84000km', 'Black', 'UK', 'best seller cars', '€6200', 1, 'RHD', '2WD', 'TSI HIGHLINE ', 'available'),
(7, 'FRR35C3S', 'Isuzu ', 'Forward', '2005', '296000km', 'White', 'Jamaica', 'best seller cars', '$15300', 1, 'RHD', '2WD', 'Dump', 'available'),
(8, 'FRR35C3S-', 'Isuzu', 'Forward', '2004', '92000KMkm', 'White ', 'Jamaica', 'recently added', '$14,500', 1, 'RHD', '2WD', 'Water Tank', 'booked'),
(10, 'GP1', 'Honda ', 'Fit Hybrid ', '2012', '108000km', 'Silver', 'UK', 'deals of the week', '€2650', 1, 'RHD', '2WD', 'Smart Selection', 'booked'),
(11, 'GP1:', 'Honda ', 'Fit Hybrid ', '2013', '98000KMkm', 'Silver ', 'UK', 'recently added', '€3100', 1, 'RHD', '2WD', 'Hybrid', 'booked'),
(12, 'NCP160', 'Toyota', 'Probox', '2016', '126000km', 'White', 'Jamaica', 'deals of the week', '$3600', 1, 'RHD', '2WD', 'GL', 'available'),
(13, 'NHP10', 'Toyota', 'Aqua ', '2017', '110000km', 'Silver ', 'UK', 'deals of the week', '$6050', 1, 'RHD', '2WD', 'S', 'available'),
(14, 'NK85AD', 'Isuzu', 'Elf ', '2007', '223000km', 'White ', 'Jamaica', 'recently added', '$10900 ', 1, 'RHD', '2WD', 'Dump', 'available'),
(15, 'NKR81AN', 'Isuzu', 'Elf ', '2006', '202000km', 'White', 'Jamaica', 'recently added', '$6000', 1, 'RHD', '2WD', 'Bucket Truck ', 'available'),
(16, 'NRE160', 'Toyota', 'Corolla Axio', '2016', '134000km', 'White ', 'Jamaica', 'recently added', '$5500', 1, 'RHD', '2WD', '1.3X', 'available'),
(17, 'NT32', 'Nissan ', 'X-trail', '2016', '103000KMkm', '', 'Jamaica', 'deals of the week', '$11400', 1, 'RHD', '4WD', 'Emergency Brake ', 'available'),
(18, 'NZE164', 'Toyota', 'Corolla Axio', '2016', '119000km', 'White', 'Jamaica', 'best seller cars', '$5300', 1, 'RHD', '4WD', '1.5X', 'available'),
(20, 'ZGE20W', 'Toyota ', 'Wish', '2012', '106000km', 'White', 'Jamaica', 'best seller cars', '$3500', 1, 'RHD', '2WD', '4', 'available'),
(22, 'ZRR70W', 'Toyota', 'Voxy ', '2012', '132000km', 'White', 'Jamaica', 'deals of the week', '$5700', 1, 'RHD', '2WD', 'ZS Kirameki ', 'available'),
(24, 'ZRR80W-', 'Toyota ', 'Voxy ', '2014', '70000KMkm', 'Pearl White ', 'Jamaica', 'deals of the week', '$11,200', 1, 'RHD', '2WD', 'ZS ', 'available'),
(25, '1KCBZ ', 'VOLKSWAGEN ', 'Golf ', '2012', '110000kmkm', 'Red ', 'UK', 'deals of the week', '$2,450', 1, 'RHD', '2WD', 'TSI Comfort Line', 'available'),
(26, 'BNR32', 'Nissan ', 'Skyline GT-R', '1992', '152000kmkm', 'White ', 'UK', 'recently added', '$32,000', 1, 'RHD', '2WD', 'GT-R', 'available'),
(27, '16ZHM', 'VOLKSWAGEN ', 'Beetle', '2016', '14000kmkm', 'Blue ', 'UK', 'best seller cars', '€12,250', 1, 'RHD', '2WD', '', 'available'),
(28, 'NHP10', 'Toyota ', 'Aqua ', '2016', '124000kmkm', 'Silver ', 'UK', 'best seller cars', '€3400', 1, 'RHD', '2WD', 'L ', 'booked'),
(29, '6RCJZ', 'VOLKSWAGEN ', 'Polo', '2016', '60000kmkm', 'White ', 'UK', 'best seller cars', '€6,500', 1, 'RHD', '2WD', 'Premium Edition Navi', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `id` int(11) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `carcc` varchar(25) DEFAULT NULL,
  `transmission` varchar(25) DEFAULT NULL,
  `airbags` varchar(25) DEFAULT NULL,
  `centrallocking` varchar(25) DEFAULT NULL,
  `fueltype` varchar(25) DEFAULT NULL,
  `powerwindows` varchar(25) DEFAULT NULL,
  `abs` varchar(25) DEFAULT NULL,
  `sunroof` varchar(25) DEFAULT NULL,
  `vehicletype` varchar(25) DEFAULT NULL,
  `powerstearing` varchar(25) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `tvnev` varchar(25) DEFAULT NULL,
  `coolbox` varchar(25) DEFAULT NULL,
  `powerbackdoor` varchar(25) DEFAULT NULL,
  `leatherseats` varchar(25) DEFAULT NULL,
  `autowing` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`id`, `vehicleid`, `carcc`, `transmission`, `airbags`, `centrallocking`, `fueltype`, `powerwindows`, `abs`, `sunroof`, `vehicletype`, `powerstearing`, `comments`, `tvnev`, `coolbox`, `powerbackdoor`, `leatherseats`, `autowing`) VALUES
(1, 1, '1200CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(2, 2, '1200CC', '', 'yes', 'yes', '', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(3, 3, '1000CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Sedan', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(4, 4, '1000CC', 'AT', 'yes', 'yes', '', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'no', 'no', 'no', 'no', 'no'),
(5, 5, '1400CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', ' No Repair History', 'yes', 'yes', 'no', 'yes', 'no'),
(7, 7, '7200CC', 'MT', 'yes', 'no', 'Diesel ', 'yes', 'yes', 'no', 'Dump Truck ', 'yes', '', 'no', 'no', 'no', 'no', 'no'),
(8, 8, '7200CC', 'MT', 'yes', 'no', 'Diesel ', 'yes', 'yes', 'no', 'Truck ', 'yes', '', 'no', 'no', 'no', 'no', 'no'),
(10, 10, '1300CC', '', 'yes', 'yes', 'Hybrid-Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', ' No Repair History', 'yes', 'no', 'no', 'no', 'no'),
(11, 11, '1300CC', '', 'yes', 'yes', 'Hybrid-Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(12, 12, '1500CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Van', 'yes', '', 'yes', 'yes', 'no', 'no', 'no'),
(13, 13, '1500CC', 'AT', 'yes', 'yes', 'Hybrid ', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(14, 14, '3000CC', 'MT', 'yes', 'no', 'Diesel ', 'yes', 'yes', 'no', 'Dump Truck ', 'yes', '', 'no', 'no', 'no', 'no', 'no'),
(15, 15, '4800CC', 'MT', 'yes', 'no', '', 'yes', 'yes', 'no', 'Truck ', 'yes', '', 'no', 'no', 'no', 'no', 'no'),
(16, 16, '1300CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Sedan', 'yes', '', 'yes', 'yes', 'no', 'no', 'no'),
(17, 17, '2000cc', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'SUV', 'yes', '', 'yes', 'yes', 'yes', 'yes', 'no'),
(18, 18, '1500CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', '', 'yes', '', 'yes', 'yes', 'yes', 'no', 'no'),
(20, 20, '20001800cc', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Van', 'yes', '', 'yes', 'no', 'yes', 'no', 'no'),
(22, 22, '2000cc', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Van', 'yes', '', 'yes', 'yes', 'yes', 'yes', 'no'),
(24, 24, '2000CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Van ', 'yes', '', 'yes', 'yes', 'yes', 'no', 'no'),
(25, 25, '1200CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'no', 'no', 'no', 'no', 'no'),
(26, 26, '2700cc', 'MT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', '', 'yes', '', 'yes', 'yes', 'no', 'no', 'no'),
(27, 27, '1200CC', 'AT', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Sedan', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(28, 28, '1500CC', 'AT', 'yes', 'yes', 'Hybrid-Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'yes', 'no', 'no', 'no', 'no'),
(29, 29, '1200CC', '', 'yes', 'yes', 'Gasoline', 'yes', 'yes', 'no', 'Hatchback ', 'yes', '', 'yes', 'yes', 'yes', 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_replies`
--
ALTER TABLE `blog_replies`
  ADD PRIMARY KEY (`id`,`blogid`),
  ADD KEY `blogid` (`blogid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`,`vehicleid`),
  ADD KEY `vehicleid` (`vehicleid`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`,`vehicleid`),
  ADD KEY `vehicleid` (`vehicleid`);

--
-- Indexes for table `stock_country`
--
ALTER TABLE `stock_country`
  ADD PRIMARY KEY (`id`,`vehicleid`),
  ADD KEY `vehicleid` (`vehicleid`);

--
-- Indexes for table `stock_type`
--
ALTER TABLE `stock_type`
  ADD PRIMARY KEY (`id`,`vehicleid`),
  ADD KEY `vehicleid` (`vehicleid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`id`,`vehicleid`),
  ADD KEY `vehicleid` (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_replies`
--
ALTER TABLE `blog_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_country`
--
ALTER TABLE `stock_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stock_type`
--
ALTER TABLE `stock_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_replies`
--
ALTER TABLE `blog_replies`
  ADD CONSTRAINT `blog_replies_ibfk_1` FOREIGN KEY (`blogid`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`id`);

--
-- Constraints for table `stock_country`
--
ALTER TABLE `stock_country`
  ADD CONSTRAINT `stock_country_ibfk_1` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`id`);

--
-- Constraints for table `stock_type`
--
ALTER TABLE `stock_type`
  ADD CONSTRAINT `stock_type_ibfk_1` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`id`);

--
-- Constraints for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD CONSTRAINT `vehicle_details_ibfk_1` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
