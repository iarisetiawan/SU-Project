-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 06:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stepup`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `artikel` longtext NOT NULL,
  `timepost` datetime NOT NULL,
  `fotoartikel` varchar(100) NOT NULL,
  `readedby` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `id_creator`, `judul_artikel`, `artikel`, `timepost`, `fotoartikel`, `readedby`) VALUES
(1, 5, 'Indonesia Tanah Airku', '<p>Sangatlah bahagia Indonesia mempunya masyarakat yang dikenal sangat ramah dan sangat baik oleh para tetangga</p>', '2018-09-25 20:57:34', 'assets/img/informasi/fotoArtikel_1.jpg', 4),
(6, 8, 'Ospek', '<p>Saat ini sedang masa masa nya mahasiswa baru di tanah air mengenal lebih lanjut tentang universitas dan fakultas nya, tapi masih saja ada beberapa teman kita yang masih menerima perlakuan yang sangat lucu, Bayangkan saja dimana mahasiswa baru yang masih masa peralihan dari SMA mendapatkan perlakuan yang tidak semestinya. sebenernya yang salah yaitu sistemnya.</p>', '2018-09-25 22:55:42', 'assets/img/informasi/fotoArtikel_6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_berbagi`
--

CREATE TABLE `t_berbagi` (
  `id_berbagi` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `timepost` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_berbagi`
--

INSERT INTO `t_berbagi` (`id_berbagi`, `id_creator`, `content`, `timepost`) VALUES
(261, 2, 'Capek ospek dimarahin, malah kenal kampus kasar bukan malah seneng sama kampus. Emangnya harus dimaharin ya biar jadi mahasiswa yang bener?', '2018-09-25 22:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `t_chat`
--

CREATE TABLE `t_chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_date_time` text NOT NULL,
  `ip_address` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_chat`
--

INSERT INTO `t_chat` (`id`, `sender_id`, `receiver_id`, `message`, `message_date_time`, `ip_address`, `status`) VALUES
(70, 8, 1, 'halo', '2018-09-25 23:04:45', '192.168.43.184', 1),
(71, 1, 8, 'Halo Fadly salam kenal', '2018-09-25 23:04:54', '192.168.43.132', 1),
(72, 8, 1, 'salam kenal juga', '2018-09-25 23:05:02', '192.168.43.184', 1),
(73, 8, 1, 'kamu dari mana?', '2018-09-25 23:05:05', '192.168.43.184', 1),
(74, 1, 8, 'Aku dari cirebon kulihah di malang nih hahaha', '2018-09-25 23:05:25', '192.168.43.132', 1),
(75, 1, 8, 'Kamu dari mana?', '2018-09-25 23:05:34', '192.168.43.132', 1),
(76, 1, 8, 'Aku mau curhat nih masalah di kampus boleh gak?', '2018-09-25 23:05:44', '192.168.43.132', 1),
(77, 8, 1, 'aku dari bekasi ini', '2018-09-25 23:05:53', '192.168.43.184', 1),
(78, 8, 1, 'kenapa emangnya?', '2018-09-25 23:06:00', '192.168.43.184', 1),
(79, 1, 8, 'Wah jauh juga yaa hahaha', '2018-09-25 23:06:16', '192.168.43.132', 1),
(80, 1, 8, 'Jadi gini', '2018-09-25 23:06:21', '192.168.43.132', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_kata`
--

CREATE TABLE `t_kata` (
  `kata` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_kata`
--

INSERT INTO `t_kata` (`kata`) VALUES
('2 girls 1 cup'),
('2g1c'),
('4r5e'),
('5h1t'),
('5hit'),
('a$$'),
('a$$hole'),
('a_s_s'),
('a2m'),
('a54'),
('a55'),
('a55hole'),
('acrotomophilia'),
('aeolus'),
('ahole'),
('alabama hot pocket'),
('alaskan pipeline'),
('anal'),
('anal impaler'),
('anal leakage'),
('analprobe'),
('anilingus'),
('anus'),
('apeshit'),
('ar5e'),
('areola'),
('areole'),
('arian'),
('arrse'),
('arse'),
('arsehole'),
('aryan'),
('ass'),
('ass fuck'),
('ass fuck'),
('ass hole'),
('assbag'),
('assbandit'),
('assbang'),
('assbanged'),
('assbanger'),
('assbangs'),
('assbite'),
('assclown'),
('asscock'),
('asscracker'),
('asses'),
('assface'),
('assfaces'),
('assfuck'),
('assfucker'),
('ass-fucker'),
('assfukka'),
('assgoblin'),
('assh0le'),
('asshat'),
('ass-hat'),
('asshead'),
('assho1e'),
('asshole'),
('assholes'),
('asshopper'),
('ass-jabber'),
('assjacker'),
('asslick'),
('asslicker'),
('assmaster'),
('assmonkey'),
('assmucus'),
('assmucus'),
('assmunch'),
('assmuncher'),
('assnigger'),
('asspirate'),
('ass-pirate'),
('assshit'),
('assshole'),
('asssucker'),
('asswad'),
('asswhole'),
('asswipe'),
('asswipes'),
('auto erotic'),
('autoerotic'),
('axwound'),
('azazel'),
('azz'),
('b!tch'),
('b00bs'),
('b17ch'),
('b1tch'),
('babeland'),
('baby batter'),
('baby juice'),
('ball gag'),
('ball gravy'),
('ball kicking'),
('ball licking'),
('ball sack'),
('ball sucking'),
('ballbag'),
('balls'),
('ballsack'),
('bampot'),
('bang (one\'s) box'),
('bangbros'),
('bareback'),
('barely legal'),
('barenaked'),
('barf'),
('bastard'),
('bastardo'),
('bastards'),
('bastinado'),
('batty boy'),
('bawdy'),
('bbw'),
('bdsm'),
('beaner'),
('beaners'),
('beardedclam'),
('beastial'),
('beastiality'),
('beatch'),
('beaver'),
('beaver cleaver'),
('beaver lips'),
('beef curtain'),
('beef curtain'),
('beef curtains'),
('beeyotch'),
('bellend'),
('bender'),
('beotch'),
('bescumber'),
('bestial'),
('bestiality'),
('bi+ch'),
('biatch'),
('big black'),
('big breasts'),
('big knockers'),
('big tits'),
('bigtits'),
('bimbo'),
('bimbos'),
('bint'),
('birdlock'),
('bitch'),
('bitch tit'),
('bitch tit'),
('bitchass'),
('bitched'),
('bitcher'),
('bitchers'),
('bitches'),
('bitchin'),
('bitching'),
('bitchtits'),
('bitchy'),
('black cock'),
('blonde action'),
('blonde on blonde action'),
('bloodclaat'),
('bloody'),
('bloody hell'),
('blow job'),
('blow me'),
('blow mud'),
('blow your load'),
('blowjob'),
('blowjobs'),
('blue waffle'),
('blue waffle'),
('blumpkin'),
('blumpkin'),
('bod'),
('bodily'),
('boink'),
('boiolas'),
('bollock'),
('bollocks'),
('bollok'),
('bollox'),
('bondage'),
('boned'),
('boner'),
('boners'),
('bong'),
('boob'),
('boobies'),
('boobs'),
('booby'),
('booger'),
('bookie'),
('boong'),
('booobs'),
('boooobs'),
('booooobs'),
('booooooobs'),
('bootee'),
('bootie'),
('booty'),
('booty call'),
('booze'),
('boozer'),
('boozy'),
('bosom'),
('bosomy'),
('breasts'),
('Breeder'),
('brotherfucker'),
('brown showers'),
('brunette action'),
('buceta'),
('bugger'),
('bukkake'),
('bull shit'),
('bulldyke'),
('bullet vibe'),
('bullshit'),
('bullshits'),
('bullshitted'),
('bullturds'),
('bum'),
('bum boy'),
('bumblefuck'),
('bumclat'),
('bummer'),
('buncombe'),
('bung'),
('bung hole'),
('bunghole'),
('bunny fucker'),
('bust a load'),
('bust a load'),
('busty'),
('butt'),
('butt fuck'),
('butt fuck'),
('butt plug'),
('buttcheeks'),
('buttfuck'),
('buttfucka'),
('buttfucker'),
('butthole'),
('buttmuch'),
('buttmunch'),
('butt-pirate'),
('buttplug'),
('c.0.c.k'),
('c.o.c.k.'),
('c.u.n.t'),
('c0ck'),
('c-0-c-k'),
('c0cksucker'),
('caca'),
('cacafuego'),
('cahone'),
('camel toe'),
('cameltoe'),
('camgirl'),
('camslut'),
('camwhore'),
('carpet muncher'),
('carpetmuncher'),
('cawk'),
('cervix'),
('chesticle'),
('chi-chi man'),
('chick with a dick'),
('child-fucker'),
('chinc'),
('chincs'),
('chink'),
('chinky'),
('choad'),
('choade'),
('choade'),
('choc ice'),
('chocolate rosebuds'),
('chode'),
('chodes'),
('chota bags'),
('chota bags'),
('cipa'),
('circlejerk'),
('cl1t'),
('cleveland steamer'),
('climax'),
('clit'),
('clit licker'),
('clit licker'),
('clitface'),
('clitfuck'),
('clitoris'),
('clitorus'),
('clits'),
('clitty'),
('clitty litter'),
('clitty litter'),
('clover clamps'),
('clunge'),
('clusterfuck'),
('cnut'),
('cocain'),
('cocaine'),
('coccydynia'),
('cock'),
('c-o-c-k'),
('cock pocket'),
('cock pocket'),
('cock snot'),
('cock snot'),
('cock sucker'),
('cockass'),
('cockbite'),
('cockblock'),
('cockburger'),
('cockeye'),
('cockface'),
('cockfucker'),
('cockhead'),
('cockholster'),
('cockjockey'),
('cockknocker'),
('cockknoker'),
('Cocklump'),
('cockmaster'),
('cockmongler'),
('cockmongruel'),
('cockmonkey'),
('cockmunch'),
('cockmuncher'),
('cocknose'),
('cocknugget'),
('cocks'),
('cockshit'),
('cocksmith'),
('cocksmoke'),
('cocksmoker'),
('cocksniffer'),
('cocksuck'),
('cocksuck'),
('cocksucked'),
('cocksucked'),
('cocksucker'),
('cock-sucker'),
('cocksuckers'),
('cocksucking'),
('cocksucks'),
('cocksucks'),
('cocksuka'),
('cocksukka'),
('cockwaffle'),
('coffin dodger'),
('coital'),
('cok'),
('cokmuncher'),
('coksucka'),
('commie'),
('condom'),
('coochie'),
('coochy'),
('coon'),
('coonnass'),
('coons'),
('cooter'),
('cop some wood'),
('cop some wood'),
('coprolagnia'),
('coprophilia'),
('corksucker'),
('cornhole'),
('cornhole'),
('corp whore'),
('corp whore'),
('corpulent'),
('cox'),
('crabs'),
('crack'),
('cracker'),
('crackwhore'),
('crap'),
('crappy'),
('creampie'),
('cretin'),
('crikey'),
('cripple'),
('crotte'),
('cum'),
('cum chugger'),
('cum chugger'),
('cum dumpster'),
('cum dumpster'),
('cum freak'),
('cum freak'),
('cum guzzler'),
('cum guzzler'),
('cumbubble'),
('cumdump'),
('cumdump'),
('cumdumpster'),
('cumguzzler'),
('cumjockey'),
('cummer'),
('cummin'),
('cumming'),
('cums'),
('cumshot'),
('cumshots'),
('cumslut'),
('cumstain'),
('cumtart'),
('cunilingus'),
('cunillingus'),
('cunnie'),
('cunnilingus'),
('cunny'),
('cunt'),
('c-u-n-t'),
('cunt hair'),
('cunt hair'),
('cuntass'),
('cuntbag'),
('cuntbag'),
('cuntface'),
('cunthole'),
('cunthunter'),
('cuntlick'),
('cuntlick'),
('cuntlicker'),
('cuntlicker'),
('cuntlicking'),
('cuntlicking'),
('cuntrag'),
('cunts'),
('cuntsicle'),
('cuntsicle'),
('cuntslut'),
('cunt-struck'),
('cunt-struck'),
('cus'),
('cut rope'),
('cut rope'),
('cyalis'),
('cyberfuc'),
('cyberfuck'),
('cyberfuck'),
('cyberfucked'),
('cyberfucked'),
('cyberfucker'),
('cyberfuckers'),
('cyberfucking'),
('cyberfucking'),
('d0ng'),
('d0uch3'),
('d0uche'),
('d1ck'),
('d1ld0'),
('d1ldo'),
('dago'),
('dagos'),
('dammit'),
('damn'),
('damned'),
('damnit'),
('darkie'),
('darn'),
('date rape'),
('daterape'),
('dawgie-style'),
('deep throat'),
('deepthroat'),
('deggo'),
('dendrophilia'),
('dick'),
('dick head'),
('dick hole'),
('dick hole'),
('dick shy'),
('dick shy'),
('dickbag'),
('dickbeaters'),
('dickdipper'),
('dickface'),
('dickflipper'),
('dickfuck'),
('dickfucker'),
('dickhead'),
('dickheads'),
('dickhole'),
('dickish'),
('dick-ish'),
('dickjuice'),
('dickmilk'),
('dickmonger'),
('dickripper'),
('dicks'),
('dicksipper'),
('dickslap'),
('dick-sneeze'),
('dicksucker'),
('dicksucking'),
('dicktickler'),
('dickwad'),
('dickweasel'),
('dickweed'),
('dickwhipper'),
('dickwod'),
('dickzipper'),
('diddle'),
('dike'),
('dildo'),
('dildos'),
('diligaf'),
('dillweed'),
('dimwit'),
('dingle'),
('dingleberries'),
('dingleberry'),
('dink'),
('dinks'),
('dipship'),
('dipshit'),
('dirsa'),
('dirty'),
('dirty pillows'),
('dirty sanchez'),
('dirty Sanchez'),
('div'),
('dlck'),
('dog style'),
('dog-fucker'),
('doggie style'),
('doggiestyle'),
('doggie-style'),
('doggin'),
('dogging'),
('doggy style'),
('doggystyle'),
('doggy-style'),
('dolcett'),
('domination'),
('dominatrix'),
('dommes'),
('dong'),
('donkey punch'),
('donkeypunch'),
('donkeyribber'),
('doochbag'),
('doofus'),
('dookie'),
('doosh'),
('dopey'),
('double dong'),
('double penetration'),
('Doublelift'),
('douch3'),
('douche'),
('douchebag'),
('douchebags'),
('douche-fag'),
('douchewaffle'),
('douchey'),
('dp action'),
('drunk'),
('dry hump'),
('duche'),
('dumass'),
('dumb ass'),
('dumbass'),
('dumbasses'),
('Dumbcunt'),
('dumbfuck'),
('dumbshit'),
('dummy'),
('dumshit'),
('dvda'),
('dyke'),
('dykes'),
('eat a dick'),
('eat a dick'),
('eat hair pie'),
('eat hair pie'),
('eat my ass'),
('ecchi'),
('ejaculate'),
('ejaculated'),
('ejaculates'),
('ejaculates'),
('ejaculating'),
('ejaculating'),
('ejaculatings'),
('ejaculation'),
('ejakulate'),
('erect'),
('erection'),
('erotic'),
('erotism'),
('escort'),
('essohbee'),
('eunuch'),
('extacy'),
('extasy'),
('f u c k'),
('f u c k e r'),
('f.u.c.k'),
('f_u_c_k'),
('f4nny'),
('facial'),
('fack'),
('fag'),
('fagbag'),
('fagfucker'),
('fagg'),
('fagged'),
('fagging'),
('faggit'),
('faggitt'),
('faggot'),
('faggotcock'),
('faggots'),
('faggs'),
('fagot'),
('fagots'),
('fags'),
('fagtard'),
('faig'),
('faigt'),
('fanny'),
('fannybandit'),
('fannyflaps'),
('fannyfucker'),
('fanyy'),
('fart'),
('fartknocker'),
('fatass'),
('fcuk'),
('fcuker'),
('fcuking'),
('fecal'),
('feck'),
('fecker'),
('feist'),
('felch'),
('felcher'),
('felching'),
('fellate'),
('fellatio'),
('feltch'),
('feltcher'),
('female squirting'),
('femdom'),
('fenian'),
('fice'),
('figging'),
('fingerbang'),
('fingerfuck'),
('fingerfuck'),
('fingerfucked'),
('fingerfucked'),
('fingerfucker'),
('fingerfucker'),
('fingerfuckers'),
('fingerfucking'),
('fingerfucking'),
('fingerfucks'),
('fingerfucks'),
('fingering'),
('fist fuck'),
('fist fuck'),
('fisted'),
('fistfuck'),
('fistfucked'),
('fistfucked'),
('fistfucker'),
('fistfucker'),
('fistfuckers'),
('fistfuckers'),
('fistfucking'),
('fistfucking'),
('fistfuckings'),
('fistfuckings'),
('fistfucks'),
('fistfucks'),
('fisting'),
('fisty'),
('flamer'),
('flange'),
('flaps'),
('fleshflute'),
('flog the log'),
('flog the log'),
('floozy'),
('foad'),
('foah'),
('fondle'),
('foobar'),
('fook'),
('fooker'),
('foot fetish'),
('footjob'),
('foreskin'),
('freex'),
('frenchify'),
('frigg'),
('frigga'),
('frotting'),
('fubar'),
('fuc'),
('fuck'),
('fuck'),
('f-u-c-k'),
('fuck buttons'),
('fuck hole'),
('fuck hole'),
('Fuck off'),
('fuck puppet'),
('fuck puppet'),
('fuck trophy'),
('fuck trophy'),
('fuck yo mama'),
('fuck yo mama'),
('fuck you'),
('fucka'),
('fuckass'),
('fuck-ass'),
('fuck-ass'),
('fuckbag'),
('fuck-bitch'),
('fuck-bitch'),
('fuckboy'),
('fuckbrain'),
('fuckbutt'),
('fuckbutter'),
('fucked'),
('fuckedup'),
('fucker'),
('fuckers'),
('fuckersucker'),
('fuckface'),
('fuckhead'),
('fuckheads'),
('fuckhole'),
('fuckin'),
('fucking'),
('fuckings'),
('fuckingshitmotherfucker'),
('fuckme'),
('fuckme'),
('fuckmeat'),
('fuckmeat'),
('fucknugget'),
('fucknut'),
('fucknutt'),
('fuckoff'),
('fucks'),
('fuckstick'),
('fucktard'),
('fuck-tard'),
('fucktards'),
('fucktart'),
('fucktoy'),
('fucktoy'),
('fucktwat'),
('fuckup'),
('fuckwad'),
('fuckwhit'),
('fuckwit'),
('fuckwitt'),
('fudge packer'),
('fudgepacker'),
('fudge-packer'),
('fuk'),
('fuker'),
('fukker'),
('fukkers'),
('fukkin'),
('fuks'),
('fukwhit'),
('fukwit'),
('fuq'),
('futanari'),
('fux'),
('fux0r'),
('fvck'),
('fxck'),
('gae'),
('gai'),
('gang bang'),
('gangbang'),
('gang-bang'),
('gang-bang'),
('gangbanged'),
('gangbangs'),
('ganja'),
('gash'),
('gassy ass'),
('gassy ass'),
('gay'),
('gay sex'),
('gayass'),
('gaybob'),
('gaydo'),
('gayfuck'),
('gayfuckist'),
('gaylord'),
('gays'),
('gaysex'),
('gaytard'),
('gaywad'),
('gender bender'),
('genitals'),
('gey'),
('gfy'),
('ghay'),
('ghey'),
('giant cock'),
('gigolo'),
('ginger'),
('gippo'),
('girl on'),
('girl on top'),
('girls gone wild'),
('git'),
('glans'),
('goatcx'),
('goatse'),
('god'),
('god damn'),
('godamn'),
('godamnit'),
('goddam'),
('god-dam'),
('goddammit'),
('goddamn'),
('goddamned'),
('god-damned'),
('goddamnit'),
('godsdamn'),
('gokkun'),
('golden shower'),
('goldenshower'),
('golliwog'),
('gonad'),
('gonads'),
('goo girl'),
('gooch'),
('goodpoop'),
('gook'),
('gooks'),
('goregasm'),
('gringo'),
('grope'),
('group sex'),
('gspot'),
('g-spot'),
('gtfo'),
('guido'),
('guro'),
('h0m0'),
('h0mo'),
('ham flap'),
('ham flap'),
('hand job'),
('handjob'),
('hard core'),
('hard on'),
('hardcore'),
('hardcoresex'),
('he11'),
('hebe'),
('heeb'),
('hell'),
('hemp'),
('hentai'),
('heroin'),
('herp'),
('herpes'),
('herpy'),
('heshe'),
('he-she'),
('hircismus'),
('hitler'),
('hiv'),
('ho'),
('hoar'),
('hoare'),
('hobag'),
('hoe'),
('hoer'),
('holy shit'),
('hom0'),
('homey'),
('homo'),
('homodumbshit'),
('homoerotic'),
('homoey'),
('honkey'),
('honky'),
('hooch'),
('hookah'),
('hooker'),
('hoor'),
('hootch'),
('hooter'),
('hooters'),
('hore'),
('horniest'),
('horny'),
('hot carl'),
('hot chick'),
('hotsex'),
('how to kill'),
('how to murdep'),
('how to murder'),
('huge fat'),
('hump'),
('humped'),
('humping'),
('hun'),
('hussy'),
('hymen'),
('iap'),
('iberian slap'),
('inbred'),
('incest'),
('injun'),
('intercourse'),
('jack off'),
('jackass'),
('jackasses'),
('jackhole'),
('jackoff'),
('jack-off'),
('jaggi'),
('jagoff'),
('jail bait'),
('jailbait'),
('jap'),
('japs'),
('jelly donut'),
('jerk'),
('jerk off'),
('jerk0ff'),
('jerkass'),
('jerked'),
('jerkoff'),
('jerk-off'),
('jigaboo'),
('jiggaboo'),
('jiggerboo'),
('jism'),
('jiz'),
('jiz'),
('jizm'),
('jizm'),
('jizz'),
('jizzed'),
('jock'),
('juggs'),
('jungle bunny'),
('junglebunny'),
('junkie'),
('junky'),
('kafir'),
('kawk'),
('kike'),
('kikes'),
('kill'),
('kinbaku'),
('kinkster'),
('kinky'),
('klan'),
('knob'),
('knob end'),
('knobbing'),
('knobead'),
('knobed'),
('knobend'),
('knobhead'),
('knobjocky'),
('knobjokey'),
('kock'),
('kondum'),
('kondums'),
('kooch'),
('kooches'),
('kootch'),
('kraut'),
('kum'),
('kummer'),
('kumming'),
('kums'),
('kunilingus'),
('kunja'),
('kunt'),
('kwif'),
('kwif'),
('kyke'),
('l3i+ch'),
('l3itch'),
('labia'),
('lameass'),
('lardass'),
('leather restraint'),
('leather straight jacket'),
('lech'),
('lemon party'),
('LEN'),
('leper'),
('lesbian'),
('lesbians'),
('lesbo'),
('lesbos'),
('lez'),
('lezza/lesbo'),
('lezzie'),
('lmao'),
('lmfao'),
('loin'),
('loins'),
('lolita'),
('looney'),
('lovemaking'),
('lube'),
('lust'),
('lusting'),
('lusty'),
('m0f0'),
('m0fo'),
('m45terbate'),
('ma5terb8'),
('ma5terbate'),
('mafugly'),
('mafugly'),
('make me come'),
('male squirting'),
('mams'),
('masochist'),
('massa'),
('masterb8'),
('masterbat*'),
('masterbat3'),
('masterbate'),
('master-bate'),
('master-bate'),
('masterbating'),
('masterbation'),
('masterbations'),
('masturbate'),
('masturbating'),
('masturbation'),
('maxi'),
('mcfagget'),
('menage a trois'),
('menses'),
('menstruate'),
('menstruation'),
('meth'),
('m-fucking'),
('mick'),
('microphallus'),
('middle finger'),
('midget'),
('milf'),
('minge'),
('minger'),
('missionary position'),
('mof0'),
('mofo'),
('mo-fo'),
('molest'),
('mong'),
('moo moo foo foo'),
('moolie'),
('moron'),
('mothafuck'),
('mothafucka'),
('mothafuckas'),
('mothafuckaz'),
('mothafucked'),
('mothafucked'),
('mothafucker'),
('mothafuckers'),
('mothafuckin'),
('mothafucking'),
('mothafucking'),
('mothafuckings'),
('mothafucks'),
('mother fucker'),
('mother fucker'),
('motherfuck'),
('motherfucka'),
('motherfucked'),
('motherfucker'),
('motherfuckers'),
('motherfuckin'),
('motherfucking'),
('motherfuckings'),
('motherfuckka'),
('motherfucks'),
('mound of venus'),
('mr hands'),
('muff'),
('muff diver'),
('muff puff'),
('muff puff'),
('muffdiver'),
('muffdiving'),
('munging'),
('munter'),
('murder'),
('mutha'),
('muthafecker'),
('muthafuckker'),
('muther'),
('mutherfucker'),
('n1gga'),
('n1gger'),
('naked'),
('nambla'),
('napalm'),
('nappy'),
('nawashi'),
('nazi'),
('nazism'),
('need the dick'),
('need the dick'),
('negro'),
('neonazi'),
('nig nog'),
('nigaboo'),
('nigg3r'),
('nigg4h'),
('nigga'),
('niggah'),
('niggas'),
('niggaz'),
('nigger'),
('niggers'),
('niggle'),
('niglet'),
('nig-nog'),
('nimphomania'),
('nimrod'),
('ninny'),
('ninnyhammer'),
('nipple'),
('nipples'),
('nob'),
('nob jokey'),
('nobhead'),
('nobjocky'),
('nobjokey'),
('nonce'),
('nsfw images'),
('nude'),
('nudity'),
('numbnuts'),
('nut butter'),
('nut butter'),
('nut sack'),
('nutsack'),
('nutter'),
('nympho'),
('nymphomania'),
('octopussy'),
('old bag'),
('omg'),
('omorashi'),
('one cup two girls'),
('one guy one jar'),
('opiate'),
('opium'),
('orally'),
('organ'),
('orgasim'),
('orgasims'),
('orgasm'),
('orgasmic'),
('orgasms'),
('orgies'),
('orgy'),
('ovary'),
('ovum'),
('ovums'),
('p.u.s.s.y.'),
('p0rn'),
('paedophile'),
('paki'),
('panooch'),
('pansy'),
('pantie'),
('panties'),
('panty'),
('pawn'),
('pcp'),
('pecker'),
('peckerhead'),
('pedo'),
('pedobear'),
('pedophile'),
('pedophilia'),
('pedophiliac'),
('pee'),
('peepee'),
('pegging'),
('penetrate'),
('penetration'),
('penial'),
('penile'),
('penis'),
('penisbanger'),
('penisfucker'),
('penispuffer'),
('perversion'),
('phallic'),
('phone sex'),
('phonesex'),
('phuck'),
('phuk'),
('phuked'),
('phuking'),
('phukked'),
('phukking'),
('phuks'),
('phuq'),
('piece of shit'),
('pigfucker'),
('pikey'),
('pillowbiter'),
('pimp'),
('pimpis'),
('pinko'),
('piss'),
('piss off'),
('piss pig'),
('pissed'),
('pissed off'),
('pisser'),
('pissers'),
('pisses'),
('pisses'),
('pissflaps'),
('pissin'),
('pissin'),
('pissing'),
('pissoff'),
('pissoff'),
('piss-off'),
('pisspig'),
('playboy'),
('pleasure chest'),
('pms'),
('polack'),
('pole smoker'),
('polesmoker'),
('pollock'),
('ponyplay'),
('poof'),
('poon'),
('poonani'),
('poonany'),
('poontang'),
('poop'),
('poop chute'),
('poopchute'),
('Poopuncher'),
('porch monkey'),
('porchmonkey'),
('porn'),
('porno'),
('pornography'),
('pornos'),
('pot'),
('potty'),
('prick'),
('pricks'),
('prickteaser'),
('prig'),
('prince albert piercing'),
('prod'),
('pron'),
('prostitute'),
('prude'),
('psycho'),
('pthc'),
('pube'),
('pubes'),
('pubic'),
('pubis'),
('punani'),
('punanny'),
('punany'),
('punkass'),
('punky'),
('punta'),
('puss'),
('pusse'),
('pussi'),
('pussies'),
('pussy'),
('pussy fart'),
('pussy fart'),
('pussy palace'),
('pussy palace'),
('pussylicking'),
('pussypounder'),
('pussys'),
('pust'),
('puto'),
('queaf'),
('queaf'),
('queef'),
('queer'),
('queerbait'),
('queerhole'),
('queero'),
('queers'),
('quicky'),
('quim'),
('racy'),
('raghead'),
('raging boner'),
('rape'),
('raped'),
('raper'),
('rapey'),
('raping'),
('rapist'),
('raunch'),
('rectal'),
('rectum'),
('rectus'),
('reefer'),
('reetard'),
('reich'),
('renob'),
('retard'),
('retarded'),
('reverse cowgirl'),
('revue'),
('rimjaw'),
('rimjob'),
('rimming'),
('ritard'),
('rosy palm'),
('rosy palm and her 5 sisters'),
('rtard'),
('r-tard'),
('rubbish'),
('rum'),
('rump'),
('rumprammer'),
('ruski'),
('rusty trombone'),
('s hit'),
('s&m'),
('s.h.i.t.'),
('s.o.b.'),
('s_h_i_t'),
('s0b'),
('sadism'),
('sadist'),
('sambo'),
('sand nigger'),
('sandbar'),
('sandbar'),
('Sandler'),
('sandnigger'),
('sanger'),
('santorum'),
('sausage queen'),
('sausage queen'),
('scag'),
('scantily'),
('scat'),
('schizo'),
('schlong'),
('scissoring'),
('screw'),
('screwed'),
('screwing'),
('scroat'),
('scrog'),
('scrot'),
('scrote'),
('scrotum'),
('scrud'),
('scum'),
('seaman'),
('seamen'),
('seduce'),
('seks'),
('semen'),
('sex'),
('sexo'),
('sexual'),
('sexy'),
('sh!+'),
('sh!t'),
('sh1t'),
('s-h-1-t'),
('shag'),
('shagger'),
('shaggin'),
('shagging'),
('shamedame'),
('shaved beaver'),
('shaved pussy'),
('shemale'),
('shi+'),
('shibari'),
('shirt lifter'),
('shit'),
('s-h-i-t'),
('shit ass'),
('shit fucker'),
('shit fucker'),
('shitass'),
('shitbag'),
('shitbagger'),
('shitblimp'),
('shitbrains'),
('shitbreath'),
('shitcanned'),
('shitcunt'),
('shitdick'),
('shite'),
('shiteater'),
('shited'),
('shitey'),
('shitface'),
('shitfaced'),
('shitfuck'),
('shitfull'),
('shithead'),
('shitheads'),
('shithole'),
('shithouse'),
('shiting'),
('shitings'),
('shits'),
('shitspitter'),
('shitstain'),
('shitt'),
('shitted'),
('shitter'),
('shitters'),
('shitters'),
('shittier'),
('shittiest'),
('shitting'),
('shittings'),
('shitty'),
('shiz'),
('shiznit'),
('shota'),
('shrimping'),
('sissy'),
('skag'),
('skank'),
('skeet'),
('skullfuck'),
('slag'),
('slanteye'),
('slave'),
('sleaze'),
('sleazy'),
('slope'),
('slope'),
('slut'),
('slut bucket'),
('slut bucket'),
('slutbag'),
('slutdumper'),
('slutkiss'),
('sluts'),
('smartass'),
('smartasses'),
('smeg'),
('smegma'),
('smut'),
('smutty'),
('snatch'),
('sniper'),
('snowballing'),
('snuff'),
('s-o-b'),
('sod off'),
('sodom'),
('sodomize'),
('sodomy'),
('son of a bitch'),
('son of a motherless goat'),
('son of a whore'),
('son-of-a-bitch'),
('souse'),
('soused'),
('spac'),
('spade'),
('sperm'),
('spic'),
('spick'),
('spik'),
('spiks'),
('splooge'),
('splooge moose'),
('spooge'),
('spook'),
('spread legs'),
('spunk'),
('stfu'),
('stiffy'),
('stoned'),
('strap on'),
('strapon'),
('strappado'),
('strip'),
('strip club'),
('stroke'),
('stupid'),
('style doggy'),
('suck'),
('suckass'),
('sucked'),
('sucking'),
('sucks'),
('suicide girls'),
('sultry women'),
('sumofabiatch'),
('swastika'),
('swinger'),
('t1t'),
('t1tt1e5'),
('t1tties'),
('taff'),
('taig'),
('tainted love'),
('taking the piss'),
('tampon'),
('tard'),
('tart'),
('taste my'),
('tawdry'),
('tea bagging'),
('teabagging'),
('teat'),
('teets'),
('teez'),
('teste'),
('testee'),
('testes'),
('testical'),
('testicle'),
('testis'),
('threesome'),
('throating'),
('thrust'),
('thug'),
('thundercunt'),
('tied up'),
('tight white'),
('tinkle'),
('tit'),
('tit wank'),
('tit wank'),
('titfuck'),
('titi'),
('tities'),
('tits'),
('titt'),
('tittie5'),
('tittiefucker'),
('titties'),
('titty'),
('tittyfuck'),
('tittyfucker'),
('tittywank'),
('titwank'),
('toke'),
('tongue in a'),
('toots'),
('topless'),
('tosser'),
('towelhead'),
('tramp'),
('tranny'),
('transsexual'),
('trashy'),
('tribadism'),
('trumped'),
('tub girl'),
('tubgirl'),
('turd'),
('tush'),
('tushy'),
('tw4t'),
('twat'),
('twathead'),
('twatlips'),
('twats'),
('twatty'),
('twatwaffle'),
('twink'),
('twinkie'),
('two fingers'),
('two fingers with tongue'),
('two girls one cup'),
('twunt'),
('twunter'),
('ugly'),
('unclefucker'),
('undies'),
('undressing'),
('unwed'),
('upskirt'),
('urethra play'),
('urinal'),
('urine'),
('urophilia'),
('uterus'),
('uzi'),
('v14gra'),
('v1gra'),
('vag'),
('vagina'),
('vajayjay'),
('va-j-j'),
('valium'),
('venus mound'),
('veqtable'),
('viagra'),
('vibrator'),
('violet wand'),
('virgin'),
('vixen'),
('vjayjay'),
('vodka'),
('vomit'),
('vorarephilia'),
('voyeur'),
('vulgar'),
('vulva'),
('w00se'),
('wad'),
('wang'),
('wank'),
('wanker'),
('wankjob'),
('wanky'),
('wazoo'),
('wedgie'),
('weed'),
('weenie'),
('weewee'),
('weiner'),
('weirdo'),
('wench'),
('wet dream'),
('wetback'),
('wh0re'),
('wh0reface'),
('white power'),
('whiz'),
('whoar'),
('whoralicious'),
('whore'),
('whorealicious'),
('whorebag'),
('whored'),
('whoreface'),
('whorehopper'),
('whorehouse'),
('whores'),
('whoring'),
('wigger'),
('willies'),
('willy'),
('window licker'),
('wiseass'),
('wiseasses'),
('wog'),
('womb'),
('wop'),
('wrapping men'),
('wrinkled starfish'),
('wtf'),
('xrated'),
('x-rated'),
('xx'),
('xxx'),
('yaoi'),
('yeasty'),
('yellow showers'),
('yid'),
('yiffy'),
('yobbo'),
('zibbi'),
('zoophilia'),
('zubb'),
('anjink'),
('anjing'),
('Babi'),
('orang gila'),
('Monyet'),
('gila'),
('Kunyuk'),
('sinting'),
('tolol'),
('sarap'),
('budek'),
('Bajingan'),
('Asu'),
('jelek'),
('Bangsat'),
('setan'),
('keparat'),
('Kampret'),
('ngehe'),
('bejad'),
('Kontol'),
('gembel'),
('Memek'),
('brengsek'),
('tai'),
('Ngentot'),
('anjrit'),
('pentil'),
(' bangsat'),
('Perek'),
('Pecun'),
('kontol'),
('mbembet'),
('itil'),
('Bencong'),
('klitoris'),
('banci'),
('kumontol'),
('jablay'),
('tempik'),
('ngaceng'),
('maho'),
('bego'),
('jembut'),
('kete'),
('goblok'),
('kimpet'),
('idiot'),
('kenthu'),
('peju'),
('telaso'),
('kehed'),
('temempik'),
('kepet'),
('pentil');

-- --------------------------------------------------------

--
-- Table structure for table `t_komentar_artikel`
--

CREATE TABLE `t_komentar_artikel` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `waktu_komentar` datetime NOT NULL,
  `id_komentator` int(11) NOT NULL,
  `komentar` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_komentar_artikel`
--

INSERT INTO `t_komentar_artikel` (`id_komentar`, `id_artikel`, `waktu_komentar`, `id_komentator`, `komentar`) VALUES
(10, 3, '2018-09-25 19:58:24', 2, 'kwkwkw'),
(11, 3, '2018-09-25 19:58:32', 2, 'akwkw'),
(12, 1, '2018-09-25 21:09:58', 8, 'aku sangat setuju'),
(13, 3, '2018-09-25 22:35:51', 1, 'okee');

-- --------------------------------------------------------

--
-- Table structure for table `t_komentar_berbagi`
--

CREATE TABLE `t_komentar_berbagi` (
  `id_komentar` int(11) NOT NULL,
  `id_berbagi` int(11) NOT NULL,
  `waktu_komentar` datetime NOT NULL,
  `id_komentator` int(11) NOT NULL,
  `komentar` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_komentar_berbagi`
--

INSERT INTO `t_komentar_berbagi` (`id_komentar`, `id_berbagi`, `waktu_komentar`, `id_komentator`, `komentar`) VALUES
(2, 250, '2018-09-20 02:09:20', 2, 'asdada'),
(3, 250, '2018-09-20 02:40:23', 2, 'iyaaa'),
(4, 250, '2018-09-20 02:40:55', 2, 'sumpah lu'),
(5, 250, '2018-09-20 02:45:48', 1, 'jangan bersedih kawan!'),
(6, 249, '2018-09-20 02:56:15', 1, 'iyaaa'),
(7, 249, '2018-09-20 02:56:35', 1, 'masaa?'),
(8, 250, '2018-09-20 02:59:03', 1, 'gausahh sedihh semangatt'),
(9, 250, '2018-09-20 03:04:52', 1, 'semangat cuyy'),
(10, 250, '2018-09-20 03:05:19', 1, 'mangatts'),
(11, 249, '2018-09-20 03:05:25', 1, 'mangatt'),
(12, 249, '2018-09-20 03:05:32', 1, 'komentar baru cuy hee'),
(13, 251, '2018-09-20 03:38:38', 1, 'masaa?aaa'),
(17, 250, '2018-09-21 01:48:50', 1, 'mangattt'),
(18, 256, '2018-09-23 20:20:45', 1, 'apaa sii kamu'),
(19, 256, '2018-09-25 18:03:38', 1, 'wahh'),
(21, 257, '2018-09-25 19:43:10', 2, 'Hai'),
(24, 260, '2018-09-25 21:36:50', 1, 'sayang'),
(25, 261, '2018-09-25 22:44:01', 1, 'sabar ya bro'),
(26, 261, '2018-09-25 23:00:32', 8, 'kok bisa ya'),
(27, 261, '2018-09-25 23:01:49', 2, 'Iyaa makasih Ari Fadly yaa');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipe_user` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fotoprofile` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_lengkap`, `tanggal_lahir`, `email`, `tipe_user`, `username`, `password`, `fotoprofile`, `jenis_kelamin`) VALUES
(1, 'Ari Setiawan', '1997-01-12', 'ariachanation@gmail.com', 0, 'arisetiawan', '$2y$10$vYIh98WWTYxgtKYZBEDvUukgau/d.YP8J.wJu9tXh1w6TWQ4ZiYMe', 'assets/img/fotoprofil/1.jpg', 'L'),
(2, 'Dio Ramadhan', '1997-01-19', 'diormdn@gmail.com', 0, 'diormdn', '$2y$10$7TnAlYmiIU63FE5uQoTCqef.AJ/Y/tGC0PeK1Ntk/r8oqxfI5xhE6', 'assets/img/fotoprofil/2.jpg', 'L'),
(3, 'Atharillah Alifka', '1997-08-12', 'alifka.atharillah@gmail.com', 1, 'atharillah', '$2y$10$Sy74e43/3Q2kJL9c8RZ0T.Ohl.H63rDIo4EUcthb1f09hzjqk09Ry', 'assets/img/fotoprofil/defaultprofile.jpg', 'L'),
(5, 'Muhammad Azim AP', '1997-05-02', 'azimAP@gmail.com', 1, 'azimAP', '$2y$10$8cM8XnfkVYD6l.8x7mwvveXG46a5Hm98xeaRYCxA7BWbB0uLxVtt6', 'assets/img/fotoprofil/5.jpg', 'L'),
(6, 'Irfan Harfiansyah', '1997-04-16', 'iharfi@gmail.com', 1, 'harfiansyah12', '$2y$10$8u7FNZM2trZEKYOApfe38ueClL3DQ4CbNWaniOc8/Zwf/SR1GNTw.', 'assets/img/fotoprofil/6.jpg', 'L'),
(7, 'Tommy Bagus Dharmawan', '1997-12-03', 'tomm@gmail.com', 1, 'tommbags', '$2y$10$p0AEZ5t5G9SC1vR2zuHNW.yPrDfnfsmk85GJ8j2Si/14JcTOjGCR6', 'assets/img/fotoprofil/7.jpg', 'L'),
(8, 'Mochamad Dwi Fadly', '1998-05-02', 'fadlydwi48@gmail.com', 0, 'dwifadly19', '$2y$10$LuQuOsQrQwSlqsDF8iLQ..u8dMNzvzddZg6lnFnCcJXGh5vg6LhSG', 'assets/img/fotoprofil/8.jpg', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `t_berbagi`
--
ALTER TABLE `t_berbagi`
  ADD PRIMARY KEY (`id_berbagi`);

--
-- Indexes for table `t_chat`
--
ALTER TABLE `t_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_komentar_artikel`
--
ALTER TABLE `t_komentar_artikel`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `t_komentar_berbagi`
--
ALTER TABLE `t_komentar_berbagi`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_berbagi`
--
ALTER TABLE `t_berbagi`
  MODIFY `id_berbagi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `t_chat`
--
ALTER TABLE `t_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `t_komentar_artikel`
--
ALTER TABLE `t_komentar_artikel`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_komentar_berbagi`
--
ALTER TABLE `t_komentar_berbagi`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;