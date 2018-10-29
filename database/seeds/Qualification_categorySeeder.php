<?php

use Illuminate\Database\Seeder;

class Qualification_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_qualification_category` VALUES (1,'211','Graduate Diploma'),(2,'213','Professional Specialist Qualification at Graduate Diploma Level'),(3,'221','Graduate Certificate'),(4,'222','Professional Specialist Qualification at Graduate Certificate Level'),(5,'311','Bachelor Degree (Honours)'),(6,'312','Bachelor Degree (Pass)'),(7,'411','Advanced Diploma'),(8,'413','Associate Degree'),(9,'421','Diploma'),(10,'511','Certificate IV'),(11,'514','Certificate III'),(12,'521','Certificate II'),(13,'524','Certificate I'),(14,'611','Year 12'),(15,'613','Year 11'),(16,'621','Year 10'),(17,'912','Other Non-award Courses'),(18,'991','Statement of Attainment Not Identifiable by Level'),(19,'992','Bridging and Enabling Courses Not Identifiable by Level'),(20,'999','Education not elsewhere classified')");
    }
}
