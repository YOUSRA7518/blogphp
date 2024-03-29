CREATE TABLE authors(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL ,
    lastname VARCHAR(255) NOT NULL
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE articles (
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
sentence VARCHAR(255) NOT NULL,
content TEXT NOT NULL,
date  DATETIME DEFAULT NOW(),
author_id INT NOT NULL,
category_id INT NOT NULL,
);