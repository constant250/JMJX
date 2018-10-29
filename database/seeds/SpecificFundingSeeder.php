<?php

use Illuminate\Database\Seeder;

class SpecificFundingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_specific_funding` VALUES (1,'11','NWDF - Job seeker','National Workforce Development Fund - Job seeker','0000-00-00 00:00:00'),(2,'12','NWDF - Existing work','National Workforce Development Fund - Existing worker','0000-00-00 00:00:00'),(3,'13','NWDF - CSIF','NWDF - Critical Skills Investment Fund','0000-00-00 00:00:00'),(4,'14','Industry Skills Fund','Industry Skills Fund','0000-00-00 00:00:00'),(5,'21','SEE','Skills for Education and Employment Program','0000-00-00 00:00:00'),(6,'31','Sole Parent NP','Sole Parent National Partnership','0000-00-00 00:00:00'),(7,'32','NPA Skills Reform','National Partnership Agreement on Skills Reform','0000-00-00 00:00:00'),(8,'41','WELL','Workplace English Language and Literacy','0000-00-00 00:00:00'),(9,'42','AMEP','Adult Migrant English Program','0000-00-00 00:00:00'),(10,'51','PPP - Job seeker','Productivity Places Program - Job seeker','0000-00-00 00:00:00'),(11,'52','PPP - Existing worke','Productivity Places Program - Existing worker','0000-00-00 00:00:00'),(12,'61','Aust Apprenticeships','Australian Apprenticeships Access','0000-00-00 00:00:00'),(13,'62','Trade Support Loans','Trade Support Loans','0000-00-00 00:00:00'),(14,'91','Dual award - VET AMC','Dual award - VET AMC','0000-00-00 00:00:00'),(15,'92','Dual award - HE AMC','Dual award - HE AMC','0000-00-00 00:00:00'),(16,'93','Commonwealth funded ','Commonwealth funded - VET AMC','0000-00-00 00:00:00'),(17,'99','Other Commonwealth g','Other Commonwealth government funding','0000-00-00 00:00:00')");
    }
}
