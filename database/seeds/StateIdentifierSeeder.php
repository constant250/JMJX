<?php

use Illuminate\Database\Seeder;

class StateIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_state_identifier` VALUES (1,01,'B1','NSW','NSW','New South Wales'),(2,02,'B6','VIC','VIC','Victoria'),(3,03,'B3','QLD','QLD','Queensland'),(4,04,'B4','SA','SA','South Australia'),(5,05,'B7','WA','WA','Western Australia'),(6,06,'B5','TAS','TAS','Tasmania'),(7,07,'B2','NT','NT','Northern Territory'),(8,08,'B0','ACT','ACT','Australian Capital Territory'),(9,09,'09','OAT','Other Australian Territories or Dependencies','Other Australian Territories or Dependencies'),(10,99,'99','OO','Other (Overseas but not an Australian Territory or Dependency)','Other (Overseas but not an Australian Territory or Dependency)'),(11,00,'00','INT','INT','International')");
    }
}
