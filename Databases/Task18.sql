CREATE TABLE IF NOT EXISTS clients (
                                       `id` INT UNSIGNED PRIMARY KEY  AUTO_INCREMENT,
                                       `login` CHAR(100) UNIQUE NOT NULL,
    `email`CHAR(255) UNIQUE NOT NULL,
    `password` CHAR(255) NOT NULL
    ) ENGINE = InnoDB CHAR SET utf8;

INSERT INTO clients (`login`, `email`, `password`)
VALUES ('testacc1', 'test1@gm.ua', 'mypass1'),
       ('someadmin', 'admin@corp.mail', 'rootpass'),
       ('someuser', 'email@m.mail', 'mypass1');

SELECT email FROM clients;
SELECT email FROM clients WHERE email LIKE '%@gm%';

SELECT * FROM clients WHERE id = 6 OR login LIKE '%test%';
SELECT * FROM clients WHERE id = 6 AND login LIKE '%test%';

SELECT * FROM clients ORDER BY email;

UPDATE clients SET email = 'user@free.com' WHERE login = 'someuser'

DELETE FROM clients WHERE email = 'test@gm.ua'







