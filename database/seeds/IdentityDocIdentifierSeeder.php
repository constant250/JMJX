<?php

use Illuminate\Database\Seeder;

class IdentityDocIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_identity_doc_identifier` VALUES (1,NULL,'Drivers License'),(2,NULL,'Medicare Card'),(3,NULL,'Passport (Australian)'),(4,NULL,'Non-Australian Passport (with Australian Visa)'),(5,'birthCertificateDocument','Birth Certificate (Australian)'),(6,NULL,'Certificate Of Registration By Descent'),(7,NULL,'Citizenship Certificate'),(8,NULL,'ImmiCard')");
    }
}
