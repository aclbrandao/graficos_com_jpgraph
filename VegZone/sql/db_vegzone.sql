CREATE DATABASE vegzone;

USE vegzone;

CREATE TABLE vegetarianos 
(id INT NOT NULL auto_increment, 
quantidade DOUBLE NOT NULL, 
PRIMARY KEY (id)
);

INSERT INTO vegetarianos (quantidade) VALUES (14.44);

INSERT INTO vegetarianos (quantidade) VALUES (85.56);

SELECT * FROM vegetarianos;