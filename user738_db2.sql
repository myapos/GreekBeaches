-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2015 at 11:30 PM
-- Server version: 5.5.37
-- PHP Version: 5.4.40-1+deb.sury.org~precise+4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user738_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `size` varchar(65) NOT NULL,
  `path` varchar(120) NOT NULL,
  `latitude` varchar(130) CHARACTER SET utf8 NOT NULL,
  `longitude` varchar(130) CHARACTER SET utf8 NOT NULL,
  `description` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `rating` int(11) NOT NULL,
  `category` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `type`, `size`, `path`, `latitude`, `longitude`, `description`, `rating`, `category`) VALUES
(70, 'Agioi-Apostoloi.jpg', 'image/jpeg', '569995', 'upload/Agioi-Apostoloi.jpg', '35.5105554', '23.9755883', 'Agioi Apostoloi is a waterfront village, named after a small church called Agioi Apostoloi  ("Saint Apostles") situated in Crete and it is famous for its coves.  Found only 4 km from the center of Chania on the island of Crete, it is known for its small protected woods, for a summer beach volleyball competition,  and as a favorite beach for winter swimmers. Agioi Apostoloi is located between the city of Chania to the east, and the summer resorts of Agia Marina and Platanias to the west.Many inhabitants of Chania visit the sandy beaches during the weekends because they are close to the city, they have sport facilities and in the end they are quite warm even from the first weeks of the summer. There are three different beaches in Agioi Apostoloi, each one situated in its own small bay.The most well-known beach in the village is called Chrissi Akti ("Golden Beach"), due to the gold colour of the sand.  The second of Agioi Apostoli''s beaches is a horseshoe shaped sandy cove which is popular with swimmers.  The beach is 500 metres long and 50 metres wide and can be accessed via wooden boards and ramps. The beach has received a Blue Flag award.  The third beach is the smallest beach in this Municipality at 300 metres long and 20 metres wide. The beach is approached by wooden boards and ramps and again has Blue Flag status.The village of Agioi Apostoloi is also known for its sardine feast.  During the feast, lots of people, locals and visitors alike, gather here to freely taste the grilled sardines, drink raki or tsikoudia, and listen to traditional Cretan music.The waterfront of the Agioi Apostoloi (the park included) is under preservation by the authorities, therefore there is still some green space next to the sea.  The local flora consists of many Pine, Nerium oleander, Palmaes and Eucalyptus trees. Sea Daffodil, a rare and protected species with large, delicate, white flowers and a strong scent, also grows in the area.Environmental educational projects take place throughout the year, particularly regarding the Loggerhead sea turtles that use the coastline to breed.In the past few years there has been discussion in the local community about whether Agii Apostoli should be protected from any kind of tourist development.', 8, 'Sand'),
(71, 'Bali.jpg', 'image/jpeg', '579579', 'upload/Bali.jpg', '35.410105', '24.7832586', 'Το Μπαλί (η λέξη "μπαλί" σημαίνει μέλι) είναι παραθαλάσσιο χωριό στην βόρεια ακτή της Κρήτης, σε απόσταση περίπου 32 χλμ. ανατολικά του Ρεθύμνου και 50 χλμ. από το Ηράκλειο το οποίο έχει καταστεί τουριστικό θέρετρο.  Διοικητικά ανήκει στον Δήμο Μυλοποτάμου της περιφέρειας Κρήτης (πρόγραμμα Καλλικράτης). Από το 1999 έως το 2010 σύμφωνα με την τότε διοικητική διαίρεση της Ελλάδας ανήκε τον Δήμο Γεροποτάμου του νομού Ρεθύμνου. Παλαιότερα ανήκε στον νομό Ρεθύμνης.  Οι Βενετσιάνοι το ονόμαζαν Ατάλη, από το αρχαίο του όνομα που ήταν Αστάλη. Υπάρχει και η Μονή Ατάλης εκεί κοντά, που διατηρεί τη μεσαιωνική ονομασία του τόπου. Είναι κτισμένο σε μία υπερυψωμένη μικρή χερσόνησο, έτσι έχει θέα στον όρμο και τη θάλασσα.[1]  Παλαιότερα ήταν ψαράδικο χωριό, ενώ σήμερα είναι σημαντικό παραθεριστικό κέντρο με ξενοδοχεία και διαμερίσματα. Το Μπαλί έχει ένα λιμάνι, ωραίες ψαροταβέρνες και παραλία με νησάκι.', 9, 'Sand'),
(72, 'Falasarna.jpg', 'image/jpeg', '64472', 'upload/Falasarna.jpg', '35.4994435', '23.5817258', 'Falasarna or Phalasarna is an ancient Greek harbor town on the northwest coast of Crete. The currently visible remains of the city were built around 333 BC, and include several imposing sandstone towers and bastions, with hundreds of meters of fortification walls protecting the town, and a closed harbor, meaning it is protected on all sides by city walls. The harbor is ringed by stone quays with mooring stones, and connected to the sea through two artificial channels. Notable finds in the harbor area include public roads, wells, warehouses, an altar, and baths. Most of these structures were revealed by excavations that began in 1986. The acropolis is built on a cape that rises 90 meters above the harbor and juts into the sea. The acropolis has many remains, including a temple dedicated to goddess Dictynna, fortification towers, cisterns, wells, and watchtowers that could have been used to guard sea routes  Today Phalasarna is an agricultural area and tourist attraction. The valley is filled with olive groves and greenhouses cultivating mainly tomatoes; there are also scattered family-run hotels and restaurants. The seaside has long sandy beaches and crystal clear waters that are popular both with residents of the province of Chania and visitors from Greece and abroad. Falasarna beach was voted, in the CNN poll, among the best 100 beaches of the world.', 10, 'Sand'),
(73, 'Ferma_Ierapetras.jpg', 'image/jpeg', '471356', 'upload/Ferma_Ierapetras.jpg', '35.0178511', '25.850714', 'Ferma is a settlement in the municipality of Ierapetra on the island of Crete. It is situated at the coast, 11 kilometers east of Ierapetra. Its beach is well known for its beauty.', 8, 'Fishing'),
(74, 'Hersonissos.jpg', 'image/jpeg', '520598', 'upload/Hersonissos.jpg', '35.3178511', '25.3891742', 'Hersonissos, also transliterated as Chersonisosand Hersónisos, is a town and a municipality in the north of Crete, bordering the Mediterranean / Aegean Sea. This community is about 25 kilometers east of Heraklion and west of Agios Nikolaos. What is usually called Hersonissos is in fact its peninsula and harbour. It is part of the Heraklion regional unit. It is situated 25 km from the Heraklion airport and 27 km from the Heraklion port. The seat of the municipality is the village Gournes.', 7, 'Sea sports'),
(75, 'Marathi.jpg', 'image/jpeg', '495596', 'upload/Marathi.jpg', '35.5058828', '24.1739302', 'The beaches of Marathi are just wonderful. They are two and separated from the pier of the small harbor. Neither is better than the other. Both are sandy, organized with sun beds and umbrellas. The most important advantage is that Marathi beach almost never raises waves, even during the days with strong winds in western Crete. The beaches look to the southeast, across Souda Bay and the mountains of Akrotiri protect the place from the north winds. Opposite Marathi beach, 500m., there is the small island Marathi or Old Souda (Palaiosouda), which you can visit. On the island there is a small pine forest, while the western coast is steep and is popular to diving enthusiasts. Marathi is the ideal beach for families with young children and not only.', 8, 'Sand'),
(79, 'Makri-Gialos.jpg', 'image/jpeg', '391622', 'upload/Makri-Gialos.jpg', '35.0385596', '25.9727771', 'Makry Gialos is a former municipality in Lasithi, Crete, Greece, with a population 4,204 in 2001. It is located on the south-east coast of Crete. Since the 2011 local government reform it is part of the municipality Ierapetra, of which it is a municipal unit.[2] The seat of the municipality was in Koutsouras, 22 kilometers east of Ierapetra. It was established in 1998 when the communities of Schinokapsala, Orino, Stavrochori, Chrisopigi, Aghios Stefanos, Pefki, Lithines and Pervolakiaamalgamated into one municipality. The name Makry Gialos - or, alternatively, Makry-Gialos, Makrygialos, Makriyialos, or Makrigialos - is also specifically given both to a village and tourist centre on the coast within the municipality, and to the nearby archaeological site of an ancient Minoancountry house.', 9, 'Rock Beach'),
(80, 'Matala.jpg', 'image/jpeg', '191483', 'upload/Matala.jpg', '34.9970058', '24.754045', 'Matala is a village located 75 km south-west of Heraklion, Crete. Matala is part of the community of Pitsidia within the municipal unit of Festos, Heraklion regional unit. The artificial caves in the cliff of the Matala bay were created in the Neolithic Age. Matala was the port of Phaistos during the Minoanperiod. In the year 220 BC. Matala was occupied by the Gortynians and during the Roman period Matala became the port of Gortys. In the 1st and 2nd centuries the caves were used as tombs. One of the caves is called "Brutospeliana" because according to the legend it was frequented by the Roman general Brutus. Matala was then a fishing village. In the 1960s the caves were occupied by hippies[1] who were later driven out by the church and the military junta. Now Matala is a small village living mainly from tourism. Canadian folk singer Joni Mitchell''s experiences with the Matala hippies were immortalised in her 1971 song Carey.', 10, 'Sand'),
(82, 'Preveli.jpg', 'image/jpeg', '434616', 'upload/Preveli.jpg', '35.1611991', '24.4728625', 'Preveli beach and lagoon , sometimes known locally as "Palm Beach", is located below the monastery, at the mouth of the Kourtaliótiko gorge. Behind the beach is an extensive glade of palm trees. The beach is regularly served by tourist boats from the nearby resort of Plakias. On August 22, 2010, a large proportion of the palm grove was destroyed in a fire but today in 2011 has totally and rapidly naturally re-generated .  Despite fears that the palm grove was being believed that had been completely destroyed by this fire, now there are many positive signs that P. theophrasti not only is able generally to re-generate successfully but the oldest and youngest palms of this palm forest too, have been totally re-generated until today in summer of 2011.', 9, 'Swimming'),
(85, 'Vai.jpg', 'image/jpeg', '519179', 'upload/Vai.jpg', '35.2581409', '26.2594573', 'The palm beach of Vai is one of the largest attractions of the Mediterranean island of Crete. It features the largest natural palm forest in Europe, made up of Cretan Date Palm (Phoenix theophrasti). For tourism Vai was discovered at the beginning of the 1970s by Richard White and friends from North London, Belfast and Bavaria, at the end of that decade it was popularised by the last Hippies who fled the hot-spots Matala and Preveli. At the beginning of the 1980s Vai was full of backpacker tourists from the whole world, leading to a mixture of chaotic campground and garbage dump. Vai was enclosed and declared as a protected area. The unique forest recovered, the beach became clean. It is now a big tourist attraction and in August it is difficult to find a spot on the beach or indeed anywhere to park. lf you need the toilets you have to pay a euro or two. Because it is necessary to pay for parking, people park on the road so access can be difficult. The palm beach, which belongs to the Moni Toplou, is the touristic center of East Crete, with thousands of visitors each year. Vai lies close to Palekastro, Sitia and the Dionysades islands.', 10, 'Rock Beach');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) CHARACTER SET utf8 NOT NULL,
  `password` varchar(65) CHARACTER SET utf8 NOT NULL,
  `role` varchar(65) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `role`) VALUES
(1, 'john', '1234', 'user'),
(2, 'admin', 'admin', 'admin'),
(4, 'myapos@yahoo.com', '1234', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
