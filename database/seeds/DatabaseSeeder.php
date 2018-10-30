<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PartyTableSeeder::class);
        $this->call(PersonTypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(StateIdentifierSeeder::class);
        $this->call(AnzscoIdentifier::class);
        $this->call(AnzsicIdentifier::class);
        $this->call(CityIdentifier::class);
        $this->call(AssesmentMethod::class);
        $this->call(ClientIndigenousStatus::class);
        $this->call(CommencingCourseSeeder::class);
        $this->call(CompletionStatusSeeder::class);
        $this->call(CountryIdentifierSeeder::class);
        $this->call(DeliveiryModeSeeder::class);
        $this->call(DeliveryTypesSeeder::class);
        $this->call(DisabilityTypesSeeder::class);
        $this->call(FeeExemptCsTypeSeeder::class);
        $this->call(FundingSourceNationalSeeder::class);
        $this->call(FundingSourceStateSeeder::class);
        $this->call(HighestSchLvlCompletedSeeder::class);
        $this->call(IdentityDocIdentifierSeeder::class);
        $this->call(LabourForceStatusSeeder::class);
        $this->call(LangIdentifierSeeder::class);
        $this->call(ModuleUnitEducationSeeder::class);
        $this->call(OrgTypeSeeder::class);
        $this->call(OutcomeStatusOptionSeeder::class);
        $this->call(PostcodesGeoSeeder::class);
        $this->call(PostcodesLocalitySeeder::class);
        $this->call(PostcodesSeeder::class);
        $this->call(PredominantDeliverySeeder::class);
        $this->call(PrgLvlOfEducIdentifierSeeder::class);
        $this->call(PrgRecogIdentifierSeeder::class);
        $this->call(PriorEducationAchieveSeeder::class);
        $this->call(ProficiencyInSpokenSeeder::class);
        $this->call(QlfFieldOfEduIdentifierSeeder::class);
        $this->call(Qualification_categorySeeder::class);
        $this->call(RecognitionStatusSeeder::class);
        $this->call(SpecificFundingSeeder::class);
        $this->call(StudentStatusSeeder::class);
        $this->call(StudyReasonsOptionsSeeder::class);
        $this->call(SubjectFieldofEducSeeder::class);
        $this->call(SurveyContactStatus::class);
        $this->call(TrainingMethodSeerder::class);
        $this->call(ValidationErrorSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(CourseDetailSeeder::class);
        $this->call(CourseCourseLocationSeeder::class);
       /* $files_arr = scandir( dirname(__FILE__) ); //store filenames into $files_array
        foreach ($files_arr as $key => $file){
            if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
                $this->call( explode('.', $file)[0] );
            }
        }*/
    }
}
