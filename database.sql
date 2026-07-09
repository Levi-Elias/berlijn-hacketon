-- ==========================================
-- LET OP: Bij live webhosting selecteer je
-- eerst de database in phpMyAdmin voordat 
-- je dit script importeert.
-- ==========================================

-- ==========================================
-- TABELLEN AANMAKEN
-- ==========================================

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

-- ==========================================
-- DATA INVOEGEN (SEEDING)
-- ==========================================

-- Leeg de tabellen om dubbele data te voorkomen bij herhaaldelijk importeren
TRUNCATE TABLE users;
TRUNCATE TABLE sights;
TRUNCATE TABLE activities;

-- 1. Voeg een standaard admin gebruiker toe
-- Inloggegevens:
-- Gebruikersnaam: admin
-- Wachtwoord: admin123
INSERT INTO users (username, password) VALUES 
('admin', '$2y$10$w8.3hL.ZJc5O9fN8y1qN6e8j/UeN/GzC0c6M/eIeJ5v.1q9/P7hF2');

-- 2. Voeg 5 Bezienswaardigheden toe
INSERT INTO sights (title, description, image, category) VALUES 
('Brandenburger Tor', 'De iconische stadspoort en het symbool van de Duitse hereniging. Een absolute must-see in Berlijn.', 'https://images.unsplash.com/photo-1560969184-10fe8719e047?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Historie'),
('Reichstag', 'Het Duitse parlementsgebouw met de beroemde glazen koepel. Biedt een prachtig uitzicht over de stad.', 'https://images.unsplash.com/photo-1574676550785-0557cc6f91cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Architectuur'),
('East Side Gallery', 'Het langste nog bestaande stuk van de Berlijnse Muur, bedekt met indrukwekkende street art.', 'https://images.unsplash.com/photo-1618142750398-333e3af7fbde?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Monument'),
('Fernsehturm', 'De hoogste toren van Duitsland (368m) gelegen op Alexanderplatz. Geniet van een 360-graden panorama.', 'https://images.unsplash.com/photo-1599946347371-68eb71b16afc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Uitzichtpunt'),
('Checkpoint Charlie', 'De bekendste grensovergang tussen Oost- en West-Berlijn tijdens de Koude Oorlog.', 'https://images.unsplash.com/photo-1582236932789-9a7c366ff407?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Historie');

-- 3. Voeg 5 Activiteiten toe
INSERT INTO activities (title, description, image, location, date) VALUES 
('Fietstour langs de Muur', 'Ontdek de verborgen verhalen van de Koude Oorlog op de fiets met een ervaren gids.', 'https://images.unsplash.com/photo-1601614761001-f5b12850cda8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Bernauer Str.', 'Dagelijks'),
('Museumsinsel Bezoek', 'Bezoek de vijf wereldberoemde musea op het eiland in de Spree. Een droom voor kunstliefhebbers.', 'https://images.unsplash.com/photo-1543886733-f5c71d9d9bb7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Mitte', 'Di - Zo'),
('Clubben in Berghain', 'Ervaar de beruchte technoscene van Berlijn in de meest exclusieve club ter wereld.', 'https://images.unsplash.com/photo-1493606371202-6275828f90f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Friedrichshain', 'Vrij - Zo'),
('Street Art Wandeling', 'Verken de kleurrijke muren en alternatieve kunstscene van Kreuzberg met een lokale kunstenaar.', 'https://images.unsplash.com/photo-1563539130097-f56f8f10b503?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Kreuzberg', 'Zaterdag'),
('Currywurst Proeverij', 'Proef de beste Currywurst van de stad en leer over de geschiedenis van deze Berlijnse klassieker.', 'https://images.unsplash.com/photo-1627907228175-2bf846a303b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Prenzlauer Berg', 'Dagelijks');
