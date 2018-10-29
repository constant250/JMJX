<?php

use Illuminate\Database\Seeder;

class FundingSourceStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_funding_source_state` VALUES (1,'ACE','ACE - ACFE-funded non-accredited local courses (ACE providers only)'),(2,'ACR','ACR - ACFE funded non-accredited local courses ACE only Reconnect Prog Learner'),(3,'AEL','AEL - Automotive Supply Chain Training Initiative (Apprentice/Trainee)'),(4,'AEP','AEP - Automotive Supply Chain Training Initiative (General, non-Apprentice/Trainee)'),(5,'ASL','ASL - Asylum Seeker or Victim of Human Trafficking (Apprentice/Trainee)'),(6,'ASP','ASP - Asylum Seeker or Victim of Human Trafficking - General (non Apprentice/Trainee)'),(7,'BWL','BWL - Back to Work Scheme (Apprentice/Trainee)'),(8,'BWP','BWP - Back to Work Scheme (non Apprentice/Trainee)'),(9,'L','L - Apprentice / Trainee - meets VTG eligibility criteria'),(10,'LSG','LSG - Skills for Growth - Apprentice/Trainee'),(11,'P','P - General (not Apprentice/Trainee) - meets VTG eligibility criteria'),(12,'PSG','PSG - Skills for Growth - General (not Apprentice/Trainee)'),(13,'RCL','RCL - Reconnect Grants Program Learner, apprentice trainee'),(14,'RCP','RCP - Reconnect Grants Program Learner, general non-apprentice trainee'),(15,'S','S - Fee for service - domestic full fee-paying students'),(16,'SCL','SCL - Retrenched employees (Apprentice/Trainee)'),(17,'SCP','SCP - Retrenched employees - General (non Apprentice/Trainee)')");
    }
}
