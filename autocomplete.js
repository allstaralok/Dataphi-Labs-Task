$(document).ready(function($){
    $('#patientAutocomplte').autocomplete({
	source:'suggest_name.php', 
	minLength:2
    });
});