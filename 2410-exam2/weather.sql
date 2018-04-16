DROP TABLE IF EXISTS weather;

CREATE TABLE weather (
	id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	city VARCHAR(40), 
	state VARCHAR(40), 
	month VARCHAR(40), 
	year VARCHAR(40),
	average VARCHAR(40),
	units VARCHAR(20)
	);
	
INSERT INTO weather (city,state,month,year,average,units) VALUES ('baltimore','maryland','jan','2016','35','C');
INSERT INTO weather (city,state,month,year,average,units) VALUES ('jacksonville','florida','mar','2016','65','C');
INSERT INTO weather (city,state,month,year,average,units) VALUES ('orlando','florida','jan','2016','70','C');
INSERT INTO weather (city,state,month,year,average,units) VALUES ('atlanta','georgia','jan','2016','50','C');
INSERT INTO weather (city,state,month,year,average,units) VALUES ('wilmington','delaware','jan','2016','30','C');