create table pessoa (
id int NOT NULL PRIMARY KEY,
nome varchar(100) NOT NULL);

create table contato (
id int NOT NULL PRIMARY KEY,
pessoa_id int,
FOREIGN KEY (pessoa_id) REFERENCES pessoa(id),
num_pessoa int NOT NULL);

create table endereco (
id int NOT NULL PRIMARY KEY,
pessoa_id int,
FOREIGN KEY (pessoa_id) REFERENCES pessoa(id),
end_pessoa varchar(100) NOT NULL);