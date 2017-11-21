-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogs` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`) VALUES
(18,	'У Ковелі відбулись змагання з пауерліфтингу',	'2017-11-13 23:37:44',	'У місті Ковелі цими вихідними відбувся відкритий Кубок області з пауерліфтингу с',	'У місті Ковелі цими вихідними відбувся відкритий Кубок області з пауерліфтингу серед спортсменів з порушеннями опорно-рухового апарату. &lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\n&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nУ змаганнях взяло участь більше 20 спортсменів з Камінь-Каширського, Ковельського, Луцького, Турійського районів, міст Ковеля та Луцька, що представляли обласну дитячо-спортивну школу інвалідів.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\n&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nПереможцями змагань стали:&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\n&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nТокар Ксенія - вагова категорія до 41 кг, результат 53 кг, Ковельський район, спортсменка є чемпіонкою України 2017 року у цій ваговій категорії, тренер-викладач В.П. Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nНовосад Аліна - вагова категорія до 45 кг, результат 30 кг, м. Ковель, тренер-викладач В.П.Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nСкулінець Ніна - вагова категорія до 50 кг, результат 45 кг, м. Луцьк, спортсменка неодноразово брала участь у чемпіонатах і Кубках України, тренер-викладач А.Л. Рожок;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nМельник Олеся - вагова категорія до 55 кг, результат 48 кг, м. Ковель, тренер-викладач В.П.Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nМуц Богдан - вагова категорія до 49 кг, результат 48 кг, Камінь-Каширський район, тренер-викладач В.П.Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nКулик Сергій - вагова категорія до 54 кг, результат 53 кг, Луцький район, тренер-викладач А.Л. Рожок;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nОстапук Денис - вагова категорія до 59 кг, результат 105 кг, м. Ковель, спортсмен є бронзовим призером чемпіонату України 2017 року, тренер-викладач В.П.Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nБондаренко Максим - вагова категорія до 65 кг, результат 123 кг, м. Ковель; спортсмен є майстром спорту України та бронзовим призером чемпіонату України 2017 року, тренер-викладач В.П.Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nКиричук Олександр - вагова категорія до 72 кг, результат 55 кг, м. Ковель, тренер-викладач В.П. Дружинович;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nСапронов Петро - вагова категорія до 80 кг, результат 75 кг, м. Луцьк, тренер-викладач В.В. Маженков;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;\r\nЮщук Михайло - вагова категорія до 107 кг, результат 106 кг, м. Ковель; спортсмен на змаганнях значно покращив свої результати та є неодноразовим учасником чемпіонатів і Кубків України, тренер-викладач В.П.Дружинович. ',	'admin',	'/template/images/blogimages/3297'),
(19,	'Громадську вбиральню в центрі Луцька віддали фірмі',	'2017-11-09 16:28:17',	'Громадську вбиральню в центрі Луцька неподалік драмтеатру віддали фірмі, близькі',	'Громадську вбиральню в центрі Луцька неподалік драмтеатру віддали фірмі, близькій до скандального депутата міськради Сергія Були.&lt;br /&gt;\r\n&lt;br /&gt;\r\nПро це йдеться в сюжеті телеканалу Сфера-ТВ.&lt;br /&gt;\r\n&lt;br /&gt;\r\nНагадаємо, 1 листопада стало відомо, що вбиральню передали в оренду фірмі &laquo;Луцьк Фуд Сервіс&raquo; на термін до 30 вересня 2020 року. Керівництво підприємства зобов\'язалося відновити роботу об\'єкта до 15 серпня 2018-го.&lt;br /&gt;\r\n&lt;br /&gt;\r\nУ відкритих реєстрах вказано, що фірма зареєстрована в червні 2017 року, тобто лише чотири місяці тому та за 5 місяців після того як розірвали угоду з попереднім орендарем.&lt;br /&gt;\r\n&lt;br /&gt;\r\nВиявилося, що фірма зареєстрована на Інну Анатоліївну Танзе - сестру Ірини Анатоліївни Стецюк, яка заміжня за депутатом Сергієм Булою.',	'admin',	''),
(20,	'Річка Турія через дощову погоду стала повноводною',	'2017-11-09 16:28:21',	'Дощова погода, яка останнім часом встановилася на Волині, позитивно вплинула на ',	'Дощова погода, яка останнім часом встановилася на Волині, позитивно вплинула на рівень води у місцевих водоймах. &lt;br /&gt;\r\n&lt;br /&gt;\r\nПоліпшився й гідрологічний стан річки Турія, - пише Район.Ковель.&lt;br /&gt;\r\n&lt;br /&gt;\r\nНачальник відділу з питань цивільного захисту та екологічної безпеки виконавчого комітету міської ради Юрій Дідковський каже, що рівень води у ковельському водосховищі піднявся до норми. &lt;br /&gt;\r\n&lt;br /&gt;\r\nЗросла і швидкість течії в руслі річки, що посприяло природному її очищенню. &laquo;Зелена ковдра&raquo;, яка довгий час вкривала поверхню водойми у стоячій воді, змита течією.&lt;br /&gt;\r\n&lt;br /&gt;\r\nЗа останні роки явища та процеси природного характеру призвели до погіршення гідрологічного стану не тільки головної водної артерії нашого міста, а й багатьох інших водойм на території країни. Їх зміління і причини цього явища, за обґрунтуваннями Гідрометцентру України, виникли через гідрологічну посуху. Дефіцит опадів визначив низьку водність практично на всіх річках України.&lt;br /&gt;\r\n&lt;br /&gt;\r\nУ багатьох водоймах, за даними Гідрометцентру, рівень води опустився до найнижчих відміток за період регулярних спостережень, критерії маловоддя практично були досягнуті або наближались до них. Через такі кліматичні причини на водних об&rsquo;єктах більшості території України відбулося значне заростання русел, пересихання малих річок і формування ділянок стоячої води.',	'admin',	''),
(21,	'У Ковелі в річку зливають каналізаційні відходи',	'2017-11-09 16:28:26',	'За даними місцевого відділу епідеміологічного нагляду Держпродспоживслужби Украї',	'За даними місцевого відділу епідеміологічного нагляду Держпродспоживслужби України, на сьогоднішній день рівень забруднення річки Турія є дуже високий: нормативи перевищено в 40 разів. У воді виявлена умовно-патогенна мікрофлора кішківника людини, що свідчить про фекальне забруднення.&lt;br /&gt;\r\n&lt;br /&gt;\r\nПро це повідомляє Kowel.com.ua.&lt;br /&gt;\r\n&lt;br /&gt;\r\nЯк стверджує начальник вищевказаного відділу Оксана Яцина, спеціалісти виявили місця, які забруднюють водну артерію. Відповідний акт передано до Ковельського міськвиконкому.&lt;br /&gt;\r\n&lt;br /&gt;\r\nІнспектор Державної екологічної інспекції у Волинській області Андрій Гаврилюк каже, що комісія брала заміри в річці від села Задиби Турійського району до приміського села Вербка Ковельського району.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&laquo;Вже біля Ковеля збільшується норма забруднення. Вода в Турії &ndash; &laquo;стояча&raquo;. Річку треба чистити, зробивши перед тим проект. На території міста біля парку імені Тараса Шевченка ми виявили так звану &laquo;ліньовку&raquo;, з якої течуть стічні води. Більш за все, хтось &laquo;врізався&raquo; з найближчого ресторану чи ще звідкись. Комунальники мають знати, хто це зробив. Ми передали матеріали щодо даного факту в поліцію та прокуратуру&raquo;, &ndash; говорить Андрій Гаврилюк.&lt;br /&gt;\r\n&lt;br /&gt;\r\nЗавідувач Ковельського міськрайонного відділу Волинського обласного лабораторного центру Міністерства охорони здоров&rsquo;я, який займається моніторингом безпеки життєдіяльності населення та навколишнього природнього середовища, Людмила Маляр підтверджує, що в районі парку Шевченка виявлено витік господарської фекальної каналізації з колектора в Турію.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&laquo;Зливову каналізацію в місті Ковелі обслуговує комунальне підприємство &laquo;Добробут&raquo;. Двічі на рік &ndash; весною і восени &ndash; вони повинні обстежувати кожен колодязь і всі мережі. Чи є якесь підключення? Система зливової каналізації йде в річку Турія без очищення, минаючи міські очисні споруди. Прикро! Я не буду називати від яких установ, ми так думаємо, є підключення, але ж, вибачте, підключати свій туалет і зливову каналізацію, яка витікає перед дитячим пляжем&hellip; Ну, то що з цими людьми вже можна зробити?!&raquo; &ndash; обурюється Людмила Маляр.&lt;br /&gt;\r\n&lt;br /&gt;\r\nЗа словами Людмили Сергіївни, це питання має розглядатися на комісії з надзвичайних ситуацій. Такі підключення є і в мікрорайоні &laquo;другого&raquo; Ковеля, і в селі Городилець Турійського району.&lt;br /&gt;\r\n',	'admin',	''),
(22,	'Власники нерухомого майна поповнили бюджети Волині ',	'2017-11-09 16:30:55',	'За підсумками дев’яти місяців 2016 року місцеві скарбниці Волині отримали більше',	'За підсумками дев&rsquo;яти місяців 2016 року місцеві скарбниці Волині отримали більше 18,5 мільйона гривень податку на нерухоме майно. Це в 2,5 рази більше проти аналогічного періоду минулого року. &lt;br /&gt;\r\n&lt;br /&gt;\r\nПро це повідомляє ГУ ДФС у Волинській області.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&laquo;Отож, місцеве самоврядування отримало досить вагомий фінансовий ресурс від оподаткування елітного майна. Власне це той ресурс, надходження якого будуть стабільними в майбутньому фінансовому році. Варто нагадати, що в європейських країнах саме оподаткування нерухомості &ndash; серед основних джерел наповнення місцевих бюджетів&raquo;, - зазначає перший заступник начальника ГУ ДФС у Волинській області Віталій Чуй.',	'admin',	''),
(23,	'Син волинського Героя мріє про фітнес-годинник',	'2017-11-09 16:28:31',	'На Волині триває реалізація проекту «Діти Небесного Легіону».\r\n\r\nОрганізатори по',	'На Волині триває реалізація проекту &laquo;Діти Небесного Легіону&raquo;.&lt;br /&gt;\r\n&lt;br /&gt;\r\nОрганізатори повідомили про ще одну дитину, якій охочі можуть допомогти.&lt;br /&gt;\r\n&lt;br /&gt;\r\nЧИТАТИ БІЛЬШЕ ПРО ДІТЕЙ НЕБЕСНОГО ЛЕГІОНУ&lt;br /&gt;\r\n&lt;br /&gt;\r\nЩоб допомогти, потрібно звертатися за цими контактами: (050) 973-44-84; (099) 750-85-38; (098) 948-14-50.&lt;br /&gt;\r\n&lt;br /&gt;\r\nДмитро Гулюк, котрий невдовзі відзначатиме 15 років, є сином Сергія Гулюка &ndash; молодшого сержанта Луцького прикордонного загону Державної прикордонної служби України, котрий героїчно загинув на Сході влітку 2014-го. Він загинув 31 липня 2014 в районі Василівки під час обстрілу прикордонників російськими окупантами з мінометів та гранатометів. У Гулюка сиротами лишилося троє дітей. За особисту мужність та героїзм, виявлені у захисті державного суверенітету та територіальної цілісності України, вірність військовій присязі під час російсько-української війни, нагороджений орденом &laquo;За мужність&raquo; III ступеня (посмертно).&lt;br /&gt;\r\n&lt;br /&gt;\r\nБезумовним авторитетом для Дмитра завжди був і буде його тато Сергій, саме його він ставить собі у приклад в усьому. Батько навчив хлопця хорошим та мудрим речам, усі його настанови син береже у своєму серці. &laquo;Ми з ним ходили на риболовлю, грали у футбол. Був зі мною на тренуваннях та допомагав. Я стараюсь так само проводити час з братом, сестричкою та з мамою&raquo; &ndash; з гордістю промовляє іменинник.&lt;br /&gt;\r\n&lt;br /&gt;\r\nДіма &ndash; добрий, відкритий, щирий хлопець, якому рано довелося подорослішати та взяти на себе обов&rsquo;язки глави сімейства. В нього, як і у кожної людини бувають певні труднощі в житті, але у важких ситуаціях юнак не впадає у відчай, а намагається їх долати. У Дмитра є ще молодший брат Максим, який дуже любить у всьому бути першим і дуже розстроюється коли програє. А ще є найменша принцеса &ndash; семирічна сестричка Софійка, яка любить співати і танцювати, ходить на танці та фортепіано. Він їх дуже любить, а вони сприймають його як тата.&lt;br /&gt;\r\n',	'admin',	''),
(31,	'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',	'2017-11-09 16:24:50',	'Lorem ipsum dolor sit amet, consectetur adi',	'Lorem ipsum dolor sit amet, consectetur adi',	'admin',	'/template/images/blogimages/8778');

DROP TABLE IF EXISTS `blog_comments`;
CREATE TABLE `blog_comments` (
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blog_comments` (`blog_id`, `comment`, `username`, `created`) VALUES
(1,	'first blog comment',	'user',	'2017-10-24 22:17:28'),
(1,	'wertyuioiuytfdfuioiuytfdiiuhgfgijhjgcvfgkgkmmm,jg,jgjgjh,jj,,mvbmnvnv vb',	'admin',	'2017-10-24 22:18:53'),
(1,	'Ð¿Ð°Ñ€Ð°Ñ€Ð°Ñ€Ð¼\r\n',	'user',	'2017-10-24 23:02:30'),
(11,	'rererere\r\n',	'admin',	'2017-10-26 22:34:31'),
(11,	'gfgfffhhfhf',	'user',	'2017-10-26 22:39:44'),
(8,	'Ð½Ð¿Ð¾Ñ€Ð¿Ð¾Ñ€Ð¿Ð¾Ð¿Ñ€Ð¾Ð¿Ñ€Ð¿Ð¾Ñ€',	'user',	'2017-10-27 16:12:52'),
(14,	'tatement:',	'user',	'2017-10-31 00:00:51'),
(14,	'255Ð­Ñ‚Ð° Ð³Ñ€ÑƒÐ¿Ð¿Ð° Ð´Ð»Ñ Ñ€Ð°Ð·Ð¼ÐµÑ‰ÐµÐ½Ð¸Ñ Ð¾Ð±ÑŠÑÐ²Ð»ÐµÐ½Ð¸Ð¹ Ð¢ÐžÐ›Ð¬ÐšÐž Ð¾Ñ‚ Ñ€Ð°Ð±Ð¾Ñ‚Ð¾Ð´Ð°Ñ‚ÐµÐ»ÐµÐ¹ Ð¸ Ð¢ÐžÐ›Ð¬ÐšÐž ÑƒÐ´Ð°Ð»ÐµÐ½Ð½Ð¾Ð¹ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹\r\nÐžÐ±ÑŠÑÐ²Ð»ÐµÐ½Ð¸Ñ ÑÐ¾Ð¼Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ð³Ð¾ Ñ…Ð°Ñ€Ð°ÐºÑ‚ÐµÑ€Ð° (Ð²ÐºÐ»ÑŽÑ‡Ð°Ñ Ð¼Ð½Ð¾Ð³Ð¾ÑƒÑ€Ð¾Ð²Ð½ÐµÐ²Ñ‹Ðµ Ð¿Ñ€Ð¾Ð´Ð°Ð¶Ð¸) Ð±ÐµÐ· ÑƒÐºÐ°Ð·Ð°Ð½Ð¸Ð¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸, Ñ‚Ñ€ÐµÐ±Ð¾Ð²Ð°Ð½Ð¸Ð¹ Ð¸ ÑƒÑÐ»Ð¾Ð²Ð¸Ð¹ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ð²Ñ€Ð¾Ð´Ðµ \"Ð’ Ð½Ð¾Ð²Ñ‹Ð¹ Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¿Ñ€Ð¾ÐµÐºÑ‚ ÐºÑ€ÑƒÐ¿Ð½Ð¾Ð¹ Ð¼ÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ð¾Ð¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸\r\nÑ‚Ñ€ÐµÐ±ÑƒÑŽÑ‚ÑÑ Ð¾Ð½Ð»Ð°Ð¹Ð½-Ð¼ÐµÐ½ÐµÐ´Ð¶ÐµÑ€Ñ‹, ÑƒÐ¿Ñ€Ð°Ð²Ð»ÑÑŽÑ‰Ð¸Ðµ Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ð¾Ð¼ Ð¸ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð°.\" Ð½Ðµ Ñ€Ð°Ð·Ð¼ÐµÑ‰Ð°ÑŽÑ‚ÑÑ',	'user',	'2017-10-31 00:02:36'),
(18,	'Мій коментар ;)',	'user',	'2017-11-03 09:17:00');

DROP TABLE IF EXISTS `priv`;
CREATE TABLE `priv` (
  `id` int(4) NOT NULL,
  `rule` varchar(255) NOT NULL,
  `val` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `priv` (`id`, `rule`, `val`) VALUES
(1,	'view_comments',	1),
(2,	'view_comments',	1),
(15,	'view_comments',	1);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `roles` (`id`, `role`) VALUES
(1,	'Administrator'),
(2,	'User'),
(15,	'adddmm');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` varchar(255) NOT NULL,
  `created` timestamp(6) NULL DEFAULT NULL,
  `changed` timestamp(6) NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `banned` int(11) NOT NULL,
  `online` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `login`, `email`, `password`, `permissions`, `created`, `changed`, `username`, `banned`, `online`) VALUES
(1,	'admin',	'admin@root.net',	'63a9f0ea7bb98050796b649e85481845',	'all',	'2017-10-03 21:18:05.000000',	'2017-10-03 21:20:28.000000',	'',	0,	1),
(2,	'user',	'user@email.com',	'81dc9bdb52d04dc20036dbd8313ed055',	'user permissions',	'2017-10-03 21:20:08.000000',	'2017-10-03 21:20:08.000000',	'',	0,	0),
(3,	'werty',	'aptekasbt@gmail.com',	'827ccb0eea8a706c4c34a16891f84e7b',	'user permissions',	'2017-11-08 21:38:21.000000',	'2017-11-08 21:38:21.000000',	'Тетяна Данелюк',	0,	0);

-- 2017-11-21 00:45:53
