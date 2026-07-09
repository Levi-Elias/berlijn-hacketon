-- Maak de database aan als deze niet bestaat
CREATE DATABASE IF NOT EXISTS berlijn_hackathon DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE berlijn_hackathon;

-- Tabel voor gebruikers (Admin)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tabel voor Bezienswaardigheden
CREATE TABLE IF NOT EXISTS sights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tabel voor Activiteiten
CREATE TABLE IF NOT EXISTS activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    location VARCHAR(100) NOT NULL,
    date VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Voeg een standaard admin gebruiker toe
-- Inloggegevens:
-- Gebruikersnaam: admin
-- Wachtwoord: admin123
INSERT INTO users (username, password) VALUES 
('admin', '$2y$10$w8.3hL.ZJc5O9fN8y1qN6e8j/UeN/GzC0c6M/eIeJ5v.1q9/P7hF2');
