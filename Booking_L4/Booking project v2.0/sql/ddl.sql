CREATE TABLE tours (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    title VARCHAR(200),
    price_id int,
    FOREIGN KEY(price_id) REFERENCES money(id)
);

CREATE TABLE money (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    amount int,
    currency VARCHAR(4)
);

CREATE TABLE reviews (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    author_name VARCHAR(100),
    body VARCHAR(1000)
);


