DROP TABLE IF EXISTS users;

CREATE TABLE users (user_id INTEGER PRIMARY KEY NOT NULL, username CHAR(20), password CHAR(20));

INSERT INTO users(user_id, username, password) VALUES (1, 'tom', 'tom234');
INSERT INTO users(user_id, username, password) VALUES (1, 'jane', 'jane123');
   
