CREATE TABLE IF NOT EXISTS clients
(
    `id`       INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `login`    CHAR(100) UNIQUE NOT NULL,
    `email`    CHAR(255) UNIQUE NOT NULL,
    `password` CHAR(255)        NOT NULL
) ENGINE = InnoDB
  CHAR SET utf8;

INSERT INTO clients (`login`, `email`, `password`)
VALUES ('testacc1', 'test1@gm.ua', 'mypass1'),
       ('someadmin', 'admin@corp.mail', 'rootpass'),
       ('someuser', 'email@m.mail', 'mypass1');

SELECT email
FROM clients;
SELECT email
FROM clients
WHERE email LIKE '%@gm%';

SELECT *
FROM clients
WHERE id = 6
   OR login LIKE '%test%';
SELECT *
FROM clients
WHERE id = 6
  AND login LIKE '%test%';

SELECT *
FROM clients
ORDER BY email;

UPDATE clients
SET email = 'user@free.com'
WHERE login = 'someuser';

DELETE
FROM clients
WHERE email = 'test@gm.ua';

CREATE TABLE IF NOT EXISTS services
(
    `id`              INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `service_article` CHAR(100) NOT NULL,
    `price`           FLOAT UNSIGNED    DEFAULT NULL,
    `quantity`        SMALLINT UNSIGNED DEFAULT NULL,
    `status`          ENUM ('pending', 'active', 'suspended', 'terminated')

) ENGINE = InnoDB
  CHAR SET utf8;

INSERT INTO services (`service_article`, `price`, `quantity`, `status`)
VALUES ('Mac mini M2', 85.15, 10, 'active'),
       ('Dedicated server', 50, 5, 'suspended'),
       ('Private Cloud', 150.75, 1, 'pending'),
       ('Dedicated server', 50, 3, 'active'),
       ('Mac mini M2', 85.15, 20, 'pending'),
       ('Private Cloud', 220.10, 2, 'suspended'),
       ('Private Cloud', null, null, 'pending');

SELECT *
FROM services
WHERE status = 'pending';

SELECT *
FROM services
WHERE quantity IS NULL;
SELECT *
FROM services
WHERE quantity IS NULL
   OR price < 100;
SELECT *
FROM services
WHERE quantity IS NULL
   OR price < 100
ORDER BY service_article;

UPDATE services
SET price = 300.02
WHERE id = 7;

DELETE
FROM services
WHERE quantity IS NULL;

SELECT SUM(price)
FROM services;
SELECT AVG(price)
FROM services;







