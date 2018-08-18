-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 10:24 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zion`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(121, 1, 0, 'A. Paglaganap ng ibat-ibang sakit sa balat'),
(122, 1, 0, 'B. Pagtaas o pagbaba ng populasyon '),
(123, 1, 1, 'C. Panunuyo ng lupa'),
(124, 1, 0, 'D. Pag-unti ng suplay ng bigas'),
(125, 2, 0, 'A.Usok mula sa mga sasakyan'),
(126, 2, 1, 'B. Kemikal mula sa mga pabrika'),
(127, 2, 0, 'C. Greenhouse gases sa kalawakan'),
(128, 2, 0, 'D. Glaciers sa karagatan'),
(129, 3, 0, 'A. Darami ang may mga sakit sa balat'),
(130, 3, 0, 'B. Magmamahal ang gasoline'),
(131, 3, 0, 'C. Hihina ang ani ng mga magsasaka'),
(132, 3, 1, 'D. Hahaba ang panahon ng tagtuyot'),
(133, 4, 0, 'A. Binilisan ang pagsasaka'),
(134, 4, 0, 'B. Dinamihan ang masasaka'),
(135, 4, 1, 'C. Pinagbuti ang pagsasaka'),
(136, 4, 0, 'D. Nagpakitang gilas sa pagsasaka'),
(137, 5, 0, 'A. Hulug-hulugan ang lupang sinasaka'),
(138, 5, 0, 'B. Bilhin ng magsasaka ang lupang kanyang sinasaka'),
(139, 5, 1, 'C. Ipatupad ng pamahalaan ang pamamahagi ng sakahan'),
(140, 5, 0, 'D. Ipamigay ng may-ari ng sakahan ang lupa sa mga magsasaka'),
(141, 6, 1, 'A. Gumawa ng kasulatan o kasunduan tungkol sa pagsasaka'),
(142, 6, 0, 'B. Hayaan si Tata Selo na magsaka hanggat kaya pang magsaka'),
(143, 6, 0, 'C. Humingi ng palugit si Tata Selo sa kanyang pagsasaka'),
(144, 6, 0, 'D. Ibigay ni Tata Selo ang lahat ng ani sa takdang panahon'),
(145, 7, 1, 'A. Paghingi ng payo kay Apollo'),
(146, 7, 0, 'B. Nagmakaawa kay Apollo'),
(147, 7, 0, 'C. Nakipagtagpo kay Cupid'),
(148, 7, 0, 'D. Naghanap ng lalaking iibig kay Psyche'),
(149, 8, 1, 'A. Kausapin si Cupid at sabihing may usapan na sila ni Apollo'),
(150, 8, 0, 'B. Mag usap ang mag-amang hari at si Psyche para sa bagong plano'),
(151, 8, 0, 'C. Tanungin si Apollo kung may nauna na bang nakipag-usap sa kanya'),
(152, 8, 0, 'D. Utusan ng amang hari si Psyche na kausapin si Cupid'),
(153, 9, 1, 'A. Bigyan laya ang anak na makapili ng lalaking sa tingin niyay karapat dapat niyang ibigin'),
(154, 9, 0, 'B. Maghanap ang amang hari ng isang lalaking sa tingin niyay karapat dapat para sa kanyang anak'),
(155, 9, 0, 'C. Magsagawa sa paligsahan ang amang hari sa mga kalalakihan upang makita niya ang karapat dapat na lalaki'),
(156, 9, 0, 'D. Maghintay ng isang karapat dapat na lalaki para sa anak'),
(157, 10, 0, 'A. Lumipat na ng ibang tirahan ang kanyang ama'),
(158, 10, 1, 'B. Hinuli ng mga pulis ang kanyang ama'),
(159, 10, 0, 'C. Hinalughog ng mga pulis ang kanilang bahay'),
(160, 10, 0, 'D. Naglihim ang kanilang ama sa uri ng trabaho nito'),
(165, 11, 0, 'A. Pababayaan na ang kanyang pag-aaral'),
(166, 11, 0, 'B. Ikahihiya ang pamilyang kinabibilangan'),
(167, 11, 0, 'C. Mamalagi muna siya sa kanilang tahanan'),
(168, 11, 1, 'D. Palalawakin pa ang pang-unawa sa kinahinatnan ng pamilya'),
(169, 12, 0, 'A. Isagawa tuwina ang pagsimba at pagdarasal'),
(170, 12, 0, 'B. Iplanong mabuti ang mga gawaing pangkakakitaan'),
(171, 12, 0, 'C. Kilalaning mabuti ang mga taong magiging kaibigan'),
(172, 12, 1, 'D. Pahalagahan ang edukasyong gabay sa disenteng hanapbuhay'),
(173, 13, 0, 'A. Kahandaan sa panahon ng sakuna'),
(174, 13, 0, 'B. Kasiyahan ng mga mag-aaral'),
(175, 13, 1, 'C. Prosesong solusyon ng nabilaukan'),
(176, 13, 0, 'D. Patnubay sa mag aaral na naaksidente '),
(177, 14, 0, 'A. Ugnayang sanhi at bunga'),
(178, 14, 0, 'B. Pagkakaiba at pagkakatulad '),
(179, 14, 1, 'C. Prosidyural o proseso'),
(180, 14, 0, 'D. Reyalidad o pantasya'),
(181, 15, 1, 'A. 4-2-3-1 '),
(182, 15, 0, 'B. 1-2-3-4'),
(183, 15, 0, 'C. 3-1-4-2'),
(184, 15, 0, 'D. 4-3-2-1'),
(185, 16, 0, 'A. Sikreto'),
(186, 16, 0, 'B. Haligi'),
(187, 16, 1, 'C. Lakas'),
(188, 16, 0, 'D. Templo'),
(189, 17, 1, 'A. Ang muling pagbalik ng kanyang lakas'),
(190, 17, 0, 'B. Ang muling pag-iibigan nila ni Delilah'),
(191, 17, 0, 'C. Pakikipag sundo sa mga Pilisteo'),
(192, 17, 0, 'D. Pagkalaya mula sa piitan'),
(193, 18, 0, 'A. Ang pag-ibig ay ang bibigay sigla sa buhay'),
(194, 18, 1, 'B. Ang pagtitiwala ay isang sakripisyo'),
(195, 18, 0, 'C. Matutong maging mapagkumbaba'),
(196, 18, 0, 'D. Mahalin ang kapwa nang lubos. '),
(197, 19, 0, 'A. Radyo'),
(198, 19, 0, 'B. Magazine'),
(199, 19, 1, 'C. Pahayagan'),
(200, 19, 0, 'D. Telebisyon');

-- --------------------------------------------------------

--
-- Table structure for table `examresults`
--

CREATE TABLE `examresults` (
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `score` int(200) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examresults`
--

INSERT INTO `examresults` (`lastname`, `firstname`, `score`, `trn_date`) VALUES
('Tolentino', 'Mark', 6, '2018-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `juniorhigh`
--

CREATE TABLE `juniorhigh` (
  `lastname` varchar(50) NOT NULL,
  `givenname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `age` int(50) NOT NULL,
  `zipcode` int(50) NOT NULL,
  `telno` int(20) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `mothersname` varchar(50) NOT NULL,
  `guardiansname` varchar(50) NOT NULL,
  `currentschool` varchar(50) NOT NULL,
  `fatelno` int(50) NOT NULL,
  `motelno` int(50) NOT NULL,
  `guatelno` int(50) NOT NULL,
  `academicyear` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `streetno` varchar(50) NOT NULL,
  `brgy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juniorhigh`
--

INSERT INTO `juniorhigh` (`lastname`, `givenname`, `middlename`, `gender`, `citizenship`, `dateofbirth`, `age`, `zipcode`, `telno`, `fathersname`, `mothersname`, `guardiansname`, `currentschool`, `fatelno`, `motelno`, `guatelno`, `academicyear`, `payment`, `trn_date`, `email`, `facebook`, `streetno`, `brgy`) VALUES
('baste', 'Jako', 'Mariaso', 'female', 'filipino', '1996-02-09', 0, 1940, 9312321, 'Jayze', 'Riri', 'Marko', 'STI Calamba', 92312321, 9123123, 923123, '2013-2014', 'Cash', '2018-03-14 03:32:55', 'Baste@gmail.com', 'jelsendio', 'kamote', 'Antipolo'),
('Narne', 'Juls ', 'Gabriel', 'female', 'filipino', '1997-02-09', 0, 1940, 909090909, 'Ohayo', 'Qwerty', 'Boomy', 'STI Calamba', 92312321, 9123123, 923123, '2013-2014', 'Installment', '2018-03-14 03:12:07', 'juls@gmail.com', 'jelsen dio', 'Bristol', 'Brookside');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question_essay` varchar(1000) NOT NULL,
  `instruction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`, `subject`, `question_essay`, `instruction`) VALUES
(1, 'Alin sa mga sumusunod ay maiuugnay sa climate change?', 'Filipino', 'Ayon sa mga batikang siyentipiko, ang climate change ay malawakang pagbabago ng panahon o klima sa ibat-ibang parte ng daigdig. Ang epekto nito ay nadarama natin sa unti-unting apg init ng mundo na kadalasan ay tinatawaag nating global warming. Ito ay makikita rin natin sa pagkatunaw ng mga \"glaciers\" panunuyo ng lupa at paglalaganap ng tinatawag nating \"Climate Sensitive Diseases\" tulad ng Malaria.\r\n\r\nAng pangunahing sanhi ng climate change ay ang paglalaganap ng tinatawag na \"Greenhouse Gases\" sa kalawakan na kinabibilangan ng carbon dioxide, methane, at ozone. Ang mga gas na ito ay nagmumula sa paggamit natin ng maruruming uri ng enerhiya at gasolina at sa uri ng pamumuhay natin na hindi nakakatulong sa pag-ibsan ng paglalaganap ng tinatawag na green house gas.', 'Para sa Bilang 1-3.'),
(2, 'Ano ang dahilan ng pagkakaroon ng climate change?', 'Filipino', 'Ayon sa mga batikang siyentipiko, ang climate change ay malawakang pagbabago ng panahon o klima sa ibat-ibang parte ng daigdig. Ang epekto nito ay nadarama natin sa unti-unting apg init ng mundo na kadalasan ay tinatawaag nating global warming. Ito ay makikita rin natin sa pagkatunaw ng mga \"glaciers\" panunuyo ng lupa at paglalaganap ng tinatawag nating \"Climate Sensitive Diseases\" tulad ng Malaria.\r\n\r\nAng pangunahing sanhi ng climate change ay ang paglalaganap ng tinatawag na \"Greenhouse Gases\" sa kalawakan na kinabibilangan ng carbon dioxide, methane, at ozone. Ang mga gas na ito ay nagmumula sa paggamit natin ng maruruming uri ng enerhiya at gasolina at sa uri ng pamumuhay natin na hindi nakakatulong sa pag-ibsan ng paglalaganap ng tinatawag na green house gas.', 'Para sa Bilang 1-3.'),
(3, 'Ano ang maaring mangyari kung magtuloy-tuloy ang global warming?', 'Filipino', 'Ayon sa mga batikang siyentipiko, ang climate change ay malawakang pagbabago ng panahon o klima sa ibat-ibang parte ng daigdig. Ang epekto nito ay nadarama natin sa unti-unting apg init ng mundo na kadalasan ay tinatawaag nating global warming. Ito ay makikita rin natin sa pagkatunaw ng mga \"glaciers\" panunuyo ng lupa at paglalaganap ng tinatawag nating \"Climate Sensitive Diseases\" tulad ng Malaria.\r\n\r\nAng pangunahing sanhi ng climate change ay ang paglalaganap ng tinatawag na \"Greenhouse Gases\" sa kalawakan na kinabibilangan ng carbon dioxide, methane, at ozone. Ang mga gas na ito ay nagmumula sa paggamit natin ng maruruming uri ng enerhiya at gasolina at sa uri ng pamumuhay natin na hindi nakakatulong sa pag-ibsan ng paglalaganap ng tinatawag na green house gas.', 'Para sa Bilang 1-3.'),
(4, 'Anong paraan ang ginawa ni Tata Selo upang ito ay maipaalam sa kabesa?', 'Filipino', '\r\n\"Nasa may sangka po ako nang dumating ang kabesa. Nagtatapal po ako ng pitas na pilapil. Alam ko pong pinapanood ako ng kabesa, kung kaya po naman pinagbuti ko po ang paggawa, para malaman niyang ako po ay talagang malakas pa, na kaya ko pa pong magsaka. Wala ano-ano po, tinawag niya ako at nang ako po ay lumapit, sinabi niyang makakaalis na ako sa aking saka sapagkat iba na ang magsasaka.\"', 'Para sa Bilang 4-6.'),
(5, 'Isang problema ng mga magsasaka ay kawalan ng sariling lupang sinasaka. Karamihan dito ay pagmamay-ari ng mayayamang haciendero. Ano ang tiyak na solusyon para sa mga mahihirap nating nakikisaka sa lupa ng iba?', 'Filipino', '\r\n\"Nasa may sangka po ako nang dumating ang kabesa. Nagtatapal po ako ng pitas na pilapil. Alam ko pong pinapanood ako ng kabesa, kung kaya po naman pinagbuti ko po ang paggawa, para malaman niyang ako po ay talagang malakas pa, na kaya ko pa pong magsaka. Wala ano-ano po, tinawag niya ako at nang ako po ay lumapit, sinabi niyang makakaalis na ako sa aking saka sapagkat iba na ang magsasaka.\"', 'Para sa Bilang 4-6.'),
(6, 'Si Tata Selo ay larawan din ng mga manggagawang agarang tinatanggal sa trabaho kahit walang sapat na dahilan. Alin sa mga sumusunod ang maaaring nakatulong kay Tata Selo sa kanyang suliranin sa pagsasaka?', 'Filipino', '\r\n\"Nasa may sangka po ako nang dumating ang kabesa. Nagtatapal po ako ng pitas na pilapil. Alam ko pong pinapanood ako ng kabesa, kung kaya po naman pinagbuti ko po ang paggawa, para malaman niyang ako po ay talagang malakas pa, na kaya ko pa pong magsaka. Wala ano-ano po, tinawag niya ako at nang ako po ay lumapit, sinabi niyang makakaalis na ako sa aking saka sapagkat iba na ang magsasaka.\"', 'Para sa Bilang 4-6.'),
(7, 'Ano ang ginawa ng ama ni Psyche tungkol sa lalaking mapapangasawa ng anak?', 'Filipino', '\"Nabahala ang mga magulang ni Psyche. Naglakbay ang haring ama ni Psyche upang humingi ng tulong kay Apollo. Hiniling niyang payuhan siya ni Apollo kung papaano makakahanap ng mabuting lalaking iibig sa kanyang anak. Lingid sa kaalaman ng hari, naunang humingi ng tulong si Cupid kay Apollo. Sinabi niya ang kanyang sitwasyon at nagmakaawang tulungan siya. Kaya sinabi ni Apollo sa hari na makakapangasawa si Psyche ng isang nakakatakot na nilala.\"', 'para sa Bilang 7-9.'),
(8, 'Lingid sa kaalaman ng amang hari ni Psyche na nagkaroon na ng pag-uusap sina Cupid at Apollo. Ano ang maaring gawin ng ama ni Psyche upang masunod pa rin ang kagustuhan nito para sa anak na si Psyche?', 'Filipino', '\"Nabahala ang mga magulang ni Psyche. Naglakbay ang haring ama ni Psyche upang humingi ng tulong kay Apollo. Hiniling niyang payuhan siya ni Apollo kung papaano makakahanap ng mabuting lalaking iibig sa kanyang anak. Lingid sa kaalaman ng hari, naunang humingi ng tulong si Cupid kay Apollo. Sinabi niya ang kanyang sitwasyon at nagmakaawang tulungan siya. Kaya sinabi ni Apollo sa hari na makakapangasawa si Psyche ng isang nakakatakot na nilala.\"', 'para sa Bilang 7-9.'),
(9, 'Hangad ng magulang ang kabutihan ng anak. Ano ang iba pang maaring gawin ng amang hari para sa anak na si Psyche tungkol sa lalaking iibig sa kanyang anak?', 'Filipino', '\"Nabahala ang mga magulang ni Psyche. Naglakbay ang haring ama ni Psyche upang humingi ng tulong kay Apollo. Hiniling niyang payuhan siya ni Apollo kung papaano makakahanap ng mabuting lalaking iibig sa kanyang anak. Lingid sa kaalaman ng hari, naunang humingi ng tulong si Cupid kay Apollo. Sinabi niya ang kanyang sitwasyon at nagmakaawang tulungan siya. Kaya sinabi ni Apollo sa hari na makakapangasawa si Psyche ng isang nakakatakot na nilala.\"', 'para sa Bilang 7-9.'),
(10, 'Bakit kaya ikinasakit ng loob ni Cheng ginawa ng ama?', 'Filipino', 'Nakaranas ng kalituhanang murang isip ni Cheng. Bakit maraming pulis ang nakapagilid sa kanilang tahanan. Hindi minsan ngunit napapadalas na ang pagmamasid ng mga ito. \r\n\r\nAng alam niya, masaya ang pamilyang kanyang kinabibilangan. Areglado ang lahat ng kanilang pangangailangan. Hindi niya malilimutan ang madalas na nakangiting pagtawag ng kanyang ama. Ang pagyakap ng kanilang magulang. Kapwa pa naglalaan ng oras ang mga ito na maturuan sila kapag mahirap ang leksyon. Naitatak sa kanilang isip na mapalad dahil maganda ang takbo ng kanilang buhay.\r\n\r\nBinigo ito ng luhang pumatak sa kanang pisngi nang malaman ang katotohanang ikinasakit ng loob at ikinaguho ng kanyang paniniwala. Tinakpan ang mga mata ng kanyang dalawang palad hanggang sa mawalan ng malay.', 'Para sa Bilang 10-12'),
(11, 'Sa kabila ng matinding pangyayaring naganap sa pamilya ni Cheng, ano ang posibleng magiging desisyon niya sa buhay?', 'Filipino', 'Nakaranas ng kalituhanang murang isip ni Cheng. Bakit maraming pulis ang nakapagilid sa kanilang tahanan. Hindi minsan ngunit napapadalas na ang pagmamasid ng mga ito. \r\n\r\nAng alam niya, masaya ang pamilyang kanyang kinabibilangan. Areglado ang lahat ng kanilang pangangailangan. Hindi niya malilimutan ang madalas na nakangiting pagtawag ng kanyang ama. Ang pagyakap ng kanilang magulang. Kapwa pa naglalaan ng oras ang mga ito na maturuan sila kapag mahirap ang leksyon. Naitatak sa kanilang isip na mapalad dahil maganda ang takbo ng kanilang buhay.\r\n\r\nBinigo ito ng luhang pumatak sa kanang pisngi nang malaman ang katotohanang ikinasakit ng loob at ikinaguho ng kanyang paniniwala. Tinakpan ang mga mata ng kanyang dalawang palad hanggang sa mawalan ng malay.', 'Para sa Bilang 10-12'),
(12, 'Maraming pamilya sa Asya ang nakakaranas ng suliranin tulad kay Cheng. Sa pangkalahatang isyung panlipunan kaugnay sa kahirapan at paghahanapbuhay, anong makatotohanang implikasyon ang hatid nito sa mga kabataan?', 'Filipino', 'Nakaranas ng kalituhanang murang isip ni Cheng. Bakit maraming pulis ang nakapagilid sa kanilang tahanan. Hindi minsan ngunit napapadalas na ang pagmamasid ng mga ito. \r\n\r\nAng alam niya, masaya ang pamilyang kanyang kinabibilangan. Areglado ang lahat ng kanilang pangangailangan. Hindi niya malilimutan ang madalas na nakangiting pagtawag ng kanyang ama. Ang pagyakap ng kanilang magulang. Kapwa pa naglalaan ng oras ang mga ito na maturuan sila kapag mahirap ang leksyon. Naitatak sa kanilang isip na mapalad dahil maganda ang takbo ng kanilang buhay.\r\n\r\nBinigo ito ng luhang pumatak sa kanang pisngi nang malaman ang katotohanang ikinasakit ng loob at ikinaguho ng kanyang paniniwala. Tinakpan ang mga mata ng kanyang dalawang palad hanggang sa mawalan ng malay.', 'Para sa Bilang 10-12'),
(13, 'Anong impormasyon ang hatid ng mga pahayag sa itaas?', 'Filipino', 'Likas sa mga kabataan ang paghaharutan habang nagsasalita na may laman ang bibig. Sa ganitong mga pangyayari hindi maiiwasang maganap ang suliraning mabukunan o mabilaukan. Mahalagang batid ang prosesong isasagawa upang matulungan ang kaklaseng nabiktima nito. Kung matiyak ang kalagayang di nakapagsalita ang nabulunan, iwasang hampasin ito sa likod. Yakapin agad ito sa likuran at ipwesto ang nakasarang kamay sa dakong puson niyo. Diinan ang tiyan at mabilis na itulak paitaas. Ulitin hanggang maalis ang nakabarang bagay. Sa pagsasagawa nito, makakatiyak na ligtas ang kaklase lalo na kung wala pa ang manggagamot.', 'Para sa Bilang 13-15'),
(14, 'Paano isinaayos ang mga pahayag upang makabuo ng isang makabuluhang seleksyon?', 'Filipino', 'Likas sa mga kabataan ang paghaharutan habang nagsasalita na may laman ang bibig. Sa ganitong mga pangyayari hindi maiiwasang maganap ang suliraning mabukunan o mabilaukan. Mahalagang batid ang prosesong isasagawa upang matulungan ang kaklaseng nabiktima nito. Kung matiyak ang kalagayang di nakapagsalita ang nabulunan, iwasang hampasin ito sa likod. Yakapin agad ito sa likuran at ipwesto ang nakasarang kamay sa dakong puson niyo. Diinan ang tiyan at mabilis na itulak paitaas. Ulitin hanggang maalis ang nakabarang bagay. Sa pagsasagawa nito, makakatiyak na ligtas ang kaklase lalo na kung wala pa ang manggagamot.', 'Para sa Bilang 13-15'),
(15, 'Isaayos ang mga impormasyong batay sa pagkakalahad ng mga pahayag sa binasang teksto. 1. Ulitin hanggang maalis ang nakabarang bagay. 2. Yakapin mula likuran at ipwesto ang nakasarang kamay sa may puson nito. 3. Diinan ang tiyan at mabilis na itulak paitaas. 4. Kung nakatiyak sa kalagayang di makapagsalita ang nabulunang kaklase, huwag hampasin ito sa kanyang likod.  Ano ang tamang ayos ng mga imporamsyong hinggil sa solusyon sa nabilaukan?', 'Filipino', 'Likas sa mga kabataan ang paghaharutan habang nagsasalita na may laman ang bibig. Sa ganitong mga pangyayari hindi maiiwasang maganap ang suliraning mabukunan o mabilaukan. Mahalagang batid ang prosesong isasagawa upang matulungan ang kaklaseng nabiktima nito. Kung matiyak ang kalagayang di nakapagsalita ang nabulunan, iwasang hampasin ito sa likod. Yakapin agad ito sa likuran at ipwesto ang nakasarang kamay sa dakong puson niyo. Diinan ang tiyan at mabilis na itulak paitaas. Ulitin hanggang maalis ang nakabarang bagay. Sa pagsasagawa nito, makakatiyak na ligtas ang kaklase lalo na kung wala pa ang manggagamot.', 'Para sa Bilang 13-15'),
(16, 'Batay sa binasang teksto, ano ang ipinahiwatig na sagisag ng buhok ni Samson?', 'Filipino', 'Matapat na inibig ni Samson si Delilah na taga Sorek na di batid na binayaran ng mga kaaway matuklasan lamang ang pinanggalingan ng kanyang pambihirang lakas. Ipinagkatiwala niya ang sikreto sa nililiyag na mabilis namang nakipag-ugnayan sa mga Pilisteo. Habang mahimbing sa natutulog sa kandungan ni Delilah ginupit nito ang buhok ni Samson. Hinuli siya ng mga kalaban at ikinulong. Pinahirapan si Samson na pati mga mata ay dinukot.\r\n\r\nSa loob ng piitan, humingi ng tawad sa Panginoon si Samson. Unti-unting humaba ang kanyang buhok na nagpanumbalik sa kanyang lakas na ipinanghawak sa haligi ng templong ikinabagsak nito na kumitil sa buhay ng maraming Pilisteo.', 'Para sa Bilang 16-18'),
(17, 'Alin sa mga sumusunod ang nangangahulugan na dininig ng Panginoon ang kahilingan ni Samson?', 'Filipino', 'Matapat na inibig ni Samson si Delilah na taga Sorek na di batid na binayaran ng mga kaaway matuklasan lamang ang pinanggalingan ng kanyang pambihirang lakas. Ipinagkatiwala niya ang sikreto sa nililiyag na mabilis namang nakipag-ugnayan sa mga Pilisteo. Habang mahimbing sa natutulog sa kandungan ni Delilah ginupit nito ang buhok ni Samson. Hinuli siya ng mga kalaban at ikinulong. Pinahirapan si Samson na pati mga mata ay dinukot.\r\n\r\nSa loob ng piitan, humingi ng tawad sa Panginoon si Samson. Unti-unting humaba ang kanyang buhok na nagpanumbalik sa kanyang lakas na ipinanghawak sa haligi ng templong ikinabagsak nito na kumitil sa buhay ng maraming Pilisteo.', 'Para sa Bilang 16-18'),
(18, 'Anong kongklusyon ang mabubuo sa binasang teksto?', 'Filipino', 'Matapat na inibig ni Samson si Delilah na taga Sorek na di batid na binayaran ng mga kaaway matuklasan lamang ang pinanggalingan ng kanyang pambihirang lakas. Ipinagkatiwala niya ang sikreto sa nililiyag na mabilis namang nakipag-ugnayan sa mga Pilisteo. Habang mahimbing sa natutulog sa kandungan ni Delilah ginupit nito ang buhok ni Samson. Hinuli siya ng mga kalaban at ikinulong. Pinahirapan si Samson na pati mga mata ay dinukot.\r\n\r\nSa loob ng piitan, humingi ng tawad sa Panginoon si Samson. Unti-unting humaba ang kanyang buhok na nagpanumbalik sa kanyang lakas na ipinanghawak sa haligi ng templong ikinabagsak nito na kumitil sa buhay ng maraming Pilisteo.', 'Para sa Bilang 16-18'),
(19, 'Ang binasang lathalain au mula sa _______', 'Filipino', 'Sa pagkakadakip ba kay Sen. Leila De Lima noong nagdaang biyernes magtatapos ang \"word war\" nila ni Pangulong Duterte? Mukhang malayo pa ang mararating ng kanilang sabong sa isat-isa. At katulad ng isang panabong na manok, kahit duguan na mula sa mga tama ng tari ng kalabang manok, hindi ito kakakitaan ng pagsuko pag nagkataon.\r\n\r\nSa huli, nangingibabaw ang kapangyarihan ng Office of the President para tuluyang gipitin si De Lima. Mula sa pagkakahubad ng chairmanship ng Senate Comittee on Justice hanggang sa tuluyang masampahan ng kaso at maipakulong. Nasaan ngayon ang publiko - na naiipit sa pamamagitan ng isang umanoy \"mamamatay-tao\" o sa isang protektor ng drug lord? Saan man matapos ang away na ito, magwawagi ang sinumang makakuha ng simpatya. Pero sa huli, talo tayo pare-pareho. Lord, kayo na po bahala.', 'Para sa Bilang 19-20');

-- --------------------------------------------------------

--
-- Table structure for table `seniorhigh`
--

CREATE TABLE `seniorhigh` (
  `lastname` varchar(50) NOT NULL,
  `givenname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `zipcode` int(50) NOT NULL,
  `telno` int(20) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `mothersname` varchar(50) NOT NULL,
  `guardiansname` varchar(50) NOT NULL,
  `currentschool` varchar(50) NOT NULL,
  `fatelno` int(50) NOT NULL,
  `motelno` int(50) NOT NULL,
  `guatelno` int(50) NOT NULL,
  `academicyear` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `streetno` varchar(50) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seniorhigh`
--

INSERT INTO `seniorhigh` (`lastname`, `givenname`, `middlename`, `gender`, `citizenship`, `dateofbirth`, `zipcode`, `telno`, `fathersname`, `mothersname`, `guardiansname`, `currentschool`, `fatelno`, `motelno`, `guatelno`, `academicyear`, `payment`, `trn_date`, `email`, `facebook`, `streetno`, `brgy`, `program`) VALUES
('Solares', 'Steven Joe', 'Mangubat', 'male', 'filipino', '1998-02-03', 1941, 2147483647, 'Mik', 'Mak', 'Mok', 'STI Valleygolf', 2147483647, 2147483647, 2147483647, '2018-2019', 'Cash', '2018-03-14 05:03:32', 'sterben@gmail.com', 'Sterben Dio', 'Phase 3', 'Valleygolf', 'program');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `subofans` varchar(50) NOT NULL,
  `timer` varchar(50) NOT NULL,
  `typeofexam` varchar(50) NOT NULL,
  `examperiod` varchar(50) NOT NULL,
  `schoolyear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`subofans`, `timer`, `typeofexam`, `examperiod`, `schoolyear`) VALUES
('Single', '1 hour', 'multiple choice', '1 hour', '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `prevschool` varchar(50) NOT NULL,
  `gradelevel` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` int(12) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `prevschool`, `gradelevel`, `Address`, `Contact`, `uid`, `trn_date`) VALUES
(45, 'Tolentino', 'Mark', 'STI', 'Grade 7', '1123 Kamote St', 921312312, '61622', '2018-08-07 09:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userlevel` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `username`, `password`, `userlevel`, `lastname`, `firstname`) VALUES
(19, 'Sterb', 'sterb', 'Admin', '', ''),
(18, 'Dio', 'dio', '1', '', ''),
(26, 'jay', 'jay', 'Registrar', '', ''),
(29, 'Jay', 'jay', 'Registrar', '', ''),
(30, 'Jack Cole', 'jack', 'Admin', '', ''),
(31, 'kevin', 'kevin', 'Teacher', '', ''),
(32, 'Jacoby', 'jack', 'Admin', '', ''),
(33, 'darv', 'darv', 'Teacher', '', ''),
(34, 'mike', 'mike', 'Admin', '', ''),
(35, 'mikemariano', 'mike', 'Admin', 'Mike', 'Mariano'),
(37, 'steven', 'joe', 'Registrar', 'Dio', 'Sterben'),
(38, 'jacobsantos', 'jacob', 'Teacher', 'Santos', 'Jacob'),
(40, 'batekid', 'bate', 'Admin', 'Bate', 'kid'),
(41, 'Colja', 'colja', 'Registrar', 'Colja', 'jack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examresults`
--
ALTER TABLE `examresults`
  ADD PRIMARY KEY (`lastname`);

--
-- Indexes for table `juniorhigh`
--
ALTER TABLE `juniorhigh`
  ADD PRIMARY KEY (`lastname`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`),
  ADD UNIQUE KEY `question_number` (`question_number`);

--
-- Indexes for table `seniorhigh`
--
ALTER TABLE `seniorhigh`
  ADD PRIMARY KEY (`lastname`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`subofans`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
