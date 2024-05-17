DROP DATABASE IF EXISTS chat_app;
CREATE DATABASE chat_app;
USE chat_app;

CREATE TABLE messages 
(
 id INT PRIMARY KEY NOT NULL auto_increment,
 message VARCHAR(255),
 created_at datetime default current_timestamp
 );
 
 CREATE TABLE user 
 (
 user_id INT PRIMARY KEY NOT NULL auto_increment,
 username VARCHAR(10)

 );
 INSERT INTO messages(id, message) VALUES ("1","placeholder message");
 
 select message from messages;