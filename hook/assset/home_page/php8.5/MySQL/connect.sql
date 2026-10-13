CREATE USER 'OREIS.MESSI'@'localhost' IDENTIFIED BY 'Messi_10';
GRANT ALL PRIVILEGES ON Michael_Jordan_23.* TO 'OREIS.MESSI'@'localhost';

CREATE DATABASE IF NOT EXISTS Michael_Jordan_23;
CREATE TABLE IF NOT EXISTS Michael_Jordan_23.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(55) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(555) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Square INT NOT NULL,
    UNIQUE KEY unique_username (username),
    UNIQUE KEY unique_email (email)
);