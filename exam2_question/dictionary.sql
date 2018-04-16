DROP TABLE IF EXISTS dict;
DROP TABLE IF EXISTS visitedusers;

CREATE TABLE dict (
	id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	term VARCHAR(40), 
	definition VARCHAR(400));
	
INSERT INTO dict (term,definition) VALUES ('gossamer','a fine, filmy cobweb seen on grass or bushes or floating in the air in calm weather, especially in autumn.');
INSERT INTO dict (term,definition) VALUES ('grok','to understand thoroughly and intuitively');
INSERT INTO dict (term,definition) VALUES ('lagniappe','a gratuity or tip');
INSERT INTO dict (term,definition) VALUES ('tautology','needless repetition of an idea, especially in words other than those of the immediate context, without imparting additional force or clearness, as in "widow woman."');
INSERT INTO dict (term,definition) VALUES ('ethos','the character or disposition of a community, group, person, etc.');
INSERT INTO dict (term,definition) VALUES ('desiderium ','an ardent longing, as for something lost.');
INSERT INTO dict (term,definition) VALUES ('hypocorism','the practice of using a pet name.');


CREATE TABLE visitedusers (
	id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	username VARCHAR(40)); 
