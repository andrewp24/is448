DROP TABLE IF EXISTS guestbook;

CREATE TABLE guestbook
(
	comment_id INTEGER PRIMARY KEY NOT NULL
	AUTO_INCREMENT, 
	username VARCHAR
	(40), 
	comment_text VARCHAR
	(250), 
	phone_number VARCHAR
	(15));

	INSERT INTO guestbook
		(username,comment_text,phone_number)
	VALUES
		('tom jones', 'this is a great page', '111-111-1111');

	INSERT INTO guestbook
		(username,comment_text,phone_number)
	VALUES
		('matt parker', 'nice page', '111-222-1111');

