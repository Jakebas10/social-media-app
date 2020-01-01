CREATE DATABASE social_media_app;
USE social_media_app;

CREATE TABLE users(
    user_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(16) UNIQUE,
    password VARCHAR(256) NOT NULL
);

CREATE TABLE posts(
    post_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_id INT NOT NULL,
    post VARCHAR(120) NOT NULL,
    CONSTRAINT fk_post_user_id
      FOREIGN KEY (user_id) REFERENCES users (user_id)
);

