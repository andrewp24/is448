function complete() {

	//specify a parameter name that autocomplete.php should use to look into the $_POST array
	//if this Ajax request is sent, 
	//the PHP program should look 
	//into the $_POST array with
	//'bandsearchquery' as the index
	new Ajax.Autocompleter("bands70s",
		"bandlistarea",
		"autocomplete.php", {
			paramName: "bandsearchquery"
		});

	//OR CAN IMPLEMENT THIS WAY

	//last entry can be empty, which means the PHP autocomplete.php will get the search query
	///with parameter name set to name of form text box, in this case, bands. so the PHP program
	//needs to look into the $_POST array with 'bands' as the index in this case
	//new Ajax.Autocompleter("bands70s", "bandlistarea", "autocomplete.php", {});



};