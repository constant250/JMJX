<?php

use Illuminate\Database\Seeder;

class PrgLvlOfEducIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_prg_lvl_of_educ_identifier` VALUES (1,111,'Higher Doctorate'),(2,112,'Doctorate by Research'),(3,113,'Doctorate by Coursework'),(4,114,'Professional Specialist Qualification at Doctoral Degree Level'),(5,115,'Statement of Attainment at Doctoral Degree Level'),(6,116,'Bridging and Enabling Course at Doctoral Degree Level'),(7,121,'Master Degree by Research'),(8,122,'Master Degree by Coursework'),(9,123,'Professional Specialist Qualification at Master Degree Level'),(10,124,'Statement of Attainment at Master Degree Level'),(11,125,'Bridging and Enabling Course at Master Degree Level'),(12,127,'Graduate Diploma'),(13,127,'Graduate Qualifying or Preliminary'),(14,127,'Professional Specialist Qualification at Graduate Diploma Level'),(15,127,'Statement of Attainment at Graduate Diploma Level'),(16,127,'Bridging and Enabling Course at Graduate Diploma Level'),(17,127,'Graduate Certificate'),(18,127,'Professional Specialist Qualification at Graduate Certificate Level'),(19,127,'Statement of Attainment at Graduate Certificate Level'),(20,127,'Bridging and Enabling Course at Graduate Certificate Level'),(21,127,'Bachelor (Honours) Degree'),(22,127,'Bachelor (Pass) Degree'),(23,127,'Statement of Attainment at Bachelor Degree Level'),(24,127,'Bridging and Enabling Course at Bachelor Degree Level'),(25,127,'Advanced Diploma'),(26,127,'Statement of Attainment at Advanced Diploma Level'),(27,127,'Associate Degree'),(28,127,'Statement of Attainment at Associate Degree Level'),(29,127,'Bridging and Enabling Course at Advanced Diploma and Associate Degree Level'),(30,127,'Diploma'),(31,127,'Statement of Attainment at Diploma Level'),(32,127,'Bridging and Enabling Course at Diploma Level'),(33,127,'Certificate IV'),(34,127,'Statement of Attainment at Certificate IV Level'),(35,127,'Bridging and Enabling Course at Certificate IV Level'),(36,127,'Certificate III'),(37,127,'Statement of Attainment at Certificate III Level'),(38,127,'Bridging and Enabling Course at Certificate III Level'),(39,127,'Certificate II'),(40,127,'Statement of Attainment at Certificate II Level'),(41,127,'Bridging and Enabling Course at Certificate II Level'),(42,127,'Certificate I'),(43,127,'Statement of Attainment at Certificate I Level'),(44,127,'Year 12'),(45,127,'Bridging and Enabling Course at Senior Secondary Level'),(46,127,'Year 11'),(47,127,'Year 10'),(48,127,'Year 9'),(49,127,'Year 8'),(50,127,'Year 7 (excluding SA)'),(51,127,'Year 7 (SA)'),(52,127,'Year 6'),(53,127,'Year 5'),(54,127,'Year 4'),(55,127,'Year 3'),(56,127,'Year 2'),(57,127,'Year 1'),(58,127,'Pre-Year 1'),(59,127,'Pre-primary Education'),(60,127,'Non-award Courses in Higher Education'),(61,127,'Other Non-award Courses'),(62,127,'Statements of Attainment not Identifiable by Level'),(63,127,'Bridging and Enabling Courses not Identifiable by Level'),(64,127,'Education, n.e.c.')");
    }
}
