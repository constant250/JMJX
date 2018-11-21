<?php 

Route::prefix('student')->group( function() {
	
	//student detail form
	route::resource('detail','StudentsController');

	//application for release letter
	route::resource('release-letter','ReleaseLetterController');

	// application for deferment suspension cancellation withdrawal form
	route::resource('deferment-suspension','DefermentSuspensionController');

	//parrallel enrolment verification
	route::resource('parrallel-enrolment-verification','ParallelEnrolmentVerificationController');

	//internation student enrolment 
	route::resource('int-enrolment','InternationalEnrolmentController');

	//student feedback
	route::resource('feedback','StudentsFeedbackController');

	//change of personal details
	route::resource('change-of-personal-details','ChangeOfPersonalDetailsController');

	//qualification request form
	route::resource('qualification-request','QualificationRequestController');

	//usi application form
	route::resource('usi-application','UsiApplicationController');

	//Complaints and Appeals Form
	route::resource('complaints-and-appeals','ComplaintsAndAppealsController');	

	//Declaration by student
	route::resource('declaration','DeclarationByTheStudentController');

	//Critical Incident report
	route::resource('critical-incident','CriticalIncidentReportController');

	//refund form
	route::resource('refund-request','RefundRequestController');

	// lln
	route::resource('lln-form','LlnFormController');

	// credit card payment authorisation
	route::resource('credit-card-authorisation','CreditCardPaymentAuthorisationController');

	// representative application
	route::resource('representative-application','RepresentativeApplicationController');
} );



?>