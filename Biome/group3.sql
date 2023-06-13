-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2023, 21:06:14
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `group3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `yearCar` varchar(255) NOT NULL,
  `secondHand` varchar(255) NOT NULL,
  `Image_01` varchar(255) NOT NULL,
  `Image_02` varchar(255) NOT NULL,
  `fuelType` varchar(255) NOT NULL,
  `bodyType` varchar(255) NOT NULL,
  `Gear` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `Kilometer` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `cost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `yearCar`, `secondHand`, `Image_01`, `Image_02`, `fuelType`, `bodyType`, `Gear`, `color`, `Kilometer`, `price`, `cost`) VALUES
(176, 'MERCEDES', 'G400d', '2023', 'No', 'up/g400_on.png', 'up/g400_arka.png', 'Diesel', 'SUV', 'Automatic', 'Yellow', 0, 9728000, 6000000),
(182, 'SKODA', 'SUPERB', '2020', 'Yes', 'up/superb_on.png', 'up/superb_arka.png', 'Diesel', 'Sedan', 'Automatic', 'Blue', 83000, 1710000, 1000000),
(183, 'AUDI', 'A5', '2023', 'No', 'up/a5_on.png', 'up/a5_arka.png', 'Diesel', 'Coupe', 'Automatic', 'Green', 0, 2431630, 2100000),
(184, 'LAMBORGHINI', 'AVENTADOR', '2018', 'Yes', 'up/lamborghini_on.png', 'up/lamborghini_arka.png', 'Gasoline', 'Coupe', 'Automatic', 'Red', 6000, 38750000, 35000000),
(185, 'JAGUAR', 'F TYPE', '2015', 'Yes', 'up/f_type_on.png', 'up/f_type_arka.png', 'Gasoline', 'Coupe', 'Manual', 'Red', 47081, 4750000, 3250000),
(186, 'MAZDA', 'MX5', '2022', 'Yes', 'up/mx5_on.png', 'up/mx5_arka.png', 'Gasoline', 'Cabrio', 'Manual', 'Black', 1000, 1380000, 1300000),
(187, 'ALPINE', 'A110', '2018', 'Yes', 'up/a110_on.png', 'up/a110_arka.png', 'Gasoline', 'Cabrio', 'Manual', 'Silver', 200000, 2496000, 2300000),
(188, 'ROLLS ROYCE', 'DAWN', '2023', 'No', 'up/dawn_on.png', 'up/dawn_arka.png', 'Gasoline', 'Cabrio', 'Automatic', 'White', 0, 32500000, 31000000),
(189, 'PORSCHE', 'CAYENNE', '2020', 'Yes', 'up/cayenne_on.png', 'up/cayenne_arka.png', 'Hybrid', 'SUV', 'Automatic', 'Brown', 22650, 10460000, 10000000),
(190, 'VOLVO', 'XC40', '2023', 'No', 'up/xc40_on.png', 'up/xc_40_arka.png', 'Electric', 'SUV', 'Automatic', 'Silver', 0, 1978172, 1900000),
(194, 'SEAT', 'TARRACO', '2023', 'No', 'up/tarraco_on.png', 'up/tarraco_arka.png', 'Gasoline', 'SUV', 'Automatic', 'Red', 0, 1540000, 1450000),
(195, 'PORSCHE', '718', '2020', 'Yes', 'up/718_on.png', 'up/718_arka.png', 'Gasoline', 'Cabrio', 'Manual', 'Blue', 20230, 6250000, 5500000),
(196, 'MERCEDES', 'E300D', '2021', 'Yes', 'up/E300_on.png', 'up/E300_arka.png', 'Diesel', 'Coupe', 'Automatic', 'Silver', 20000, 4000500, 3500700),
(197, 'CADILLAC', 'CT4', '2017', 'Yes', 'up/ct_4_on.png', 'up/ct4_arka.png', 'Gasoline', 'Sedan', 'Automatic', 'Black', 80000, 4100000, 3500000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `explanation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `img`, `heading`, `explanation`) VALUES
(1, 'newsImages/toyota-prius-front-static-2023.webp', 'Toyota hints at hot GR Prius unveiling at Le Mans', 'Toyota\'s Gazoo Racing performance division has hinted that it will reveal a high-performance model based on the Prius at the centenary running of the Le Mans 24 Hour race.\r\nGazoo has said it will unveil a concept \" equipped with vehicle technologies that have been developed through numerous challenges in motorsports participation \" at the event.What\'s less clear is whether the powertrain will be based on the Prius Plug-in Hybrid\'s 221bhp 2.0-litre petrol-electric system. If so, it will no doubt serve as a statement of intent for Gazoo\'s electrified future, given that its current road cars are all pure-petrol. \r\nThe concept is likely to serve as an acid test for a production GR Prius, with the public reaction to it dictating whether it progresses into production.\r\nNew Toyota boss Koji Sato  who previously headed the company\'s Lexus and Gazoo divisions  last month hinted to Autocar that more GR-branded sports cars would be on the way.\r\nSato said: \" The Gazoo brand will be acknowledged for the future - and maybe we can even speed it up.\r\n\" Our Master Driver [Akio Toyoda] was also president of the company at the same time as he had a steering wheel in his hand for Gazoo. Now he is only chairman, maybe he will have a lot more time to develop cars for them. \"'),
(2, 'newsImages\\tesla.webp', 'Tesla customers cancel orders after RHD Model S, M', 'Customers who had been waiting years for delivery of new Tesla Model S and Tesla Model X vehicles are cancelling their orders in the wake of the firm\'  s decision to supply the cars in left-hand drive only, albeit with three years free Supercharger use. \r\nTesla\' s announcement on 12 May that it would cease production of right-hand-drive versions due to mechanical and logistical complexities took customers by surprise and many rushed to express their shock on social media. \r\nAmong them was Tesla owner Paul Jones: \" I \'  m a 2018 Model S 100D owner since new and a Model S Plaid order holder since October 2021. I love the cars [but this decision] is a kick in the teeth. To be told repeatedly since 2021 my car is delayed but is coming and now this, without explanation, is very poor. '),
(3, 'newsImages\\volvo.webp', 'Bentley Taps Former Volvo Design Boss To Lead Them', 'Bentley will have a new Director of Design this fall as Robin Page is returning to the ultra-luxury brand.\r\nPage will assume the role on September 1 and he brings over three decades of experience to the job. This includes a recent stint at Volvo, where he served as their Head of Global Design and was \"instrumental in creating the design language for Volvo\'s electric future.\"\r\nWhile Page left his mark on the Swedish brand, he isn\'t exactly a stranger in Crewe. Quite the opposite as he was Bentley\'s Head of Interior Design between 2001 and 2013. As a result, even if you\'re not familiar with his name, you undoubtedly know his work as he had a hand in crafting the cabins of the first-generation Continental GT as well as the latest Mulsanne.\r\nPage will report to CEO Adrian Hallmark, who said \"I am pleased to welcome Robin back to Bentley having worked with him during a truly formative period in the history of Bentley Motors, launching the sector-defining Continental GT.\"\r\nHallmark went on to say Page will help to usher in the era of the electric Bentley as \"He joins at a time when we are shaping an even greater story as we accelerate our journey to full electrification by 2030. His previous experiences from innovative automotive design, combined with a strong understanding of the Bentley brand means he is perfectly positioned to enable us to achieve our future ambitions as the leader in sustainable luxury mobility.\"\r\nPage echoed these sentiments by saying, \"To return and have the opportunity to help set the design language for the first Bentley BEVs, redefining the rules while keeping continuity to the past and present, is a challenge I am privileged to lead.\"'),
(4, 'newsImages\\2024-Mercedes-AMG-SL-63-4.webp', '2024 Mercedes-AMG SL 63 Comes To Australia Priced ', 'Australia has just welcomed the new Mercedes-AMG SL to its shores, more than 18 months after it was unveiled for the European market as an innovative and fresh new take on the beloved SL.\r\nJust a single version of the SL will be sold in Australia, taking the form of the SL 63 4MATIC+. The car has been priced from an eye-watering AU$374,900 ($244,262) excluding on-road costs, pushing the starting price closer to AU$400,000 ($260,000).\r\nAs in other markets, the new 2024 Mercedes-AMG SL 63 is driven by a 4.0-liter twin-turbocharged V8 that produces 430 kW (577 hp) and 800 Nm (590 lb-ft) of torque, allowing it to hit 100 km/h (62 mph) in just 3.6 seconds and continue through to a 315 km/h (196 mph) top speed. Mated as standard to this brute of an engine is a nine-speed AMG Speedshift transmission driving all four wheels through the carmaker\'s 4MATIC+ system.Of course, there\'s much more to the SL 63 4MATIC+ than a powerful engine. It also comes equipped with the AMG Active Ride Control suspension system with active, hydraulic anti-roll stabilization. The car also has a front axle lift function. Mercedes-AMG has also equipped it with an optional high-performance composite braking system and as standard, the AMG Dynamic Plus package that adds dynamic engine mounts, Race and Drift driving modes, and an electronic rear locking differential.\r\nA plethora of other features come standard on the SL 63 4MATIC+ heading Down Under. These include rear-wheel steering, illuminated AMG door sills, and safety systems like autonomous emergency braking, adaptive cruise control, lane-keep assist, blind-spot monitoring, rear cross-traffic alert, and traffic sign recognition.The interior of the new car is also a pleasure to spend time thanks to the 12.3-inch digital instrument cluster, 11.9-inch central infotainment display, Nappa leather upholstery, AMG sports seats, a heated steering wheel, wireless phone charger, Black Dinamic microfiber headliner, and an 11-speaker, 650-watt Burmester surround sound system.'),
(5, 'newsImages\\1970-Dodge-Hemi-Challenger-22The-Black-Ghost22-42-1024x576.webp', 'Famous \' Black Ghost \' 1970 Dodge Challenger Sold For Over $1 Million', 'The fabled 1970 Dodge HEMI Challenger dubbed the Black Ghost just crossed the auction block for a whopping $975,000. Add in the auction premium of 10 percent and this classic muscle car sold for $1,072,500. It comes with a cool story and a verifiably rare build sheet.\r\nFor the unaware, this particular HEMI Challenger is called the Black Ghost because evidently, it was legendary in the street racing scene back in the early 1970s in Detroit. Owned since new by the same family it was originally spec \' d and purchased by decorated Army vet and Police officer Godfrey Qualls. The stories told about how he used it in street racing events are the kind of things we see in modern-day fast-and-furious movies.\r\nThey are good enough too that they have led to Dodge itself honoring the car with a \" Last Call \" special edition of the outgoing Challenger. And clearly, the stories are good enough for someone to drop seven figures on this car. Of course, it does not hurt that the car itself, regardless of the stories surrounding it, is pretty rare.\r\nDodge only made 23 HEMI Challenger R/Ts in 1970 with a four-speed manual transmission and the Special Edition package. This is one of them. It only has 45,105 miles (72,590 km) on the odometer. And did we mention the Gator Grain top? That makes it the only known four-speed HEMI Challenger R/T of its kind.\r\nIt is truly a piece of history and as it sits in unrestored condition it is a window into how these cars aged. According to the buyer, it will get a deep cleaning but remain as it is otherwise.That buyer, Ryan Snyder of Florida, considers himself to be more of a steward than the car \' s new owner. Speaking about Qualls he told Autoblog that, \" At the end of the day it is his dad \' s car, I am just the new caretaker. \" Regardless of how true this car \' s story is, that \' s an attitude toward family that even Dominic Toretto would be proud of.'),
(6, 'newsImages\\INEOS-Grenadier-Fieldmaster-Arizona-2ll-1024x576.webp', 'Ineos Grenadier To Start At $71,500 In The US, About As Much As A Land Rover Defender', 'Ineos has finally announced pricing details for the long-awaited Grenadier in the United States and Canada, confirming that it will start at $71,500 in the U.S. and CA$91,929 up north.\r\nThree variants of the Grenadier will be offered. The range starts with the base model, priced from $71,500 and CA$91,929, and expands with the Trialmaster and Fieldmaster Editions, both of which start at $79,190 and CA$101,219.\r\nTo put these prices into perspective, the equivalent Land Rover Defender 130 starts at $68,000 in the U.S. and tops out at $99,900.\r\nIneos has pre-configured the Grenadier Trialmaster and Fieldmaster Editions in-house. The first of these two gets its name from the Belstaff Trialmaster jacket and has been designed with extreme off-roading in mind. As such, it includes the Rough Pack that adds electronically activated front and rear differential locks and BFGoodrich All-Terrain T/A KO2 tires. Ineos has also raised the air intake, added an auxiliary battery, and new exterior utility belts.\r\nAs for the Ineos Grenadier Fieldmaster Edition, it has a selection of comfort and convenience-focused features including Safari Windows, leather upholstery in two colorways, carpet floor mats, and heated front seats.\r\nThe car manufacturer notes that all three variants will be offered with a wide range of factory-fit options and a comprehensive choice of accessories. Pre-orders from the online configurator will be accepted from May 31 and Ineos plans to start deliveries in the U.S. by the end of the year while the Grenadier will reach the hands of customers in Canada in Q1 2024.\r\nWhile Ineos hasn \'t announced specifications for the U.S. and Canada-spec models, we know that it delivers 282 hp and 332 lb-ft (450 Nm) of torque with the BMW-sourced 3.0-liter turbo-six engine in overseas markets. It also remains unclear if the diesel version of this engine will be offered in North America. In Europe, the diesel has 246 hp and 406 lb-ft (550 Nm). Both engines are mated to an eight-speed automatic transmission, a two-speed transfer case, and a permanent four-wheel drive system.\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soldcars`
--

CREATE TABLE `soldcars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `yearCar` varchar(255) NOT NULL,
  `secondHand` varchar(255) NOT NULL,
  `Image_01` varchar(255) NOT NULL,
  `Image_02` varchar(255) NOT NULL,
  `fuelType` varchar(255) NOT NULL,
  `bodyType` varchar(255) NOT NULL,
  `Gear` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `Kilometer` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `soldcars`
--

INSERT INTO `soldcars` (`id`, `brand`, `model`, `yearCar`, `secondHand`, `Image_01`, `Image_02`, `fuelType`, `bodyType`, `Gear`, `color`, `Kilometer`, `price`, `cost`, `date`) VALUES
(180, 'RENAULT', 'CLIO', '2022', 'No', 'up/clio_on.png', 'up/clio_arka.png', 'Diesel', 'Hatchback', 'Manual', 'Black', '0', '809720', '800500', '2023-05-27 12:20:45'),
(184, 'TOYOTA', 'YARIS', '2015', 'Yes', 'up/yaris_on.png', 'up/yaris_arka.png', 'Hybrid', 'Hatchback', 'Automatic', 'Blue', '158000', '639750', '550000', '2023-05-29 10:25:36'),
(185, 'RENAULT', 'ZOE', '2017', 'Yes', 'up/zoe_on.png', 'up/zoe_arka.png', 'Electric', 'Hatchback', 'Automatic', 'White', '86500', '549750', '540000', '2023-05-31 09:39:53'),
(186, 'BMW', '530i xDrive', '2023', 'No', 'up/5_on.png', 'up/5_arka.png', 'Gasoline', 'Sedan', 'Automatic', 'Silver', '0', '4650700', '3500000', '2023-06-04 17:10:45');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `soldcars`
--
ALTER TABLE `soldcars`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `soldcars`
--
ALTER TABLE `soldcars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
