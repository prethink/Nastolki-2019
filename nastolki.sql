/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50641
Source Host           : localhost:3306
Source Database       : nastolki

Target Server Type    : MYSQL
Target Server Version : 50641
File Encoding         : 65001

Date: 2019-06-19 13:39:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1111 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', 'Адыгейск');
INSERT INTO `city` VALUES ('2', 'Майкоп');
INSERT INTO `city` VALUES ('3', 'Горно-Алтайск');
INSERT INTO `city` VALUES ('4', 'Алейск');
INSERT INTO `city` VALUES ('5', 'Барнаул');
INSERT INTO `city` VALUES ('6', 'Белокуриха');
INSERT INTO `city` VALUES ('7', 'Бийск');
INSERT INTO `city` VALUES ('8', 'Горняк');
INSERT INTO `city` VALUES ('9', 'Заринск');
INSERT INTO `city` VALUES ('10', 'Змеиногорск');
INSERT INTO `city` VALUES ('11', 'Камень-на-Оби');
INSERT INTO `city` VALUES ('12', 'Новоалтайск');
INSERT INTO `city` VALUES ('13', 'Рубцовск');
INSERT INTO `city` VALUES ('14', 'Славгород');
INSERT INTO `city` VALUES ('15', 'Яровое');
INSERT INTO `city` VALUES ('16', 'Белогорск');
INSERT INTO `city` VALUES ('17', 'Благовещенск');
INSERT INTO `city` VALUES ('18', 'Завитинск');
INSERT INTO `city` VALUES ('19', 'Зея');
INSERT INTO `city` VALUES ('20', 'Райчихинск');
INSERT INTO `city` VALUES ('21', 'Свободный');
INSERT INTO `city` VALUES ('22', 'Сковородино');
INSERT INTO `city` VALUES ('23', 'Тында');
INSERT INTO `city` VALUES ('24', 'Шимановск');
INSERT INTO `city` VALUES ('25', 'Архангельск');
INSERT INTO `city` VALUES ('26', 'Вельск');
INSERT INTO `city` VALUES ('27', 'Каргополь');
INSERT INTO `city` VALUES ('28', 'Коряжма');
INSERT INTO `city` VALUES ('29', 'Котлас');
INSERT INTO `city` VALUES ('30', 'Мезень');
INSERT INTO `city` VALUES ('31', 'Мирный');
INSERT INTO `city` VALUES ('32', 'Новодвинск');
INSERT INTO `city` VALUES ('33', 'Няндома');
INSERT INTO `city` VALUES ('34', 'Онега');
INSERT INTO `city` VALUES ('35', 'Северодвинск');
INSERT INTO `city` VALUES ('36', 'Сольвычегодск');
INSERT INTO `city` VALUES ('37', 'Шенкурск');
INSERT INTO `city` VALUES ('38', 'Астрахань');
INSERT INTO `city` VALUES ('39', 'Ахтубинск');
INSERT INTO `city` VALUES ('40', 'Знаменск');
INSERT INTO `city` VALUES ('41', 'Камызяк');
INSERT INTO `city` VALUES ('42', 'Нариманов');
INSERT INTO `city` VALUES ('43', 'Харабали');
INSERT INTO `city` VALUES ('44', 'Агидель');
INSERT INTO `city` VALUES ('45', 'Баймак');
INSERT INTO `city` VALUES ('46', 'Белебей');
INSERT INTO `city` VALUES ('47', 'Белорецк');
INSERT INTO `city` VALUES ('48', 'Бирск');
INSERT INTO `city` VALUES ('49', 'Благовещенск');
INSERT INTO `city` VALUES ('50', 'Давлеканово');
INSERT INTO `city` VALUES ('51', 'Дюртюли');
INSERT INTO `city` VALUES ('52', 'Ишимбай');
INSERT INTO `city` VALUES ('53', 'Кумертау');
INSERT INTO `city` VALUES ('54', 'Межгорье');
INSERT INTO `city` VALUES ('55', 'Мелеуз');
INSERT INTO `city` VALUES ('56', 'Нефтекамск');
INSERT INTO `city` VALUES ('57', 'Октябрьский');
INSERT INTO `city` VALUES ('58', 'Салават');
INSERT INTO `city` VALUES ('59', 'Сибай');
INSERT INTO `city` VALUES ('60', 'Стерлитамак');
INSERT INTO `city` VALUES ('61', 'Туймазы');
INSERT INTO `city` VALUES ('62', 'Уфа');
INSERT INTO `city` VALUES ('63', 'Учалы');
INSERT INTO `city` VALUES ('64', 'Янаул');
INSERT INTO `city` VALUES ('65', 'Алексеевка');
INSERT INTO `city` VALUES ('66', 'Белгород');
INSERT INTO `city` VALUES ('67', 'Бирюч');
INSERT INTO `city` VALUES ('68', 'Валуйки');
INSERT INTO `city` VALUES ('69', 'Грайворон');
INSERT INTO `city` VALUES ('70', 'Губкин');
INSERT INTO `city` VALUES ('71', 'Короча');
INSERT INTO `city` VALUES ('72', 'Новый Оскол');
INSERT INTO `city` VALUES ('73', 'Старый Оскол');
INSERT INTO `city` VALUES ('74', 'Строитель');
INSERT INTO `city` VALUES ('75', 'Шебекино');
INSERT INTO `city` VALUES ('76', 'Брянск');
INSERT INTO `city` VALUES ('77', 'Дятьково');
INSERT INTO `city` VALUES ('78', 'Жуковка');
INSERT INTO `city` VALUES ('79', 'Злынка');
INSERT INTO `city` VALUES ('80', 'Карачев');
INSERT INTO `city` VALUES ('81', 'Клинцы');
INSERT INTO `city` VALUES ('82', 'Мглин');
INSERT INTO `city` VALUES ('83', 'Новозыбков');
INSERT INTO `city` VALUES ('84', 'Почеп');
INSERT INTO `city` VALUES ('85', 'Севск');
INSERT INTO `city` VALUES ('86', 'Сельцо');
INSERT INTO `city` VALUES ('87', 'Стародуб');
INSERT INTO `city` VALUES ('88', 'Сураж');
INSERT INTO `city` VALUES ('89', 'Трубчевск');
INSERT INTO `city` VALUES ('90', 'Унеча');
INSERT INTO `city` VALUES ('91', 'Фокино');
INSERT INTO `city` VALUES ('92', 'Бабушкин');
INSERT INTO `city` VALUES ('93', 'Гусиноозёрск');
INSERT INTO `city` VALUES ('94', 'Закаменск');
INSERT INTO `city` VALUES ('95', 'Кяхта');
INSERT INTO `city` VALUES ('96', 'Северобайкальск');
INSERT INTO `city` VALUES ('97', 'Улан-Удэ');
INSERT INTO `city` VALUES ('98', 'Александров');
INSERT INTO `city` VALUES ('99', 'Владимир');
INSERT INTO `city` VALUES ('100', 'Вязники');
INSERT INTO `city` VALUES ('101', 'Гороховец');
INSERT INTO `city` VALUES ('102', 'Гусь-Хрустальный');
INSERT INTO `city` VALUES ('103', 'Камешково');
INSERT INTO `city` VALUES ('104', 'Карабаново');
INSERT INTO `city` VALUES ('105', 'Киржач');
INSERT INTO `city` VALUES ('106', 'Ковров');
INSERT INTO `city` VALUES ('107', 'Кольчугино');
INSERT INTO `city` VALUES ('108', 'Костерёво');
INSERT INTO `city` VALUES ('109', 'Курлово');
INSERT INTO `city` VALUES ('110', 'Лакинск');
INSERT INTO `city` VALUES ('111', 'Меленки');
INSERT INTO `city` VALUES ('112', 'Муром');
INSERT INTO `city` VALUES ('113', 'Петушки');
INSERT INTO `city` VALUES ('114', 'Покров');
INSERT INTO `city` VALUES ('115', 'Радужный');
INSERT INTO `city` VALUES ('116', 'Собинка');
INSERT INTO `city` VALUES ('117', 'Струнино');
INSERT INTO `city` VALUES ('118', 'Судогда');
INSERT INTO `city` VALUES ('119', 'Суздаль');
INSERT INTO `city` VALUES ('120', 'Юрьев-Польский');
INSERT INTO `city` VALUES ('121', 'Волгоград');
INSERT INTO `city` VALUES ('122', 'Волжский');
INSERT INTO `city` VALUES ('123', 'Дубовка');
INSERT INTO `city` VALUES ('124', 'Жирновск');
INSERT INTO `city` VALUES ('125', 'Калач-на-Дону');
INSERT INTO `city` VALUES ('126', 'Камышин');
INSERT INTO `city` VALUES ('127', 'Котельниково');
INSERT INTO `city` VALUES ('128', 'Котово');
INSERT INTO `city` VALUES ('129', 'Краснослободск');
INSERT INTO `city` VALUES ('130', 'Ленинск');
INSERT INTO `city` VALUES ('131', 'Михайловка');
INSERT INTO `city` VALUES ('132', 'Николаевск');
INSERT INTO `city` VALUES ('133', 'Новоаннинский');
INSERT INTO `city` VALUES ('134', 'Палласовка');
INSERT INTO `city` VALUES ('135', 'Петров Вал');
INSERT INTO `city` VALUES ('136', 'Серафимович');
INSERT INTO `city` VALUES ('137', 'Суровикино');
INSERT INTO `city` VALUES ('138', 'Урюпинск');
INSERT INTO `city` VALUES ('139', 'Фролово');
INSERT INTO `city` VALUES ('140', 'Бабаево');
INSERT INTO `city` VALUES ('141', 'Белозерск');
INSERT INTO `city` VALUES ('142', 'Великий Устюг');
INSERT INTO `city` VALUES ('143', 'Вологда');
INSERT INTO `city` VALUES ('144', 'Вытегра');
INSERT INTO `city` VALUES ('145', 'Грязовец');
INSERT INTO `city` VALUES ('146', 'Кадников');
INSERT INTO `city` VALUES ('147', 'Кириллов');
INSERT INTO `city` VALUES ('148', 'Красавино');
INSERT INTO `city` VALUES ('149', 'Никольск');
INSERT INTO `city` VALUES ('150', 'Сокол');
INSERT INTO `city` VALUES ('151', 'Тотьма');
INSERT INTO `city` VALUES ('152', 'Устюжна');
INSERT INTO `city` VALUES ('153', 'Харовск');
INSERT INTO `city` VALUES ('154', 'Череповец');
INSERT INTO `city` VALUES ('155', 'Бобров');
INSERT INTO `city` VALUES ('156', 'Богучар');
INSERT INTO `city` VALUES ('157', 'Борисоглебск');
INSERT INTO `city` VALUES ('158', 'Бутурлиновка');
INSERT INTO `city` VALUES ('159', 'Воронеж');
INSERT INTO `city` VALUES ('160', 'Калач');
INSERT INTO `city` VALUES ('161', 'Лиски');
INSERT INTO `city` VALUES ('162', 'Нововоронеж');
INSERT INTO `city` VALUES ('163', 'Новохопёрск');
INSERT INTO `city` VALUES ('164', 'Острогожск');
INSERT INTO `city` VALUES ('165', 'Павловск');
INSERT INTO `city` VALUES ('166', 'Поворино');
INSERT INTO `city` VALUES ('167', 'Россошь');
INSERT INTO `city` VALUES ('168', 'Семилуки');
INSERT INTO `city` VALUES ('169', 'Эртиль');
INSERT INTO `city` VALUES ('170', 'Буйнакск');
INSERT INTO `city` VALUES ('171', 'Дагестанские Огни');
INSERT INTO `city` VALUES ('172', 'Дербент');
INSERT INTO `city` VALUES ('173', 'Избербаш');
INSERT INTO `city` VALUES ('174', 'Каспийск');
INSERT INTO `city` VALUES ('175', 'Кизилюрт');
INSERT INTO `city` VALUES ('176', 'Кизляр');
INSERT INTO `city` VALUES ('177', 'Махачкала');
INSERT INTO `city` VALUES ('178', 'Хасавюрт');
INSERT INTO `city` VALUES ('179', 'Южно-Сухокумск');
INSERT INTO `city` VALUES ('180', 'Биробиджан');
INSERT INTO `city` VALUES ('181', 'Облучье');
INSERT INTO `city` VALUES ('182', 'Балей');
INSERT INTO `city` VALUES ('183', 'Борзя');
INSERT INTO `city` VALUES ('184', 'Краснокаменск');
INSERT INTO `city` VALUES ('185', 'Могоча');
INSERT INTO `city` VALUES ('186', 'Нерчинск');
INSERT INTO `city` VALUES ('187', 'Петровск-Забайкальский');
INSERT INTO `city` VALUES ('188', 'Сретенск');
INSERT INTO `city` VALUES ('189', 'Хилок');
INSERT INTO `city` VALUES ('190', 'Чита');
INSERT INTO `city` VALUES ('191', 'Шилка');
INSERT INTO `city` VALUES ('192', 'Вичуга');
INSERT INTO `city` VALUES ('193', 'Гаврилов Посад');
INSERT INTO `city` VALUES ('194', 'Заволжск');
INSERT INTO `city` VALUES ('195', 'Иваново');
INSERT INTO `city` VALUES ('196', 'Кинешма');
INSERT INTO `city` VALUES ('197', 'Комсомольск');
INSERT INTO `city` VALUES ('198', 'Кохма');
INSERT INTO `city` VALUES ('199', 'Наволоки');
INSERT INTO `city` VALUES ('200', 'Плёс');
INSERT INTO `city` VALUES ('201', 'Приволжск');
INSERT INTO `city` VALUES ('202', 'Пучеж');
INSERT INTO `city` VALUES ('203', 'Родники');
INSERT INTO `city` VALUES ('204', 'Тейково');
INSERT INTO `city` VALUES ('205', 'Фурманов');
INSERT INTO `city` VALUES ('206', 'Шуя');
INSERT INTO `city` VALUES ('207', 'Южа');
INSERT INTO `city` VALUES ('208', 'Юрьевец');
INSERT INTO `city` VALUES ('209', 'Карабулак');
INSERT INTO `city` VALUES ('210', 'Магас');
INSERT INTO `city` VALUES ('211', 'Малгобек');
INSERT INTO `city` VALUES ('212', 'Назрань');
INSERT INTO `city` VALUES ('213', 'Алзамай');
INSERT INTO `city` VALUES ('214', 'Ангарск');
INSERT INTO `city` VALUES ('215', 'Байкальск');
INSERT INTO `city` VALUES ('216', 'Бирюсинск');
INSERT INTO `city` VALUES ('217', 'Бодайбо');
INSERT INTO `city` VALUES ('218', 'Братск');
INSERT INTO `city` VALUES ('219', 'Вихоревка');
INSERT INTO `city` VALUES ('220', 'Железногорск-Илимский');
INSERT INTO `city` VALUES ('221', 'Зима');
INSERT INTO `city` VALUES ('222', 'Иркутск');
INSERT INTO `city` VALUES ('223', 'Киренск');
INSERT INTO `city` VALUES ('224', 'Нижнеудинск');
INSERT INTO `city` VALUES ('225', 'Саянск');
INSERT INTO `city` VALUES ('226', 'Свирск');
INSERT INTO `city` VALUES ('227', 'Слюдянка');
INSERT INTO `city` VALUES ('228', 'Тайшет');
INSERT INTO `city` VALUES ('229', 'Тулун');
INSERT INTO `city` VALUES ('230', 'Усолье-Сибирское');
INSERT INTO `city` VALUES ('231', 'Усть-Илимск');
INSERT INTO `city` VALUES ('232', 'Усть-Кут');
INSERT INTO `city` VALUES ('233', 'Черемхово');
INSERT INTO `city` VALUES ('234', 'Шелехов');
INSERT INTO `city` VALUES ('235', 'Баксан');
INSERT INTO `city` VALUES ('236', 'Майский');
INSERT INTO `city` VALUES ('237', 'Нальчик');
INSERT INTO `city` VALUES ('238', 'Нарткала');
INSERT INTO `city` VALUES ('239', 'Прохладный');
INSERT INTO `city` VALUES ('240', 'Терек');
INSERT INTO `city` VALUES ('241', 'Тырныауз');
INSERT INTO `city` VALUES ('242', 'Чегем');
INSERT INTO `city` VALUES ('243', 'Багратионовск');
INSERT INTO `city` VALUES ('244', 'Балтийск');
INSERT INTO `city` VALUES ('245', 'Гвардейск');
INSERT INTO `city` VALUES ('246', 'Гурьевск');
INSERT INTO `city` VALUES ('247', 'Гусев');
INSERT INTO `city` VALUES ('248', 'Зеленоградск');
INSERT INTO `city` VALUES ('249', 'Калининград');
INSERT INTO `city` VALUES ('250', 'Краснознаменск');
INSERT INTO `city` VALUES ('251', 'Ладушкин');
INSERT INTO `city` VALUES ('252', 'Мамоново');
INSERT INTO `city` VALUES ('253', 'Неман');
INSERT INTO `city` VALUES ('254', 'Нестеров');
INSERT INTO `city` VALUES ('255', 'Озёрск');
INSERT INTO `city` VALUES ('256', 'Пионерский');
INSERT INTO `city` VALUES ('257', 'Полесск');
INSERT INTO `city` VALUES ('258', 'Правдинск');
INSERT INTO `city` VALUES ('259', 'Светлогорск');
INSERT INTO `city` VALUES ('260', 'Светлый');
INSERT INTO `city` VALUES ('261', 'Славск');
INSERT INTO `city` VALUES ('262', 'Советск');
INSERT INTO `city` VALUES ('263', 'Черняховск');
INSERT INTO `city` VALUES ('264', 'Приморск');
INSERT INTO `city` VALUES ('265', 'Городовиковск');
INSERT INTO `city` VALUES ('266', 'Лагань');
INSERT INTO `city` VALUES ('267', 'Элиста');
INSERT INTO `city` VALUES ('268', 'Балабаново');
INSERT INTO `city` VALUES ('269', 'Белоусово');
INSERT INTO `city` VALUES ('270', 'Боровск');
INSERT INTO `city` VALUES ('271', 'Ермолино');
INSERT INTO `city` VALUES ('272', 'Жиздра');
INSERT INTO `city` VALUES ('273', 'Жуков');
INSERT INTO `city` VALUES ('274', 'Калуга');
INSERT INTO `city` VALUES ('275', 'Киров');
INSERT INTO `city` VALUES ('276', 'Козельск');
INSERT INTO `city` VALUES ('277', 'Кондрово');
INSERT INTO `city` VALUES ('278', 'Кремёнки');
INSERT INTO `city` VALUES ('279', 'Людиново');
INSERT INTO `city` VALUES ('280', 'Малоярославец');
INSERT INTO `city` VALUES ('281', 'Медынь');
INSERT INTO `city` VALUES ('282', 'Мещовск');
INSERT INTO `city` VALUES ('283', 'Мосальск');
INSERT INTO `city` VALUES ('284', 'Обнинск');
INSERT INTO `city` VALUES ('285', 'Сосенский');
INSERT INTO `city` VALUES ('286', 'Спас-Деменск');
INSERT INTO `city` VALUES ('287', 'Сухиничи');
INSERT INTO `city` VALUES ('288', 'Таруса');
INSERT INTO `city` VALUES ('289', 'Юхнов');
INSERT INTO `city` VALUES ('290', 'Вилючинск');
INSERT INTO `city` VALUES ('291', 'Елизово');
INSERT INTO `city` VALUES ('292', 'Петропавловск-Камчатский');
INSERT INTO `city` VALUES ('293', 'Карачаевск');
INSERT INTO `city` VALUES ('294', 'Теберда');
INSERT INTO `city` VALUES ('295', 'Усть-Джегута');
INSERT INTO `city` VALUES ('296', 'Черкесск');
INSERT INTO `city` VALUES ('297', 'Беломорск');
INSERT INTO `city` VALUES ('298', 'Кемь');
INSERT INTO `city` VALUES ('299', 'Кондопога');
INSERT INTO `city` VALUES ('300', 'Костомукша');
INSERT INTO `city` VALUES ('301', 'Лахденпохья');
INSERT INTO `city` VALUES ('302', 'Медвежьегорск');
INSERT INTO `city` VALUES ('303', 'Олонец');
INSERT INTO `city` VALUES ('304', 'Петрозаводск');
INSERT INTO `city` VALUES ('305', 'Питкяранта');
INSERT INTO `city` VALUES ('306', 'Пудож');
INSERT INTO `city` VALUES ('307', 'Сегежа');
INSERT INTO `city` VALUES ('308', 'Сортавала');
INSERT INTO `city` VALUES ('309', 'Суоярви');
INSERT INTO `city` VALUES ('310', 'Анжеро-Судженск');
INSERT INTO `city` VALUES ('311', 'Белово');
INSERT INTO `city` VALUES ('312', 'Берёзовский');
INSERT INTO `city` VALUES ('313', 'Гурьевск');
INSERT INTO `city` VALUES ('314', 'Калтан');
INSERT INTO `city` VALUES ('315', 'Кемерово');
INSERT INTO `city` VALUES ('316', 'Киселёвск');
INSERT INTO `city` VALUES ('317', 'Ленинск-Кузнецкий');
INSERT INTO `city` VALUES ('318', 'Мариинск');
INSERT INTO `city` VALUES ('319', 'Междуреченск');
INSERT INTO `city` VALUES ('320', 'Мыски');
INSERT INTO `city` VALUES ('321', 'Новокузнецк');
INSERT INTO `city` VALUES ('322', 'Осинники');
INSERT INTO `city` VALUES ('323', 'Полысаево');
INSERT INTO `city` VALUES ('324', 'Прокопьевск');
INSERT INTO `city` VALUES ('325', 'Салаир');
INSERT INTO `city` VALUES ('326', 'Тайга');
INSERT INTO `city` VALUES ('327', 'Таштагол');
INSERT INTO `city` VALUES ('328', 'Топки');
INSERT INTO `city` VALUES ('329', 'Юрга');
INSERT INTO `city` VALUES ('330', 'Белая Холуница');
INSERT INTO `city` VALUES ('331', 'Вятские Поляны');
INSERT INTO `city` VALUES ('332', 'Зуевка');
INSERT INTO `city` VALUES ('333', 'Киров');
INSERT INTO `city` VALUES ('334', 'Кирово-Чепецк');
INSERT INTO `city` VALUES ('335', 'Кирс');
INSERT INTO `city` VALUES ('336', 'Котельнич');
INSERT INTO `city` VALUES ('337', 'Луза');
INSERT INTO `city` VALUES ('338', 'Малмыж');
INSERT INTO `city` VALUES ('339', 'Мураши');
INSERT INTO `city` VALUES ('340', 'Нолинск');
INSERT INTO `city` VALUES ('341', 'Омутнинск');
INSERT INTO `city` VALUES ('342', 'Орлов');
INSERT INTO `city` VALUES ('343', 'Слободской');
INSERT INTO `city` VALUES ('344', 'Советск');
INSERT INTO `city` VALUES ('345', 'Сосновка');
INSERT INTO `city` VALUES ('346', 'Уржум');
INSERT INTO `city` VALUES ('347', 'Яранск');
INSERT INTO `city` VALUES ('348', 'Воркута');
INSERT INTO `city` VALUES ('349', 'Вуктыл');
INSERT INTO `city` VALUES ('350', 'Емва');
INSERT INTO `city` VALUES ('351', 'Инта');
INSERT INTO `city` VALUES ('352', 'Микунь');
INSERT INTO `city` VALUES ('353', 'Печора');
INSERT INTO `city` VALUES ('354', 'Сосногорск');
INSERT INTO `city` VALUES ('355', 'Сыктывкар');
INSERT INTO `city` VALUES ('356', 'Усинск');
INSERT INTO `city` VALUES ('357', 'Ухта');
INSERT INTO `city` VALUES ('358', 'Буй');
INSERT INTO `city` VALUES ('359', 'Волгореченск');
INSERT INTO `city` VALUES ('360', 'Галич');
INSERT INTO `city` VALUES ('361', 'Кологрив');
INSERT INTO `city` VALUES ('362', 'Кострома');
INSERT INTO `city` VALUES ('363', 'Макарьев');
INSERT INTO `city` VALUES ('364', 'Мантурово');
INSERT INTO `city` VALUES ('365', 'Нерехта');
INSERT INTO `city` VALUES ('366', 'Нея');
INSERT INTO `city` VALUES ('367', 'Солигалич');
INSERT INTO `city` VALUES ('368', 'Чухлома');
INSERT INTO `city` VALUES ('369', 'Шарья');
INSERT INTO `city` VALUES ('370', 'Абинск');
INSERT INTO `city` VALUES ('371', 'Анапа');
INSERT INTO `city` VALUES ('372', 'Апшеронск');
INSERT INTO `city` VALUES ('373', 'Армавир');
INSERT INTO `city` VALUES ('374', 'Белореченск');
INSERT INTO `city` VALUES ('375', 'Геленджик');
INSERT INTO `city` VALUES ('376', 'Горячий Ключ');
INSERT INTO `city` VALUES ('377', 'Гулькевичи');
INSERT INTO `city` VALUES ('378', 'Ейск');
INSERT INTO `city` VALUES ('379', 'Кореновск');
INSERT INTO `city` VALUES ('380', 'Краснодар');
INSERT INTO `city` VALUES ('381', 'Кропоткин');
INSERT INTO `city` VALUES ('382', 'Крымск');
INSERT INTO `city` VALUES ('383', 'Курганинск');
INSERT INTO `city` VALUES ('384', 'Лабинск');
INSERT INTO `city` VALUES ('385', 'Новокубанск');
INSERT INTO `city` VALUES ('386', 'Новороссийск');
INSERT INTO `city` VALUES ('387', 'Приморско-Ахтарск');
INSERT INTO `city` VALUES ('388', 'Славянск-на-Кубани');
INSERT INTO `city` VALUES ('389', 'Сочи');
INSERT INTO `city` VALUES ('390', 'Темрюк');
INSERT INTO `city` VALUES ('391', 'Тимашёвск');
INSERT INTO `city` VALUES ('392', 'Тихорецк');
INSERT INTO `city` VALUES ('393', 'Туапсе');
INSERT INTO `city` VALUES ('394', 'Усть-Лабинск');
INSERT INTO `city` VALUES ('395', 'Хадыженск');
INSERT INTO `city` VALUES ('396', 'Артёмовск');
INSERT INTO `city` VALUES ('397', 'Ачинск');
INSERT INTO `city` VALUES ('398', 'Боготол');
INSERT INTO `city` VALUES ('399', 'Бородино');
INSERT INTO `city` VALUES ('400', 'Дивногорск');
INSERT INTO `city` VALUES ('401', 'Дудинка');
INSERT INTO `city` VALUES ('402', 'Енисейск');
INSERT INTO `city` VALUES ('403', 'Железногорск');
INSERT INTO `city` VALUES ('404', 'Заозёрный');
INSERT INTO `city` VALUES ('405', 'Зеленогорск');
INSERT INTO `city` VALUES ('406', 'Игарка');
INSERT INTO `city` VALUES ('407', 'Иланский');
INSERT INTO `city` VALUES ('408', 'Канск');
INSERT INTO `city` VALUES ('409', 'Кодинск');
INSERT INTO `city` VALUES ('410', 'Красноярск');
INSERT INTO `city` VALUES ('411', 'Лесосибирск');
INSERT INTO `city` VALUES ('412', 'Минусинск');
INSERT INTO `city` VALUES ('413', 'Назарово');
INSERT INTO `city` VALUES ('414', 'Норильск');
INSERT INTO `city` VALUES ('415', 'Сосновоборск');
INSERT INTO `city` VALUES ('416', 'Ужур');
INSERT INTO `city` VALUES ('417', 'Уяр');
INSERT INTO `city` VALUES ('418', 'Шарыпово');
INSERT INTO `city` VALUES ('419', 'Далматово');
INSERT INTO `city` VALUES ('420', 'Катайск');
INSERT INTO `city` VALUES ('421', 'Курган');
INSERT INTO `city` VALUES ('422', 'Куртамыш');
INSERT INTO `city` VALUES ('423', 'Макушино');
INSERT INTO `city` VALUES ('424', 'Петухово');
INSERT INTO `city` VALUES ('425', 'Шадринск');
INSERT INTO `city` VALUES ('426', 'Шумиха');
INSERT INTO `city` VALUES ('427', 'Щучье');
INSERT INTO `city` VALUES ('428', 'Дмитриев');
INSERT INTO `city` VALUES ('429', 'Железногорск');
INSERT INTO `city` VALUES ('430', 'Курск');
INSERT INTO `city` VALUES ('431', 'Курчатов');
INSERT INTO `city` VALUES ('432', 'Льгов');
INSERT INTO `city` VALUES ('433', 'Обоянь');
INSERT INTO `city` VALUES ('434', 'Рыльск');
INSERT INTO `city` VALUES ('435', 'Суджа');
INSERT INTO `city` VALUES ('436', 'Фатеж');
INSERT INTO `city` VALUES ('437', 'Щигры');
INSERT INTO `city` VALUES ('438', 'Бокситогорск');
INSERT INTO `city` VALUES ('439', 'Волосово');
INSERT INTO `city` VALUES ('440', 'Волхов');
INSERT INTO `city` VALUES ('441', 'Всеволожск');
INSERT INTO `city` VALUES ('442', 'Выборг');
INSERT INTO `city` VALUES ('443', 'Высоцк');
INSERT INTO `city` VALUES ('444', 'Гатчина');
INSERT INTO `city` VALUES ('445', 'Ивангород');
INSERT INTO `city` VALUES ('446', 'Каменногорск');
INSERT INTO `city` VALUES ('447', 'Кингисепп');
INSERT INTO `city` VALUES ('448', 'Кириши');
INSERT INTO `city` VALUES ('449', 'Кировск');
INSERT INTO `city` VALUES ('450', 'Коммунар');
INSERT INTO `city` VALUES ('451', 'Лодейное Поле');
INSERT INTO `city` VALUES ('452', 'Луга');
INSERT INTO `city` VALUES ('453', 'Любань');
INSERT INTO `city` VALUES ('454', 'Никольское');
INSERT INTO `city` VALUES ('455', 'Новая Ладога');
INSERT INTO `city` VALUES ('456', 'Отрадное');
INSERT INTO `city` VALUES ('457', 'Пикалёво');
INSERT INTO `city` VALUES ('458', 'Подпорожье');
INSERT INTO `city` VALUES ('459', 'Приморск');
INSERT INTO `city` VALUES ('460', 'Приозерск');
INSERT INTO `city` VALUES ('461', 'Светогорск');
INSERT INTO `city` VALUES ('462', 'Сертолово');
INSERT INTO `city` VALUES ('463', 'Сланцы');
INSERT INTO `city` VALUES ('464', 'Сосновый Бор');
INSERT INTO `city` VALUES ('465', 'Сясьстрой');
INSERT INTO `city` VALUES ('466', 'Тихвин');
INSERT INTO `city` VALUES ('467', 'Тосно');
INSERT INTO `city` VALUES ('468', 'Шлиссельбург');
INSERT INTO `city` VALUES ('469', 'Грязи');
INSERT INTO `city` VALUES ('470', 'Данков');
INSERT INTO `city` VALUES ('471', 'Елец');
INSERT INTO `city` VALUES ('472', 'Задонск');
INSERT INTO `city` VALUES ('473', 'Лебедянь');
INSERT INTO `city` VALUES ('474', 'Липецк');
INSERT INTO `city` VALUES ('475', 'Усмань');
INSERT INTO `city` VALUES ('476', 'Чаплыгин');
INSERT INTO `city` VALUES ('477', 'Магадан');
INSERT INTO `city` VALUES ('478', 'Сусуман');
INSERT INTO `city` VALUES ('479', 'Волжск');
INSERT INTO `city` VALUES ('480', 'Звенигово');
INSERT INTO `city` VALUES ('481', 'Йошкар-Ола');
INSERT INTO `city` VALUES ('482', 'Козьмодемьянск');
INSERT INTO `city` VALUES ('483', 'Ардатов');
INSERT INTO `city` VALUES ('484', 'Инсар');
INSERT INTO `city` VALUES ('485', 'Ковылкино');
INSERT INTO `city` VALUES ('486', 'Краснослободск');
INSERT INTO `city` VALUES ('487', 'Рузаевка');
INSERT INTO `city` VALUES ('488', 'Саранск');
INSERT INTO `city` VALUES ('489', 'Темников');
INSERT INTO `city` VALUES ('490', 'Москва');
INSERT INTO `city` VALUES ('491', 'Апрелевка');
INSERT INTO `city` VALUES ('492', 'Балашиха');
INSERT INTO `city` VALUES ('493', 'Бронницы');
INSERT INTO `city` VALUES ('494', 'Верея');
INSERT INTO `city` VALUES ('495', 'Видное');
INSERT INTO `city` VALUES ('496', 'Волоколамск');
INSERT INTO `city` VALUES ('497', 'Воскресенск');
INSERT INTO `city` VALUES ('498', 'Высоковск');
INSERT INTO `city` VALUES ('499', 'Голицыно');
INSERT INTO `city` VALUES ('500', 'Дедовск');
INSERT INTO `city` VALUES ('501', 'Дзержинский');
INSERT INTO `city` VALUES ('502', 'Дмитров');
INSERT INTO `city` VALUES ('503', 'Долгопрудный');
INSERT INTO `city` VALUES ('504', 'Домодедово');
INSERT INTO `city` VALUES ('505', 'Дрезна');
INSERT INTO `city` VALUES ('506', 'Дубна');
INSERT INTO `city` VALUES ('507', 'Егорьевск');
INSERT INTO `city` VALUES ('508', 'Железнодорожный');
INSERT INTO `city` VALUES ('509', 'Жуковский');
INSERT INTO `city` VALUES ('510', 'Зарайск');
INSERT INTO `city` VALUES ('511', 'Звенигород');
INSERT INTO `city` VALUES ('512', 'Ивантеевка');
INSERT INTO `city` VALUES ('513', 'Истра');
INSERT INTO `city` VALUES ('514', 'Кашира');
INSERT INTO `city` VALUES ('515', 'Климовск');
INSERT INTO `city` VALUES ('516', 'Клин');
INSERT INTO `city` VALUES ('517', 'Коломна');
INSERT INTO `city` VALUES ('518', 'Котельники');
INSERT INTO `city` VALUES ('519', 'Королёв');
INSERT INTO `city` VALUES ('520', 'Красноармейск');
INSERT INTO `city` VALUES ('521', 'Красногорск');
INSERT INTO `city` VALUES ('522', 'Краснозаводск');
INSERT INTO `city` VALUES ('523', 'Краснознаменск');
INSERT INTO `city` VALUES ('524', 'Кубинка');
INSERT INTO `city` VALUES ('525', 'Куровское');
INSERT INTO `city` VALUES ('526', 'Ликино-Дулёво');
INSERT INTO `city` VALUES ('527', 'Лобня');
INSERT INTO `city` VALUES ('528', 'Лосино-Петровский');
INSERT INTO `city` VALUES ('529', 'Луховицы');
INSERT INTO `city` VALUES ('530', 'Лыткарино');
INSERT INTO `city` VALUES ('531', 'Люберцы');
INSERT INTO `city` VALUES ('532', 'Можайск');
INSERT INTO `city` VALUES ('533', 'Московский');
INSERT INTO `city` VALUES ('534', 'Мытищи');
INSERT INTO `city` VALUES ('535', 'Наро-Фоминск');
INSERT INTO `city` VALUES ('536', 'Ногинск');
INSERT INTO `city` VALUES ('537', 'Одинцово');
INSERT INTO `city` VALUES ('538', 'Ожерелье');
INSERT INTO `city` VALUES ('539', 'Озёры');
INSERT INTO `city` VALUES ('540', 'Орехово-Зуево');
INSERT INTO `city` VALUES ('541', 'Павловский Посад');
INSERT INTO `city` VALUES ('542', 'Пересвет');
INSERT INTO `city` VALUES ('543', 'Подольск');
INSERT INTO `city` VALUES ('544', 'Протвино');
INSERT INTO `city` VALUES ('545', 'Пушкино');
INSERT INTO `city` VALUES ('546', 'Пущино');
INSERT INTO `city` VALUES ('547', 'Раменское');
INSERT INTO `city` VALUES ('548', 'Реутов');
INSERT INTO `city` VALUES ('549', 'Рошаль');
INSERT INTO `city` VALUES ('550', 'Руза');
INSERT INTO `city` VALUES ('551', 'Сергиев Посад');
INSERT INTO `city` VALUES ('552', 'Серпухов');
INSERT INTO `city` VALUES ('553', 'Солнечногорск');
INSERT INTO `city` VALUES ('554', 'Старая Купавна');
INSERT INTO `city` VALUES ('555', 'Ступино');
INSERT INTO `city` VALUES ('556', 'Талдом');
INSERT INTO `city` VALUES ('557', 'Троицк');
INSERT INTO `city` VALUES ('558', 'Фрязино');
INSERT INTO `city` VALUES ('559', 'Химки');
INSERT INTO `city` VALUES ('560', 'Хотьково');
INSERT INTO `city` VALUES ('561', 'Черноголовка');
INSERT INTO `city` VALUES ('562', 'Чехов');
INSERT INTO `city` VALUES ('563', 'Шатура');
INSERT INTO `city` VALUES ('564', 'Щёлково');
INSERT INTO `city` VALUES ('565', 'Щербинка');
INSERT INTO `city` VALUES ('566', 'Электрогорск');
INSERT INTO `city` VALUES ('567', 'Электросталь');
INSERT INTO `city` VALUES ('568', 'Электроугли');
INSERT INTO `city` VALUES ('569', 'Юбилейный');
INSERT INTO `city` VALUES ('570', 'Яхрома');
INSERT INTO `city` VALUES ('571', 'Апатиты');
INSERT INTO `city` VALUES ('572', 'Гаджиево');
INSERT INTO `city` VALUES ('573', 'Заозёрск');
INSERT INTO `city` VALUES ('574', 'Заполярный');
INSERT INTO `city` VALUES ('575', 'Кандалакша');
INSERT INTO `city` VALUES ('576', 'Кировск');
INSERT INTO `city` VALUES ('577', 'Ковдор');
INSERT INTO `city` VALUES ('578', 'Кола');
INSERT INTO `city` VALUES ('579', 'Мончегорск');
INSERT INTO `city` VALUES ('580', 'Мурманск');
INSERT INTO `city` VALUES ('581', 'Оленегорск');
INSERT INTO `city` VALUES ('582', 'Островной');
INSERT INTO `city` VALUES ('583', 'Полярные Зори');
INSERT INTO `city` VALUES ('584', 'Полярный');
INSERT INTO `city` VALUES ('585', 'Североморск');
INSERT INTO `city` VALUES ('586', 'Снежногорск');
INSERT INTO `city` VALUES ('587', 'Нарьян-Мар');
INSERT INTO `city` VALUES ('588', 'Арзамас');
INSERT INTO `city` VALUES ('589', 'Балахна');
INSERT INTO `city` VALUES ('590', 'Богородск');
INSERT INTO `city` VALUES ('591', 'Бор');
INSERT INTO `city` VALUES ('592', 'Ветлуга');
INSERT INTO `city` VALUES ('593', 'Володарск');
INSERT INTO `city` VALUES ('594', 'Ворсма');
INSERT INTO `city` VALUES ('595', 'Выкса');
INSERT INTO `city` VALUES ('596', 'Горбатов');
INSERT INTO `city` VALUES ('597', 'Городец');
INSERT INTO `city` VALUES ('598', 'Дзержинск');
INSERT INTO `city` VALUES ('599', 'Заволжье');
INSERT INTO `city` VALUES ('600', 'Княгинино');
INSERT INTO `city` VALUES ('601', 'Кстово');
INSERT INTO `city` VALUES ('602', 'Кулебаки');
INSERT INTO `city` VALUES ('603', 'Лукоянов');
INSERT INTO `city` VALUES ('604', 'Лысково');
INSERT INTO `city` VALUES ('605', 'Навашино');
INSERT INTO `city` VALUES ('606', 'Нижний Новгород');
INSERT INTO `city` VALUES ('607', 'Павлово');
INSERT INTO `city` VALUES ('608', 'Первомайск');
INSERT INTO `city` VALUES ('609', 'Перевоз');
INSERT INTO `city` VALUES ('610', 'Саров');
INSERT INTO `city` VALUES ('611', 'Семёнов');
INSERT INTO `city` VALUES ('612', 'Сергач');
INSERT INTO `city` VALUES ('613', 'Урень');
INSERT INTO `city` VALUES ('614', 'Чкаловск');
INSERT INTO `city` VALUES ('615', 'Шахунья');
INSERT INTO `city` VALUES ('616', 'Боровичи');
INSERT INTO `city` VALUES ('617', 'Валдай');
INSERT INTO `city` VALUES ('618', 'Великий Новгород');
INSERT INTO `city` VALUES ('619', 'Малая Вишера');
INSERT INTO `city` VALUES ('620', 'Окуловка');
INSERT INTO `city` VALUES ('621', 'Пестово');
INSERT INTO `city` VALUES ('622', 'Сольцы');
INSERT INTO `city` VALUES ('623', 'Старая Русса');
INSERT INTO `city` VALUES ('624', 'Холм');
INSERT INTO `city` VALUES ('625', 'Чудово');
INSERT INTO `city` VALUES ('626', 'Барабинск');
INSERT INTO `city` VALUES ('627', 'Бердск');
INSERT INTO `city` VALUES ('628', 'Болотное');
INSERT INTO `city` VALUES ('629', 'Искитим');
INSERT INTO `city` VALUES ('630', 'Карасук');
INSERT INTO `city` VALUES ('631', 'Каргат');
INSERT INTO `city` VALUES ('632', 'Куйбышев');
INSERT INTO `city` VALUES ('633', 'Купино');
INSERT INTO `city` VALUES ('634', 'Новосибирск');
INSERT INTO `city` VALUES ('635', 'Обь');
INSERT INTO `city` VALUES ('636', 'Татарск');
INSERT INTO `city` VALUES ('637', 'Тогучин');
INSERT INTO `city` VALUES ('638', 'Черепаново');
INSERT INTO `city` VALUES ('639', 'Чулым');
INSERT INTO `city` VALUES ('640', 'Исилькуль');
INSERT INTO `city` VALUES ('641', 'Калачинск');
INSERT INTO `city` VALUES ('642', 'Называевск');
INSERT INTO `city` VALUES ('643', 'Омск');
INSERT INTO `city` VALUES ('644', 'Тара');
INSERT INTO `city` VALUES ('645', 'Тюкалинск');
INSERT INTO `city` VALUES ('646', 'Абдулино');
INSERT INTO `city` VALUES ('647', 'Бугуруслан');
INSERT INTO `city` VALUES ('648', 'Бузулук');
INSERT INTO `city` VALUES ('649', 'Гай');
INSERT INTO `city` VALUES ('650', 'Кувандык');
INSERT INTO `city` VALUES ('651', 'Медногорск');
INSERT INTO `city` VALUES ('652', 'Новотроицк');
INSERT INTO `city` VALUES ('653', 'Оренбург');
INSERT INTO `city` VALUES ('654', 'Орск');
INSERT INTO `city` VALUES ('655', 'Соль-Илецк');
INSERT INTO `city` VALUES ('656', 'Сорочинск');
INSERT INTO `city` VALUES ('657', 'Ясный');
INSERT INTO `city` VALUES ('658', 'Болхов');
INSERT INTO `city` VALUES ('659', 'Дмитровск');
INSERT INTO `city` VALUES ('660', 'Ливны');
INSERT INTO `city` VALUES ('661', 'Малоархангельск');
INSERT INTO `city` VALUES ('662', 'Мценск');
INSERT INTO `city` VALUES ('663', 'Новосиль');
INSERT INTO `city` VALUES ('664', 'Орёл');
INSERT INTO `city` VALUES ('665', 'Белинский');
INSERT INTO `city` VALUES ('666', 'Городище');
INSERT INTO `city` VALUES ('667', 'Заречный');
INSERT INTO `city` VALUES ('668', 'Каменка');
INSERT INTO `city` VALUES ('669', 'Кузнецк');
INSERT INTO `city` VALUES ('670', 'Нижний Ломов');
INSERT INTO `city` VALUES ('671', 'Никольск');
INSERT INTO `city` VALUES ('672', 'Пенза');
INSERT INTO `city` VALUES ('673', 'Сердобск');
INSERT INTO `city` VALUES ('674', 'Спасск');
INSERT INTO `city` VALUES ('675', 'Сурск');
INSERT INTO `city` VALUES ('676', 'Александровск');
INSERT INTO `city` VALUES ('677', 'Березники');
INSERT INTO `city` VALUES ('678', 'Верещагино');
INSERT INTO `city` VALUES ('679', 'Горнозаводск');
INSERT INTO `city` VALUES ('680', 'Гремячинск');
INSERT INTO `city` VALUES ('681', 'Губаха');
INSERT INTO `city` VALUES ('682', 'Добрянка');
INSERT INTO `city` VALUES ('683', 'Кизел');
INSERT INTO `city` VALUES ('684', 'Красновишерск');
INSERT INTO `city` VALUES ('685', 'Краснокамск');
INSERT INTO `city` VALUES ('686', 'Кудымкар');
INSERT INTO `city` VALUES ('687', 'Кунгур');
INSERT INTO `city` VALUES ('688', 'Лысьва');
INSERT INTO `city` VALUES ('689', 'Нытва');
INSERT INTO `city` VALUES ('690', 'Оса');
INSERT INTO `city` VALUES ('691', 'Оханск');
INSERT INTO `city` VALUES ('692', 'Очёр');
INSERT INTO `city` VALUES ('693', 'Пермь');
INSERT INTO `city` VALUES ('694', 'Соликамск');
INSERT INTO `city` VALUES ('695', 'Усолье');
INSERT INTO `city` VALUES ('696', 'Чайковский');
INSERT INTO `city` VALUES ('697', 'Чердынь');
INSERT INTO `city` VALUES ('698', 'Чёрмоз');
INSERT INTO `city` VALUES ('699', 'Чернушка');
INSERT INTO `city` VALUES ('700', 'Чусовой');
INSERT INTO `city` VALUES ('701', 'Арсеньев');
INSERT INTO `city` VALUES ('702', 'Артём');
INSERT INTO `city` VALUES ('703', 'Большой Камень');
INSERT INTO `city` VALUES ('704', 'Владивосток');
INSERT INTO `city` VALUES ('705', 'Дальнегорск');
INSERT INTO `city` VALUES ('706', 'Дальнереченск');
INSERT INTO `city` VALUES ('707', 'Лесозаводск');
INSERT INTO `city` VALUES ('708', 'Находка');
INSERT INTO `city` VALUES ('709', 'Партизанск');
INSERT INTO `city` VALUES ('710', 'Спасск-Дальний');
INSERT INTO `city` VALUES ('711', 'Уссурийск');
INSERT INTO `city` VALUES ('712', 'Фокино');
INSERT INTO `city` VALUES ('713', 'Великие Луки');
INSERT INTO `city` VALUES ('714', 'Гдов');
INSERT INTO `city` VALUES ('715', 'Дно');
INSERT INTO `city` VALUES ('716', 'Невель');
INSERT INTO `city` VALUES ('717', 'Новоржев');
INSERT INTO `city` VALUES ('718', 'Новосокольники');
INSERT INTO `city` VALUES ('719', 'Опочка');
INSERT INTO `city` VALUES ('720', 'Остров');
INSERT INTO `city` VALUES ('721', 'Печоры');
INSERT INTO `city` VALUES ('722', 'Порхов');
INSERT INTO `city` VALUES ('723', 'Псков');
INSERT INTO `city` VALUES ('724', 'Пустошка');
INSERT INTO `city` VALUES ('725', 'Пыталово');
INSERT INTO `city` VALUES ('726', 'Себеж');
INSERT INTO `city` VALUES ('727', 'Азов');
INSERT INTO `city` VALUES ('728', 'Аксай');
INSERT INTO `city` VALUES ('729', 'Батайск');
INSERT INTO `city` VALUES ('730', 'Белая Калитва');
INSERT INTO `city` VALUES ('731', 'Волгодонск');
INSERT INTO `city` VALUES ('732', 'Гуково');
INSERT INTO `city` VALUES ('733', 'Донецк');
INSERT INTO `city` VALUES ('734', 'Зверево');
INSERT INTO `city` VALUES ('735', 'Зерноград');
INSERT INTO `city` VALUES ('736', 'Каменск-Шахтинский');
INSERT INTO `city` VALUES ('737', 'Константиновск');
INSERT INTO `city` VALUES ('738', 'Красный Сулин');
INSERT INTO `city` VALUES ('739', 'Миллерово');
INSERT INTO `city` VALUES ('740', 'Морозовск');
INSERT INTO `city` VALUES ('741', 'Новочеркасск');
INSERT INTO `city` VALUES ('742', 'Новошахтинск');
INSERT INTO `city` VALUES ('743', 'Пролетарск');
INSERT INTO `city` VALUES ('744', 'Ростов-на-Дону');
INSERT INTO `city` VALUES ('745', 'Сальск');
INSERT INTO `city` VALUES ('746', 'Семикаракорск');
INSERT INTO `city` VALUES ('747', 'Таганрог');
INSERT INTO `city` VALUES ('748', 'Цимлянск');
INSERT INTO `city` VALUES ('749', 'Шахты');
INSERT INTO `city` VALUES ('750', 'Касимов');
INSERT INTO `city` VALUES ('751', 'Кораблино');
INSERT INTO `city` VALUES ('752', 'Михайлов');
INSERT INTO `city` VALUES ('753', 'Новомичуринск');
INSERT INTO `city` VALUES ('754', 'Рыбное');
INSERT INTO `city` VALUES ('755', 'Ряжск');
INSERT INTO `city` VALUES ('756', 'Рязань');
INSERT INTO `city` VALUES ('757', 'Сасово');
INSERT INTO `city` VALUES ('758', 'Скопин');
INSERT INTO `city` VALUES ('759', 'Спас-Клепики');
INSERT INTO `city` VALUES ('760', 'Спасск-Рязанский');
INSERT INTO `city` VALUES ('761', 'Шацк');
INSERT INTO `city` VALUES ('762', 'Жигулёвск');
INSERT INTO `city` VALUES ('763', 'Кинель');
INSERT INTO `city` VALUES ('764', 'Нефтегорск');
INSERT INTO `city` VALUES ('765', 'Новокуйбышевск');
INSERT INTO `city` VALUES ('766', 'Октябрьск');
INSERT INTO `city` VALUES ('767', 'Отрадный');
INSERT INTO `city` VALUES ('768', 'Похвистнево');
INSERT INTO `city` VALUES ('769', 'Самара');
INSERT INTO `city` VALUES ('770', 'Сызрань');
INSERT INTO `city` VALUES ('771', 'Тольятти');
INSERT INTO `city` VALUES ('772', 'Чапаевск');
INSERT INTO `city` VALUES ('773', 'Зеленогорск');
INSERT INTO `city` VALUES ('774', 'Колпино');
INSERT INTO `city` VALUES ('775', 'Красное Село');
INSERT INTO `city` VALUES ('776', 'Кронштадт');
INSERT INTO `city` VALUES ('777', 'Ломоносов');
INSERT INTO `city` VALUES ('778', 'Павловск');
INSERT INTO `city` VALUES ('779', 'Петергоф');
INSERT INTO `city` VALUES ('780', 'Пушкин');
INSERT INTO `city` VALUES ('781', 'Санкт-Петербург');
INSERT INTO `city` VALUES ('782', 'Сестрорецк');
INSERT INTO `city` VALUES ('783', 'Аркадак');
INSERT INTO `city` VALUES ('784', 'Аткарск');
INSERT INTO `city` VALUES ('785', 'Балаково');
INSERT INTO `city` VALUES ('786', 'Балашов');
INSERT INTO `city` VALUES ('787', 'Вольск');
INSERT INTO `city` VALUES ('788', 'Ершов');
INSERT INTO `city` VALUES ('789', 'Калининск');
INSERT INTO `city` VALUES ('790', 'Красноармейск');
INSERT INTO `city` VALUES ('791', 'Красный Кут');
INSERT INTO `city` VALUES ('792', 'Маркс');
INSERT INTO `city` VALUES ('793', 'Новоузенск');
INSERT INTO `city` VALUES ('794', 'Петровск');
INSERT INTO `city` VALUES ('795', 'Пугачёв');
INSERT INTO `city` VALUES ('796', 'Ртищево');
INSERT INTO `city` VALUES ('797', 'Саратов');
INSERT INTO `city` VALUES ('798', 'Хвалынск');
INSERT INTO `city` VALUES ('799', 'Шиханы');
INSERT INTO `city` VALUES ('800', 'Энгельс');
INSERT INTO `city` VALUES ('801', 'Александровск-Сахалинский');
INSERT INTO `city` VALUES ('802', 'Анива');
INSERT INTO `city` VALUES ('803', 'Долинск');
INSERT INTO `city` VALUES ('804', 'Корсаков');
INSERT INTO `city` VALUES ('805', 'Курильск');
INSERT INTO `city` VALUES ('806', 'Макаров');
INSERT INTO `city` VALUES ('807', 'Невельск');
INSERT INTO `city` VALUES ('808', 'Оха');
INSERT INTO `city` VALUES ('809', 'Поронайск');
INSERT INTO `city` VALUES ('810', 'Северо-Курильск');
INSERT INTO `city` VALUES ('811', 'Томари');
INSERT INTO `city` VALUES ('812', 'Углегорск');
INSERT INTO `city` VALUES ('813', 'Холмск');
INSERT INTO `city` VALUES ('814', 'Шахтёрск');
INSERT INTO `city` VALUES ('815', 'Южно-Сахалинск');
INSERT INTO `city` VALUES ('816', 'Алапаевск');
INSERT INTO `city` VALUES ('817', 'Арамиль');
INSERT INTO `city` VALUES ('818', 'Артёмовский');
INSERT INTO `city` VALUES ('819', 'Асбест');
INSERT INTO `city` VALUES ('820', 'Берёзовский');
INSERT INTO `city` VALUES ('821', 'Богданович');
INSERT INTO `city` VALUES ('822', 'Верхний Тагил');
INSERT INTO `city` VALUES ('823', 'Верхняя Пышма');
INSERT INTO `city` VALUES ('824', 'Верхняя Салда');
INSERT INTO `city` VALUES ('825', 'Верхняя Тура');
INSERT INTO `city` VALUES ('826', 'Верхотурье');
INSERT INTO `city` VALUES ('827', 'Волчанск');
INSERT INTO `city` VALUES ('828', 'Дегтярск');
INSERT INTO `city` VALUES ('829', 'Екатеринбург');
INSERT INTO `city` VALUES ('830', 'Заречный');
INSERT INTO `city` VALUES ('831', 'Ивдель');
INSERT INTO `city` VALUES ('832', 'Ирбит');
INSERT INTO `city` VALUES ('833', 'Каменск-Уральский');
INSERT INTO `city` VALUES ('834', 'Камышлов');
INSERT INTO `city` VALUES ('835', 'Карпинск');
INSERT INTO `city` VALUES ('836', 'Качканар');
INSERT INTO `city` VALUES ('837', 'Кировград');
INSERT INTO `city` VALUES ('838', 'Краснотурьинск');
INSERT INTO `city` VALUES ('839', 'Красноуральск');
INSERT INTO `city` VALUES ('840', 'Красноуфимск');
INSERT INTO `city` VALUES ('841', 'Кушва');
INSERT INTO `city` VALUES ('842', 'Лесной');
INSERT INTO `city` VALUES ('843', 'Михайловск');
INSERT INTO `city` VALUES ('844', 'Невьянск');
INSERT INTO `city` VALUES ('845', 'Нижние Серги');
INSERT INTO `city` VALUES ('846', 'Нижний Тагил');
INSERT INTO `city` VALUES ('847', 'Нижняя Салда');
INSERT INTO `city` VALUES ('848', 'Нижняя Тура');
INSERT INTO `city` VALUES ('849', 'Новая Ляля');
INSERT INTO `city` VALUES ('850', 'Новоуральск');
INSERT INTO `city` VALUES ('851', 'Первоуральск');
INSERT INTO `city` VALUES ('852', 'Полевской');
INSERT INTO `city` VALUES ('853', 'Ревда');
INSERT INTO `city` VALUES ('854', 'Реж');
INSERT INTO `city` VALUES ('855', 'Североуральск');
INSERT INTO `city` VALUES ('856', 'Серов');
INSERT INTO `city` VALUES ('857', 'Среднеуральск');
INSERT INTO `city` VALUES ('858', 'Сухой Лог');
INSERT INTO `city` VALUES ('859', 'Сысерть');
INSERT INTO `city` VALUES ('860', 'Тавда');
INSERT INTO `city` VALUES ('861', 'Талица');
INSERT INTO `city` VALUES ('862', 'Туринск');
INSERT INTO `city` VALUES ('863', 'Алагир');
INSERT INTO `city` VALUES ('864', 'Ардон');
INSERT INTO `city` VALUES ('865', 'Беслан');
INSERT INTO `city` VALUES ('866', 'Владикавказ');
INSERT INTO `city` VALUES ('867', 'Дигора');
INSERT INTO `city` VALUES ('868', 'Моздок');
INSERT INTO `city` VALUES ('869', 'Велиж');
INSERT INTO `city` VALUES ('870', 'Вязьма');
INSERT INTO `city` VALUES ('871', 'Гагарин');
INSERT INTO `city` VALUES ('872', 'Демидов');
INSERT INTO `city` VALUES ('873', 'Десногорск');
INSERT INTO `city` VALUES ('874', 'Дорогобуж');
INSERT INTO `city` VALUES ('875', 'Духовщина');
INSERT INTO `city` VALUES ('876', 'Ельня');
INSERT INTO `city` VALUES ('877', 'Починок');
INSERT INTO `city` VALUES ('878', 'Рославль');
INSERT INTO `city` VALUES ('879', 'Рудня');
INSERT INTO `city` VALUES ('880', 'Сафоново');
INSERT INTO `city` VALUES ('881', 'Смоленск');
INSERT INTO `city` VALUES ('882', 'Сычёвка');
INSERT INTO `city` VALUES ('883', 'Ярцево');
INSERT INTO `city` VALUES ('884', 'Благодарный');
INSERT INTO `city` VALUES ('885', 'Будённовск');
INSERT INTO `city` VALUES ('886', 'Георгиевск');
INSERT INTO `city` VALUES ('887', 'Ессентуки');
INSERT INTO `city` VALUES ('888', 'Железноводск');
INSERT INTO `city` VALUES ('889', 'Зеленокумск');
INSERT INTO `city` VALUES ('890', 'Изобильный');
INSERT INTO `city` VALUES ('891', 'Ипатово');
INSERT INTO `city` VALUES ('892', 'Кисловодск');
INSERT INTO `city` VALUES ('893', 'Лермонтов');
INSERT INTO `city` VALUES ('894', 'Минеральные Воды');
INSERT INTO `city` VALUES ('895', 'Михайловск');
INSERT INTO `city` VALUES ('896', 'Невинномысск');
INSERT INTO `city` VALUES ('897', 'Нефтекумск');
INSERT INTO `city` VALUES ('898', 'Новоалександровск');
INSERT INTO `city` VALUES ('899', 'Новопавловск');
INSERT INTO `city` VALUES ('900', 'Пятигорск');
INSERT INTO `city` VALUES ('901', 'Светлоград');
INSERT INTO `city` VALUES ('902', 'Ставрополь');
INSERT INTO `city` VALUES ('903', 'Жердевка');
INSERT INTO `city` VALUES ('904', 'Кирсанов');
INSERT INTO `city` VALUES ('905', 'Котовск');
INSERT INTO `city` VALUES ('906', 'Мичуринск');
INSERT INTO `city` VALUES ('907', 'Моршанск');
INSERT INTO `city` VALUES ('908', 'Рассказово');
INSERT INTO `city` VALUES ('909', 'Тамбов');
INSERT INTO `city` VALUES ('910', 'Уварово');
INSERT INTO `city` VALUES ('911', 'Агрыз');
INSERT INTO `city` VALUES ('912', 'Азнакаево');
INSERT INTO `city` VALUES ('913', 'Альметьевск');
INSERT INTO `city` VALUES ('914', 'Арск');
INSERT INTO `city` VALUES ('915', 'Бавлы');
INSERT INTO `city` VALUES ('916', 'Болгар');
INSERT INTO `city` VALUES ('917', 'Бугульма');
INSERT INTO `city` VALUES ('918', 'Буинск');
INSERT INTO `city` VALUES ('919', 'Елабуга');
INSERT INTO `city` VALUES ('920', 'Заинск');
INSERT INTO `city` VALUES ('921', 'Зеленодольск');
INSERT INTO `city` VALUES ('922', 'Казань');
INSERT INTO `city` VALUES ('923', 'Лаишево');
INSERT INTO `city` VALUES ('924', 'Лениногорск');
INSERT INTO `city` VALUES ('925', 'Мамадыш');
INSERT INTO `city` VALUES ('926', 'Менделеевск');
INSERT INTO `city` VALUES ('927', 'Мензелинск');
INSERT INTO `city` VALUES ('928', 'Набережные Челны');
INSERT INTO `city` VALUES ('929', 'Нижнекамск');
INSERT INTO `city` VALUES ('930', 'Нурлат');
INSERT INTO `city` VALUES ('931', 'Тетюши');
INSERT INTO `city` VALUES ('932', 'Чистополь');
INSERT INTO `city` VALUES ('933', 'Андреаполь');
INSERT INTO `city` VALUES ('934', 'Бежецк');
INSERT INTO `city` VALUES ('935', 'Белый');
INSERT INTO `city` VALUES ('936', 'Бологое');
INSERT INTO `city` VALUES ('937', 'Весьегонск');
INSERT INTO `city` VALUES ('938', 'Вышний Волочёк');
INSERT INTO `city` VALUES ('939', 'Западная Двина');
INSERT INTO `city` VALUES ('940', 'Зубцов');
INSERT INTO `city` VALUES ('941', 'Калязин');
INSERT INTO `city` VALUES ('942', 'Кашин');
INSERT INTO `city` VALUES ('943', 'Кимры');
INSERT INTO `city` VALUES ('944', 'Конаково');
INSERT INTO `city` VALUES ('945', 'Красный Холм');
INSERT INTO `city` VALUES ('946', 'Кувшиново');
INSERT INTO `city` VALUES ('947', 'Лихославль');
INSERT INTO `city` VALUES ('948', 'Нелидово');
INSERT INTO `city` VALUES ('949', 'Осташков');
INSERT INTO `city` VALUES ('950', 'Ржев');
INSERT INTO `city` VALUES ('951', 'Старица');
INSERT INTO `city` VALUES ('952', 'Тверь');
INSERT INTO `city` VALUES ('953', 'Торжок');
INSERT INTO `city` VALUES ('954', 'Торопец');
INSERT INTO `city` VALUES ('955', 'Удомля');
INSERT INTO `city` VALUES ('956', 'Асино');
INSERT INTO `city` VALUES ('957', 'Кедровый');
INSERT INTO `city` VALUES ('958', 'Колпашево');
INSERT INTO `city` VALUES ('959', 'Северск');
INSERT INTO `city` VALUES ('960', 'Стрежевой');
INSERT INTO `city` VALUES ('961', 'Томск');
INSERT INTO `city` VALUES ('962', 'Алексин');
INSERT INTO `city` VALUES ('963', 'Белёв');
INSERT INTO `city` VALUES ('964', 'Богородицк');
INSERT INTO `city` VALUES ('965', 'Болохово');
INSERT INTO `city` VALUES ('966', 'Венёв');
INSERT INTO `city` VALUES ('967', 'Донской');
INSERT INTO `city` VALUES ('968', 'Ефремов');
INSERT INTO `city` VALUES ('969', 'Кимовск');
INSERT INTO `city` VALUES ('970', 'Киреевск');
INSERT INTO `city` VALUES ('971', 'Липки');
INSERT INTO `city` VALUES ('972', 'Новомосковск');
INSERT INTO `city` VALUES ('973', 'Плавск');
INSERT INTO `city` VALUES ('974', 'Суворов');
INSERT INTO `city` VALUES ('975', 'Тула');
INSERT INTO `city` VALUES ('976', 'Узловая');
INSERT INTO `city` VALUES ('977', 'Чекалин');
INSERT INTO `city` VALUES ('978', 'Щёкино');
INSERT INTO `city` VALUES ('979', 'Ясногорск');
INSERT INTO `city` VALUES ('980', 'Советск');
INSERT INTO `city` VALUES ('981', 'Ак-Довурак');
INSERT INTO `city` VALUES ('982', 'Кызыл');
INSERT INTO `city` VALUES ('983', 'Туран');
INSERT INTO `city` VALUES ('984', 'Чадан');
INSERT INTO `city` VALUES ('985', 'Шагонар');
INSERT INTO `city` VALUES ('986', 'Заводоуковск');
INSERT INTO `city` VALUES ('987', 'Ишим');
INSERT INTO `city` VALUES ('988', 'Тобольск');
INSERT INTO `city` VALUES ('989', 'Тюмень');
INSERT INTO `city` VALUES ('990', 'Ялуторовск');
INSERT INTO `city` VALUES ('991', 'Воткинск');
INSERT INTO `city` VALUES ('992', 'Глазов');
INSERT INTO `city` VALUES ('993', 'Ижевск');
INSERT INTO `city` VALUES ('994', 'Камбарка');
INSERT INTO `city` VALUES ('995', 'Можга');
INSERT INTO `city` VALUES ('996', 'Сарапул');
INSERT INTO `city` VALUES ('997', 'Барыш');
INSERT INTO `city` VALUES ('998', 'Димитровград');
INSERT INTO `city` VALUES ('999', 'Инза');
INSERT INTO `city` VALUES ('1000', 'Новоульяновск');
INSERT INTO `city` VALUES ('1001', 'Сенгилей');
INSERT INTO `city` VALUES ('1002', 'Ульяновск');
INSERT INTO `city` VALUES ('1003', 'Амурск');
INSERT INTO `city` VALUES ('1004', 'Бикин');
INSERT INTO `city` VALUES ('1005', 'Вяземский');
INSERT INTO `city` VALUES ('1006', 'Комсомольск-на-Амуре');
INSERT INTO `city` VALUES ('1007', 'Николаевск-на-Амуре');
INSERT INTO `city` VALUES ('1008', 'Советская Гавань');
INSERT INTO `city` VALUES ('1009', 'Хабаровск');
INSERT INTO `city` VALUES ('1010', 'Абаза');
INSERT INTO `city` VALUES ('1011', 'Абакан');
INSERT INTO `city` VALUES ('1012', 'Саяногорск');
INSERT INTO `city` VALUES ('1013', 'Сорск');
INSERT INTO `city` VALUES ('1014', 'Черногорск');
INSERT INTO `city` VALUES ('1015', 'Белоярский');
INSERT INTO `city` VALUES ('1016', 'Когалым');
INSERT INTO `city` VALUES ('1017', 'Лангепас');
INSERT INTO `city` VALUES ('1018', 'Лянтор');
INSERT INTO `city` VALUES ('1019', 'Мегион');
INSERT INTO `city` VALUES ('1020', 'Нефтеюганск');
INSERT INTO `city` VALUES ('1021', 'Нижневартовск');
INSERT INTO `city` VALUES ('1022', 'Нягань');
INSERT INTO `city` VALUES ('1023', 'Покачи');
INSERT INTO `city` VALUES ('1024', 'Пыть-Ях');
INSERT INTO `city` VALUES ('1025', 'Радужный');
INSERT INTO `city` VALUES ('1026', 'Советский');
INSERT INTO `city` VALUES ('1027', 'Сургут');
INSERT INTO `city` VALUES ('1028', 'Урай');
INSERT INTO `city` VALUES ('1029', 'Ханты-Мансийск');
INSERT INTO `city` VALUES ('1030', 'Югорск');
INSERT INTO `city` VALUES ('1031', 'Аша');
INSERT INTO `city` VALUES ('1032', 'Бакал');
INSERT INTO `city` VALUES ('1033', 'Верхнеуральск');
INSERT INTO `city` VALUES ('1034', 'Верхний Уфалей');
INSERT INTO `city` VALUES ('1035', 'Еманжелинск');
INSERT INTO `city` VALUES ('1036', 'Златоуст');
INSERT INTO `city` VALUES ('1037', 'Карабаш');
INSERT INTO `city` VALUES ('1038', 'Карталы');
INSERT INTO `city` VALUES ('1039', 'Касли');
INSERT INTO `city` VALUES ('1040', 'Катав-Ивановск');
INSERT INTO `city` VALUES ('1041', 'Копейск');
INSERT INTO `city` VALUES ('1042', 'Коркино');
INSERT INTO `city` VALUES ('1043', 'Куса');
INSERT INTO `city` VALUES ('1044', 'Кыштым');
INSERT INTO `city` VALUES ('1045', 'Магнитогорск');
INSERT INTO `city` VALUES ('1046', 'Миасс');
INSERT INTO `city` VALUES ('1047', 'Миньяр');
INSERT INTO `city` VALUES ('1048', 'Нязепетровск');
INSERT INTO `city` VALUES ('1049', 'Озёрск');
INSERT INTO `city` VALUES ('1050', 'Пласт');
INSERT INTO `city` VALUES ('1051', 'Сатка');
INSERT INTO `city` VALUES ('1052', 'Сим');
INSERT INTO `city` VALUES ('1053', 'Снежинск');
INSERT INTO `city` VALUES ('1054', 'Трёхгорный');
INSERT INTO `city` VALUES ('1055', 'Троицк');
INSERT INTO `city` VALUES ('1056', 'Усть-Катав');
INSERT INTO `city` VALUES ('1057', 'Чебаркуль');
INSERT INTO `city` VALUES ('1058', 'Челябинск');
INSERT INTO `city` VALUES ('1059', 'Южноуральск');
INSERT INTO `city` VALUES ('1060', 'Юрюзань');
INSERT INTO `city` VALUES ('1061', 'Аргун');
INSERT INTO `city` VALUES ('1062', 'Грозный');
INSERT INTO `city` VALUES ('1063', 'Гудермес');
INSERT INTO `city` VALUES ('1064', 'Урус-Мартан');
INSERT INTO `city` VALUES ('1065', 'Шали');
INSERT INTO `city` VALUES ('1066', 'Алатырь');
INSERT INTO `city` VALUES ('1067', 'Канаш');
INSERT INTO `city` VALUES ('1068', 'Козловка');
INSERT INTO `city` VALUES ('1069', 'Мариинский Посад');
INSERT INTO `city` VALUES ('1070', 'Новочебоксарск');
INSERT INTO `city` VALUES ('1071', 'Цивильск');
INSERT INTO `city` VALUES ('1072', 'Чебоксары');
INSERT INTO `city` VALUES ('1073', 'Шумерля');
INSERT INTO `city` VALUES ('1074', 'Ядрин');
INSERT INTO `city` VALUES ('1075', 'Анадырь');
INSERT INTO `city` VALUES ('1076', 'Билибино');
INSERT INTO `city` VALUES ('1077', 'Певек');
INSERT INTO `city` VALUES ('1078', 'Алдан');
INSERT INTO `city` VALUES ('1079', 'Верхоянск');
INSERT INTO `city` VALUES ('1080', 'Вилюйск');
INSERT INTO `city` VALUES ('1081', 'Ленск');
INSERT INTO `city` VALUES ('1082', 'Мирный');
INSERT INTO `city` VALUES ('1083', 'Нерюнгри');
INSERT INTO `city` VALUES ('1084', 'Нюрба');
INSERT INTO `city` VALUES ('1085', 'Олёкминск');
INSERT INTO `city` VALUES ('1086', 'Покровск');
INSERT INTO `city` VALUES ('1087', 'Среднеколымск');
INSERT INTO `city` VALUES ('1088', 'Томмот');
INSERT INTO `city` VALUES ('1089', 'Удачный');
INSERT INTO `city` VALUES ('1090', 'Якутск');
INSERT INTO `city` VALUES ('1091', 'Губкинский');
INSERT INTO `city` VALUES ('1092', 'Лабытнанги');
INSERT INTO `city` VALUES ('1093', 'Муравленко');
INSERT INTO `city` VALUES ('1094', 'Надым');
INSERT INTO `city` VALUES ('1095', 'Новый Уренгой');
INSERT INTO `city` VALUES ('1096', 'Ноябрьск');
INSERT INTO `city` VALUES ('1097', 'Салехард');
INSERT INTO `city` VALUES ('1098', 'Тарко-Сале');
INSERT INTO `city` VALUES ('1099', 'Гаврилов-Ям');
INSERT INTO `city` VALUES ('1100', 'Данилов');
INSERT INTO `city` VALUES ('1101', 'Любим');
INSERT INTO `city` VALUES ('1102', 'Мышкин');
INSERT INTO `city` VALUES ('1103', 'Переславль-Залесский');
INSERT INTO `city` VALUES ('1104', 'Пошехонье');
INSERT INTO `city` VALUES ('1105', 'Ростов');
INSERT INTO `city` VALUES ('1106', 'Рыбинск');
INSERT INTO `city` VALUES ('1107', 'Тутаев');
INSERT INTO `city` VALUES ('1108', 'Углич');
INSERT INTO `city` VALUES ('1109', 'Ярославль');
INSERT INTO `city` VALUES ('1110', null);

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nick` varchar(16) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `ip` varchar(17) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('1', 'fdsgfsd', 'dfshsdf@gs', 'dfshsdfhd', '04.06.2019', '08:29:25', '127.0.0.1');
INSERT INTO `feedback` VALUES ('3', 'prethink ✔', 'prethink@mail.ru', 'Проверка системы обратной связи, привет, привет, проверка системы обратной связи', '04.06.2019', '14:52:07', '127.0.0.1');
INSERT INTO `feedback` VALUES ('4', 'prethink ✔', 'prethink@mail.ru', 'Проверка системы обратной связи, привет, привет, проверка системы обратной связи Проверка системы обратной связи, привет, привет, проверка системы обратной связи Проверка системы обратной связи, привет, привет, проверка системы обратной связи Проверка сис', '04.06.2019', '14:54:48', '127.0.0.1');
INSERT INTO `feedback` VALUES ('5', 'Лол', 'devilrain94@mail.ru', 'Орапр', '04.06.2019', '16:39:57', '192.168.1.1');
INSERT INTO `feedback` VALUES ('6', 'Раошг', 'prethink@mail.ru', 'Н со ш', '04.06.2019', '16:40:21', '176.59.136.164');
INSERT INTO `feedback` VALUES ('7', 'prethink ✔', 'prethink@mail.ru', 'ваыпваыпывпрцук', '04.06.2019', '16:44:42', '127.0.0.1');
INSERT INTO `feedback` VALUES ('8', 'prethink ✔', 'prethink@mail.ru', 'ewrwe', '05.06.2019', '07:46:05', '127.0.0.1');
INSERT INTO `feedback` VALUES ('9', 'prethink ✔', 'prethink@mail.ru ✔', 'dsfdsds', '05.06.2019', '07:47:05', '127.0.0.1');

-- ----------------------------
-- Table structure for gameform
-- ----------------------------
DROP TABLE IF EXISTS `gameform`;
CREATE TABLE `gameform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `GameForm` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `GameForm` (`GameForm`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gameform
-- ----------------------------
INSERT INTO `gameform` VALUES ('2', 'Онлайн');
INSERT INTO `gameform` VALUES ('3', 'Онлайн, Оффлайн');
INSERT INTO `gameform` VALUES ('1', 'Оффлайн');

-- ----------------------------
-- Table structure for gamesystem
-- ----------------------------
DROP TABLE IF EXISTS `gamesystem`;
CREATE TABLE `gamesystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `GameSystem` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `GameSystem` (`GameSystem`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gamesystem
-- ----------------------------
INSERT INTO `gamesystem` VALUES ('21', ' Cyberpunk2020');
INSERT INTO `gamesystem` VALUES ('13', '7th Sea');
INSERT INTO `gamesystem` VALUES ('22', 'Apocalypse World');
INSERT INTO `gamesystem` VALUES ('3', 'D&D 3.5');
INSERT INTO `gamesystem` VALUES ('2', 'D&D 4');
INSERT INTO `gamesystem` VALUES ('1', 'D&D 5');
INSERT INTO `gamesystem` VALUES ('20', 'Dark Heresy');
INSERT INTO `gamesystem` VALUES ('18', 'Fallout PnP');
INSERT INTO `gamesystem` VALUES ('12', 'Fate Core');
INSERT INTO `gamesystem` VALUES ('6', 'GURPS');
INSERT INTO `gamesystem` VALUES ('7', 'Shadowrun');
INSERT INTO `gamesystem` VALUES ('17', 'UknownArmys');
INSERT INTO `gamesystem` VALUES ('11', 'Warhammer 40k: Dark Heresy');
INSERT INTO `gamesystem` VALUES ('10', 'Warhammer 40k: Only War');
INSERT INTO `gamesystem` VALUES ('9', 'Warhammer 40k: Rogue Trader');
INSERT INTO `gamesystem` VALUES ('23', 'Warhammer FRPG');
INSERT INTO `gamesystem` VALUES ('4', 'WoD: Вампиры');
INSERT INTO `gamesystem` VALUES ('5', 'WoD: Иные Линейки');
INSERT INTO `gamesystem` VALUES ('15', 'Дневник Авантюриста');
INSERT INTO `gamesystem` VALUES ('8', 'Любая Легкая (мало правил)');
INSERT INTO `gamesystem` VALUES ('16', 'Любая Тяжелая (много правил)');
INSERT INTO `gamesystem` VALUES ('14', 'Словеска');
INSERT INTO `gamesystem` VALUES ('19', 'Эра водолея');

-- ----------------------------
-- Table structure for gamexp
-- ----------------------------
DROP TABLE IF EXISTS `gamexp`;
CREATE TABLE `gamexp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(50) NOT NULL,
  `games` varchar(11) DEFAULT NULL,
  `system` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `GameXp` (`rank`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gamexp
-- ----------------------------
INSERT INTO `gamexp` VALUES ('1', 'Дегустатор-Ветеран', '50', '3-5');
INSERT INTO `gamexp` VALUES ('2', 'Дегустатор-Новичок', '10', '3-5');
INSERT INTO `gamexp` VALUES ('3', 'Дегустатор-Стажер', '20', '3-5');
INSERT INTO `gamexp` VALUES ('4', 'Нет опыта', '0', '0');
INSERT INTO `gamexp` VALUES ('5', 'Сомелье-Ветеран', '50', '5-10');
INSERT INTO `gamexp` VALUES ('6', 'Сомелье-Новичок', '10', '5-10');
INSERT INTO `gamexp` VALUES ('7', 'Сомелье-Стажер', '20', '5-10');
INSERT INTO `gamexp` VALUES ('8', 'Ценитель-Ветеран', '50', '1-2');
INSERT INTO `gamexp` VALUES ('9', 'Ценитель-Новичок', '10', '1-2');
INSERT INTO `gamexp` VALUES ('10', 'Ценитель-Стажер', '20', '1-2');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `newscat_id` int(11) unsigned DEFAULT NULL,
  `title` varchar(80) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `datenews` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `author_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `AuthorRef` (`author_id`),
  KEY `NewsCatRef` (`newscat_id`),
  CONSTRAINT `AuthorRef` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `NewsCatRef` FOREIGN KEY (`newscat_id`) REFERENCES `newscategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('12', '1', 'Первая новость', 'Добро пожаловать на сайт, для игроков настольных и ролевых игр!', '2019-04-10 10:00:25', '16');
INSERT INTO `news` VALUES ('13', '1', 'Новость для отчета', 'Тестовая новость для отчета!', '2019-05-06 11:19:43', '16');
INSERT INTO `news` VALUES ('14', '2', 'Тест категории', 'Тест категории', '2019-06-06 11:20:06', '16');

-- ----------------------------
-- Table structure for newscategory
-- ----------------------------
DROP TABLE IF EXISTS `newscategory`;
CREATE TABLE `newscategory` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `newscat` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newscategory
-- ----------------------------
INSERT INTO `newscategory` VALUES ('1', 'Главные');
INSERT INTO `newscategory` VALUES ('2', 'Второстепенные');
INSERT INTO `newscategory` VALUES ('3', 'Настольные ролевые игры');

-- ----------------------------
-- Table structure for newscoments
-- ----------------------------
DROP TABLE IF EXISTS `newscoments`;
CREATE TABLE `newscoments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(11) unsigned NOT NULL,
  `login_id` int(11) unsigned NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `newsRef` (`news_id`),
  KEY `userRef` (`login_id`),
  CONSTRAINT `newsRef` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userRef` FOREIGN KEY (`login_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newscoments
-- ----------------------------
INSERT INTO `newscoments` VALUES ('14', '13', '16', 'dsfds', '2019-05-06 14:51:33');
INSERT INTO `newscoments` VALUES ('15', '13', '26', 'Всем привет!', '2019-06-07 09:46:28');
INSERT INTO `newscoments` VALUES ('16', '13', '16', 'dsfgfdgfdghfds', '2019-06-08 12:39:27');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'Игрок');
INSERT INTO `role` VALUES ('3', 'Игрок-мастер');
INSERT INTO `role` VALUES ('2', 'Мастер');

-- ----------------------------
-- Table structure for timezone
-- ----------------------------
DROP TABLE IF EXISTS `timezone`;
CREATE TABLE `timezone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TimeZone` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `TimeZone` (`TimeZone`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of timezone
-- ----------------------------
INSERT INTO `timezone` VALUES ('3', 'UTC -10:00');
INSERT INTO `timezone` VALUES ('2', 'UTC -11:00');
INSERT INTO `timezone` VALUES ('1', 'UTC -12:00');
INSERT INTO `timezone` VALUES ('12', 'UTC -1:00');
INSERT INTO `timezone` VALUES ('11', 'UTC -2:00');
INSERT INTO `timezone` VALUES ('10', 'UTC -3:00');
INSERT INTO `timezone` VALUES ('9', 'UTC -4:00');
INSERT INTO `timezone` VALUES ('8', 'UTC -5:00');
INSERT INTO `timezone` VALUES ('7', 'UTC -6:00');
INSERT INTO `timezone` VALUES ('6', 'UTC -7:00');
INSERT INTO `timezone` VALUES ('5', 'UTC -8:00');
INSERT INTO `timezone` VALUES ('4', 'UTC -9:00');
INSERT INTO `timezone` VALUES ('13', 'UTC 00:00');
INSERT INTO `timezone` VALUES ('23', 'UTC 10:00');
INSERT INTO `timezone` VALUES ('24', 'UTC 11:00');
INSERT INTO `timezone` VALUES ('25', 'UTC 12:00');
INSERT INTO `timezone` VALUES ('14', 'UTC 1:00');
INSERT INTO `timezone` VALUES ('15', 'UTC 2:00');
INSERT INTO `timezone` VALUES ('16', 'UTC 3:00');
INSERT INTO `timezone` VALUES ('17', 'UTC 4:00');
INSERT INTO `timezone` VALUES ('18', 'UTC 5:00');
INSERT INTO `timezone` VALUES ('19', 'UTC 6:00');
INSERT INTO `timezone` VALUES ('20', 'UTC 7:00');
INSERT INTO `timezone` VALUES ('21', 'UTC 8:00');
INSERT INTO `timezone` VALUES ('22', 'UTC 9:00');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(16) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cookie` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rank` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `regdate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `lastdate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `vk` varchar(40) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `discord` varchar(40) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('16', 'prethink', 'prethink@mail.ru', '$2y$10$V.zDjOmG13GM7NrboPmCJu65N7CQaKoD93v5JVJ.WMeVGWeJYVYvi', null, '3', '5cfa571e172b5.gif', '2019-06-07 19:22:54', '2019-06-07 19:22:54', 'cem94', 'prethink');
INSERT INTO `user` VALUES ('19', 'harison', 'harison@mail.ru', '$2y$10$L1qa1hjlItxYPtZmxlYIueXQPmaYdO3jj8U4yu8lgZF0K4Ud3Hlj.', null, '0', '5cf787ffa299b.jpg', '2019-06-08 11:06:37', '2019-06-08 11:06:37', 'har', 'hr');
INSERT INTO `user` VALUES ('21', 'vermant', 'vermant@mail.ru', '$2y$10$C3rUZRgn2/kuBzdrPCb6u.qO2H0GFHL5ZTgA08YCEy5idpM3CDsfq', null, '0', 'noavatar.png', '2019-06-08 11:06:25', '2019-06-08 11:06:25', 'ver', 'ver');
INSERT INTO `user` VALUES ('22', 'Akril', 'Akril@mail.ru', '$2y$10$F/rYrNfgcHJUza0lv2Qie.XoMlROgFHP8xbL.OVFtfGbkO1AGe6Uu', null, '0', '5cf9cd3257fa9.jpg', '2019-05-24 09:40:32', '2019-06-07 10:09:28', 'Akril1994', 'Akril');
INSERT INTO `user` VALUES ('23', 'Ivanok', 'Ivanok@yandex.ru', '$2y$10$YRPuzIGACYgl.f6EQXx.v.FugcJ.aaX.yr8ugjhGwhEN7ei.EXYQO', null, '0', '5cf9ced2284f7.jpg', '2019-05-28 09:41:25', '2019-06-07 10:09:33', 'Ivanok2', 'Ivanok');
INSERT INTO `user` VALUES ('24', 'Zick', 'Zick@yandex.ru', '$2y$10$mUCpOMexp1lfvGH.XD7WGuZs7IsQOlalaNP2Tse3PHfaPKipvKRiG', null, '0', 'noavatar.png', '2019-05-29 09:32:22', '2019-06-07 10:09:40', null, null);
INSERT INTO `user` VALUES ('25', 'LEO', 'LEO@yandex.ru', '$2y$10$YMskeZAB8IQ3gQzp.2Hr6.UJPyme2OgyJkh4.uJGGJfQ7Ot3Zt8/6', null, '0', '5cf9cf6881c32.jpg', '2019-05-31 09:43:57', '2019-06-07 10:09:44', 'LEO', 'LEO');
INSERT INTO `user` VALUES ('26', 'N1CeR', 'N1CeR@yandex.ru', '$2y$10$m./Km89h3/WGS/p.mtMvlebm6rB7JRfFuMwRE4Itd6bmFqKW7/euu', null, '0', '5cf9cfe16fc86.jpg', '2019-06-12 09:47:01', '2019-06-07 10:09:51', 'N1CeR', 'N1CeR1995');
INSERT INTO `user` VALUES ('27', 'Barmaley', 'Barmaley@yandex.ru', '$2y$10$A9wD9knGrmALPOj3JJLhy.BkqagkDUJ.HNkBr4IE/UtlQxdZG7km2', null, '0', '5cf9d04a5d5f9.jpg', '2019-06-07 09:47:52', '2019-06-07 09:47:52', 'Barmaley1', 'Barmaley');
INSERT INTO `user` VALUES ('28', 'VimeR', 'VimeR@rambler.ru', '$2y$10$FzrMJTrzSJ1ExIPFFV8t1.m7r0iyRX4nR4K7utYmFLbhNI5h0Hc1i', null, '0', '5cf9d0b04e1cb.jpg', '2019-06-07 09:49:23', '2019-06-07 10:08:55', 'VimeR22', 'VimeR');
INSERT INTO `user` VALUES ('29', 'Cortez', 'Cortez@ya.ru', '$2y$10$4huihpE3JlPVJkuYQFc7tOo5NyeH.w582k3h785o/ysfx3.4hq1de', null, '0', '5cf9d1062c3a1.png', '2019-06-07 09:50:49', '2019-06-07 09:50:49', 'Cortez111', 'Cortez');
INSERT INTO `user` VALUES ('30', 'Incrediblee', 'Incrediblee@yandex.ru', '$2y$10$IL5EJerGOsNHCJHLH0lzDONmsbqgt3htUiju/rp32Yo0YmR4QYFGu', null, '0', '5cf9d164ba463.jpg', '2019-06-07 09:52:22', '2019-06-07 10:08:52', 'Incrediblee', 'Incrediblee');
INSERT INTO `user` VALUES ('31', 'Mr_Rigos', 'Mr_Rigos@ya.ru', '$2y$10$cFsg7Zn7RrH0vkR81.DjsuM4KhOiSijeHpviaHjVxI5epRMk8CgUW', null, '0', '5cf9d1a433e54.jpg', '2019-06-07 09:53:26', '2019-06-07 09:53:26', 'Mr_Rigos553', 'Mr_Rigos');
INSERT INTO `user` VALUES ('32', 'Valera', 'valera@yan.ru', '$2y$10$1T3nK5VoMSu6Ei4zcGdkT.aPku9jRPDJOLGvrnh2RCs68XnIh2Szm', null, '0', 'noavatar.png', '2019-06-08 11:38:26', null, '-', '-');
INSERT INTO `user` VALUES ('33', 'admin', 'alexvelyan@gmail.com', '$2y$10$JzyChUAa9DNkYEwu4cN4sOeUSoCQRixSx1ieHsginlotKybExlrsS', null, '0', 'noavatar.png', '2019-06-08 20:26:43', null, '-', '-');
INSERT INTO `user` VALUES ('34', 'hasfs', 'harison@yandex.ru', '$2y$10$waraIjranp1SVCkT.gMvbu6DrVVW4aW.X9Bj.Fr8G18yMLRK5S0rW', null, '0', 'noavatar.png', '2019-06-10 12:14:57', null, '-', '-');

-- ----------------------------
-- Table structure for usergameid
-- ----------------------------
DROP TABLE IF EXISTS `usergameid`;
CREATE TABLE `usergameid` (
  `userid` int(11) unsigned DEFAULT NULL,
  `gamesystemid` int(11) DEFAULT NULL,
  KEY `gamesystemid` (`gamesystemid`),
  KEY `userid` (`userid`),
  CONSTRAINT `gamesystemid` FOREIGN KEY (`gamesystemid`) REFERENCES `gamesystem` (`id`),
  CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usergameid
-- ----------------------------
INSERT INTO `usergameid` VALUES ('19', '3');
INSERT INTO `usergameid` VALUES ('22', '23');
INSERT INTO `usergameid` VALUES ('22', '21');
INSERT INTO `usergameid` VALUES ('22', '20');
INSERT INTO `usergameid` VALUES ('23', '23');
INSERT INTO `usergameid` VALUES ('23', '21');
INSERT INTO `usergameid` VALUES ('25', '5');
INSERT INTO `usergameid` VALUES ('25', '3');
INSERT INTO `usergameid` VALUES ('25', '2');
INSERT INTO `usergameid` VALUES ('26', '21');
INSERT INTO `usergameid` VALUES ('26', '7');
INSERT INTO `usergameid` VALUES ('26', '4');
INSERT INTO `usergameid` VALUES ('27', '21');
INSERT INTO `usergameid` VALUES ('27', '7');
INSERT INTO `usergameid` VALUES ('27', '2');
INSERT INTO `usergameid` VALUES ('28', '21');
INSERT INTO `usergameid` VALUES ('28', '15');
INSERT INTO `usergameid` VALUES ('28', '12');
INSERT INTO `usergameid` VALUES ('29', '23');
INSERT INTO `usergameid` VALUES ('29', '16');
INSERT INTO `usergameid` VALUES ('29', '14');
INSERT INTO `usergameid` VALUES ('30', '21');
INSERT INTO `usergameid` VALUES ('30', '6');
INSERT INTO `usergameid` VALUES ('30', '3');
INSERT INTO `usergameid` VALUES ('31', '21');
INSERT INTO `usergameid` VALUES ('31', '9');
INSERT INTO `usergameid` VALUES ('31', '6');
INSERT INTO `usergameid` VALUES ('16', '23');
INSERT INTO `usergameid` VALUES ('16', '21');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login_id` int(11) unsigned DEFAULT NULL,
  `city_id` int(11) unsigned DEFAULT NULL,
  `utc_id` int(11) DEFAULT NULL,
  `gameform_id` int(11) DEFAULT NULL,
  `gamexp_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`login_id`),
  KEY `city` (`city_id`),
  KEY `utc` (`utc_id`),
  KEY `gamexp` (`gamexp_id`),
  KEY `role` (`role_id`),
  KEY `gameform` (`gameform_id`),
  CONSTRAINT `city` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `gameform` FOREIGN KEY (`gameform_id`) REFERENCES `gameform` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `gamexp` FOREIGN KEY (`gamexp_id`) REFERENCES `gamexp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`login_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `utc` FOREIGN KEY (`utc_id`) REFERENCES `timezone` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('17', '16', '1010', '1', '1', '1', '1', 'Проверка информации о себе');
INSERT INTO `userinfo` VALUES ('18', '19', '728', '8', '3', '7', '3', 'Привет');
INSERT INTO `userinfo` VALUES ('19', '21', '410', '7', '2', '9', '3', '');
INSERT INTO `userinfo` VALUES ('20', '22', '49', '14', '2', '10', '3', 'Акрил мое имя');
INSERT INTO `userinfo` VALUES ('21', '23', '47', '19', '2', '9', '3', 'Добавляйтесь в вк');
INSERT INTO `userinfo` VALUES ('22', '25', '8', '18', '2', '7', '2', 'Leo как черепашка-ниндзя');
INSERT INTO `userinfo` VALUES ('23', '26', '290', '16', '2', '10', '2', 'Кошки мои любимые животные');
INSERT INTO `userinfo` VALUES ('24', '27', '377', '17', '2', '9', '2', 'Меня зовут Игорь, мне 25 лет, живу в Москве.');
INSERT INTO `userinfo` VALUES ('25', '28', '1086', '6', '3', '9', '3', '');
INSERT INTO `userinfo` VALUES ('26', '29', '863', '19', '3', '10', '2', 'Играю в баскетболл!');
INSERT INTO `userinfo` VALUES ('27', '30', '1031', '13', '3', '8', '2', '');
INSERT INTO `userinfo` VALUES ('28', '31', '35', '11', '3', '5', '3', '');
INSERT INTO `userinfo` VALUES ('29', '33', '1010', '1', '1', '1', '1', '');
SET FOREIGN_KEY_CHECKS=1;
