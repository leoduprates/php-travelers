DROP DATABASE travelers;

CREATE DATABASE travelers;

USE travelers;

CREATE TABLE users (
  id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

INSERT INTO users (username, password)
VALUES ('jose', '$2y$10$vlX1E3U4vezoO9eABjCPeuZmdjFpXRdCL4TPTUo6FL692uDfzNuo.');


CREATE TABLE route (
  id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  origin varchar(100) NOT NULL,
  target varchar(100) NOT NULL,
  distance decimal(7,0) NOT NULL
);

INSERT INTO route (origin, target, distance)
VALUES ('Porto Alegre, Rio Grande do Sul', 'Porto Velho, Rondônia', '3800');

INSERT INTO route (origin, target, distance)
VALUES ('Florianópolis, Santa Catarina', 'Vitória, Espirito Santo', '1637');

INSERT INTO route (origin, target, distance)
VALUES ('Curitiba, Paraná', 'São Luís, Maranhão', '3265');

INSERT INTO route (origin, target, distance)
VALUES ('Palmas, Tocantins', 'Brasília, Distrito Federal', '843');

INSERT INTO route (origin, target, distance)
VALUES ('Rio de Janeiro, Rio de Janeiro', 'Belo Horizonte, Minas Gerais', '440');

INSERT INTO route (origin, target, distance)
VALUES ('Campos dos Goytacazes, Rio de Janeiro', 'Petrópolis, Rio de Janeiro', '316');

INSERT INTO route (origin, target, distance)
VALUES ('Assunção, Paraguai', 'Rondonópolis, Mato Grosso, Brasil', '1264');

INSERT INTO route (origin, target, distance)
VALUES ('Santa Cruz de La Sierra, Bolívia', 'Caxias do Sul, Rio Grande do Sul, Brasil', '2385');

INSERT INTO route (origin, target, distance)
VALUES ('La Negra, Antofagasta, Chile', 'Nova Mutum, Mato Grosso, Brasil', '2739');

INSERT INTO route (origin, target, distance)
VALUES ('Quito, Equador', 'Teresina, Piauí, Brasil', '7479');

INSERT INTO route (origin, target, distance)
VALUES ('Cali, Valle del Cauca, Colômbia', 'Manaus, Amazonas, Brasil', '3867');


CREATE TABLE car (
  id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  model varchar(100) NOT NULL,
  fuel varchar(100) NOT NULL,
  car_autonomy decimal(6,1) NOT NULL,
  fuel_price decimal(6,3) NOT NULL
);

INSERT INTO car (model, fuel, car_autonomy, fuel_price)
VALUES ('Ford Ranger XLT 2020', 'Diesel', '9.4', '5.623');

INSERT INTO car (model, fuel, car_autonomy, fuel_price)
VALUES ('Renault Clio 1.5 dCi Comfort ', 'Gasolina', '4.3', '6.51');

INSERT INTO car (model, fuel, car_autonomy, fuel_price)
VALUES ('FMercedes-Benz A 180 d AMG Line Aut.', 'Diesel', '5.5', '5.623');

INSERT INTO car (model, fuel, car_autonomy, fuel_price)
VALUES ('VW Golf 2.0 TSi GTi DSG', 'Gasolina', '3.4', '6.51');