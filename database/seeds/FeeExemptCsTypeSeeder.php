<?php

use Illuminate\Database\Seeder;

class FeeExemptCsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_fee_exempt_cs_type` VALUES (1,'(â€˜Indigenous Student Identifierâ€™ field) +â€™ Hâ€™, â€˜Pâ€™, â€˜Vâ€™ as\r\nrelevant, or â€˜Oâ€™ if no card held','All students that self-identify as Indigenous '),(2,'H','Holders of a Health Care Card and their dependant'),(3,'P','Holders of a Pensionerâ€™s Card and their dependants'),(4,'V','Holders of a Veteranâ€™s Card. '),(5,'All students referred under the Single and Teenage \r\nParents Training Initiative','(Funding Source Identifier â€“ State Training Authority NGP, NGL, NSP, NSL) +â€™ Hâ€™, â€˜Pâ€™, â€˜Vâ€™ as relevant, or â€˜Oâ€™ if no card h'),(6,'â€˜Hâ€™, â€˜Pâ€™ or â€˜Vâ€™ (course commencement date pre 1 July2012 + age + Diploma or Advanced Diploma) ','Some continuing students undertaking a Diploma or \r\nAdvanced Diploma at a TAFE institute'),(7,'Z','Not entitled to a concession ')");
    }
}
