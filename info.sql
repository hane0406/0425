CREATE DATABASE IF NOT EXISTS web_assign DEFAULT CHARSET=utf8mb4;
USE web_assign;

CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email_addr VARCHAR(100) NOT NULL,
    photo_path VARCHAR(255) NOT NULL
);
