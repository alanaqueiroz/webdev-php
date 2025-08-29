CREATE TABLE
    `Account` (
        `id` INT (11) NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(255) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`id`)
    );

INSERT INTO
    `account` (`id`, `username`, `password`)
VALUES
    ('', 'demo', PASSWORD ('demo123')),
    ('', 'teste', PASSWORD ('teste123'));