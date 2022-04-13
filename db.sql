DROP DATABASE IF EXISTS VLV;
CREATE DATABASE VLV CHARACTER SET utf8 COLLATE utf8_general_ci;
USE VLV;

CREATE TABLE hotel
(
    id                INTEGER NOT NULL PRIMARY KEY,
    name              VARCHAR(500),
    stars             INTEGER,
    fk_pk_location_id INTEGER NOT NULL,
    description       TEXT,
    img_url           TEXT
);

CREATE TABLE location
(
    id           INTEGER NOT NULL PRIMARY KEY,
    country      VARCHAR(255),
    country_id   VARCHAR(2),
    postal_code  VARCHAR(50),
    city         VARCHAR(255),
    street       VARCHAR(255),
    house_number INTEGER NOT NULL
);

ALTER TABLE hotel
    ADD FOREIGN KEY (fk_pk_location_id) REFERENCES location (id);
