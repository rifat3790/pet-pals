CREATE DATABASE petpals;
USE petpals;

CREATE TABLE training_challenges
(
    id INT
    AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR
    (255) NOT NULL,
    description TEXT NOT NULL
);

ALTER TABLE training_challenges ADD COLUMN image VARCHAR
(255);
ALTER TABLE training_challenges ADD COLUMN price DECIMAL
(10, 2);
