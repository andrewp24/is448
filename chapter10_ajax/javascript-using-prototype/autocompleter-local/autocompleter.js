function complete() {
	new Autocompleter.Local(
		"bands70s", //element where user is entering text that needs to be matched
		"bandlistarea", //element to fill with matches
		["ABBA", "AC/DC", "Aerosmith", "America", "Bay City Rollers", "Cats"], //array of matches
		{}
	);
};