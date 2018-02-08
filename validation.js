
	$(document).ready(function() {



		$("#submit").click(function() {

		var NameRegEx = /^[a-zA-Z'\.\- ]*$/;

		var EmailRegEx = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/

		var WebsiteRegEx = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/

		var firstName = $('#firstName').val();

		var lastName = $('#lastName').val();

		var emailAddress = $('#emailAddress').val();

		var schoolProgram = $('#program').val() ;

		var studentWebsite = $('#inWebsite').val();

		var studentHometown = $('#hometown').val();

		var studentCareerGoals = $('#careerGoals').val();

		var threeWordsDescribeYou = $('#threeWordsDescribeYou').val();

		var studentSideWork = $('#studentSideWork').val();

		var validForm = true;

			if (!NameRegEx.test(firstName)) { //Valdiates Email Address
				var validForm = false;
				$('#firstNameErrMsg').html("No special characters");
			} else {
				$('#firstNameErrMsg').html(" ");
			}

			if (!NameRegEx.test(lastName)) { //Valdiates Email Address
				var validForm = false;
				$('#lastNameErrMsg').html("No special characters");
			} else {
				$('#lastNameErrMsg').html(" ");
			}

			if (!EmailRegEx.test(emailAddress)) { //Valdiates Email Address
				var validForm = false;
				$('#emailErrMsg').html("Please enter a valid email address.");
			} else {
				$('#emailErrMsg').html(" ");
			}

			if (schoolProgram == "") { // Validates School Program
				var validForm = false; 
				$('#programErrMsg').html("Please enter a program.");
			} else {
				$('#programErrMsg').html(" ");
			}

			if (!WebsiteRegEx.test(studentWebsite)) { //Valdiates Student Website
				var validForm = false;
				$('#websiteErrMsg').html("Please enter a valid URL");
			} else {
				$('#websiteErrMsg').html(" ");
			}

			if (studentHometown == "") { // Validates School Program
				var validForm = false; 
				$('#hometownErrMsg').html("Please enter your hometown.");
			} else {
				$('#hometownErrMsg').html(" ");
			}


	});
});
