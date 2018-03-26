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
)