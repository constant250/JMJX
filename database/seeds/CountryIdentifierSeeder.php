<?php

use Illuminate\Database\Seeder;

class CountryIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_country_identifier` VALUES (1,'0','Inadequately Described'),(2,'1','At Sea'),(3,'911','Europe, nfd'),(4,'912','Former USSR, nfd'),(5,'915','Kurdistan, nfd'),(6,'916','East Asia, nfd'),(7,'917','Asia, nfd'),(8,'918','Africa, nfd'),(9,'1000','Oceania and Antarctica'),(10,'1100','Australia (includes External Territories)'),(11,'1101','Australia'),(12,'1102','Norfolk Island'),(13,'1199','Australian External Territories, nec'),(14,'1201','New Zealand'),(15,'1300','Melanesia'),(16,'1301','New Caledonia'),(17,'1302','Papua New Guinea'),(18,'1303','Solomon Islands'),(19,'1304','Vanuatu'),(20,'1400','Micronesia'),(21,'1401','Guam'),(22,'1402','Kiribati'),(23,'1403','Marshall Islands'),(24,'1404','Micronesia, Federated States of'),(25,'1405','Nauru'),(26,'1406','Northern Mariana Islands'),(27,'1407','Palau'),(28,'1500','Polynesia (excludes Hawaii)'),(29,'1501','Cook Islands'),(30,'1502','Fiji'),(31,'1503','French Polynesia'),(32,'1504','Niue'),(33,'1505','Samoa'),(34,'1506','Samoa, American'),(35,'1507','Tokelau'),(36,'1508','Tonga'),(37,'1511','Tuvalu'),(38,'1512','Wallis and Futuna'),(39,'1513','Pitcairn Islands'),(40,'1599','Polynesia (excludes Hawaii), nec'),(41,'1600','Antarctica'),(42,'1601','Adelie Land (France)'),(43,'1602','Argentinian Antarctic Territory'),(44,'1603','Australian Antarctic Territory'),(45,'1604','British Antarctic Territory'),(46,'1605','Chilean Antarctic Territory'),(47,'1606','Queen Maud Land (Norway)'),(48,'1607','Ross Dependency (New Zealand)'),(49,'2000','North-West Europe'),(50,'2100','United Kingdom, Channel Islands and Isle of Man'),(51,'2102','England'),(52,'2103','Isle of Man'),(53,'2104','Northern Ireland'),(54,'2105','Scotland'),(55,'2106','Wales'),(56,'2107','Guernsey'),(57,'2108','Jersey'),(58,'2201','Ireland'),(59,'2300','Western Europe'),(60,'2301','Austria'),(61,'2302','Belgium'),(62,'2303','France'),(63,'2304','Germany'),(64,'2305','Liechtenstein'),(65,'2306','Luxembourg'),(66,'2307','Monaco'),(67,'2308','Netherlands'),(68,'2311','Switzerland'),(69,'2400','Northern Europe'),(70,'2401','Denmark'),(71,'2402','Faroe Islands'),(72,'2403','Finland'),(73,'2404','Greenland'),(74,'2405','Iceland'),(75,'2406','Norway'),(76,'2407','Sweden'),(77,'2408','Aland Islands'),(78,'3000','Southern and Eastern Europe'),(79,'3100','Southern Europe'),(80,'3101','Andorra'),(81,'3102','Gibraltar'),(82,'3103','Holy See'),(83,'3104','Italy'),(84,'3105','Malta'),(85,'3106','Portugal'),(86,'3107','San Marino'),(87,'3108','Spain'),(88,'3200','South Eastern Europe'),(89,'3201','Albania'),(90,'3202','Bosnia and Herzegovina'),(91,'3203','Bulgaria'),(92,'3204','Croatia'),(93,'3205','Cyprus'),(94,'3206','The former Yugoslav Republic of Macedonia'),(95,'3207','Greece'),(96,'3208','Moldova'),(97,'3211','Romania'),(98,'3212','Slovenia'),(99,'3214','Montenegro'),(100,'3215','Serbia'),(101,'3216','Kosovo'),(102,'3300','Eastern Europe'),(103,'3301','Belarus'),(104,'3302','Czech Republic'),(105,'3303','Estonia'),(106,'3304','Hungary'),(107,'3305','Latvia'),(108,'3306','Lithuania'),(109,'3307','Poland'),(110,'3308','Russian Federation'),(111,'3311','Slovakia'),(112,'3312','Ukraine'),(113,'4000','North Africa and the Middle East'),(114,'4100','North Africa'),(115,'4101','Algeria'),(116,'4102','Egypt'),(117,'4103','Libya'),(118,'4104','Morocco'),(119,'4105','Sudan'),(120,'4106','Tunisia'),(121,'4107','Western Sahara'),(122,'4108','Spanish North Africa'),(123,'4111','South Sudan'),(124,'4200','Middle East'),(125,'4201','Bahrain'),(126,'4202','Gaza Strip and West Bank'),(127,'4203','Iran'),(128,'4204','Iraq'),(129,'4205','Israel'),(130,'4206','Jordan'),(131,'4207','Kuwait'),(132,'4208','Lebanon'),(133,'4211','Oman'),(134,'4212','Qatar'),(135,'4213','Saudi Arabia'),(136,'4214','Syria'),(137,'4215','Turkey'),(138,'4216','United Arab Emirates'),(139,'4217','Yemen'),(140,'5000','South-East Asia'),(141,'5100','Mainland South-East Asia'),(142,'5101','Myanmar'),(143,'5102','Cambodia'),(144,'5103','Laos'),(145,'5104','Thailand'),(146,'5105','Vietnam'),(147,'5200','Maritime South-East Asia'),(148,'5201','Brunei Darussalam'),(149,'5202','Indonesia'),(150,'5203','Malaysia'),(151,'5204','Philippines'),(152,'5205','Singapore'),(153,'5206','Timor-Leste'),(154,'6000','North-East Asia'),(155,'6100','Chinese Asia (includes Mongolia)'),(156,'6101','China (excludes SARs and Taiwan)'),(157,'6102','Hong Kong (SAR of China)'),(158,'6103','Macau (SAR of China)'),(159,'6104','Mongolia'),(160,'6105','Taiwan'),(161,'6200','Japan and the Koreas'),(162,'6201','Japan'),(163,'6202','Korea, Democratic Peoples Republic of (North)'),(164,'6203','Korea, Republic of (South)'),(165,'7000','Southern and Central Asia'),(166,'7100','Southern Asia'),(167,'7101','Bangladesh'),(168,'7102','Bhutan'),(169,'7103','India'),(170,'7104','Maldives'),(171,'7105','Nepal'),(172,'7106','Pakistan'),(173,'7107','Sri Lanka'),(174,'7200','Central Asia'),(175,'7201','Afghanistan'),(176,'7202','Armenia'),(177,'7203','Azerbaijan'),(178,'7204','Georgia'),(179,'7205','Kazakhstan'),(180,'7206','Kyrgyzstan'),(181,'7207','Tajikistan'),(182,'7208','Turkmenistan'),(183,'7211','Uzbekistan'),(184,'8000','Americas'),(185,'8100','Northern America'),(186,'8101','Bermuda'),(187,'8102','Canada'),(188,'8103','St Pierre and Miquelon'),(189,'8104','United States of America'),(190,'8200','South America'),(191,'8201','Argentina'),(192,'8202','Bolivia'),(193,'8203','Brazil'),(194,'8204','Chile'),(195,'8205','Colombia'),(196,'8206','Ecuador'),(197,'8207','Falkland Islands'),(198,'8208','French Guiana'),(199,'8211','Guyana'),(200,'8212','Paraguay'),(201,'8213','Peru'),(202,'8214','Suriname'),(203,'8215','Uruguay'),(204,'8216','Venezuela'),(205,'8299','South America, nec'),(206,'8300','Central America'),(207,'8301','Belize'),(208,'8302','Costa Rica'),(209,'8303','El Salvador'),(210,'8304','Guatemala'),(211,'8305','Honduras'),(212,'8306','Mexico'),(213,'8307','Nicaragua'),(214,'8308','Panama'),(215,'8400','Caribbean'),(216,'8401','Anguilla'),(217,'8402','Antigua and Barbuda'),(218,'8403','Aruba'),(219,'8404','Bahamas'),(220,'8405','Barbados'),(221,'8406','Cayman Islands'),(222,'8407','Cuba'),(223,'8408','Dominica'),(224,'8411','Dominican Republic'),(225,'8412','Grenada'),(226,'8413','Guadeloupe'),(227,'8414','Haiti'),(228,'8415','Jamaica'),(229,'8416','Martinique'),(230,'8417','Montserrat'),(231,'8421','Puerto Rico'),(232,'8422','St Kitts and Nevis'),(233,'8423','St Lucia'),(234,'8424','St Vincent and the Grenadines'),(235,'8425','Trinidad and Tobago'),(236,'8426','Turks and Caicos Islands'),(237,'8427','Virgin Islands, British'),(238,'8428','Virgin Islands, United States'),(239,'8431','St Barthelemy'),(240,'8432','St Martin (French part)'),(241,'8433','Bonaire, Sint Eustatius and Saba'),(242,'8434','Curacao'),(243,'8435','Sint Maarten (Dutch part)'),(244,'9000','Sub-Saharan Africa'),(245,'9100','Central and West Africa'),(246,'9101','Benin'),(247,'9102','Burkina Faso'),(248,'9103','Cameroon'),(249,'9104','Cape Verde'),(250,'9105','Central African Republic'),(251,'9106','Chad'),(252,'9107','Congo, Republic of '),(253,'9108','Congo, Democratic Republic of'),(254,'9111','Cote d Ivoire'),(255,'9112','Equatorial Guinea'),(256,'9113','Gabon'),(257,'9114','Gambia'),(258,'9115','Ghana'),(259,'9116','Guinea'),(260,'9117','Guinea-Bissau'),(261,'9118','Liberia'),(262,'9121','Mali'),(263,'9122','Mauritania'),(264,'9123','Niger'),(265,'9124','Nigeria'),(266,'9125','Sao Tome and Principe'),(267,'9126','Senegal'),(268,'9127','Sierra Leone'),(269,'9128','Togo'),(270,'9200','Southern and East Africa'),(271,'9201','Angola'),(272,'9202','Botswana'),(273,'9203','Burundi'),(274,'9204','Comoros'),(275,'9205','Djibouti'),(276,'9206','Eritrea'),(277,'9207','Ethiopia'),(278,'9208','Kenya'),(279,'9211','Lesotho'),(280,'9212','Madagascar'),(281,'9213','Malawi'),(282,'9214','Mauritius'),(283,'9215','Mayotte'),(284,'9216','Mozambique'),(285,'9217','Namibia'),(286,'9218','Reunion'),(287,'9221','Rwanda'),(288,'9222','St Helena'),(289,'9223','Seychelles'),(290,'9224','Somalia'),(291,'9225','South Africa'),(292,'9226','Swaziland'),(293,'9227','Tanzania'),(294,'9228','Uganda'),(295,'9231','Zambia'),(296,'9232','Zimbabwe'),(297,'9299','Southern and East Africa, nec'),(298,'@@@@','Not Specified')");
    }
}
