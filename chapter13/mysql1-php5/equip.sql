DROP TABLE IF EXISTS equipment;

CREATE TABLE equipment (equip_id INTEGER PRIMARY KEY NOT NULL, equipment_name CHAR(20), car_id INTEGER);   

INSERT INTO equipment(equip_id, equipment_name, car_id) VALUES (1, 'CD Player', '1');
INSERT INTO equipment(equip_id, equipment_name, car_id) VALUES (2, 'CD Player', '2');
INSERT INTO equipment(equip_id, equipment_name, car_id) VALUES (3, 'CD Player', '3');

INSERT INTO equipment(equip_id, equipment_name, car_id) VALUES (4, 'Heated Seats', '1');
INSERT INTO equipment(equip_id, equipment_name, car_id) VALUES (5, 'Heated Seats', '2');
