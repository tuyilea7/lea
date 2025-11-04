CREATE DATABASE IF NOT EXISTS 25rp20411_shareride_db;

USE 25rp20411_shareride_db;

CREATE TABLE IF NOT EXISTS tbl_users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_firstname VARCHAR(50) NOT NULL,
    user_lastname VARCHAR(50) NOT NULL,
    user_gender ENUM('Male', 'Female', 'Other') NOT NULL,
    user_email VARCHAR(100) UNIQUE NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);