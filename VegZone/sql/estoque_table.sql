CREATE TABLE estoque 
(id INT NOT NULL auto_increment, 
mes VARCHAR(3) NOT NULL,
valor INT NOT NULL, 
PRIMARY KEY (id)
);

INSERT INTO estoque (mes, valor) VALUES ('jan', 140);

INSERT INTO estoque (mes, valor) VALUES ('jan', 110);

INSERT INTO estoque (mes, valor) VALUES ('jan', 50);

INSERT INTO estoque (mes, valor) VALUES ('jan', 60);

INSERT INTO estoque (mes, valor) VALUES ('feb', 35);

INSERT INTO estoque (mes, valor) VALUES ('feb', 90);

INSERT INTO estoque (mes, valor) VALUES ('feb', 190);

INSERT INTO estoque (mes, valor) VALUES ('feb', 190);

INSERT INTO estoque (mes, valor) VALUES ('mar', 20);

INSERT INTO estoque (mes, valor) VALUES ('mar', 60);

INSERT INTO estoque (mes, valor) VALUES ('mar', 70);

INSERT INTO estoque (mes, valor) VALUES ('mar', 140);

SELECT * FROM estoque;