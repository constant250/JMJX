<?php

use Illuminate\Database\Seeder;

class CityIdentifier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_city_identifier` VALUES (1,1,'NSW','Sydney (Capital)'),(2,1,'NSW','Albury (NSW-Victoria border)'),(3,1,'NSW','Armidale'),(4,1,'NSW','Bathurst'),(5,1,'NSW','Broken Hill'),(6,1,'NSW','Cessnock'),(7,1,'NSW','Coffs Harbour'),(8,1,'NSW','Dubbo'),(9,1,'NSW','Gosford'),(10,1,'NSW','Goulburn'),(11,1,'NSW','Grafton'),(12,1,'NSW','Griffith'),(13,1,'NSW','Lake Macquarie'),(14,1,'NSW','Lismore'),(15,1,'NSW','Maitland'),(16,1,'NSW','Newcastle'),(17,1,'NSW','Nowra'),(18,1,'NSW','Orange'),(19,1,'NSW','Port Macquarie'),(20,1,'NSW','Queanbeyan (adjacent to Canberra)'),(21,1,'NSW','Tamworth'),(22,1,'NSW','Tweed Heads (NSW-Queensland border)'),(23,1,'NSW','Wagga Wagga'),(24,1,'NSW','Wollongong'),(25,1,'NSW','Wyong'),(26,7,'NT','Darwin (Capital)'),(27,7,'NT','Alice Springs'),(28,7,'NT','Katherine'),(29,7,'NT','Palmerston'),(30,3,'QLD','Brisbane (Capital)'),(31,3,'QLD','Bundaberg'),(32,3,'QLD','Cairns'),(33,3,'QLD','Charters Towers'),(34,3,'QLD','Gladstone'),(35,3,'QLD','Gold Coast'),(36,3,'QLD','Gympie'),(37,3,'QLD','Hervey Bay'),(38,3,'QLD','Ipswich'),(39,3,'QLD','Logan City'),(40,3,'QLD','Mackay'),(41,3,'QLD','Maryborough'),(42,3,'QLD','Mount Isa'),(43,3,'QLD','Nambour'),(44,3,'QLD','Redcliffe'),(45,3,'QLD','Rockhampton'),(46,3,'QLD','Sunshine Coast {region}'),(47,3,'QLD','Thuringowa'),(48,3,'QLD','Toowoomba'),(49,3,'QLD','Townsville'),(50,4,'SA','Adelaide (Capital)'),(51,4,'SA','Gladstone'),(52,4,'SA','Mount Gambier'),(53,4,'SA','Murray Bridge'),(54,4,'SA','Port Augusta'),(55,4,'SA','Port Pirie'),(56,4,'SA','Port Lincoln'),(57,4,'SA','Victor Harbor'),(58,4,'SA','Whyalla'),(59,6,'TAS','Hobart (Capital)'),(60,6,'TAS','Burnie'),(61,6,'TAS','Clarence'),(62,6,'TAS','Devonport'),(63,6,'TAS','Glenorchy'),(64,6,'TAS','Launceston'),(65,2,'VIC','Melbourne (Capital)'),(66,2,'VIC','Benalla'),(67,2,'VIC','Ballarat'),(68,2,'VIC','Bendigo'),(69,2,'VIC','Geelong'),(70,2,'VIC','Latrobe City'),(71,2,'VIC','Mildura'),(72,2,'VIC','Shepparton'),(73,2,'VIC','Swan Hill'),(74,2,'VIC','Wangaratta'),(75,2,'VIC','Warrnambool'),(76,2,'VIC','Wodonga'),(77,5,'WA','Perth (Capital)'),(78,5,'WA','Albany'),(79,5,'WA','Broome'),(80,5,'WA','Bunbury'),(81,5,'WA','Geraldton'),(82,5,'WA','Fremantle'),(83,5,'WA','Kalgoorlie'),(84,5,'WA','Mandurah'),(85,5,'WA','Port Hedland')");
    }
}
