CREATE DATABASE social_media_app;
USE social_media_app;

CREATE TABLE users(
    user_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(16) UNIQUE,
    password VARCHAR(256) NOT NULL,
    PRIMARY KEY (user_id)
);

