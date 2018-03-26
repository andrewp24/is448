DROP TABLE IF EXISTS cars;

CREATE TABLE cars (car_id INTEGER PRIMARY KEY NOT NULL,
					car_name CHAR(20), 
					car_description TEXT);   

INSERT INTO cars(car_id, car_name, car_description) 
VALUES (1, 'Corvette', 'The Chevrolet Corvette is a sports car that has been manufactured by General Motors since 1953.');

INSERT INTO cars(car_id, car_name, car_description) 
VALUES (4, 'Corvette', 'A new car.');

INSERT INTO cars(car_id, car_name, car_description) 
VALUES (2, 'Accord', 'The Honda Accord is series of midrange automobile manufactured by Honda since 1976 and sold in most automotive markets throughout the world.');

INSERT INTO cars(car_id, car_name, car_description) 
VALUES (3, 'Altima', 'The Altima is a mid-size car (formerly compact) manufactured by the Japanese automaker Nissan, and is arguably a continuation of the "bloodline" that began with the Nissan Bluebird in 1957.');
