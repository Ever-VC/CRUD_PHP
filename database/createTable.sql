-- SENTENCIAS DDL
DROP TABLE IF EXISTS clients;

CREATE TABLE clients (
    id smallserial PRIMARY KEY,
    firstname varchar(25),
    laststname varchar(25),
    birth DATE,
    address varchar(50)
);

--ALTER TABLE clients ADD COLUMN last_update TIMESTAMP;