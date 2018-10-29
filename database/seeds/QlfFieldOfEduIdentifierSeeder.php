<?php

use Illuminate\Database\Seeder;

class QlfFieldOfEduIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_qlf_field_of_educ_identifier` VALUES (1,101,'Mathematical Sciences'),(2,103,'Physics And Astronomy'),(3,105,'Chemical Sciences'),(4,107,'Earth Sciences'),(5,109,'Biological Sciences'),(6,127,'Other Natural And Physical Sciences'),(7,127,'Computer Science'),(8,127,'Information Systems'),(9,127,'Other Information Technology'),(10,127,'Manufacturing Engineering And Technology'),(11,127,'Process And Resources Engineering'),(12,127,'Automotive Engineering And Technology'),(13,127,'Mechanical And Industrial Engineering And Technology'),(14,127,'Civil Engineering'),(15,127,'Geomatic Engineering'),(16,127,'Electrical And Electronic Engineering And Technology'),(17,127,'Aerospace Engineering And Technology'),(18,127,'Maritime Engineering And Technology'),(19,127,'Other Engineering And Related Technologies'),(20,127,'Architecture And Urban Environment'),(21,127,'Building'),(22,127,'Agriculture'),(23,127,'Horticulture And Viticulture'),(24,127,'Forestry Studies'),(25,127,'Fisheries Studies'),(26,127,'Environmental Studies'),(27,127,'Other Agriculture, Environmental And Related Studies'),(28,127,'Medical Studies'),(29,127,'Nursing'),(30,127,'Pharmacy'),(31,127,'Dental Studies'),(32,127,'Optical Science'),(33,127,'Veterinary Studies'),(34,127,'Public Health'),(35,127,'Radiography'),(36,127,'Rehabilitation Therapies'),(37,127,'Complementary Therapies'),(38,127,'Other Health'),(39,127,'Teacher Education'),(40,127,'Curriculum And Education Studies'),(41,127,'Other Education'),(42,127,'Business And Management'),(43,127,'Sales And Marketing'),(44,127,'Tourism'),(45,127,'Office Studies'),(46,127,'Banking, Finance And Related Fields'),(47,127,'Other Management And Commerce'),(48,127,'Political Science And Policy Studies'),(49,127,'Studies In Human Society'),(50,127,'Human Welfare Studies And Services'),(51,127,'Behavioural Science'),(52,127,'Law'),(53,127,'Justice And Law Enforcement'),(54,127,'Librarianship, Information Management And Curatorial Studies'),(55,127,'Language And Literature'),(56,127,'Philosophy And Religious Studies'),(57,127,'Economics And Econometrics'),(58,127,'Sport And Recreation'),(59,127,'Other Society And Culture'),(60,127,'Performing Arts'),(61,127,'Visual Arts And Crafts'),(62,127,'Graphic And Design Studies'),(63,127,'Communication And Media Studies'),(64,127,'Other Creative Arts'),(65,127,'Food And Hospitality'),(66,127,'Personal Services'),(67,127,'General Education Programmes'),(68,127,'Social Skills Programmes'),(69,127,'Employment Skills Programmes'),(70,127,'Other Mixed Field Programmes')");
    }
}
